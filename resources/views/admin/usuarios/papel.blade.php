@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS > EDITAR PERMISSÕES DE ({{$usuario->name}})</h1>   
<br>	
<div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
	<div class="container">
	<div class="col-md-8">
		<div class="card">
		
		<div class="row">
			<form action="{{route('admin.usuarios.papel.salvar',$usuario->id)}}" method="post">
			{{ csrf_field() }}
			<div class="input-field">
				<select  class="form-control" name="papel_id">
					@foreach($papel as $valor)
					<option value="{{$valor->id}}">{{$valor->nome}}</option>
					@endforeach
				</select><br>
			</div>
				<button class="btn btn-info">Adicionar</button>
				<a class="btn btn-info" href="{{ route('admin.usuarios')}}" class="breadcrumb">VOLTAR</a>
			</form>
		</div>
	<br>
	<div class="row">
		<div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
		
            
					<tr>
						
						<th>PAPEL</th>
						<th>DESCRIÇÃO</th>
						<th width="100px">AÇÕES</th>
					</tr>
				
				@foreach($usuario->papeis as $papel)
					<tr>
						<td>{{ $papel->nome }}</td>
						<td>{{ $papel->descricao }}</td>
						<td>
							<a class="glyphicon glyphicon-trash" href="{{ route('admin.usuarios.papel.remover',[$usuario->id,$papel->id]) }}" title="EXCLUIR"></a>
						</td>
					</tr>
				@endforeach	
			</table>
		</div>	
	</div>

@endsection
@section('content')
    
@stop