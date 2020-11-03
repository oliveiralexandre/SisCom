@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_produtos')
<section class="content-header">

      <h1>CADASTRO > PRODUTOS</h1>   
    <br>
    <div class="row">
    <div class="container">
 
    <div class="row justify-content-center">
    
        <div class="col-md-8">
        
        <div class="card">
         <!-- Formulário de Pesquisa -->
         <form method="POST" href="{{ route('search') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="DIGITE O NOME DO PRODUTO" name="text">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">PESQUISAR</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">NOVO PRODUTO</button>
<p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO DE PRODUTOS</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
              
            <form action="{{url('/cadastro/produtos/create')}}" method="post"> 
                {{ csrf_field() }}
                    <div class="col-lg-35">
                    
                    <div class="form-group">
                    <input id="codigoproduto" type="text" class="form-control" name="codigoproduto" placeholder="DIGITE O CÓDIGO DO PRODUTO" value="{{ old('codigoproduto') }}" required autofocus>

                                @if ($errors->has('codigoproduto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigoproduto') }}</strong>
                                    </span>
                                @endif

                    </div>
                    <div class="form-group">
                    <input id="categoria" type="text" class="form-control" name="categoria" placeholder="DIGITE A CATEGORIA DO PRODUTO" value="{{ old('categoria') }}">

                                @if ($errors->has('categoria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                    <input id="produto" type="text" class="form-control" name="produto" placeholder="DIGITE O PRODUTO" value="{{ old('produto') }}">

                                @if ($errors->has('produto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('produto') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="form-group">
                    <input id="estoque" type="text" class="form-control" name="estoque" placeholder="DIGITE A QUANTIDADE DE ESTOQUE" value="{{ old('estoque') }}">

                                @if ($errors->has('estoque'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estoque') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
               
                    <input id="valor" type="text" class="form-control" name="valor" placeholder="DIGITE O VALOR" value="{{ old('valor') }}" required autofocus>

                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                @endif

                    </div>             

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
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

               <!-- <p><p><table><a class="btn btn-primary " href="/cadastro/clientes/novo" role="button">Novo Cliente <span class="glyphicon glyphicon-plus"></span></a> </table><p> -->
<div class="table-responsive">                        
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<tr>
		<th>CÓDIGO</th>	
        <th>CATEGORIA</th>
		<th>PRODUTO</th>	
        <th>VALOR</th>		
		<th width="100px">AÇÕES</th>
	</tr>
	@foreach ($produtos as $produto)
	<tr>
		<td>{{$produto->codigoproduto}}</td>
        <td>{{$produto->categoria}}</td>
		<td>{{$produto->produto}}</td>
        <td>{{$produto->valor}}</td>
		<td>
                <a class="glyphicon glyphicon-pencil" href="{{ route('cadastro.produtos.editar',$produto->id) }}" data-placement="top" title="EDITAR PRODUTO"></a>
						
                <a class="glyphicon glyphicon-trash" href="{{ route('cadastro.produtos.deletar',$produto->id) }}' }" data-toggle="tooltip" data-placement="top" title="EXCLUIR"></a>
		</td>
	</tr>
	@endforeach
	
</table><div class="text-right">{{ $produtos->links() }}</div></div>



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