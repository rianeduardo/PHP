<?php
// Saudação no topo usando o nome gravado na sessão
$greeting = !empty($_SESSION['user']) ? 'Bem-vindo, ' . $_SESSION["user"] : 'Bem-vindo, visitante';
?>
<style>
    header {
        color: white;
        background-color: #111827;
        padding: 30px 50px;
        margin-bottom: 50px;
    }

    .containerHeader {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: space-between;
        align-items: center;
    }

    .containerHeader ul {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .containerHeader ul li a {
        color: white;
        text-decoration: none;
    }

    .containerHeader ul li:hover {
        transform: translateY(-3px);
    }

    .headerMeta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        align-items: center;
        color: #d1d5db;
    }

    .headerMeta span {
        font-size: 0.95rem;
    }

    .themeButton {
        display: inline-block;
        padding: 8px 14px;
        background: #2563eb;
        color: #ffffff;
        border-radius: 999px;
        text-decoration: none;
        transition: transform 0.2s;
    }

    .themeButton:hover {
        transform: translateY(-2px);
    }
</style>

<header>
    <div class="containerHeader">
        <div>
            <h1>XPTO | Plataforma da Empresa</h1>
            <div class="headerMeta">
                <span><?= $greeting ?></span>
                <span>|</span>
                <!-- Botões para trocar o tema claro ou escuro -->
                <?= getTema('light', 'Claro') ?>
                <?= getTema('dark', 'Escuro') ?>
            </div>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </div>
</header>