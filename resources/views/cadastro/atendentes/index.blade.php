@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_usuarios')
<section class="content-header">

      <h1>CADASTRO > ATENDENTES</h1>   
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
                    <input type="text" class="form-control" placeholder="DIGITE O ATENDENTE" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">PESQUISAR</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">NOVO ATENDENTE</button>
<p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO DE ATENDENTES</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
            <form action="{{url('/cadastro/atendentes/create')}}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('cargo') ? 'has-error' : '' }}">
                <select class="form-control" name="cargo">
        <option value="ATENDENTE">ATENDENTE</option>
        <option value="CAIXA">CAIXA</option>
        <option value="GERENTE">GERENTE</option>
    </select>
                    
                    <span class="glyphicon glyphicon-arrow-left form-control-feedback"></span>
                    @if ($errors->has('cargo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cargo') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
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

               <!-- <p><p><table><a class="btn btn-primary " href="/cadastro/atendentes/novo" role="button">Novo Cliente <span class="glyphicon glyphicon-plus"></span></a> </table><p> -->
    <div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
	        <tr>
		        <th>ID</th>
		        <th>NOME</th>	
                <th>EMAIL</th>
                <th>CARGO</th>
			    <th width="100px">AÇÕES</th>
	        </tr>
	    @foreach ($users as $user)
	        <tr>
		        <td>{{$user->id}}</td>
		        <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->cargo}}</td>
		
		<td>
			<a href="{{url("/cadastro/atendentes/$user->id/editar")}}" class="actions edit">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<a href="" class="actions delete">
				<span class="glyphicon glyphicon-trash"></span>
			</a>
		</td>
	</tr>
	@endforeach
	
</table><div class="text-right">{{ $users->links() }}</div><div>



                <div class="panel-body">

				

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@stop

@section('content')
    
@stop