<!DOCTYPE html>
<html lang="pt_BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100" style="max-width: 900px;">

        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center p-4">
            <h1 style="color: #00ff88;"><strong>Painel de Controle</strong></h1>
            <p style="color: #00ff88;"><strong>Gerencie o seu negócio!</strong></p>
            <img src="images/visual-data-animate.svg" width="450" height="450" alt="Ilustração" />
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="card p-5 shadow w-100" style="max-width: 400px;">
                <p class="text-center mb-3" style="color: #fff;">
                    Usuário: <strong>admin</strong> | Senha: <strong>123456</strong>
                </p>
                <h1 class="text-center mb-3" style="color: #00ff88;"><strong>LOGIN</strong></h1>
                <?php if (isset($_GET['erro'])): ?>
                    <div class="alert alert-danger text-center">Usuário ou senha incorretos!</div>
                <?php endif; ?>
                <form action="logar.php" method="POST">
                    <div class="mb-3">
                        <label for="usuario" class="form-label"><strong>Usuário</strong></label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required />
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label"><strong>Senha</strong></label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn" style="background-color: #00ff88; color: #000;">Logar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

</body>
</html>
