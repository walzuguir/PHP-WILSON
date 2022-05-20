<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="img/senac-logo-4.png" />
    <link rel="stylesheet" type="text/css" href="css/cusuario.css">
    <title>Cadastro do usúario</title>
</head>
<body>
<div class="box">
        <form action="">
            <fieldset>
                <legend><b>Cadastro do Usuario</b></legend>
                <br><br><br><br><br>
                <div class="inputBoxCpf">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Matrícula</label>
                </div>
                <br><br>
                <div class="inputBoxEmail">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBoxNome">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Nome</label>
                </div>
                <div class="inputBoxSenha">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Senha</label>
                </div>
                <div class="inputBoxConfirme">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Nível</label>
                </div>
                <button>Enviar</button>

                <a href="principal.php">
                <input class="botao1" type="button" value="Voltar">
                </a>
</fieldset>
</form>
</div>
</body>
</html>