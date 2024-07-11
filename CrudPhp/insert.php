<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>insert</title>
</head>

<body>
    <?php
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

    //recebendo variaveis do formulario
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $num = $_POST['num'];
        $sexo = $_POST['sexo'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $modalidade = $_POST['modalidade'];

    if (empty($nome) || empty($email)|| empty($sexo)
    || empty($endereco)|| empty($num) || empty($complemento)
    ||empty($bairro)|| empty($cidade)|| empty($uf)|| empty($modalidade)) :
    ?>
    
        <div class="alert alert-warning" role="alert">
            Dados nao podem ficar vazios!
        </div>
    <?php
    else :


        //Criar o comando
        $sql = "INSERT INTO aluno VALUES(NULL, '$nome', '$email','$sexo', '$endereco','$num', '$complemento', '$bairro', '$cidade', '$uf', '$modalidade')";

        //executar o comando
        $resultado = $conn->query($sql);

    ?>
        <?php if ($resultado) : ?>
            <div class="alert alert-success" role="alert">
                Dado inserido com sucesso!
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Erro ao inserir o dado!
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="mb-3">
            <a href="index.php" class="btn btn-primary">Ínicio </a>
            <a href="dados.php" class="btn btn-primary">Ver dados</a>
        </div>
    </div>
</body>

</html>