@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@can('view_clientes')
<section class="content-header">

      <h1>RELATÓRIO > GERAR RELATÓRIO DE CLIENTES</h1>   
    <br>
    <div class="row">
        <div class="container">
 
            <div class="row justify-content-center">
    
                 <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                    <div class="card">
                        <div class="form-check form-check-inline"><br>
                            <label class="form-check-label" for="inlineCheckbox1">*RELATÓRIO COMPLETO</label>
                            <td> <a type="button" class="btn btn-primary btn-xs" target="a_blank" href="{{ route('geral') }}">GERAR</a></td>
                           <div class="box-header with-border">
                           </div><br>
                        <label class="form-check-label" for="">*RELATÓRIO POR SELEÇÃO</label>

                        <form> 

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="nome" value="nome">
                            <label class="form-check-label" for="inlineCheckbox1">NOME</label>
                    
                            <input class="form-check-input" type="checkbox" id="rg" value="rg">
                            <label class="form-check-label" for="inlineCheckbox1">RG</label>
                        
                            <input class="form-check-input" type="checkbox" id="cpf" value="cpf">
                            <label class="form-check-label" for="inlineCheckbox1">CPF</label>

                            <input class="form-check-input" type="checkbox" id="endereco" value="endereco">
                            <label class="form-check-label" for="inlineCheckbox1">ENDEREÇO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="telefone" value="telefone">
                            <label class="form-check-label" for="inlineCheckbox1">TELEFONE</label>
                        
                            <input class="form-check-input" type="checkbox" id="email" value="email">
                            <label class="form-check-label" for="inlineCheckbox1">EMAIL</label>

                            <input class="form-check-input" type="checkbox" id="observacao" value="observacao">
                            <label class="form-check-label" for="inlineCheckbox1">OBSERVAÇÃO</label>
                    
                           
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="ativo" value="ativo">
                        <label class="form-check-label" for="inlineCheckbox1">ATIVO</label>    
                        </div>
                        <td> <a type="button" class="btn btn-primary btn-xs" target="a_blank" href="{{ route('filtro') }}">GERAR</a></td>      
                        </form>
                     </div>
                </div>
             </div>
          </div>
        </div>    
    </div>    
</div>
@endcan
@stop

@section('content')
    
@stop