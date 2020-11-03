<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Cliente;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Database\Eloquent\Collection;


class ClienteController extends Controller
{
    private $cliente;
    private $totalpage = 5;

    public function __construct(Cliente $cliente)
    {
        $this->middleware('auth')->except(['index','show', 'search']);
        $this->cliente = $cliente;
    }
  
    public function index(Cliente $cliente)
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        $clientes = DB::table('clientes')->paginate($this->totalpage);
        return view('cadastro.clientes.index', compact('clientes'));
    }

    public function create()
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        return view ('cadastro.clientes.novo');
    }

    public function store(Request $request)
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        Alert::success('Cadastro efetuado com Sucesso!');
       //Pega todos os dados que vem do formulário
       $user = Auth()->user();
       $dataForm = $request->all();  
       
       //Faz o cadastro
       $insert = $this->cliente->create($dataForm);
       if( $insert )
       
       return redirect()->action('ClienteController@index');
   else
       return redirect()->action('ClienteController@index');
       
    }

    public function show($id)
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        //
    }

    public function editar($id)
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        $cliente = Cliente::find($id);
        return view('cadastro.clientes.editar', compact('cliente'));
    }

    public function atualizar(Request $request, $id)
    {
        
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
        }

        Cliente::find($id)->update($request->all());
        
        Alert::success('Atualizado com Sucesso!');

        return redirect()->action('ClienteController@index');
    }

    public function update(Request $request, $id)
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
        //
    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();
        Alert::success('Deletado com Sucesso!');
        return redirect()->action('ClienteController@index');
    }

    public function novo()
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
    }
		return view('cadastro.clientes.novo');
    }

    public function relatorio()
    {
        if(!auth()->user()->can('view_clientes')){            
            return view('relatorio.clientes.index');
    }
		return view('relatorio.clientes.index');
    }

    public function geral(Cliente $cliente)
    {   
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
     }
    $clientes =  $cliente->all();
 
    return \PDF::loadView('relatorio.clientes', compact('clientes'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                //SE QUISER SALVAR O ARQUIVO DIRETO HABILITE AQUI.
                //->download('nome-arquivo.pdf');
                //AQUI ABRE A VIEW DE VISUALIZAÇÃO.
                ->stream('nome-arquivo.pdf');
    }

    public function filtro(Cliente $cliente)
    {   
        if(!auth()->user()->can('view_clientes')){            
            return view('cadastro.clientes.index');
     }
    $clientes =  $cliente->all();
 
    return \PDF::loadView('relatorio.clientes', compact('clientes'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                //SE QUISER SALVAR O ARQUIVO DIRETO HABILITE AQUI.
                //->download('nome-arquivo.pdf');
                //AQUI ABRE A VIEW DE VISUALIZAÇÃO.
                ->stream('nome-arquivo.pdf');
    }

    public function search(Request $request)
    {
        $text = $request->text;
	    $clientes = Cliente::where('nome', 'LIKE', "%{$text}%")->paginate($this->totalpage);
	    return view('cadastro.clientes.index',compact('clientes'));
    }
}
