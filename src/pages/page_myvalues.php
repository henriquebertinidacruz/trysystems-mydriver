<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Valores da Empresa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/logoImagem.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            margin-top: 20px;
            padding: 20px;
        }

        .chart-container {
            position: relative;
            width: 80vw;
            max-width: 800px;
            margin: 20px auto;
        }

        .filter-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .filter-container select {
            padding: 10px;
            font-size: 16px;
        }

        .filter-container button {
            background-color: #064F24;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .filter-container button:hover {
            background-color: #053A1E;
        }

        .historico-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .historico-table th,
        .historico-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .historico-table th {
            background-color: #064F24;
            color: white;
        }

        .fechar-mes-btn {
            background-color: #064F24;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            width: 70%;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        .fechar-mes-btn:hover {
            background-color: #053A1E;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navbar-text">Visualizar Valores da Empresa</div>
        <button onclick="redirecionarParaOutraPagina()">&#8592;</button>
    </div>

    <div class="content">
        <div class="filter-container">
            <select id="periodoFiltro">
                <option value="diario">Diário</option>
                <option value="semanal">Semanal</option>
                <option value="mensal">Mensal</option>
                <option value="semestral">Semestral</option>
            </select>
            <button onclick="atualizarGrafico()">Atualizar</button>
        </div>

        <div class="chart-container">
            <canvas id="ganhosESaidasChart"></canvas>
        </div>

        <table class="historico-table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Transação</th>
                    <th>Placa do Carro</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
                <tr>
                    <td>Entrada</td>
                    <td>Viagem</td>
                    <td>ABC-1234</td>
                    <td>R$20.00</td>
                </tr>
                <tr>
                    <td>Saída</td>
                    <td>Abastecimento</td>
                    <td>ABC-1234</td>
                    <td>R$40.00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <button class="fechar-mes-btn">Fechar Mês</button>


    <script>
        var ganhosDataDiario = [100, 150, 200, 250, 300];
        var saidasDataDiario = [50, 70, 100, 120, 150];

        var ganhosDataSemanal = [700, 800, 750, 900, 950];
        var saidasDataSemanal = [300, 200, 250, 180, 220];

        var ganhosDataMensal = [3000, 3500, 3200, 3800, 4000];
        var saidasDataMensal = [1200, 1000, 1100, 900, 1300];

        var ganhosDataSemestral = [18000, 20000, 19500, 21000, 22000];
        var saidasDataSemestral = [8000, 8500, 8300, 9000, 8200];

        var periodoSelecionado = 'diario';

        var ctx = document.getElementById('ganhosESaidasChart').getContext('2d');
        var ganhosESaidasChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5'],
                datasets: [{
                    label: 'Ganhos',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: ganhosDataDiario
                }, {
                    label: 'Saídas',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    data: saidasDataDiario
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function redirecionarParaOutraPagina() {
            window.location.href = 'page_admin.php';
        }

        function atualizarGrafico() {
            periodoSelecionado = document.getElementById('periodoFiltro').value;
            atualizarDadosGrafico();
        }

        function atualizarDadosGrafico() {
            var dadosGanhos, dadosSaidas;

            switch (periodoSelecionado) {
                case 'diario':
                    dadosGanhos = ganhosDataDiario;
                    dadosSaidas = saidasDataDiario;
                    break;
                case 'semanal':
                    dadosGanhos = ganhosDataSemanal;
                    dadosSaidas = saidasDataSemanal;
                    break;
                case 'mensal':
                    dadosGanhos = ganhosDataMensal;
                    dadosSaidas = saidasDataMensal;
                    break;
                case 'semestral':
                    dadosGanhos = ganhosDataSemestral;
                    dadosSaidas = saidasDataSemestral;
                    break;
                default:
                    dadosGanhos = [];
                    dadosSaidas = [];
            }

            ganhosESaidasChart.data.datasets[0].data = dadosGanhos;
            ganhosESaidasChart.data.datasets[1].data = dadosSaidas;

            ganhosESaidasChart.update();
        }
    </script>
</body>

</html>