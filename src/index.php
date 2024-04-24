<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logoImagem.png">

</head>

<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
            .then(function(registration) {
                console.log('Service Worker registrado com sucesso:', registration);
            })
            .catch(function(error) {
                console.log('Erro ao registrar o Service Worker:', error);
            });
    }
</script>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        font-family: 'Noto Sans', sans-serif;
        background-color: #ffffff;
    }

    body * {
        box-sizing: border-box;
    }

    .main-login {
        width: 100vw;
        height: 100vh;
        background: #064F24;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left-login {
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .left-login h1 {
        color: #77ffc0;
        font-size: 3vw;
    }

    .left-login-img {
        width: 35vw;
    }

    .right-login {
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-login {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px 35px;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 10px 40px #00000056;
    }

    .card-login h1 {
        color: #064F24;
        font-weight: 800;
        margin: 0;
    }

    .textfield {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin: 10px 0px;
    }

    .textfield input {
        width: 100%;
        border: none;
        border-radius: 10px;
        padding: 15px;
        background: #ffffff;
        color: #064F24;
        font-size: 12pt;
        box-shadow: 0px 10px 40px #00000056;
        outline: none;
        box-sizing: border-box;
    }

    .textfield label {
        color: #064F24;
        margin-bottom: 10px;
    }

    .textfield input::placeholder {
        color: #064F24;
    }

    .btn-login {
        width: 100%;
        padding: 16px 0px;
        margin: 25px;
        border: none;
        border-radius: 8px;
        outline: none;
        font-weight: 800;
        letter-spacing: 3px;
        color: white;
        background: #064F24;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00ff8052;
    }

    @media (max-width: 950px) {
        .card-login {
            width: 85%;
        }
    }

    @media (max-width: 600px) {
        .main-login {
            flex-direction: column;
        }

        .left-login h1 {
            display: none;
        }

        .left-login {
            width: 100%;
            height: auto;
        }

        .right-login {
            width: 100%;
            height: auto;
        }

        .left-login-img {
            width: 50vw;
        }

        .card-login {
            width: 90%;
        }
    }
</style>

<body>

    <div class="main-login">
        <div class="left-login">
            <h1>My Driver<br>Um sistema da Try Systems</h1>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite a sua senha">
                </div>
                <button class="btn-login" onclick="login()">LOGIN</button>
            </div>
        </div>
    </div>

    <script>
        function login() {
            var usuario = document.getElementById("usuario").value;
            var senha = document.getElementById("senha").value;

            if (usuario.toLowerCase() === "henrique" && senha === "admin") {
                window.location.href = "pages/page_admin.php";
            } else if (usuario.toLowerCase() === "motorista" && senha === "123") {
                window.location.href = "pages/page_driver.php";
            } else {
                alert("Credenciais inválidas. Tente novamente.");
            }
        }
    </script>

</body>

</html>