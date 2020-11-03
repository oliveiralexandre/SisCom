@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<section class="content-header">

      <h1>Cadastro > Clientes > Novo</h1>   
    <br>

    <div class="box box-primary">
            <div class="box-header with-border">
              
              <form action="{{url('/cadastro/clientes/create')}}" method="post"> 
                {{ csrf_field() }}
                    <div class="col-lg-3">
                    <div class="form-group">
               
                    <input id="nome" type="text" class="form-control" name="nome" placeholder="Digite o Nome" value="{{ old('nome') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                    <input id="rg" type="text" class="form-control" name="rg" placeholder="Digite o RG" value="{{ old('rg') }}" required autofocus>

                                @if ($errors->has('rg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                    <input id="cpf" type="text" class="form-control" name="cpf" placeholder="Digite o CPF" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('rg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
               
                    <input id="endereco" type="text" class="form-control" name="endereco" placeholder="Digite o Endereço" value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                    <input id="telefone" type="text" class="form-control" name="telefone" placeholder="Digite o Telefone" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="form-group">
                   
                    <input id="email" type="text" class="form-control" name="email" placeholder="Digite o Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                    <input id="observacao" type="text" class="form-control" name="observacao" placeholder="Digite a Observação" value="{{ old('observacao') }}" required autofocus>

                               @if ($errors->has('observacao'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('observacao') }}</strong>
                                   </span>
                               @endif
                   </div>

                   <div class="form-group">
                   <p><h4 class="text-danger">Cliente Ativo?</h4 ></p>
                   <label class="text-muted"><input type="radio" name="ativo" value="Sim" required autofocus>SIM</label>
                   <label class="text-muted"><input type="radio" name="ativo" value="Não" required autofocus>NÃO</label>
                        
                    
                               @if ($errors->has('ativo'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('ativo') }}</strong>
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