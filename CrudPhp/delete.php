<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Primeiro Projeto</title>
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php
    $resultadoSelect = 0;
    $resultadoDelete;
    //dados de conexao
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_escola";

    //Conectar ao banco de dados
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $e) {
        die("Erro ao conectar:" . $e->getMessage());
    }

    if (isset($_GET['id'])) {
        //Criar o comando
        $sql = "SELECT * FROM aluno WHERE id= {$_GET['id']}";

        //executar o comando
        $resultadoSelect = $conn->query($sql);
    } else if (isset($_POST['submit'])) {
        //var_dump($_POST);
        $id = $_POST['id'];
        

        //Criar o comando

        $sql = "DELETE FROM aluno WHERE `id` = '$id'";

       // echo $sql;

        $resultadoDelete = $conn->query($sql);
    }



    ?>
    <div class="container">
        <h1 class="text-center"> Cadastro de Aluno</h1>
        <?php if ($resultadoSelect) : ?>
            <?php foreach ($resultadoSelect as $r) : ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">


                    <div class="row">

                        <div class="col-md-4">
                            <label for="exampleInputText1" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" id="exampleInputText1" value="<?= $r['id'] ?>" disabled>
                            <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        </div>

                    </div>
                    <div class= "container">
            <div class="row">
        <div class="col-md-12">
            <label for="exampleInputText1" class="form-label">Nome</label>
            <input type="text" name = "nome" class="form-control" id="exampleInputText"  value = "<?= $r['nome']?>">
        </div>
            </div>
        </div>
        <div class= "container">
          <div class="row">
        <div class="col-md-9">
            <label for ="exampleInputEmail" class="form-label"> Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value = "<?= $r['email']?>">
            <div id="emailHelp" class="form-text"> Digite aqui </div>
            </div>
     
            <div class="col-md-1">
             
              <label class="form-check-label" for="flexRadioDefault2">
                Fem
               </label>
               <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1"  value = "<?= $r['sexo']?>">
              
            </div>
            <div class="col-md-1">
              <label class="form-check-label" for="flexRadioDefault2">
                Masc
               </label>
               <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2"  value = "<?= $r['sexo']?>">
              </div>
            <div class="col-md-1">
              <label class="form-check-label" for="flexRadioDefault2">
                Outro
               </label>  
               <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2"  value = "<?= $r['sexo']?>">
              
            </div>
          </div>
        </div>
        
            
        </div>
        
        <div class= "container">
          <div class="row">
      <div class="col-md-12">
          <label for="exampleInputText1" class="form-label">Endereço</label>
          <input type="text" name = "endereco" class="form-control" id="exampleInputText"  value = "<?= $r['endereco']?>">
      </div>
          </div>
      </div>
      <div class= "container">
        <div class="row">
    <div class="col-md-7">
        <label for="exampleInputText1" class="form-label">Número</label>
        <input type="text" name = "num" class="form-control" id="exampleInputText"  value = "<?= $r['num']?>">
    </div>
    <div class="col-md-5">
      <label for="exampleInputText1" class="form-label">Complemento</label>
      <input type="text" name = "complemento" class="form-control" id="exampleInputText"  value = "<?= $r['complemento']?>">
  </div>
        </div>
    </div>
    <div class= "container">
      <div class="row">
  <div class="col-md-7">
      <label for="exampleInputText1" class="form-label">Bairro</label>
      <input type="text" name = "bairro" class="form-control" id="exampleInputText"  value = "<?= $r['bairro']?>">
  </div>
  <div class="col-md-5">
    <label for="exampleInputText1" class="form-label">Cidade</label>
    <input type="text" name = "cidade" class="form-control" id="exampleInputText"  value = "<?= $r['cidade']?>">
</div>
      </div>
  </div>

  <fieldset>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
          <div class="mb-3">
              <label class="form-label">Uf</label>
              <select class="form-select" aria-label="Default select example" name="uf" >
                <option selected></option>
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="ap">Amapá</option>
                <option value="am">Amazonas</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="df">Distrito Federal*</option>
                <option value="es">Espirito Santo</option>
                <option value="go">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="mt">Mato Grosso</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piaui</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value="to">Tocantins</option>
              </select>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-3">
              <label class="form-label">Modalidade </label>
              <select class="form-select" aria-label="Default select example" name="modalidade">
                <option selected></option>
                <option value="musculação">Musculação</option>
                <option value="natação">Natação</option>
                <option value="pilates">Pilates</option>
                <option value="futebol">Futebol</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      </fieldset>
      <div class= "container">
  <div class="mb-3">
           
            <button type="submit" name="submit" class="btn btn-primary">Deletar </button>
          
        <a href="dados.php" class="btn btn-primary">Ver dados</a>
        </div>
    </div>
    
                    </div>
                    

    </div>

    </form>
<?php endforeach; ?>
<?php elseif (isset($resultadoDelete)) : ?>
    <?php if ($resultadoDelete) : ?>
        <a href="index.php" class="btn btn-success">Inicio</a>
        <div class="alert alert-success" role="alert">
            Deletado com Sucesso!
        </div>
        <a href="dados.php" class="btn btn-primary">Ver dados</a>
    <?php else : ?>
        <div class="alert alert-error" role="alert">
            Erro ao deletar!
        </div>
    <?php endif; ?>
<?php endif; ?>
</body>

</html>