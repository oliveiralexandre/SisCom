@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_balcao')
<section class="content-header">

      <h1>FINANCEIRO > BALCÃO</h1>   
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
 
   
    
        <div class="col-md-8">
        
        <div class="card">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">CADASTRAR PRODUTOS NA COMANDA</h3>
            </div>
           
           <!-- FORMULARIO -->

            <div class="box-header with-border">
              
            <form action="{{url('/financeiro/balcao/create')}}" method="post">
                {!! csrf_field() !!}

                    <div class="col-lg-35">

                    <div class="form-group">
                    <input id="comanda" type="text" class="form-control" name="comanda" placeholder="DIGITE O CÓDIGO DA COMANDA" value="{{ old('comanda') }}" required autofocus>

                                @if ($errors->has('comanda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comanda') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">                    
                    <select name="produto_id" id="produto_id" class="form-control">
                         @foreach($produtos as $produto)    
                    <option value="{{ $produto->codigoproduto }} - {{ $produto->produto }} - R$ {{ $produto->valor }}">{{ $produto->codigoproduto }} - {{ $produto->produto }} - R$ {{ $produto->valor }}</option>            
                         @endforeach
                    </select>
                    
                    </div>

                    <div class="form-group">
                    <input type="text" name="valor" value="{{ $produto->valor }}" disabled>
                                      
                              @if ($errors->has('valor'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('valor') }}</strong>
                                  </span>
                              @endif
                              
                  </div>

                   
                    
                    <!-- Gravar Usuário que cadastrou -->
                    <div class="form-group">
                    <input type="hidden" name="usuariocadastrou" value="{{ Auth::user()->id }}">
                                      
                              @if ($errors->has('usuariocadastrou'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('usuariocadastrou') }}</strong>
                                  </span>
                              @endif
                              
                  </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">LANÇAR</button>
                                             
                    </div>          
                </form>
            </div>           
              </div>
            </form>
          </div>
          
		  <!-- FIM FORMULARIO -->

        <!-- CONSULTA DE COMANDA -->
       
             <!-- form start -->
             <form role="form">
              <div class="box-body">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="DIGITE O NÚMERO DA COMANDA" name="text">
                </div>
                <div class="table-responsive">                        
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<tr>
        <th>COMANDA</th>
		<th>PRODUTO</th>	
        <th>VALOR</th>		
		
	</tr>
    @foreach ($moviment_produtos as $moviment_produto)
    <tr>
      <td>{{$moviment_produto->comanda}}</td>
      <td>{{$moviment_produto->produto_id}}</td>
      <td>{{$moviment_produto->valor}}</td>
    </tr>

    @endforeach	
</table>        
                   
        
       






       
	         <div class="panel-body">

				

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endcan

@stop

@section('content')
    
@stop