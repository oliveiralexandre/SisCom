@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<section class="content-header">

      <h1>Cadastro > Produtos > Novo</h1>   
    <br>

    <div class="box box-primary">
            <div class="box-header with-border">
              
              <form action="{{url('/cadastro/produtos/create')}}" method="post"> 
                {{ csrf_field() }}
                    <div class="col-lg-3">
                    <div class="form-group">
               
                    <input id="tipo" type="text" class="form-control" name="tipo" placeholder="Digite o Tipo (Ex. Bebida, Porção..)" value="{{ old('tipo') }}" required autofocus>

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                    <input id="produto" type="text" class="form-control" name="produto" placeholder="Digite o Produto" value="{{ old('produto') }}" required autofocus>

                                @if ($errors->has('produto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('produto') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                    <input id="estoque" type="text" class="form-control" name="estoque" placeholder="Digite a quantidade de estoque" value="{{ old('estoque') }}">

                                @if ($errors->has('estoque'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estoque') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
               
                    <input id="valor" type="text" class="form-control" name="valor" placeholder="Digite o Valor" value="{{ old('valor') }}" required autofocus>

                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                @endif

                    </div>             

                    <div class="form-group">
                        <input type="submit" value="Salvar" class="btn btn-primary">   <a class="btn btn-primary " href="/" role="button">Voltar <span></span></a></div>

                    </div>                    
                </form>
            </div>           
              </div>
            </form>
          </div>

    <div class="row">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        

@stop

@section('content')
    
@stop