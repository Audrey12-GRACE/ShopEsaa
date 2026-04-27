<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>P3 Shop</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: #000;
  color: white;
}

/* HEADER */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 60px;
  border-bottom: 1px solid #222;
}

.logo {
  font-size: 20px;
  font-weight: bold;
}

.logo span {
  color: #ff4d00;
}

nav a {
  margin: 0 15px;
  color: #aaa;
  text-decoration: none;
  font-size: 14px;
}

nav a:hover {
  color: white;
}

/* BUTTONS */
.btn-primary {
  background: #ff4d00;
  border: none;
  padding: 10px 18px;
  border-radius: 6px;
  color: white;
  cursor: pointer;
}

.btn-outline {
  background: transparent;
  border: 1px solid #444;
  padding: 10px 18px;
  border-radius: 6px;
  color: white;
  margin-right: 10px;
  cursor: pointer;
}

/* HERO */
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 80px 60px;
  height: 90vh;
}

/* TEXTE */
.hero-left {
  max-width: 550px;
}

.tag {
  background: #1a1a1a;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 12px;
  color: #ccc;
  margin-bottom: 20px;
  display: inline-block;
}

.hero-left h1 {
  font-size: 68px;
  line-height: 1.05;
  color: #eae2d6;
  margin-bottom: 20px;
}

.hero-left p {
  color: #aaa;
  font-size: 14px;
  margin-bottom: 25px;
}

.buttons {
  display: flex;
  gap: 15px;
}

/* VISUEL DROITE (EFFET CERCLE) */
.hero-right {
  position: relative;
  width: 500px;
  height: 500px;
}

/* cercle principal */
.ring {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: conic-gradient(
    from 0deg,
    #ff4d00,
    #ff9900,
    #ff4d00,
    #000000,
    #000000
  );
  filter: blur(10px);
}

/* cercle interne */
.ring.small {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 300px;
  height: 300px;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  background: radial-gradient(circle, black 60%, transparent 70%);
}

/* glow */
.hero-right::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 600px;
  height: 600px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(255,100,0,0.3), transparent 70%);
  filter: blur(40px);
}
.about {
  padding: 80px 60px;
  text-align: center;
  background: #0a0a0a;
}

.about h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.about p {
  color: #aaa;
  max-width: 600px;
  margin: auto;
  margin-bottom: 40px;
}

.about-boxes {
  display: flex;
  justify-content: center;
  gap: 30px;
}

.box {
  background: #111;
  padding: 20px;
  border-radius: 10px;
  width: 250px;
}
.contact {
  padding: 80px 60px;
  text-align: center;
}

.contact h2 {
  margin-bottom: 30px;
}

form {
  max-width: 500px;
  margin: auto;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

input, textarea {
  padding: 12px;
  border: none;
  border-radius: 5px;
  background: #111;
  color: white;
}

button {
  background: #ff4d00;
  border: none;
  padding: 12px;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}
  </style>
</head>
<body>

<header>
  <div class="logo">Shop <span>Esa</span></div>

  <nav>
    <a href="#">Acceuil</a>
    <a href="#about">À propos</a>
    <a href="#contact">Contact</a>
  </nav>

  <div class="actions">
    <button class="btn-outline">Se connecter</button>
    <button class="btn-primary">S'inscrire</button>
  </div>
</header>

<section class="hero">

  <div class="hero-left">
    <div class="tag">New - Try our Motion Integration →</div>

    <h1>
      Découvrez nos <br>
      meilleurs produits <br>
      au meilleur prix
    </h1>

    <p>
      Achetez facilement vos produits avec livraison rapide et sécurisée.
    </p>

    <div class="buttons">
      <button class="btn-primary">S'inscrire</button>
      <button class="btn-outline">Se connecter</button>
    </div>
  </div>

  <!-- VISUEL DROITE -->
  <div class="hero-right">
    <div class="ring"></div>
    <div class="ring small"></div>
  </div>

</section>
<section class="about" id="about">
  <h2>À propos de nous</h2>

  <p>
    Nous sommes une plateforme e-commerce qui vous permet d’acheter
    facilement vos produits avec sécurité, rapidité et confiance.
  </p>

  <div class="about-boxes">
    <div class="box">
      <h3>Fiabilité</h3>
      <p>Des produits vérifiés et de qualité.</p>
    </div>

    <div class="box">
      <h3>Rapidité</h3>
      <p>Livraison rapide partout.</p>
    </div>

    <div class="box">
      <h3>Sécurité</h3>
      <p>Paiement sécurisé garanti.</p>
    </div>
  </div>
</section>
<section class="contact" id="contact">
  <h2>Contactez-nous</h2>

  <form>
    <input type="text" placeholder="Votre nom" required>
    <input type="email" placeholder="Votre email" required>
    <textarea placeholder="Votre message"></textarea>

    <button type="submit">Envoyer</button>
  </form>
</section>

</body>
</html>