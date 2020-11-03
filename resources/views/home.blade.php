@extends('adminlte::page')

@section('title', 'Madalena Live Music')

@section('content_header')

 <!-- Cadastros -->
<section class="content-header">@can('view_usuarios')
      <h1>CADASTRO</h1>   
    <br>  
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CLIENTES</span>
              <a href="{{url('/cadastro/clientes')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PRODUTOS</span>
              <a href="{{url('/cadastro/produtos')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">COMANDAS</span>
              <a href="{{url('/cadastro/comandas')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">USUÁRIOS</span>
              <a href="{{url('/admin/usuarios')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
</section> @endcan

<!-- Financeiro -->

<section class="content-header">
      <h1>FINANCEIRO</h1>   
    <br>
<div class="row">@can('view_caixa')
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-usd"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CAIXA</span>
              <a href="{{url('/financeiro/caixa')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>

          <!-- /.info-box -->
        </div>@endcan
        
        @can('view_balcao')
        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-phone"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BALCÃO (PDV)</span>
              <a href="{{url('/financeiro/balcao')}}"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>@endcan
       
        <div class="col-md-3 col-sm-6 col-xs-12">@can('view_recepcao')
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-cd"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">RECEPÇÃO (ENTRADA)</span>
              <a href="#"><h5>ACESSAR</h5></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>@endcan
        <!-- /.col -->

</section>


 <!-- RELATÓRIOS -->

<section class="content-header">@can('view_usuarios')
      <h1>RELATÓRIO</h1>   
    <br>
    <div class="row">
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>MLM</h3>

              <p>CLIENTES</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="{{url('/relatorio/clientes')}}" class="small-box-footer">ACESSAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>MLM<sup style="font-size: 20px"></sup></h3>

              <p>PRODUTOS</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-cart-outline"></i>
            </div>
            <a href="{{url('/relatorio/produtos')}}" target="_blank" class="small-box-footer">ACESSAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>MLM</h3>

              <p>VENDAS</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">ACESSAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
       
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>MLM</h3>

              <p>USUÁRIOS</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-gear-outline"></i>
            </div>
            <a href="#" class="small-box-footer">ACESSAR <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

</section>@endcan


@stop

@section('content')
    
@stop