<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Relatório de Produtos</title>
 
       
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

<h2 style="text-align:center;">Relatório de Produtos</h2>   
<br>
<div class="row">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
          
        
                    
  <table style="width:100%">
<tr>
  <th>Código</th>	
  <th>Categoria</th>
  <th>Produto</th>
  <th>Estoque</th>	
  <th>Valor</th>	
</tr>
@forelse ($produtos as $produtos)
<tr>
  <td>{{$produtos->codigoproduto}}</td>
  <td>{{$produtos->categoria}}</td>
  <td>{{$produtos->produto}}</td>
  <td>{{$produtos->estoque}}</td>
  <td>{{$produtos->valor}}</td>
 
     
  </td>
</tr>
@empty
<br><br><br><br>
<li><h3 style="color:Tomato;">Nenhum Produto Cadastrado.</h3></li>
@endforelse
</table>
 
 
 
 
 
    </body>
</html>