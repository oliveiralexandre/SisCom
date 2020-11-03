@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<section class="content-header">
	
		<h1>CADASTRO > ATENDENTES > ADICIONAR</h1>   
<br>	
<div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
	<div class="container">
	
	
	<div class="row">
		<form action="{{ route('admin.usuarios.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.usuarios._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection