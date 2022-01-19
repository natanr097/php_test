<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pesquisar</title>
  </head>
  <body>



        <?php
         
            $pesquisa = $_POST['busca'] ?? ''; 
        

         include "conexao.php";

         $sql = "SELECT * FROM users WHERE nome LIKE '%$pesquisa%'";
        
         $dados = mysqli_query($conn, $sql);
        
         ?>
        
    <div class="container">
        <div class="row">
            <div  class="col">
            <h1>Pesquisar</h1>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="pesquisa.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome </th>
                    <th scope="col">Email </th>
                    <th scope="col">Telefone </th>
                    <th scope="col">Documento </th>
                    <th scope="col">Funções</th>

                </tr>
            </thead>
            <tbody>

            <?php

         while ( $linha = mysqli_fetch_assoc($dados) ){
            $id = $linha['id'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
            $documento = $linha['documento'];
            $dt_nascimento = $linha['dt_nascimento'];
            $dt_nascimento = mostra_data($dt_nascimento);

            echo   "<tr>
                        <th scope='row'>$Nome</th>
                        <td>$emaill</td>
                        <td>$telefone</td>
                        <td>$documento</td>
                        <td>$dt_nascimento</td>
                        <td widith=150px> <a href='cadastro_edit.php?id=$id' class='btn btn-sucess btn-sm'>Editar </a> 
                                          <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'  
                                          onclick=" .'"' ."pegar_dados($id, '$nome')" . '"' .">Excluir</a>
                        </td> 
                     </tr>";
         }
        ?>

            </tbody>
        </table>

            <a href="index.php" class="btn btn-info">inicio</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Confirmação deexclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="excluir_script.php" method="POST">
        <p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
        
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <input type="hidden" name="nome" id="nome_pessoa1" value="">
            <input type="hidden" name="id" id="id" value="">
            <inpput type="submit" class="btn btn-danger" value="Sim">
        </form>
      </div>
    </div>
  </div>
</div>
    

    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_pessoa').innerhtml = nome;
            document.getElementById('nome_pessoa1').value = nome;
            document.getElementById('id').value = id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>