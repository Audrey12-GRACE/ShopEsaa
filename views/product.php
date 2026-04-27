<?php
session_start();
require("../config/db.php");
if(isset($_SESSION["id_user"])){
    $panier= $conn->prepare("SELECT * FROM panier WHERE Ref_user=?");
    $panier->execute([$_SESSION["id_user"]]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopEsa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../public/css/home.css" />
</head>

<body>



    <header class="header">
        <div class="logo">
            <div class="logo-name">ShopEsa</div>
            <div class="logo-sub">Luxury Collection</div>
        </div>
        <nav class="nav-links">
            <a href="home.php">Maison</a>
            <a href="#">Mode</a>
            <a href="#">Joaillerie</a>
            <a href="#">Beauté</a>
            <a href="#">Art de Vivre</a>
        </nav>
        <div class="header-icons">
            <button class="icon-btn" aria-label="Rechercher">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
            <button class="icon-btn" aria-label="Favoris">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                </svg>
            </button>
            <div class="cart-wrap">
                <button class="icon-btn" aria-label="Panier">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 01-8 0" />
                    </svg>
                </button>
                <div class="cart-dot" id="cart-num">
                    <?php 
                    $r=isset($_SESSION["id_user"])? $panier->rowCount():0;
                    echo $r;
                    ?>
                </div>
            </div>
        </div>
    </header>

    <!--<section class="hero">
    <div class="hero-left">
      <div class="hero-season">Collection Printemps 2026</div>
      <h1>L'art de vivre<br>dans sa plus<br><em>pure expression</em></h1>
      <p>Des pièces d'exception soigneusement sélectionnées pour ceux qui refusent de faire des compromis sur la qualité et le raffinement.</p>
      <img src="../public/images/hero.jpg" alt="Collection Printemps 2026" class="hero-image">
      <div class="hero-btns">
        <button class="btn-gold">Découvrir</button>
        <button class="btn-ghost">Lookbook</button>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-cat">
        <video src="../public/images/fashion.mp4" autoplay loop muted class="hero-video"></video>
        <span class="hero-cat-name">Mode</span>
      </div>
      <div class="hero-cat">
        <video width="100%" height="auto" src="../public/images/daimond.mp4" autoplay loop muted class="hero-video"></video>
        <span class="hero-cat-name">Joaillerie</span>
      </div>
      <div class="hero-cat">
        <video width="100%" height="auto" src="../public/images/maison.mp4" autoplay loop muted class="hero-video"></video>

        <span class="hero-cat-name">Maison</span>
      </div>
        <div class="hero-cat">
        <video width="100%" height="auto" src="../public/images/beauty.mp4" autoplay loop muted class="hero-video"></video>
        <span class="hero-cat-name">Beauté</span>
      </div>
    </div>
  </section>-->

    <div class="marquee-bar">
        <div class="marquee-track" id="marquee"></div>
    </div>

    <section class="section">
        <div class="section-head">
            <div>
                <div class="section-eyebrow">Sélection du moment</div>
                <h2>Pièces d'Exception</h2>
            </div>
            <!--<a class="see-all" href="#">Voir tout</a>-->
        </div>
        <div class="products-grid" id="grid"></div>
    </section>

    <div class="editorial">
        <div class="editorial-block">
            <div class="editorial-num">01</div>
            <div class="editorial-eyebrow">Édition Limitée</div>
            <h3>La Montre Impériale<br>Collection Nuit</h3>
            <p>Une pièce horlogère d'exception, façonnée à la main par nos maîtres artisans genevois.</p>
            <img src="../public/images/watch.jpg" alt="Montre Impériale" class="editorial-image">
        </div>
        <div class="editorial-block">
            <div class="editorial-num">02</div>
            <div class="editorial-eyebrow">Art de Vivre</div>
            <h3>L'Appartement<br>Parisien</h3>
            <p>Notre curatelle Maison révèle une sélection d'objets rares pour sublimer vos intérieurs.</p>
            <img src="../public/images/apartment.jpg" alt="Appartement Parisien" class="editorial-image">
        </div>
    </div>

    <div class="testimonial">
        <p class="test-quote">"ShopEsa incarne ce que le luxe a de plus noble : l'invisible perfection des détails."</p>
        <div class="test-author">— Amara D., cliente depuis 2022</div>
    </div>

    <?php
    include("../public/includes/footer.php");
    ?>
    <script src="../public/js/product.js"></script>
</body>

</html>