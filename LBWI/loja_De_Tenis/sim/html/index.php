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
  <title>Loja de Tênis</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?<?php echo get_cache_buster('../css/bootstrap.min.css'); ?>" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0pB8K9eQ1QK3Uz2K" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/corpo.css?<?php echo get_cache_buster('../css/corpo.css'); ?>" />
  <link rel="stylesheet" href="../css/hf.css?<?php echo get_cache_buster('../css/hf.css'); ?>" />
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
    <section class="hero">
      <div class="hero-content">
        <h1>Bem-vindo à LBWI</h1>
        <p>Explore nossa coleção de tênis das melhores marcas.</p>
        <a href="#tenis-home" class="hero-button">Ver Produtos</a>
      </div>
    </section>
    <section class="carousel-section">
      <div id="imageSlider" class="slider">
        <img class="slider-image active" src="../img/gif1carrosel.gif" alt="Primeiro Slide">
        <img class="slider-image" src="../img/imagem2.gif" alt="Segundo Slide">
        <img class="slider-image" src="../img/1.png" alt="Terceiro Slide">
        <button id="prevButton" class="slider-button">◀</button>
        <button id="nextButton" class="slider-button">▶</button>
      </div>
    </section>
    <section id="tenis-home" class="tenis-home">
      <h2>Nossos Tênis em Destaque</h2>
      <div class="product-container-home">
        <div class="tenis">
          <img src="../img/airmax.png" alt="Nike Air Max 270" />
          <p class="nome">Nike Air Max 270</p>
          <p class="marca">Nike</p>
          <p class="preco">R$ 300,00</p>
        </div>
        <div class="tenis">
          <img src="../img/neww.png" alt="New Balance 574" />
          <p class="nome">New Balance 574</p>
          <p class="marca">New Balance</p>
          <p class="preco">R$ 449,99</p>
        </div>
        <div class="tenis">
          <img src="../img/rebook.png" alt="Reebok Classic Leather" />
          <p class="nome">Reebok Classic Leather</p>
          <p class="marca">Reebok</p>
          <p class="preco">R$ 349,99</p>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <p> Todos os direitos reservados &copy; 2023.</p>
        <p>Desenvolvido por <a href="#" target="_blank">LBWI</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js?<?php echo get_cache_buster('../js/bootstrap.bundle.min.js'); ?>" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6lpD4pK1tU9l6b5i6DczUef1zK4x0pB8K9eQ1QK3Uz2K" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const images = document.querySelectorAll(".slider-image");
        const prevButton = document.querySelector("#prevButton");
        const nextButton = document.querySelector("#nextButton");
        let currentIndex = 0;

        const showImage = (index) => {
          images.forEach((img, i) => {
            img.classList.toggle("active", i === index);
          });
        };

        const nextImage = () => {
          currentIndex = (currentIndex + 1) % images.length;
          showImage(currentIndex);
        };

        const prevImage = () => {
          currentIndex = (currentIndex - 1 + images.length) % images.length;
          showImage(currentIndex);
        };

        nextButton.addEventListener("click", nextImage);
        prevButton.addEventListener("click", prevImage);

        setInterval(nextImage, 7000); // Change image every 7 seconds
      });
    </script>
</body>

</html>