@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
	
		<h1>CADASTRO > USUÁRIOS > NÍVEIS DE ACESSO > ADICIONAR</h1>   
		<br>	

    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
		
	<div class="row">
		<form action="{{ route('admin.papel.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.papel._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection