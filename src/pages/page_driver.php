<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Motorista</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../images/logoImagem.png">

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
            background-color: #065A2D;
            border-radius: 5px;
        }

        .navbar {
            background-color: #064F24 !important;
        }

        .content {
            margin-top: 20px;
            padding: 20px;
        }

        .driver-container {
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
    </style>

    <script>
        function toggleOptions() {
            var options = document.getElementById('navOptions');
            options.classList.toggle('show');
        }
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/index.php">MyDriver</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleOptions()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" id="navOptions">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('profile')">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_historic.php" onclick="showContent('history')">Histórico de Corridas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openModal()">Registrar nova corrida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openAbastecimentoModal()">Abastecimento de veículo</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content">
        <div class="admin-container">
            <h1>Bem-vindo ao painel do motorista do MyDriver</h1>
            <p>Aqui você pode visualizar as suas corridas e registrar novas.</p>
        </div>
    </div>

    <div class="content">
        <div id="image-container">
            <img src="../images/trysystemslogo-sembg.png" alt="Imagem" class="img-fluid" style="max-width: 100%;">
        </div>
    </div>

    <div class="modal fade" id="novaCorridaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Corrida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="novaCorridaForm">
                        <div class="form-group">
                            <label for="destino">Cliente:</label>
                            <input type="text" class="form-control" id="destino" name="destino" required>
                        </div>

                        <div class="form-group">
                            <label for="destino">Origem:</label>
                            <input type="text" class="form-control" id="destino" name="destino" required>
                        </div>

                        <div class="form-group">
                            <label for="destino">Destino:</label>
                            <input type="text" class="form-control" id="destino" name="destino" required>
                        </div>

                        <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="number" class="form-control" id="valor" name="valor" required>
                        </div>

                        <button type="button" class="btn btn-success" onclick="confirmNovaCorrida()">Confirmar Corrida</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="abastecimentoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Abastecimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="abastecimentoForm">
                        <div class="form-group">
                            <label for="odometro">Odômetro Atual:</label>
                            <input type="number" class="form-control" id="odometro" name="odometro" required>
                        </div>

                        <div class="form-group">
                            <label for="tipoCombustivel">Tipo de Combustível:</label>
                            <input type="text" class="form-control" id="tipoCombustivel" name="tipoCombustivel" required>
                        </div>

                        <div class="form-group">
                            <label for="quantidadeCombustivel">Quantidade de Combustível (litros):</label>
                            <input type="number" class="form-control" id="quantidadeCombustivel" name="quantidadeCombustivel" required>
                        </div>

                        <div class="form-group">
                            <label for="precoCombustivel">Preço do Combustível (por litro):</label>
                            <input type="number" class="form-control" id="precoCombustivel" name="precoCombustivel" required>
                        </div>

                        <div class="form-group">
                            <label for="precoTotal">Preço Total:</label>
                            <input type="text" class="form-control" id="precoTotal" name="precoTotal" readonly>
                        </div>

                        <div class="form-group">
                            <label for="numeroCupom">Número do Cupom Fiscal:</label>
                            <input type="text" class="form-control" id="numeroCupom" name="numeroCupom" required>
                        </div>

                        <div class="form-group">
                            <label for="localAbastecimento">Local do Abastecimento:</label>
                            <input type="text" class="form-control" id="localAbastecimento" name="localAbastecimento" required>
                        </div>

                        <div class="form-group">
                            <label for="meioPagamento">Meio de Pagamento:</label>A
                            <select class="form-control" id="meioPagamento" name="meioPagamento" required>
                                <option value="dinheiro">Dinheiro</option>
                                <option value="cartao_credito">Cartão de Crédito</option>
                                <option value="cartao_debito">Cartão de Débito</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notasAdicionais">Notas Adicionais:</label>
                            <textarea class="form-control" id="notasAdicionais" name="notasAdicionais" rows="3"></textarea>
                        </div>

                        <button type="button" class="btn btn-success" onclick="confirmAbastecimento()">Registrar Abastecimento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calcularPrecoTotal() {
            var precoPorLitro = parseFloat(document.getElementById('precoCombustivel').value) || 0;
            var quantidadeCombustivel = parseFloat(document.getElementById('quantidadeCombustivel').value) || 0;

            var precoTotal = precoPorLitro * quantidadeCombustivel;

            document.getElementById('precoTotal').value = precoTotal.toFixed(2);
        }

        document.getElementById('precoCombustivel').addEventListener('change', calcularPrecoTotal);
        document.getElementById('quantidadeCombustivel').addEventListener('change', calcularPrecoTotal);
    </script>

    <script>
        function openAbastecimentoModal() {
            $('#abastecimentoModal').modal('show');
        }

        function closeAbastecimentoModal() {
            $('#abastecimentoModal').modal('hide');
        }

        function confirmAbastecimento() {
            closeAbastecimentoModal();
            alert('Abastecimento registrado com sucesso!');
        }
    </script>

    <script>
        var driverData = {
            name: "Henrique",
            carPlate: "ABC-1234",
            phone: "(123) 456-7890"
        };

        document.getElementById('driverName').innerText = driverData.name;
        document.getElementById('carPlate').innerText = driverData.carPlate;
        document.getElementById('driverPhone').innerText = driverData.phone;

        function showContent(contentId) {
            var contents = document.querySelectorAll('.driver-container');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            var selectedContent = document.getElementById(contentId);
            selectedContent.style.display = 'block';
        }

        function openModal() {
            $('#novaCorridaModal').modal('show');
        }

        function closeModal() {
            $('#novaCorridaModal').modal('hide');
        }

        function confirmNovaCorrida() {
            closeModal();
            alert('Nova corrida confirmada com sucesso!');
        }
    </script>
</body>

</html>