<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Papel;
use App\Models\Permissao;

class PapelController extends Controller
{
    public function index()
    {
    	if(!auth()->user()->can('papel_listar')){            
            return view('papel.adicionar');
        }
        $registros = Papel::all();
    	return view('papel.index',compact('registros'));
    }
    public function adicionar()
    {
        return view('papel.adicionar');
    }
    public function salvar(Request $request)
    {
    	if(!auth()->user()->can('papel_adicionar')){            
            return redirect()->route('papel');
        }
        Papel::create($request->all());

    	return redirect()->route('papel');
    }
    public function editar($id)
    {
    	if(!auth()->user()->can('papel_editar')){            
            return redirect()->route('papel');
        }
        if(Papel::find($id)->nome == "admin"){
    		return redirect()->route('papel');
    	}

    	$registro = Papel::find($id);

    	return view('papel.editar',compact('registro'));
    }

    public function atualizar(Request $request,$id)
    {
    	if(!auth()->user()->can('papel_editar')){            
            return redirect()->route('papel');
        }
        if(Papel::find($id)->nome == "admin"){
    		return redirect()->route('papel');
    	}
    	Papel::find($id)->update($request->all());

    	return redirect()->route('papel');
    }

    public function deletar($id)
    {
    	if(!auth()->user()->can('papel_deletar')){            
            return redirect()->route('papel');
        }

        if(Papel::find($id)->nome == "admin"){
    		return redirect()->route('papel');
    	}
    	Papel::find($id)->delete();
    	return redirect()->route('papel');

    }

    public function permissao($id)
    {
        if(!auth()->user()->can('papel_editar')){            
            return redirect()->route('papel');
        }
        $papel = Papel::find($id);
        $permissao = Permissao::all();
        return view('papel.permissao',compact('papel','permissao'));
    }
    public function salvarPermissao(Request $request, $id)
    {
        if(!auth()->user()->can('papel_editar')){            
            return redirect()->route('papel');
        }
        $papel = Papel::find($id);
        $permissao = Permissao::find($request['permissao_id']);
        $papel->adicionarPermissao($permissao);
        return redirect()->back();
    }

    public function removerPermissao($id,$id_permissao)
    {
        if(!auth()->user()->can('papel_editar')){            
            return redirect()->route('papel');
        }
        $papel = Papel::find($id);
        $permissao = Permissao::find($id_permissao);
        $papel->removerPermissao($permissao);
        
        return redirect()->back();
    }
}
