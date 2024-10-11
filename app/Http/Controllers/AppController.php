<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Employes;
use App\Models\User;

class AppController extends Controller
{
    public function index(){
        $totalDepartements= Departement::all()->count();
        $totalEmployes = Employes::all()->count();
        $totalAdministrateurs = User::all()->count();
        return view('dashboard',compact('totalDepartements','totalEmployes','totalAdministrateurs'));
    }
}
