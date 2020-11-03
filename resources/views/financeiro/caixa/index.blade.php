@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_caixa')
<section class="content-header">

      <h1>FINANCEIRO > CAIXA > MÓDULO DE CAIXA
      <!-- Trigger the modal with a button -->

      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#fechamentocaixa">Fechar Caixa</button> </h1>  
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
        
        <div class="card">
<p>
<!-- Modal -->
<div id="fechamentocaixa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FECHAMENTO DE CAIXA</h5>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
            <form action="{{url('/financeiro/caixa/fechamento/create')}}" method="post">
                {!! csrf_field() !!}

               
                <div class="form-group has-feedback {{ $errors->has('user_id') ? 'has-error' : '' }}">
                   
                   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                       
                               @if ($errors->has('user_id'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('user_id') }}</strong>
                                   </span>
                               @endif          
                   </div>
                   <div class="form-group has-feedback {{ $errors->has('caixa_abertura_id') ? 'has-error' : '' }}">
                   
                   <input type="hidden" name="caixa_abertura_id" value="{{ old('caixa_abertura_id') }}">
                                       
                               @if ($errors->has('caixa_abertura_id'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('caixa_abertura_id') }}</strong>
                                   </span>
                               @endif          
                   </div>

                <div class="form-group has-feedback {{ $errors->has('numerocaixa') ? 'has-error' : '' }}">
                    <input type="text" name="estoque" class="form-control" value="{{ old('numerocaixa') }}" required autofocus
                           placeholder="NÚMERO DO CAIXA">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('estoque'))
                        <span class="help-block">
                            <strong>{{ $errors->first('estoque') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('valordinheiro') ? 'has-error' : '' }}">
                    <input type="valordinheiro" name="valordinheiro" class="form-control" value="{{ old('valordinheiro') }}" required autofocus
                           placeholder="TOTAL EM DINHEIRO">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('valordinheiro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('valordinheiro') }}</strong>
                        </span>
                    @endif
                </div>     
                <div class="form-group has-feedback {{ $errors->has('valorcartao') ? 'has-error' : '' }}">
                    <input type="valorcartao" name="valorcartao" class="form-control" value="{{ old('valorcartao') }}" required autofocus
                           placeholder="TOTAL EM CARTÃO">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('valorcartao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('valorcartao') }}</strong>
                        </span>
                    @endif
                </div>                   
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-round">FECHAR</button>
                    <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">CANCELAR</button>                         
                    </div>
                   

                </form>
            </div>
            
            
              </div>
            </form>
          </div>
		  <!-- FIM FORMULARIO -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
  	  <!-- FIM MODAL -->
  
        

        
	

                <div class="panel-body">

                <div class="box box-primary">
            <div class="box-header with-border">
            <div class="callout callout-success" style="margin-bottom: 0!important;">
             <h4><i class="glyphicon glyphicon-usd"></i>CAIXA</h4>
            </div>
            </div>
            <!-- /.box-header -->
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

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <tr>

      <td>TOTAL:</td>  
     
      <td width="100px">R$ </td>
  
    </tr>
</table>
<button type="button" class="btn btn-block btn-success btn-lg">PAGAMENTO</button>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@stop

@section('content')
    
@stop