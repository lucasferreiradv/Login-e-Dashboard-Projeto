
<?php
session_start();

$usuario_correto = 'admin';
$senha_correta = '123456';

$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $_SESSION['usuario'] = $usuario;
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: index.php?erro=1');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>
