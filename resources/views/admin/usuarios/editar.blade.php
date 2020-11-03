@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS > EDITAR USUÁRIO ({{$usuario->name}})</h1>   
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
		<form action="{{ route('admin.usuarios.atualizar',$usuario->id) }}" method="post">

		{{csrf_field()}}
		
		
		<input type="hidden" name="_method" value="put">
		<div class="input-field">
				<input type="text" name="name" class="form-control" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
					
				</div><br>
		<div class="input-field">
				<input type="text" name="email" class="form-control" value="{{ isset($usuario->email) ? $usuario->email : '' }}">
					
			</div><br>
		
    		
   				 <input type="password" class="form-control" name="password" placeholder="DIGITE SUA NOVA SENHA OU DEIXA EM BRANCO PARA NÃO ALTERAR">
   			 <br>
				<button class="btn btn-info">ATUALIZAR</button>
				<a type="button" class="btn btn-info" href="{{ route('admin.usuarios') }}">CANCELAR</a>
		</div>

		

			
		</form>
			
	</div>
	
	</div>
	

@endsection