<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style type="text/css">
    body {
      margin: 20px;
    }
  </style>
  <title>Primeiro Projeto</title>
</head>

<body>
  <h1 class="text-center">
    Cadastro de Alunos
  </h1>
  <form action="insert.php" method="post" id="form_cadastro">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <label for="exampleInputText1" class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" id="exampleInputText">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <label for="exampleInputEmail" class="form-label"> Email </label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="col-md-1">

          <label class="form-check-label" for="flexRadioDefault2">Fem</label>
          <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="feminino">

        </div>
        <div class="col-md-1">
          <label class="form-check-label" for="flexRadioDefault2">Masc</label>
          <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2" value="masculino">
        </div>
        <div class="col-md-1">
          <label class="form-check-label" for="flexRadioDefault2">Outro</label>
          <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2" value="outro">

        </div>
      </div>
    </div>


    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <label for="exampleInputText1" class="form-label">Endereço</label>
          <input type="text" name="endereco" class="form-control" id="exampleInputText">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <label for="exampleInputText1" class="form-label">Número</label>
          <input type="text" name="num" class="form-control" id="exampleInputText">
        </div>
        <div class="col-md-5">
          <label for="exampleInputText1" class="form-label">Complemento</label>
          <input type="text" name="complemento" class="form-control" id="exampleInputText">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <label for="exampleInputText1" class="form-label">Bairro</label>
          <input type="text" name="bairro" class="form-control" id="exampleInputText">
        </div>
        <div class="col-md-5">
          <label for="exampleInputText1" class="form-label">Cidade</label>
          <input type="text" name="cidade" class="form-control" id="exampleInputText">
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
                <option value="musculaçao">Musculação</option>
                <option value="natação">Natação</option>
                <option value="pilates">Pilates</option>
                <option value="futebol">Futebol</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      </fieldset>


    <div class="container">
      <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
        <a href="dados.php" class="btn btn-primary">Ver dados</a>
      </div>
    </div>
  </form>

</body>

</html>