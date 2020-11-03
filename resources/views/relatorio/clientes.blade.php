<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Relatório de Clientes</title>
 
       
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    </head>
    <body>
         
    <section class="content-header">

<h2 style="text-align:center;">Relatório de Clientes</h2>   
<br>
<div class="row">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
          
        
                    
  <table style="width:100%">
<tr>
  <th>Código</th>	
  <th>Nome</th>
  <th>Contato</th>
  <th>Status</th>	
  <th>Observações</th>	
</tr>
@forelse ($clientes as $clientes)
<tr>
  <td>{{$clientes->id}}</td>
  <td>{{$clientes->nome}}</td>
  <td>{{$clientes->telefone}}</td>
  <td>{{$clientes->ativo}}</td>
  <td>{{$clientes->observacao}}</td>
 
     
  </td>
</tr>
@empty
<br><br><br><br>
<li><h3 style="color:Tomato;">Nenhum Cliente Cadastrado.</h3></li>
@endforelse
</table>
 
 
 
 
 
    </body>
</html>