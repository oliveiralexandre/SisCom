<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Models\Papel;
use App\Models\Permissao;
use App\Models\Atendente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Gate;


class AtendenteController extends Controller
{
    
    use RegistersUsers;
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function index(User $user)
    {
        if(!auth()->user()->can('view_usuarios')){            
           return view('cadastro.atendentes.index');
    }
        $users = DB::table('users')->paginate(5);
        //$clientes = $cliente->paginate($this->totalPage);
        return view('cadastro.atendentes.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cargo' => $data['cargo'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        //$user = Auth()->user();
 
        $dados = $request->all();
 
        $request = new User();
        $request->name = $dados['name'];
        $request->email = $dados['email'];
        $request->cargo = $dados['cargo'];
        $request->password = bcrypt($dados['password']);
        $request->save();
        
        Alert::success('Atualizado com Sucesso!');
   
        return redirect()->action('AtendenteController@index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        $users = User::find($id);
        return view('cadastro.atendentes.editar', compact('users'));
    }       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id)
    {    
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        Alert::success('Atualizado com Sucesso');   
        $dados = $request->all();
        $users = User::find($id);
    
        if(!$dados['password']){
            $senha_antiga = $users->password;
            $dados['password'] = $senha_antiga;
            $users->update($dados);
        }else{
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;
            $users->update($dados);
        }
        return redirect()->action('AtendenteController@index');  
    }
        
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
        //
    }
    public function novo()
    {
        if(!auth()->user()->can('view_usuarios')){            
            return view('cadastro.atendentes.index');
     }
		return view('cadastro.atendentes.novo');
    }
}
