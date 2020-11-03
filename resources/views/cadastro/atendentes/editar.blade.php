@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')


      <h1>ATENDENTES > ATUALIZAR</h1>   
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
<div class="panel panel-default">

<div class="panel-body">
<form class="form-horizontal" method="post" 
action="{{route ('atualizar', $users->id)}}">
{{ csrf_field() }}
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">NOME</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="name"
        placeholder="DIGITE SEU NOME" value="{{$users->name}}">
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">EMAIL</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" name="email" 
        placeholder="DIGITE SEU EMAIL" value="{{$users->email}}">
    </div>
</div>
    <div class="form-group">
    <label for="cargo" class="col-sm-2 control-label">CARGO</label>
    <div class="col-sm-10">
    <select class="form-control" name="cargo" value="
        {{$users->cargo}}">
        <option {{($users->cargo == 'Atendente' ? 'selected' : '')}}>
        ATENDENTE</option>
        <option {{($users->cargo == 'Gerente' ? 'selected' : '')}}>
        GERENTE</option>
    </select>
    </div>
</div>
<hr>

<div class="form-group">
    <label for="password" class="col-sm-2 control-label">SENHA</label>
    <div class="col-sm-10">
    <input type="password" class="form-control" name="password"
    placeholder="DIGITE SUA NOVA SENHA OU DEIXA EM BRANCO PARA NÃO ALTERAR">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="reset" class="btn btn-default">CANCELAR</button>
        <a type="button" class="btn btn-info" href="/admin/usuarios">VOLTAR</a>
    </div>
</div>
</form>
</div>
</div>
@endsection
@section('content')