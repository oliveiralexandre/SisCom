@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > CLIENTES > EDITAR CLIENTE ({{$cliente->nome}})</h1>   
<br>	
<div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
	<div class="container">
	<div class="col-md-8">
		<div class="card">
	
<div class="table-responsive">                    
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-responsive w-auto" cellspacing="0" width="100%">
		<div class="box box-primary">
            <div class="box-header with-border">
			<form action="{{ route('cadastro.clientes.atualizar',$cliente->id) }}" method="post">

		{{csrf_field()}}
		
		<input type="hidden" name="_method" value="put">
		<div class="input-field">
				<input type="text" name="nome" class="form-control" value="{{ isset($cliente->nome) ? $cliente->nome : '' }}">
				</div><br>
		    <div class="input-field">
				<input type="text" name="rg" class="form-control" value="{{ isset($cliente->rg) ? $cliente->rg : '' }}">
			</div><br>

            <div class="input-field">
				<input type="text" name="cpf" class="form-control" value="{{ isset($cliente->cpf) ? $cliente->cpf : '' }}">	
			</div><br>

            <div class="input-field">
				<input type="text" name="endereco" class="form-control" value="{{ isset($cliente->endereco) ? $cliente->endereco : '' }}">	
			</div><br>
            
            <div class="input-field">
				<input type="text" name="telefone" class="form-control" value="{{ isset($cliente->telefone) ? $cliente->telefone : '' }}">	
			</div><br>

            <div class="input-field">
				<input type="text" name="email" class="form-control" value="{{ isset($cliente->email) ? $cliente->email : '' }}">	
			</div><br>
		
            <div class="input-field">
				<input type="text" name="observacao" class="form-control" value="{{ isset($cliente->observacao) ? $cliente->observacao : '' }}">	
			</div><br>
            <div class="input-field">
				<input type="text" name="ativo" class="form-control" value="{{ isset($cliente->ativo) ? $cliente->ativo : '' }}">	
			</div><br>
            
    	
				<button class="btn btn-info">ATUALIZAR</button>
				<a type="button" class="btn btn-info" href="/madalena/cadastro/clientes">CANCELAR</a>
		</div>

		

			
		</form>
			
	</div>
	
	</div>
	

@endsection