<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionario</title> <style>
    th{
        font-size: 40px;
        background-color:whitesmoke;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    td{
        font-size: 40px;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    th,td {
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
        
     


    <table>
        <tr>
            <th>DELETE&nbsp&nbsp&nbsp</th>
            <th>Id &nbsp&nbsp&nbsp</th>
            <th>Nome &nbsp&nbsp&nbsp</th>
            <th>Salario &nbsp&nbsp&nbsp</th>
            <th>Cargo </th>
            
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/funcionario/delete?id=<?= $item->id ?>">X&nbsp&nbsp</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/funcionario/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->salario ?></td>
            
            <td><?= $item->cargo ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>


        </center>
</body>
</html>