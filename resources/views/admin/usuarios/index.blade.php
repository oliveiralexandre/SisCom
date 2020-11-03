@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS</h1>   
<br>	
<div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
		<div class="card">
        <!-- Formulário de Pesquisa -->
        <form method="GET" action="">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="DIGITE O USUÁRIO" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">PESQUISAR</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#CADASTRO">NOVO USUÁRIO</button>
<a type="button" class="btn btn-info" href="{{ route('admin.papel') }}">NÍVEIS DE ACESSO</a>
<p>
<!-- Modal CADASTRO-->
<div id="CADASTRO" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO DE USUÁRIOS</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
            <form action="{{ route('admin.usuarios.salvar') }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}" required autofocus>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">SAIR</button>                         
                    </div>
                   

                </form>
            </div>
            
            
              </div>
            </form>
          </div>
		  <!-- FIM FORMULARIO -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
<!-- FIM Modal -->



	

<div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
	    		
                <tr>
						<th>ID</th>
						<th>NOME</th>
						<th>EMAIL</th>
						<th width="100px">AÇÕES</th>
				</tr>
				
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>
							@can('usuario_editar')
              
							<a class="glyphicon glyphicon-pencil" href="{{ route('admin.usuarios.editar',$usuario->id) }}" data-placement="top" title="EDITAR USUÁRIO"></a>
							<a class="glyphicon glyphicon-lock" href="{{ route('admin.usuarios.papel',$usuario->id) }}" data-toggle="tooltip" data-placement="top" title="EDITAR PERMISSÕES"></a>
							@endcan
							@can('usuario_deletar')
							<a class="glyphicon glyphicon-trash" href="{{ route('admin.usuarios.deletar',$usuario->id) }}" data-toggle="tooltip" data-placement="top" title="EXCLUIR"></a>
							@endcan
						</td>
					</tr>				
          @endforeach
			</table>
                    
		</div>
		
	</div>
  
@stop

@section('content')
    
@stop