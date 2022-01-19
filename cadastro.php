<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div  class="col">
            <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="mb-3">
                        <label for="nome">nome completo</label>
                            <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="mb-3">
                        <label for="telefone">telefone</label>
                            <input type="phone" class="form-control" name="telefone" >
                    </div>
                    <div class="mb-3">
                        <label for="documento">documento</label>
                            <input type="text" class="form-control" name="documento" >
                    </div>
                    <div class="mb-3">
                        <label for="dt_nascimento">Data de nascimento</label>
                            <input type="date" class="form-control" name="dt_nascimento" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sucess">
                    </div>
            </form>
            <a href="index.php" class="btn btn-info">inicio</a>
            </div>
        </div>
    </div>

    
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>