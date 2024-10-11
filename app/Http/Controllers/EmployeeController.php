<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Departement;
use App\Models\Employes;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employes::with('departement')->paginate(10);
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        $departements = Departement::all();
        return view('employees.create', compact('departements'));
    }
    public function edit(Employes $employee)
    {
        $departements = Departement::all();
        return view('employees.edit', compact('employee', 'departements'));
    }
    public function store(Employes $employes, StoreEmployeeRequest $request)
    {
        // dd($request);
        try {
            // A expliquer
            $employes->nom = $request->last_name;
            $employes->departement_id = $request->departement_id;
            $employes->prenom = $request->first_name;
            $employes->email = $request->email;
            $employes->contact = $request->phone;
            $employes->montant_journalier = $request->montant_journalier;
            $employes->save();
            // j'ai finalement compris par moi meme avec l'aide de Dieu
            // Cependant il y a un moyen plus economique en ligne de codes
            // lien -> https://youtu.be/hxUcbCDU3D8?si=FHd4cx6dSM2M2Zvy
            
            return redirect()->route('employee.index')->with('success_message', 'employee enregistré!');
        } catch (Exception $e) {
            dd($e);
        }
    
    }
    public function update(Employes $employee, UpdateEmployeeRequest $request){
        try {
            // A expliquer
            $employee->nom = $request->last_name;
            $employee->departement_id = $request->departement_id;
            $employee->prenom = $request->first_name;
            $employee->email = $request->email;
            $employee->contact = $request->phone;
            $employee->montant_journalier = $request->montant_journalier;
            $employee->save();
            
            
            return redirect()->route('employee.index')->with('success_message', 'donnees modiifié avec succes!');
        } catch (Exception $e) {
            dd($e);
        }
    }
    public function delete(Employes $employee){
        try {
            
            $employee->delete();
            return redirect()->route('employee.index')->with('success_message', 'Employee Supprimee!');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
