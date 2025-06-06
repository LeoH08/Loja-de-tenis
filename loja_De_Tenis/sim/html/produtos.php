<?php
function get_that_filetime($file_url = false)
{
    if (!file_exists($file_url)) {
        return '';
    }

    return filemtime($file_url);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja de Tênis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/hf.css <?php echo get_that_filetime('./style.css'); ?>" />
    <link rel="stylesheet" href="../css/produto.css <?php echo get_that_filetime('../css/produtos.css'); ?>" />
    <script type="module" src="../js/app.js"></script> <!-- Ensure this script is correctly loaded -->
</head>

<body style="background-color: #23272f;">
    <header>
        <div class="nav-container">
            <div class="logo">
                <img src="../img/logo.png" alt="LBWI Logo" class="logo-img">
            </div>
            <nav>
                <ul>
                    <li><a href="../html/index.php">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="../html/produtos.php">Produtos</a></li>
                    <li class="dropdown">
                        <a href="#categorias">Categorias</a>
                        <ul class="dropdown-menu">
                            <li><a href="./pagnike.php">Nike</a></li>
                            <li><a href="./pagadidas.php">Adidas</a></li> <!-- Fixed path -->
                            <li><a href="./pagpuma.php">Puma</a></li>
                            <li><a href="./pagreebok.php">Reebok</a></li>
                            <li><a href="./pagmizuno.php">Mizuno</a></li>
                            <li><a href="./pagnewbalance.php">New Balance</a></li>
                            <li><a href="./pagasics.php">Asics</a></li>
                            <li><a href="./pagvans.php">Vans</a></li> <!-- Fixed path -->
                            <li><a href="./pagfila.php">Fila</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="products">
            <h2>Lista de Produtos</h2>
            <div class="product-container"></div> <!-- Ensure this container exists -->
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <p> Todos os direitos reservados &copy; 2023.</p>
            <p>Desenvolvido por <a href="#" target="_blank">LBWI</a></p>
        </div>
    </footer>
</body>

</html>