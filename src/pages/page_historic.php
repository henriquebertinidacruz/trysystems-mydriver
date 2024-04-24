<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Corridas</title>
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
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navbar-text">Histórico de Corridas</div>
        <button onclick="redirecionarParaOutraPagina()">&#8592;</button>
    </div>

    <div class="content">
        <div class="driver-list" id="driverList">
            <!-- A lista de motoristas será preenchida dinamicamente com JavaScript -->
        </div>
    </div>

    <script>
        // Dados fictícios para exemplificar
        var motoristas = [
            {
                nome: "João Silva",
                telefone: "(11) 98765-4321",
                historicoCorridas: [
                    { origem: "A", destino: "B", data: "2024-01-28", avaliacao: 4.8 },
                    { origem: "C", destino: "D", data: "2024-01-27", avaliacao: 4.5 },
                ]
            },
        ];

        function exibirMotoristas() {
            var driverList = document.getElementById("driverList");

            motoristas.forEach(function (motorista) {
                var driverItem = document.createElement("div");
                driverItem.className = "driver-item";

                var driverName = document.createElement("div");
                driverName.className = "driver-name";
                driverName.textContent = motorista.nome;

                var driverDetails = document.createElement("div");
                driverDetails.className = "driver-details";

                driverDetails.innerHTML = `
                    <p>Nome: ${motorista.nome}</p>
                    <p>Telefone: ${motorista.telefone}</p>
                    <p>Histórico de Corridas:</p>
                    <ul>
                        ${motorista.historicoCorridas.map(corrida => `<li>${corrida.origem} - ${corrida.destino} (${corrida.data}) - Avaliação: ${corrida.avaliacao}</li>`).join('')}
                    </ul>
                `;

                driverItem.appendChild(driverName);
                driverItem.appendChild(driverDetails);

                driverList.appendChild(driverItem);
            });
        }

        exibirMotoristas();

        function redirecionarParaOutraPagina() {
            window.location.href = 'page_admin.php';
        }
    </script>
</body>

</html>
