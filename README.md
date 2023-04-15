 <p>Passo a passo da criação</p>
    <ol>
        <li><b>Baixar o projeto no site do laravel:</b></li>
        <a href="https://laravel.com/docs/10.x">Laravel 10</a>
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
