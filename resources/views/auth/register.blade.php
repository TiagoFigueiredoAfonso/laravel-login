<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="btn btn-success mt-3" aria-current="page" href="{{route('login')}}">Login</a>
        </li> 
    </ul>
        <h2>Cadastro</h2>
        @if($errors->any())
            @foreach($errors->all() as $erro)
                <ul class="alert">
                    <li>{{$erro}}</li>
                </ul>
            @endforeach
        @endif
        <form action="{{route('register.action')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="name" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="******">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>