<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="left-container">
                <div class="login-box">
                    <div class="login-info">
                        <h1 class="login-title">LOGIN</h1>
                        <p class="">Nos conte quem é você</p>
                    </div>
                    <div class="login-cadastro">
                        <form action="func-login.php" method="post">

                            <div class="textfield">
                                <input required type="email" id="email" name="email" placeholder="">
                                <label for="email">Email</label>
                            </div>

                            <div class="textfield">
                                <input required type="password" id="senha" name="senha" placeholder="">
                                <label for="senha">Senha</label>
                            </div>

                            <div class="textfield3">
                                <input type="submit" value="Entrar">
                                <div>
                                    Não tem conta?
                                    <a href="signup.php">Cadastre-se</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="right-container">
            
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>