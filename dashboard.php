<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard com Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <link rel="website fav icon" href="images/logolmpo.png" type="png">
</head>
<body>

<div class="d-flex vh-100">
    <nav class="d-flex flex-column bg-dark p-3 shadow-lg" style="width: 250px;">
        <div class="logo text-center mb-4">
            <a href="#"><img src="images/logolmpo.png" alt="Logo" class="img-fluid" style="max-width: 150px;"></a>
        </div>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-home me-2"></i> Home
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-calendar me-2"></i> Agenda
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-flag me-2"></i> Emitente
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-user me-2"></i> Usuários
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-box me-2"></i> Produtos
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-cart-shopping me-2"></i> Vendas
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-warehouse me-2"></i> Estoque
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-dollar-sign me-2"></i> Finanças
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center mb-1 hover-bg-secondary">
            <i class="fa-solid fa-concierge-bell me-2"></i> Serviços
        </a>
        <a href="#" class="text-white text-decoration-none py-2 px-3 rounded d-flex align-items-center">
            <i class="fa-solid fa-server me-2"></i> Utilitários
        </a>
    </nav>

    <main class="flex-grow-1 p-4 d-flex flex-column">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0 shadow rounded-4">Bem-vindo ao Dashboard</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search" />
                <button class="btn btn-outline-light" type="submit">
                    <i class="fa-solid fa-search"></i>
                </button>
            </form>
        </header>
        <div class="container-fluid">
    <div class="row g-4">
        
         <!--Layout das Vendas de Hoje, Ontem e Total de Vendas -->
             
        <div class="col-md-4">
            <div class="card mb-4 shadow rounded-4 border-0 bg-success">
                <div class="card-body d-flex justify-content-between align-items-center p-4">
                    <div>
                        <h6 class="text-white text-uppercase mb-2 fw-semibold">Vendas Hoje</h6>
                        <h2 class="text-white fw-bold mb-3">R$ 1.021,25</h2>
                        <p class="text-white mb-0">Ticket Médio <strong>R$ 255,31</strong> - Ref: 4 venda(s)</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-white bg-opacity-25 rounded-circle shadow-lg" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-cart-shopping text-white fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow rounded-4 border-0 bg-warning">
                <div class="card-body d-flex justify-content-between align-items-center p-4">
                    <div>
                        <h6 class="text-white text-uppercase mb-2 fw-semibold">Vendas Ontem</h6>
                        <h2 class="text-white fw-bold mb-3">R$ 950,00</h2>
                        <p class="text-white mb-0">Ticket Médio <strong>R$ 237,50</strong> - Ref: 4 venda(s)</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-white bg-opacity-25 rounded-circle shadow" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-chart-line text-white fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow rounded-4 border-0 bg-primary">
                <div class="card-body d-flex justify-content-between align-items-center p-4">
                    <div>
                        <h6 class="text-white text-uppercase mb-2 fw-semibold">Total do Mês</h6>
                        <h2 class="text-white fw-bold mb-3">R$ 12.340,00</h2>
                        <p class="text-white mb-0">Ticket Médio <strong>R$ 308,50</strong> - Ref: 40 venda(s)</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-white bg-opacity-25 rounded-circle shadow" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-wallet text-white fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Gráfico -->
        <div class="col-md-8">
            <div class="card shadow rounded-4 border-0">
                <div class="card-body">
                    <h5 class="card-title">Vendas da Semana</h5>
                    <canvas id="vendasChart" height="150"></canvas>
                </div>
            </div>
        </div>

        <!-- Lista de Clientes -->
        <div class="col-md-4">
            <div class="card shadow rounded-4 border-0">
                <div class="card-body">
                    <h5 class="card-title">Clientes Recentes</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">João Silva</li>
                        <li class="list-group-item bg-dark text-white">Maria Oliveira</li>
                        <li class="list-group-item bg-dark text-white">Carlos Souza</li>
                        <li class="list-group-item bg-dark text-white">Ana Paula</li>
                        <li class="list-group-item bg-dark text-white">Fernanda Lima</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    /* Sistema de gráfico feito em Chart.js */ 

    const ctx = document.getElementById('vendasChart').getContext('2d');
    const vendasChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            datasets: [{
                label: 'Vendas',
                data: [1200, 950, 1340, 1020, 1500, 1230, 980],
                backgroundColor: 'rgba(40, 167, 69, 0.8)', 
                borderRadius: 10
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { color: '#fff' },
                    grid: { color: 'rgba(255, 255, 255, 0.1)' }
                },
                x: {
                    ticks: { color: '#fff' },
                    grid: { color: 'rgba(255, 255, 255, 0.1)' }
                }
            },
            plugins: {
                legend: {
                    labels: { color: '#fff' }
                }
            }
        }
    });
</script>

<style>
    .hover-bg-secondary:hover {
        background-color: #495057 !important;
    }
</style>

</body>
</html>
