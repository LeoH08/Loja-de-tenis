<?php
function get_cache_buster($file_path)
{
    return file_exists($file_path) ? filemtime($file_path) : time();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Balance - Loja de Tênis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?<?php echo get_cache_buster('../css/bootstrap.min.css'); ?>" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0pB8K9eQ1QK3Uz2K" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/hf.css?<?php echo get_cache_buster('../css/hf.css'); ?>" />
    <link rel="stylesheet" href="../css/pagnewbalance.css?php echo get_cache_buster('../css/categnike.css'); ?>" />
</head>

<body>
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
                            <li><a href="../html/pagadidas.php">Adidas</a></li>
                            <li><a href="../html/pagpuma.php">Puma</a></li>
                            <li><a href="../html/pagreebok.php">Reebok</a></li>
                            <li><a href="../html/pagmizuno.php">Mizuno</a></li>
                            <li><a href="../html/pagnewbalance.php">New Balance</a></li>
                            <li><a href="../html/pagasics.php">Asics</a></li>
                            <li><a href="../html/pagvans.php">Vans</a></li>
                            <li><a href="../html/pagfila.php">Fila</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="newbalance-products">
            <h2>New Balance - Produtos</h2>
            <div class="product-container"></div>
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