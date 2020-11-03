@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > PRODUTOS > EDITAR PRODUTO ({{$produto->produto}})</h1>   
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
			<form action="{{ route('cadastro.produtos.atualizar',$produto->id) }}" method="post">

		{{csrf_field()}}
		
		<input type="hidden" name="_method" value="put">
		<div class="input-field">
				<input type="text" name="codigoproduto" class="form-control" value="{{ isset($produto->codigoproduto) ? $produto->codigoproduto : '' }}">
				</div><br>
		    <div class="input-field">
				<input type="text" name="categoria" class="form-control" value="{{ isset($produto->categoria) ? $produto->categoria : '' }}">
			</div><br>

            <div class="input-field">
				<input type="text" name="produto" class="form-control" value="{{ isset($produto->produto) ? $produto->produto : '' }}">	
			</div><br>

            <div class="input-field">
				<input type="text" name="estoque" class="form-control" value="{{ isset($produto->estoque) ? $produto->estoque : '' }}">	
			</div><br>     

			<div class="input-field">
				<input type="text" name="valor" class="form-control" value="{{ isset($produto->valor) ? $produto->valor : '' }}">	
			</div><br>

				<button class="btn btn-info">ATUALIZAR</button>
				<a type="button" class="btn btn-info" href="/madalena/cadastro/produtos">CANCELAR</a>
		</div>

		

			
		</form>
			
	</div>
	
	</div>
	

@endsection