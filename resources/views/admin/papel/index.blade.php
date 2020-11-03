@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS > NÍVEIS DE ACESSO</h1>   
		<br>	
<div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">ADICIONAR NÍVEL DE ACESSO</button>
<a type="button" class="btn btn-info" href="{{ route('admin.usuarios') }}">VOLTAR</a>
<p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO > USUÁRIOS > NÍVEIS DE ACESSO > ADICIONAR</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
              
        <form action="{{ route('admin.papel.salvar') }}" method="post">
		{{csrf_field()}}
		
		<div class="form-group">
		<div class="input-field">
			<input type="text" name="nome" class="form-control" placeholder="DIGITE O NÍVEL" value="{{ isset($registro->nome) ? $registro->nome : '' }}" required autofocus>
		</div><p>
		<div class="input-field">
			<input type="text" name="descricao" class="form-control" placeholder="DIGITE A DESCRIÇÃO" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required autofocus>
		</div><br>

		<button class="btn btn-info">Adicionar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">SAIR</button>  
</div>
			
		</form>
			
            </div>           
              </div>
            </form>

		  <!-- FIM FORMULARIO -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
<!-- FIM Modal -->

		<p>
		<div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
	    	
				<thead>
					<tr>
						<th>ID</th>
						<th>NOME</th>						
						<th>DESCRIÇÃO</th>
						<th width="100px">AÇÕES</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->descricao }}</td>
						
						<td>
							@can('papel_editar')
								@if($registro->nome != 'admin')
								<a class="glyphicon glyphicon-pencil" href="{{ route('admin.papel.editar',$registro->id) }}" title="EDITAR NÍVEL DE ACESSO"></a>
								<a class="glyphicon glyphicon-lock" href="{{ route('admin.papel.permissao',$registro->id) }}" title="EDITAR PERMISSÕES"></a>
								@else
								<a class="glyphicon glyphicon-ban-circle" ></a>
								<a class="glyphicon glyphicon-ban-circle" ></a>
								@endif

							@endcan

							
							@can('papel_deletar')
								@if($registro->nome != 'admin')
								<a class="glyphicon glyphicon-trash" href="{{ route('admin.papel.deletar',$registro->id) }}" title="EXCLUIR"></a>
								@else
								<a class="glyphicon glyphicon-ban-circle disabled" ></a>
								@endif
							@endcan
							
							
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			
		</div>
		
	</div>

@endsection