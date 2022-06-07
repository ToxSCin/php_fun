<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionario</title> <style>
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
        <legend>Cadastro de Funcionario</legend>

        
    
        <form method="post" action="/funcionario/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="salario">Salario:</label>
            <input id="salario" name="salario" class  value="<?= $model->salario ?>" type="number" />
            <br>
            <label for="cargo">Cargo:</label>
            <input id="cargo" name="cargo" value="<?= $model->cargo ?>" type="text" />
            <br>

            
            
            <button type="submit">Salvar</button>

            </table>
          


        </form>
    </fieldset>
            <br>
            <form method="post" action="/produto/form">
            <button type="submit">Deseja Fazer Produto?</button>   
            </center> 
</body>
</html>