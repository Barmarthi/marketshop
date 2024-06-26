<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/home', function () {
    return view('welcome');
});

// Route::view('/','home');
Route::get('/', function () {
    // dd(Produto::all());
    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

Route::view('/cria-conta','cria-conta');

Route::view('/teste','teste');

Route::post('/salva-usuario',function(Request $request){
    // dd($request);
    $usuario = new User();
    $usuario ->name = $request->nome;
    $usuario ->email = $request->email;
    $usuario ->password = $request->senha;
    $usuario->save();
    // dd("Salvo com Sucesso!!");

    return redirect('/login');

})->name('salva-usuario');


// ------------------------ Produtos
Route::view('/cadastra-produto','cadastra-produto')->middleware('auth');

Route::post('/salva-produto',function(Request $request){
    //dd($request);

    $produto = new Produto();
    $produto ->name = $request->nome;
    $produto ->descricao = $request->descricao;
    $produto ->valor = $request->valor;


    $file= $request->file('foto');
    $foto= $file->store ('produtos', ['disk' => 'fotos']);


    $produto->foto = $foto;
    $produto->user_id = 1;

    $produto->save();
    // dd("Salvo com Sucesso!!");
    return redirect ('/');

})->name('salva-produto')->middleware('auth');


//---------------------- LOGIN
//tela login
Route::view('/login','login')->name("login");
Route::post('/logar',function(Request $request){
    //dd($request);

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'], 
        
]);

If (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
    $request->session()->regenerate();
    return redirect()->intended('/cadastra-produto');
}
else{
    dd("Usuário ou senha incorretos");
}
})->name('logar');


Route::get('/sair', function () {
    Auth::logout();
    return redirect('/');
});

