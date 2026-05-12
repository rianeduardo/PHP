<?php
// Inicia a sessão se ainda não começou
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Lista de temas válidos e tema padrão
$temas = ['light', 'dark'];
$temaDefault = 'light';
$temaAtual = $temaDefault;

// Se o usuário trocar o tema pela URL, grava no cookie
if (isset($_GET['tema']) && in_array($_GET['tema'], $temas, true)) {
    $temaAtual = $_GET['tema'];
    setcookie('tema', $temaAtual, time() + 3600, '/');
} elseif (isset($_COOKIE['tema']) && in_array($_COOKIE['tema'], $temas, true)) {
    // Se não tiver parâmetro, usa o tema salvo no cookie
    $temaAtual = $_COOKIE['tema'];
}

// Define o arquivo CSS do tema atual
$themeCss = $temaAtual === 'dark' ? 'escuro.css' : 'claro.css';

// Se o formulário for enviado, salva nome e o cargo na sessão
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $cargo = $_POST['cargo'] ?? '';

    if ($user !== '') {
        $_SESSION['user'] = $user;
    }
    if ($cargo !== '') {
        $_SESSION['cargo'] = $cargo;
    }
}

// Gera um botão pra trocar o tema com o parâmetro correto ?tema=
function getTema(string $tema, string $label): string
{
    return '<a class="themeButton" href="?tema=' . $tema . '">' . $label . '</a>';
}
?>