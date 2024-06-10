<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/formsStyle.css">
    <link rel="shortcut icon" href="../assets/amagron-icon.svg" type="image/x-icon">
</head>
<body>
    
    <div class="background">
        <div class="container">
            <div class="left-container">
                <header class="header__singIn">
                    <div>
                        <a href="../index.php"><img src="../images/arrow-back-outline.svg" alt="arrow"></a>
                    </div>
                </header>
                <div class="login-box">
                    <div class="login-info">
                        <h1 class="login-title">LOGIN</h1>
                        <p class="">Nos conte quem é você</p>
                    </div>
                    <div class="login-cadastro">
                        <form action="func-login.php" method="post">

                            <div class="textfield">
                                <input required type="email" id="email" name="email" placeholder="" autocomplete="off">
                                <label for="email">Email</label>
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <div class="textfield">
                                <input required type="password" id="senha" name="senha" placeholder="" autocomplete="off">
                                <label for="senha">Senha</label>
                                <ion-icon name="lock-closed-outline" onclick="ViewPass()"></ion-icon>
                            </div>

                            <div class="textfield3">
                                <input type="submit" value="Entrar" class="submit_button">
                                <div>
                                    <span>Não tem conta?</span>
                                    <a href="signup.php">Cadastre-se</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="background_image">
            
            </div>
        </div>
    </div>

    <script src="../js/ViewPass.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>