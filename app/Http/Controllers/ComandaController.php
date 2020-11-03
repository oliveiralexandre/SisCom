<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Comanda;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ComandaController extends Controller
{
    private $comanda;
    
    public function __construct(Comanda $comanda)
    {
        $this->comanda = $comanda;
    }

    public function index(Comanda $comanda)
    {
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
     }
        $comandas = DB::table('comandas')->paginate(5);
        $search = $comanda->get('codigocomanda');
       
        return view('cadastro.comandas.index', compact('comandas','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
     }
        return view ('cadastro.comandas.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
     }
        Alert::success('Cadastro efetuado com Sucesso!');
        //Pega todos os dados que vem do formulário
        
       $dataForm = $request->all();  
       //$dataForm['ativo'] = ( !isset($dataForm['ativo']) ) ? 0 : 1;
       
       //Faz o cadastro
       $insert = $this->comanda->create($dataForm);
       if( $insert )
       return redirect()->action('ComandaController@index');
   else
       return redirect()->action('ComandaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
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
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
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
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
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
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
     }
        //
    }
    public function novo()
    {
        if(!auth()->user()->can('view_comandas')){            
            return view('cadastro.comandas.index');
     }
		return view('cadastro.comandas.novo');
    }
}
