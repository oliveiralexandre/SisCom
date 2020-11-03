@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS > EDITAR PERMISSÕES DE ({{$papel->nome}})</h1>   
<br>	
	<div class="row">
		<div class="container">

		<div class="row justify-content-center">

		<div class="container">
	<div class="col-md-8">
		<div class="card">
	
		<div class="row">
			<form action="{{route('admin.papel.permissao.salvar',$papel->id)}}" method="post">
			{{ csrf_field() }}
			<div class="input-field">
				<select class="form-control"name="permissao_id">
					@foreach($permissao as $valor)
					<option value="{{$valor->id}}">{{$valor->nome}}</option>
					@endforeach
				</select>
			</div><br>
				<button class="btn btn-info">Adicionar</button>
				<a type="button" class="btn btn-info" href="{{ route('admin.papel') }}">VOLTAR</a>
			</form>
			
			
		</div><br>
		<div class="row">
		<div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
		
			
					<tr>	
						<th>PERMISSÃO</th>
						<th>DESCRIÇÃO</th>
						<th>AÇÃO</th>
					</tr>
				@foreach($papel->permissoes as $value)
					<tr>
						<td>{{ $value->nome }}</td>
						<td>{{ $value->descricao }}</td>
						
						<td>
							
							<a class="glyphicon glyphicon-trash" href="{{ route('admin.papel.permissao.remover',[$papel->id,$value->id]) }}" title="EXCLUIR"></a>
						</td>
					</tr>
				@endforeach
			</table>
			
		</div>
		
	</div>

@endsection