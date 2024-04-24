<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../images/logoImagem.png">

    <link href="path/to/bootstrap.min.css" rel="stylesheet">
    <script src="path/to/jquery.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #064F24;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .nav-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .nav-options a {
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: 18px;
        }

        .nav-options a:hover {
            background-color: #064F24;
            border-radius: 5px;
        }

        .navbar-brand {
            background-color: #064F24;
        }

        .content {
            margin-top: 20px;
            padding: 20px;
        }

        .admin-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        #novaCorridaModal {
            text-align: left;
        }

        @media screen and (max-width: 600px) {
            .header {
                font-size: 20px;
            }

            .nav-options {
                flex-direction: column;
            }

            .nav-options a {
                margin-bottom: 10px;
            }
        }

        .navbar {
            background-color: #064F24 !important;
        }


        .navbar {
            background-color: #064F24 !important;
        }


        .btn-custom {
            background-color: #064F24;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 5px;
            margin-top: 20px;
            display: block;
            width: 70%;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-custom:hover {
            background-color: #053A1E;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            width: 80%;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #motoristasModal .modal-dialog {
            max-width: 80%;
        }

        .motorista-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/index.php">MyDriver</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleAdminOptions()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNavbar" id="adminNavOptions">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('adminProfile')">Perfil do Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('userManagement')">Gerenciamento de Motoristas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openAdminModal()">Relatórios Gerenciais</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content">
        <div class="admin-container">
            <h1>Bem-vindo ao painel de administrador do MyDriver</h1>
            <p>Aqui você pode visualizar os seus relatórios e motoristas</p>
        </div>
    </div>

    <button class="btn btn-custom" onclick="openAdminModal()">Relatórios</button>
    <button class="btn btn-custom" onclick="redirecionarParaOutraPagina()">Motoristas</button>
    <button class="btn btn-custom" onclick="redirecionaMyValues()">Meus Valores</button>

    <script>
        
        function openAdminModalValues() {
            $('#relatorioModal').modal('show');
        }

        function closeAdminModalValues() {
            $('#relatorioModal').modal('hide');
        }

        function exportarRelatorios() {
            console.log('Relatórios exportados');
        }

        function fecharMes() {
            console.log('Mês fechado');
        }

        function redirecionaMyValues(){
            window.location.href = 'page_myvalues.php';
        }

        function redirecionarParaOutraPagina() {
            window.location.href = 'page_drivers.php';
        }
    </script>

</body>

</html>