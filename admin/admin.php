<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Shopesa</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    display:flex;
    background:#0d0d0d;
    color:#fff;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    min-height:100vh;
    background:#090909;
    padding:30px 20px;
    border-right:1px solid #1f1f1f;
}

.logo{
    font-size:30px;
    font-weight:700;
    margin-bottom:40px;
}

.logo span{
    color:#ff5a00;
}

.menu a{
    display:block;
    text-decoration:none;
    color:#bbb;
    padding:14px 18px;
    margin-bottom:10px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover,
.menu a.active{
    background:#ff5a00;
    color:#fff;
}

/* MAIN */
.main{
    flex:1;
    padding:30px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.topbar h1{
    font-size:28px;
}

.admin{
    background:#1a1a1a;
    padding:12px 18px;
    border-radius:12px;
}

/* CARDS */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    background:#1a1a1a;
    padding:25px;
    border-radius:18px;
    box-shadow:0 10px 20px rgba(0,0,0,.25);
}

.card h3{
    color:#aaa;
    font-size:15px;
    margin-bottom:12px;
}

.number{
    font-size:32px;
    font-weight:700;
    color:#ff5a00;
}

.small{
    color:#777;
    font-size:13px;
    margin-top:8px;
}

/* ORDERS */
.orders{
    background:#1a1a1a;
    padding:25px;
    border-radius:18px;
}

.orders h2{
    margin-bottom:18px;
    font-size:22px;
}

.empty{
    text-align:center;
    padding:35px 20px;
    color:#777;
    font-size:15px;
    border:1px dashed #333;
    border-radius:14px;
}
</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

<div class="logo">Shop<span>Esa</span></div>

<div class="menu">
<a href="#" class="active">Dashboard</a>
<a href="#">Produits</a>
<a href="#">Commandes</a>
<a href="#">Clients</a>
<a href="#">Paiements</a>
<a href="#">Messages</a>
<a href="#">Paramètres</a>
<a href="#">Déconnexion</a>
</div>

</div>

<!-- MAIN -->
<div class="main">

<div class="topbar">
<h1>Dashboard Admin</h1>
<div class="admin">Administrateur</div>
</div>

<!-- STATS -->
<div class="cards">

<div class="card">
<h3>Total Produits</h3>
<div class="number">0</div>
<div class="small">Augmente après ajout produit</div>
</div>

<div class="card">
<h3>Total Commandes</h3>
<div class="number">0</div>
<div class="small">Après achat client</div>
</div>

<div class="card">
<h3>Total Clients</h3>
<div class="number">0</div>
<div class="small">Après inscription</div>
</div>

<div class="card">
<h3>Revenus</h3>
<div class="number">0 FCFA</div>
<div class="small">Somme des paiements</div>
</div>

</div>

<!-- COMMANDES -->
<div class="orders">

<h2>Dernières commandes</h2>

<div class="empty">
Aucune commande enregistrée pour le moment.
</div>

</div>

</div>

</body>
</html>