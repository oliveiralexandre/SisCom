<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Caixa;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Fechamento;
use App\Models\Moviment_produto;
use App\Models\Moviment_produto_saldo;

class CaixaController extends Controller
{
    private $caixa;
    private $moviment_produto;
    private $totalpage = 10;
       
    public function __construct(Caixa $caixa, Fechamento $fechamento, Moviment_produto $moviment_produto)
    {
        $this->caixa = $caixa;
        $this->fechamento = $fechamento;
        $this->moviment_produto = $moviment_produto;
    }

    public function index(Caixa $caixa, Moviment_produto $moviment_produto)
    {         
        $caixas = $caixa->aberturacaixa(); 
        $moviment_produtos = DB::table('moviment_produtos')->paginate($this->totalpage);
        
        if($caixas)
            return view('financeiro.caixa.index', compact('caixas', 'moviment_produtos'));
        else
            return view('financeiro.caixa.pdv'); 
     }
    
    public function pdv(Caixa $caixa)
    {      
        $caixas = $caixa->aberturacaixa();  

        if($caixas)
        return view('financeiro.caixa.index', compact('caixas'));
        else
        return view('financeiro.caixa.pdv'); 
    }

    public function store(Request $request)
    {
        
        Alert::success('Caixa Aberto com Sucesso!');
        //Pega todos os dados que vem do formulário
        $dataForm = $request->all();  
        
        //Faz o cadastro
        $insert = $this->caixa->create($dataForm);
        if( $insert )
        
        return redirect()->action('CaixaController@index');
    else
        return redirect()->action('CaixaController@index');
    }

    public function fechamento(Request $request)
    {
        Alert::success('Caixa Fechado com Sucesso!');
        //Pega todos os dados que vem do formulário
        $dataForm = $request->all();  
        
        //Faz o fechamento
        $insert = $this->fechamento->create($dataForm);
        $status = DB::table('caixas')
        ->where('user_id', auth()->user()->id)
        ->update(['status_id' => 2]);
        if( $insert )
        
        return redirect()->action('CaixaController@index');
    else
        return redirect()->action('CaixaController@index');
    }

    public function show($id)
    {
        if(!auth()->user()->can('view_caixa')){            
            return view('financeiro.caixa.index');
     }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!auth()->user()->can('view_caixa')){            
            return view('financeiro.caixa.index');
     }
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!auth()->user()->can('view_caixa')){            
            return view('financeiro.caixa.index');
     }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->can('view_caixa')){            
            return view('financeiro.caixa.index');
     }
        //
    }

    public function search(Caixa $caixa, Request $request)
    {
        $caixas = $caixa->aberturacaixa();  
        $dataform = $request->except('_token');
        $text = $request->text;
        $moviment_produtos = Moviment_produto::where('comanda', 'LIKE', "%{$text}%")->paginate($this->totalpage);

        if($caixas)
        return view('financeiro.caixa.index',compact('moviment_produtos', 'dataform', 'caixas'));
        else
        return view('financeiro.caixa.pdv'); 
    }

    public function teste()
    {
        $users = DB::table('users')->get();
        return view('financeiro.caixa.teste', ['users' => $users]);
     
        //dd( auth()->user()->name);
    }



}




