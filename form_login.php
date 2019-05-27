<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
<link rel="stylesheet" type="text/css" href="css/estilo.php" />
</head>
<body>
    <fieldset>
        <legend>Login:</legend>
        
        <?php if(isset($_GET['erro'])): ?>
            <p>Usuário/senha incorretos</p>
        <?php endif ?>

        <form method="post" action="autenticar.php">
            <label>
                Usuário:
                <input name="usuario" type="text" />
            </label>
            <label>
                Senha:
                <input name="senha" type="password" />
            </label>
            <button type="submit">
                Logar
            </button>
        </form>
    </fieldset>
</body>
</html>