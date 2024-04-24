<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Motoristas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/logoImagem.png">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .navbar {
            background-color: #064F24;
            color: white;
            text-align: left;
            align-items: left;
            padding: 20px;
            font-size: 24px;
            display: flex;
            align-items: center;
            /* Alinhamento vertical */
        }

        .navbar button {
            background: none;
            border: none;
            font-size: 30px;
            color: white;
            cursor: pointer;
            vertical-align: middle;
            margin-right: 10px;
        }

        .navbar-text {
            margin-right: 10px;
            /* Reduzi a margem à direita */
        }

        .content {
            margin-top: 50px;
            padding: 20px;
        }

        .driver-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .driver-item {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 15px;
        }

        .driver-item:hover {
            transform: scale(1.05);
        }

        .driver-profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .driver-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .driver-details {
            font-size: 14px;
            color: #555;
            text-align: center;
        }

        .back-btn {
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
            cursor: pointer;
        }

        .back-btn:hover {
            background-color: #053A1E;
        }

        .button-cadastro-motorista {
            text-align: center;
            margin-top: 20px;
        }

        .btn-cadastro-motorista {
            background-color: #053A1E;
            color: #fff;
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-cadastro-motorista:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navbar-text">Lista de Motoristas</div>
        <button onclick="redirecionarParaOutraPagina()">&#8592;</button>
    </div>

    <div class="button-cadastro-motorista">
        <button class="btn btn-cadastro-motorista" data-toggle="modal" data-target="#cadastroMotoristaModal">Cadastrar Motorista</button>
    </div>
    <div class="button-cadastro-motorista">
        <button class="btn btn-cadastro-motorista" data-toggle="modal" data-target="#cadastroMotoristaModal">Editar Motorista</button>
    </div>

    <div class="content">
        <div class="driver-list">
            <div class="driver-item">
                <img class="driver-profile-pic" src="https://via.placeholder.com/100" alt="Foto de Perfil">
                <div class="driver-name">João Silva</div>
                <div class="driver-details">
                    <p>Nome: João Silva</p>
                    <p>Telefone: (11) 98765-4321</p>
                    <p>Email: joao.silva@example.com</p>
                    <p>Carro: Toyota Corolla</p>
                    <p>Placa do Carro: ABC-1234</p>
                    <p>Tipo de Habilitação: B</p>
                    <p>Idade: 35 anos</p>
                    <p>Experiência como motorista: 8 anos</p>
                    <p>Tipo de veículo preferido: SUV</p>
                    <p>Área de atuação: São Paulo, Brasil</p>
                    <p>Avaliação média dos passageiros: 4.9/5.0</p>
                    <p>Número de viagens completadas: 1500</p>
                    <p>Horário de trabalho preferido: Tarde e noite</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastroMotoristaModal" tabindex="-1" role="dialog" aria-labelledby="cadastroMotoristaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroMotoristaModalLabel">Cadastrar Motorista</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nomeMotorista">Nome do Motorista</label>
                            <input type="text" class="form-control" id="nomeMotorista" placeholder="Digite o nome do motorista">
                        </div>
                        <div class="form-group">
                            <label for="telefoneMotorista">Telefone</label>
                            <input type="tel" class="form-control" id="telefoneMotorista" placeholder="Digite o telefone do motorista">
                        </div>

                        <button type="button" class="btn btn-primary" onclick="cadastrarMotorista()">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function redirecionarParaOutraPagina() {
            window.location.href = 'page_admin.php';
        }

        function cadastrarMotorista() {
            alert("Aqui você pode adicionar lógica para processar o cadastro do motorista.");
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>