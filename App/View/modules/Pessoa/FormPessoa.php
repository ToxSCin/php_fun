<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoa</title> <style>
    input{
        font-size: 40px;
        background-color:whitesmoke;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    label,button,legend{
        font-size: 40px;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    input,label {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    body{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <center>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/pessoa/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number" />
            <br>
            <label for="data_nascimento">Data Nascimento:</label>
            <input id="data_nascimento" value="<?= $model->data_nascimento ?>" name="data_nascimento" type="date" />
            <br>
            <label for="rg">RG:</label>
            <input id="rg" name="rg" value="<?= $model->rg ?>" type="number" />
            <br>
            <label for="email">Email:</label>
            <input id="email" name="email" value="<?= $model->email ?>" type="email" />
            <br>
            <label for="telefone">Telefone:</label>
            <input id="telefone" name="telefone" value="<?= $model->telefone ?>" type="number" />
            <br>

            <br>
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    </center>
</body>
</html>