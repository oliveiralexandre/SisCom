@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">

      <h1>CADASTRO > ATENDENTES</h1>   
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    

<div class="container">
	<h2 class="center">Admin</h2>
	<div class="row">
        <div class="col s12 m4">
          <div class="card green darken-1">
            <div class="card-content white-text">
              <span class="card-title">Imóveis</span>
              <p>Lista de imóveis</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">Tipos</span>
              <p>Lista de tipos</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card orange darken-1">
            <div class="card-content white-text">
              <span class="card-title">Cidades</span>
              <p>Lista de cidades</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="">Acessar</a>
            </div>
          </div>
        </div>
	</div>
	<div class="row">
        <div class="col s12 m6">
          <div class="card deep-purple ">
            <div class="card-content white-text">
              <span class="card-title">Slides</span>
              <p>Lista de slides</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card deep-orange">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Lista de usuários</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="{{route('admin.usuarios')}}">Acessar</a>
            </div>
          </div>
        </div>
        
	</div>
	<div class="row">
	@can('papel_listar')
		<div class="col s12 m6">
          <div class="card red darken-1">
            <div class="card-content white-text">
              <span class="card-title">Papel</span>
              <p>Lista de papéis</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="{{route('admin.papel')}}">Acessar</a>
            </div>
          </div>
        </div>
    @endcan
        <div class="col s12 m6">
          <div class="card green  darken-2 ">
            <div class="card-content white-text">
              <span class="card-title">Páginas</span>
              <p>Lista de páginas</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="">Acessar</a>
            </div>
          </div>
        </div>
        
	</div>
	
</div>

@endsection