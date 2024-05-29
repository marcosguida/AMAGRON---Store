<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="left-container">
                
            </div>

            <div class="right-container">
                <div class="cadastro-box">
                    <div class="cadastro-info">
                        <h1 class="cadastro-title">Cadastro</h1>
                        <p class="">Faça seu cadastro para aproveitar o melhor do nosso site</p>
                    </div>
                    <div class="login-cadastro">
                        <form action="func-cadastro.php" method="post">

                            <div class="textfield">
                                <input required type="text" id="usuario" name="usuario" placeholder="">
                                <label for="usuario">Usuário</label>
                            </div>

                            <div class="textfield">
                                <input required type="email" id="email" name="email" placeholder="">
                                <label for="email">Email</label>
                            </div>

                            <div class="textfield">
                                <input required type="password" id="senha" name="senha" placeholder="">
                                <label for="senha">Senha</label>
                            </div>

                            <div class="textfield3">
                                <input type="submit" value="Cadastrar">
                                <div>
                                    Já tem conta?
                                    <a href="signin.php">Entrar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>