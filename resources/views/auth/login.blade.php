<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css" />
    <title>Application</title>
</head>

<body>
    <form method="post" action="{{ route('handleLogin') }}">

        @csrf
        @method('POST')

        <div class="box">
            <h1>espace de Connexion</h1>

            <input type="email" name="email" class="email" placeholder="email" />

            <input type="password" name="password" class="email" placeholder="Mot de passe" />

            <div class="btn-container">
                <button type="submit"> Connexion</button>
            </div>

        
            <!-- End Btn2 -->
        </div>
        <!-- End Box -->
    </form>


</body>

</html>
