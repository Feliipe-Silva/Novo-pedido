<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Meus Pedidos</h1>
    <form action="salvar.php" method="post">
        <label for="">Data: </label> <input type="datetime-local" name="data" id="data">
        <label for="Cliente">Cliente: </label> <input type="text" name="nome" id="nome">
        <label for="Produto">Produto: </label> <input type="text" name="produto" id="produto">
        <label for="">Valor: </label> <input type="number" name="valor" id="valor">
        <input type="submit" value="Enviar">
    </form>
    <hr>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Clinte</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Açôes</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">13/12/2023</td>
                    <td>José</td>
                    <td>Mesa</td>
                    <td>R$: 43,00</td>
                    
                    <td><a
                        name="editar"
                        id="editar"
                        class="btn btn-warning"
                        href="#"
                        role="button"
                        >Editar</a>

                    <a
                        name="excluir"
                        id="excluir"
                        class="btn btn-danger"
                        href="#"
                        role="button"
                        >Excluir</a>
                    
                    </td>
            </tbody>
        </table>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>