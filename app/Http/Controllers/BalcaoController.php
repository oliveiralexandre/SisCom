<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Balcao;
use App\Models\Produto;
use App\Models\Moviment_produto;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Collection;

class BalcaoController extends Controller
{
    private $balcao;
    private $moviment_produto;
    private $produto;
    private $totalpage = 10;
    
    public function __construct(Balcao $balcao, Moviment_produto $moviment_produto, Produto $produto )
    {
        $this->balcao = $balcao;
        $this->produto = $produto;
        $this->moviment_produto = $moviment_produto;
    }

    public function index(Balcao $balcao, Moviment_produto $moviment_produto, Produto $produto)
    {  
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
    }
        $balcaos = DB::table('balcaos')->paginate(5);
        $produtos = DB::table('produtos')->get();
        $moviment_produtos = DB::table('moviment_produtos')->paginate($this->totalpage);
        $search = $balcao->get('id');
       
        return view('financeiro.balcao.index', compact('balcao','search', 'moviment_produtos', 'produtos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
    }
        return view ('financeiro.balcao.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
    }
        Alert::success('Produto Lançado com Sucesso!');
        //Pega todos os dados que vem do formulário
        
       $dataForm = $request->all();  
       //$dataForm['ativo'] = ( !isset($dataForm['ativo']) ) ? 0 : 1;
       
       //Faz o cadastro
       $insert = $this->balcao->create($dataForm);

       if( $insert )
       return redirect()->action('BalcaoController@index');
   else
       return redirect()->action('BalcaoController@index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
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
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
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
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
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
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
    }
        //
    }
    public function novo()
    {
        if(!auth()->user()->can('view_balcao')){            
            return view('financeiro.balcao.index');
    }
		return view('financeiro.balcao.novo');
    }

    public function search(Request $request)
    {
        $dataform = $request->except('_token');
        $text = $request->text;
        $produtos = Produto::where('id', 'LIKE', "%{$text}%")->get();
	    $moviment_produtos = Moviment_produto::where('comanda', 'LIKE', "%{$text}%")->paginate($this->totalpage);
	    return view('financeiro.balcao.index',compact('moviment_produtos', 'produtos', 'dataform'));
    }
}
