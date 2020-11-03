<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});

//Auth::routes();
Auth::routes(['register' => true]);

Route::group(['middleware' => 'auth'], function () {
   
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// ROTAS CLIENTES

Route::get('/cadastro/clientes/novo', 'ClienteController@novo')->name('novo');
Route::get('/cadastro/clientes', 'ClienteController@index');
Route::resource('/cadastro/clientes', 'ClienteController');
Route::resource('/cadastro/clientes/create', 'ClienteController');
Route::post('/cadastro/clientes/create', 'ClienteController@store');
Route::get('/cadastro/clientes/editar/{id}',['as'=>'cadastro.clientes.editar', 'uses'=>'ClienteController@editar']);
Route::put('/cadastro/clientes/atualizar/{id}',['as'=>'cadastro.clientes.atualizar', 'uses'=>'ClienteController@atualizar']);
Route::get('/cadastro/clientes/deletar/{id}',['as'=>'cadastro.clientes.deletar', 'uses'=>'ClienteController@deletar']);

// ROTAS PRODUTOS
Route::get('/cadastro/produtos/novo', 'ProdutoController@novo')->name('novo');
Route::get('/cadastro/produtos', 'ProdutoController@index');
Route::resource('/cadastro/produtos', 'ProdutoController');
Route::resource('/cadastro/produtos/create', 'ProdutoController');
Route::post('/cadastro/produtos/create', 'ProdutoController@store');
Route::get('/cadastro/produtos/editar/{id}',['as'=>'cadastro.produtos.editar', 'uses'=>'ProdutoController@editar']);
Route::put('/cadastro/produtos/atualizar/{id}',['as'=>'cadastro.produtos.atualizar', 'uses'=>'ProdutoController@atualizar']);
Route::get('/cadastro/produtos/deletar/{id}',['as'=>'cadastro.produtos.deletar', 'uses'=>'ProdutoController@deletar']);

// ROTAS Atendentes
Route::get('/cadastro/atendentes/novo', 'AtendenteController@novo')->name('novo');
Route::get('/cadastro/atendentes', 'AtendenteController@index');
Route::resource('/cadastro/atendentes', 'AtendenteController');
Route::resource('/cadastro/atendentes/create', 'AtendenteController');
Route::post('/cadastro/atendentes/create', 'AtendenteController@store');
Route::get('/cadastro/atendentes/{id}/editar', 'AtendenteController@editar')->name('editar');
Route::post('/cadastro/atendentes/{id}/atualizar', 'AtendenteController@atualizar')-> name('atualizar');

// ROTAS Financeiro-Caixa
//Route::get('/financeiro/caixa/novo', 'CaixaController@novo')->name('novo');
Route::get('/financeiro/caixa/pdv', 'CaixaController@pdv')->name('pdv');
Route::get('/financeiro/caixa', 'CaixaController@index');
Route::post('/financeiro/caixa/create', 'CaixaController@store');
Route::post('/financeiro/caixa/fechamento/create', 'CaixaController@fechamento');
Route::get('/financeiro/caixa/teste', 'CaixaController@teste');

// ROTAS Financeiro-Balcao
//Route::get('/financeiro/balcao/novo', 'BalcaoController@novo')->name('novo');
Route::get('/financeiro/balcao', 'BalcaoController@index');
//Route::resource('/financeiro/balcao', 'BalcaoController');
//Route::resource('/financeiro/balcao/create', 'BalcaoController');
Route::post('/financeiro/balcao/create', 'BalcaoController@store');

// ROTAS Financeiro-Recepção
//Route::get('/financeiro/recepcao/novo', 'RecepcaoController@novo')->name('novo');
Route::get('/financeiro/recepcao', 'RecepcaoController@index');
//Route::resource('/financeiro/recepcao', 'RecepcaoController');
//Route::resource('/financeiro/recepcao/create', 'RecepcaoController');
//Route::post('/financeiro/recepcao/create', 'RecepcaoController@store');

// ROTAS Comandas
Route::get('/cadastro/comandas/novo', 'ComandaController@novo')->name('novo');
Route::get('/cadastro/comandas', 'ComandaController@index');
Route::resource('/cadastro/comandas', 'ComandaController');
Route::resource('/cadastro/comandas/create', 'ComandaController');
Route::post('/cadastro/comandas/create', 'ComandaController@store');




// ROTAS RELATÓRIOS
//**CLIENTES */
Route::get('/relatorio/clientes', 'ClienteController@relatorio');
Route::get('/relatorio/clientes/geral', 'ClienteController@geral')->name('geral');
Route::get('/relatorio/clientes/filtro', 'ClienteController@filtro')->name('filtro');

//**PRODUTOS */
Route::get('/relatorio/produtos', 'ProdutoController@relatorio');

//TESTE DO SISTEMA DOMPDF
/*Route::get('pdf', function () {
   $pdf = \App::make('dompdf.wrapper');
   $pdf->loadHTML('<h1>Test</h1>');
   return $pdf->stream();
});*/

//ROTA PESQUISAR

Route::any('/cadastro/clientes/','ClienteController@search')->name('search');
Route::any('/cadastro/produtos/','ProdutoController@search')->name('search');
Route::any('/financeiro/balcao/','BalcaoController@search')->name('search');
Route::any('/financeiro/caixa/','CaixaController@search')->name('search');

//***ADMINISTRAÇÃO***

Route::get('/admin',['as'=>'admin.principal', function(){
   return view('admin.principal.index');
}]);

//***USUÁRIOS***

Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);
Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);
Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);

Route::get('/admin/usuarios/papel/{id}',['as'=>'admin.usuarios.papel', 'uses'=>'Admin\UsuarioController@papel']);
Route::post('/admin/usuarios/papel/salvar/{id}',['as'=>'admin.usuarios.papel.salvar', 'uses'=>'Admin\UsuarioController@salvarPapel']);
Route::get('/admin/usuarios/papel/remover/{id}/{papel_id}',['as'=>'admin.usuarios.papel.remover', 'uses'=>'Admin\UsuarioController@removerPapel']);

//***PAPEL***

Route::get('/admin/papel',['as'=>'admin.papel', 'uses'=>'Admin\PapelController@index']);
Route::get('/admin/papel/adicionar',['as'=>'admin.papel.adicionar', 'uses'=>'Admin\PapelController@adicionar']);
Route::post('/admin/papel/salvar',['as'=>'admin.papel.salvar', 'uses'=>'Admin\PapelController@salvar']);
Route::get('/admin/papel/editar/{id}',['as'=>'admin.papel.editar', 'uses'=>'Admin\PapelController@editar']);
Route::put('/admin/papel/atualizar/{id}',['as'=>'admin.papel.atualizar', 'uses'=>'Admin\PapelController@atualizar']);
Route::get('/admin/papel/deletar/{id}',['as'=>'admin.papel.deletar', 'uses'=>'Admin\PapelController@deletar']);
Route::get('/admin/papel/permissao/{id}',['as'=>'admin.papel.permissao', 'uses'=>'Admin\PapelController@permissao']);
Route::post('/admin/papel/permissao/{id}/salvar',['as'=>'admin.papel.permissao.salvar', 'uses'=>'Admin\PapelController@salvarPermissao']);
Route::get('/admin/papel/permissao/{id}/remover/{id_permissao}',['as'=>'admin.papel.permissao.remover', 'uses'=>'Admin\PapelController@removerPermissao']);

Route::get('/admin/papel/permissao/{id}',['as'=>'admin.papel.permissao', 'uses'=>'Admin\PapelController@permissao']);

Route::post('/admin/papel/permissao/salvar/{id}',['as'=>'admin.papel.permissao.salvar', 'uses'=>'Admin\PapelController@salvarPermissao']);

Route::get('/admin/papel/permissao/remover/{id}/{id_permissao}',['as'=>'admin.papel.permissao.remover', 'uses'=>'Admin\PapelController@removerPermissao']);

});