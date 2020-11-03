@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_comandas')
<section class="content-header">

      <h1>CADASTRO > COMANDAS</h1>   
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
                    <input type="text" class="form-control" placeholder="DIGITE O NÚMERO DA COMANDA" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">PESQUISAR</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">NOVA COMANDA</button>
<p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO E COMANDAS</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
              
            <form action="{{url('/cadastro/comandas/create')}}" method="post"> 
                {{ csrf_field() }}
                    <div class="col-lg-35">
                    <div class="form-group">
               
                    <input id="codigocomanda" type="text" class="form-control" name="codigocomanda" placeholder="DIGITE O CÓDIGO DA COMANDA" value="{{ old('codigocomanda') }}" required autofocus>

                                @if ($errors->has('codigocomanda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigocomanda') }}</strong>
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

               <!-- <p><p><table><a class="btn btn-primary " href="/cadastro/clientes/novo" role="button">Novo Cliente <span class="glyphicon glyphicon-plus"></span></a> </table><p> -->
<div class="table-responsive">                          
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<tr>
		<th>CÓDIGO DA COMANDA</th>	
		<th width="100px">AÇÕES</th>
	</tr>
	@foreach ($comandas as $comanda)
	<tr>
		<td>{{$comanda->codigocomanda}}</td>
		<td>
			<a href="" class="actions edit">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<a href="" class="actions delete">
				<span class="glyphicon glyphicon-trash"></span>
			</a>
		</td>
	</tr>
	@endforeach
	
</table><div class="text-right">{{ $comandas->links() }}</div></div>



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