<<<<<<< HEAD

=======
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
@extends('layouts.master')

@section('title')
  eConnection - Produtos sustentáveis
@endsection

@section('content')

<article class="bg-header-somos"><h1 class="text-center container">Lista de Produtos</h1></article>
<<<<<<< HEAD

=======
    
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
    <!-- CAMINHO DE PÁGINAS-->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lista de Produtos</li>
        </ol>
      </nav>

      <?php
<<<<<<< HEAD
=======

>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
      $produtos = [
        ['nome'=>'Copo','codigo'=>12345, 'quantidade' => 55, 'imagem'=>'{{asset (/img/canudo.jpg)}}'],
        ['nome'=>'Canudo','codigo'=>54321, 'quantidade' => 75, 'imagem'=>'{{asset (/img/canudo.jpg)}}'],
        ['nome'=>'Barbear Clássico','codigo'=>22222, 'quantidade' => 100,  'imagem'=>'{{asset (/img/canudo.jpg)}}']
      ]
<<<<<<< HEAD
=======

>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
      ?>

      <table class="table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Código</th>
            <th>Qtd.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($produtos as $produto): ?>
          <tr>
            <td>
              <img
                src="<?php echo $produto['imagem']; ?>"
                alt="some text"
                width="60"
                height="40"
              />
            </td>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['codigo']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>
<<<<<<< HEAD

=======
          
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
              <div class="space-button">
                <i class="fas fa-plus"></i>
                <i class="fas fa-pen"></i>
                <i class="fas fa-trash-alt"></i>
              </div>
              <div class="dropdown mobile-dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<<<<<<< HEAD

=======
                  
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Adicionar</a>
                  <a class="dropdown-item" href="#">Alterar</a>
                  <a class="dropdown-item" href="#">Excluir</a>
                </div>
              </div>
<<<<<<< HEAD

            </td>


          </tr>
          <?php endforeach; ?>

=======
              
            </td>
    
            
          </tr>
          <?php endforeach; ?>
          
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
        </tbody>
      </table>
</div>

<<<<<<< HEAD
@endsection 
=======
@endsection
>>>>>>> fcd2c58584c003b4d8ff11b12444610a0e03a2dc
