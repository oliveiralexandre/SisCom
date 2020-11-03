@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_caixa')
<section class="content-header">

      <h1>FINANCEIRO > CAIXA</h1>   
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
        
        <div class="card">
        <!-- ABRIR CAIXA -->
       
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Atenção!</h4>
                O CAIXA NÃO ESTA ABERTO!
              </div>
              <a class="btn btn-block btn-social btn-success" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-inbox"></i> Abrir Caixa
              </a>
                    
                       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FINANCEIRO > ABRIR CAIXA</h5>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
            <form action="{{url('/financeiro/caixa/create')}}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('valorinicial') ? 'has-error' : '' }}">
                    <input type="text" name="valorinicial" class="form-control" value="{{ old('valorinicial') }}" required autofocus
                           placeholder="Digite o Valor" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('valorinicial'))
                        <span class="help-block">
                            <strong>{{ $errors->first('valorinicial') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('numerocaixa') ? 'has-error' : '' }}">
                    <input type="text" name="numerocaixa" class="form-control" value="{{ old('numerocaixa') }}" required autofocus
                           placeholder="Digite o Número do Caixa" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('numerocaixa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('numerocaixa') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('user_id') ? 'has-error' : '' }}">
                   
                   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                       
                               @if ($errors->has('user_id'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('user_id') }}</strong>
                                   </span>
                               @endif
                               <input type="hidden" name="status_id" value="1">
                                        
                               @if ($errors->has('status_id'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('status_id') }}</strong>
                                   </span>
                               @endif
                   </div>
                
            
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">ABRIR</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">SAIR</button>                         
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
</div>

<!-- FIM Modal -->
                        
                   
             
            </div>
        </div>
       
        

        
	

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