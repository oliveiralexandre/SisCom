@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_clientes')
<section class="content-header">

      <h1>CADASTRO > CLIENTES</h1>   
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
                    <input type="text" class="form-control" placeholder="DIGITE O NOME DO CLIENTE" name="text">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">PESQUISAR</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">NOVO CLIENTE</button>
<p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CADASTRO DE CLIENTES</h4>
      </div>
      <div class="modal-body">
	  <!-- FORMULARIO -->
	  <div class="box box-primary">
            <div class="box-header with-border">
              <form action="{{url('/cadastro/clientes/create')}}" method="post"> 
                {{ csrf_field() }}
                    <div class="col-lg-35">
                    <div class="form-group">
               
                    <input id="nome" type="text" class="form-control" name="nome" placeholder="DIGITE O NOME" value="{{ old('nome') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                    <input id="rg" type="text" class="form-control" name="rg" placeholder="DIGITE O RG" value="{{ old('rg') }}" required autofocus>

                                @if ($errors->has('rg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                    <input id="cpf" type="text" class="form-control" name="cpf" placeholder="DIGITE O CPF" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('rg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
               
                    <input id="endereco" type="text" class="form-control" name="endereco" placeholder="DIGITE O ENDEREÇO" value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                    <input id="telefone" type="text" class="form-control" name="telefone" placeholder="DIGITE O TELEFONE" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="form-group">
                   
                    <input id="email" type="text" class="form-control" name="email" placeholder="DIGITE O EMAIL" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                    <input id="observacao" type="text" class="form-control" name="observacao" placeholder="DIGITE A OBSERVAÇÃO" value="{{ old('observacao') }}" required autofocus>

                               @if ($errors->has('observacao'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('observacao') }}</strong>
                                   </span>
                               @endif
                   </div>

                   <div class="form-group">
                   <p><h4 class="text-danger">CLIENTE ATIVO?</h4 ></p>
                   <label class="text-muted"><input type="radio" name="ativo" value="Sim" required autofocus>SIM</label>
                   <label class="text-muted"><input type="radio" name="ativo" value="Não" required autofocus>NÃO</label>
                        
                    
                               @if ($errors->has('ativo'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('ativo') }}</strong>
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
		    <th>ID</th>
		    <th>NOME</th>	
            <th>ENDEREÇO</th>
		    <th>TELEFONE</th>	
		    <th width="100px">AÇÕES</th>
	    </tr>
	 @foreach ($clientes as $cliente)
	    <tr>
		    <td>{{$cliente->id}}</td>
	    	<td>{{$cliente->nome}}</td>
            <td>{{$cliente->endereco}}</td>
		    <td>{{$cliente->telefone}}</td>
            <td>
							
              
							<a class="glyphicon glyphicon-pencil" href="{{ route('cadastro.clientes.editar',$cliente->id) }}" data-placement="top" title="EDITAR USUÁRIO"></a>
						
							<a class="glyphicon glyphicon-trash" href="{{ route('cadastro.clientes.deletar',$cliente->id) }}' }" data-toggle="tooltip" data-placement="top" title="EXCLUIR"></a>
							
						</td>
	</tr>
    
	@endforeach
	
</table>

<div class="text-right">{{ $clientes->links() }}</div></div>







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