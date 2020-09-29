@extends('template')
 
 @section('title', 'Nome Fase do Chefão')
   
 @section('content')
 <div class="nav nav-sec" aria-label="breadcrumb" style="width: 100%">
     <p>Nome da Turma</p>
     <span>/Fase do Chefão</span>
     <span>/Nome do Desafio</span>
 </div>
 <div class="container-fluid">

     <!-- Botão para voltar -->
     <a href="{{ url('/inicial') }}">
        <button type="button" class="btn btn-roxo"><span class="fas fa-angle-double-left"></span></button>
     </a> 


 
 </div>
  
 @endsection