<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Relatório de Produtos</title>
 
        <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
        <link rel="stylesheet" href="{{ url('assets/site/css/certificate.css') }}">
    </head>
    <body>
         
 
 
<h1>Produtos</h1>
 
 
<ul>
            @forelse($produtos as $produto)
                 
 
 
<li>{{ $produto->tipo }}</li>
<li>{{ $produto->produto }}</li>
<li>{{ $produto->estoque }}</li>
<li>{{ $produto->valor }}</li>
 
 
 
            @empty
                 
 
 
<li>Nenhum Produto Cadastrado.</li>
 
 
 
            @endforelse
        </ul>
 
 
 
    </body>
</html>