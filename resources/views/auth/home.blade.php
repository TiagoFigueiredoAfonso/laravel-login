<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h3>Seja Bem-Vindo(a)! {{$user->name}}!</h3>
    <a href="{{route('logout')}}" class="btn btn-success">Sair</a>

    # <h3>Página de Login criado com o Framework Laravel versão 10</h3>

    <p>Passo a passo da criação</p>
    <ol>
        <li><b>Baixar o projeto no site do laravel:</b></li>
        <p><a href="https://laravel.com/docs/10.x">Laravel 10</a></p>
        
        <li><b>Dentro de uma pasta/diretório, executar o seguinte comando no terminal</b></li>
        <p>composer create-project laravel/laravel nome-do-seu-projeto</p>
        <li><b>Crie uma base de dados</b></li>
        <p>CREATE DATABASE login;</p>
        <li><b>Dentro do arquivo .env do Laravel, inclua o nome do sua database e as respectivas informações:</b></li>
        <p>
        DB_CONNECTION=mysql</br>
        DB_HOST=127.0.0.1</br>
        DB_PORT=3306</br>
        DB_DATABASE=nome-da-sua-base-de-dados</br>
        DB_USERNAME=root</br>
        DB_PASSWORD=</br>
        </p>
        <li><b>Criar o controller e model</b></li>
        <p>php artisan make:model Login -c</p>
        <li><b>Agora, crie as rotas no arquivo web.php e importe o caminho do controller</b></li>
        <p>use App\Http\Controllers\LoginController;</p>
        <li><b>Crie as rotas, com as devidas requisições POST e GET:</b></li>
        <p>Route::get('/', [LoginController::class, 'index'])->name('login');</p>
        <li><b>Crie as páginas de login, cadastro e home dentro da pastas views</b></li>
        <p>Botão direito na pasta, <u>"New File"</u></p>
        <li><b>Utilize o Bootstrap para otimizar a visualização do site, incorporando o CDN. Conforme encontrado no link:</b></li>
        <p>
            <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">Site Bootstrap</a>
        </p>
        <li><b>Execute as migrations para a criação de usuários no banco de dados.</b></li>
        <p>php artisan migrate</p>
        <li><b>Preencha o $fillable dos respectivos Models para que as informações sejam inseridos no banco de dados. Por padrão o Model User já vem preenchido.</b></li></br>
        <li><b>Importar a classe Validator e Hash</b></li>
        <p>use Illuminate\Support\Facades\Hash</p>
        <p>use Illuminate\Support\Facades\Auth</p>
        <li><b>No controller checar se o usuário está logado. Impede de ficar saindo do sistema. Necessário fazer o logout.</b></li>
        <p>
            if(Auth::check()){ </br>
                <span style="display: block; margin-left: 20px;">return redirect()->route('home');</span>
            }
        </p>
        <li><b>Sempre autenticar o password no controller.</b></li>
        <p>$dados['password'] = Hash::make($dados['password']);</p>
        <li><b>Verifica se o usuário possui todos os validadores e autoriza o seu login.</b></li>
        <p>
        if(Auth::attempt($validator)){ 
            <span style="display: block; margin-left: 20px;">return redirect()->route('home');</span>
        }
        </p>
    </ol>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>