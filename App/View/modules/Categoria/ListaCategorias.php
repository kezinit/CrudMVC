<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1>Lista de Categorias</h1>
        <table class="bordered striped centered highlight responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <!-- Para cada objeto do tipo ITEM que está no parâmetro rows do model, vai fazer isso: -->
            <?php foreach ($model->rows as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td><!-- Coloca uma nova célula na tabela com o valor do ID -->
                    <td><?= $item['nome'] ?></td><!-- Coloca uma nova célula na tabela com o valor do nome -->
                    <td>
                        <a href="/categoria/form?id=<?= $item['id'] ?>" class="waves-effect waves-light btn"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/categoria/excluir?id=<?= $item['id'] ?>" class="waves-effect waves-light btn"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>