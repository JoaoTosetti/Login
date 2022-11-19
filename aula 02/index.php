<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <form action="validar.php" method="post">
            <div class="row">
                <div class="col bg-primary">
                    Usuário: <input name="usuario">
                </div>
                <div class="col bg-success">
                    Senha: <input type ="password" name="senha">
                </div>
            </div>
            <button type="submit">Entrar</button>
            <button type="reset">Limpar</button>
        </form>
        <footer>
            <p>Todos os direitos reservados &copy;<?php echo date ("y");?></p>
        </footer>
    </main>
</body>
</html>