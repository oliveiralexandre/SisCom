<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Produto;
use App\Models\CategoriaProduto;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Database\Eloquent\Collection;


class ProdutoController extends Controller
{
    private $produto;
    private $categoriaproduto;
    private $totalpage = 5;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Produto $produto)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
        $produtos = DB::table('produtos')->paginate($this->totalpage);
        return view('cadastro.produtos.index', compact('produtos'));
    }

    public function create()
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
        return view ('cadastro.produtos.novo');
    }

    public function store(Request $request)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
        Alert::success('Produto Cadastrado com Sucesso!');
        //Pega todos os dados que vem do formulário
       $dataForm = $request->all();  
       //$dataForm['ativo'] = ( !isset($dataForm['ativo']) ) ? 0 : 1;
       
       //Faz o cadastro
       $insert = $this->produto->create($dataForm);
       if( $insert )
       return redirect()->action('ProdutoController@index');
   else
       return redirect()->action('ProdutoController@index');
    }

    public function show($id)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
        //
    }

    public function editar($id)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
    }
        $produto = Produto::find($id);
        return view('cadastro.produtos.editar', compact('produto'));
    }

    public function atualizar(Request $request, $id)
    {
        
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
        }

        Produto::find($id)->update($request->all());
        
        Alert::success('Produto Atualizado com Sucesso!');

        return redirect()->action('ProdutoController@index');
    }

    public function update(Request $request, $id)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
        //
    }

    public function deletar($id)
    {
        Produto::find($id)->delete();
        Alert::success('Deletado com Sucesso!');
        return redirect()->action('ProdutoController@index');
    }
    public function novo()
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
		return view('cadastro.produtos.novo');
    }

    /**     RELATÓRIOS     */

    public function relatorio(Produto $produto)
    {   
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.index');
     }
    $produtos =  $produto->all();
 
    return \PDF::loadView('relatorio.produtos', compact('produtos'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                //SE QUISER SALVAR O ARQUIVO DIRETO HABILITE AQUI.
                //->download('nome-arquivo.pdf');
                //AQUI ABRE A VIEW DE VISUALIZAÇÃO.
                ->stream('nome-arquivo.pdf');
    }

    public function search(Request $request)
    {
        $text = $request->text;
	    $produtos = Produto::where('produto', 'LIKE', "%{$text}%")->paginate($this->totalpage);
	    return view('cadastro.produtos.index',compact('produtos'));
    }

    public function teste(Produto $produto)
    {
        if(!auth()->user()->can('view_produtos')){            
            return view('cadastro.produtos.teste');
     }
        $produtos = DB::table('produtos')->paginate($this->totalpage);
        return view('cadastro.produtos.teste', compact('produtos'));
    }

    public function categoriaproduto(CategoriaProduto $categoriaproduto)
    {
        $categoriaproduto = DB::table('categoriaprodutos');
    }

}
