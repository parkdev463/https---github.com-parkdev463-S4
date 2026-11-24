<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACCESSO - Accessoires de mode</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header id="accueil">
    <a class="logo" href="#accueil">
      <p class="logo-name">ACCESS<span class="logo-o">O</span></p>
      <p class="logo-title">YOUR STYLE, YOUR CHOICE</p>
    </a>
    <nav>
      <a href="#accueil.html">Accueil</a>
      <a href="#produits.html">Produits</a>
      <a href="#a-propos.html">À propos</a>
      <a href="#contact.html">Contact</a>
    </nav>
  </header>

  <main>
    <section class="section1">
      <div class="section1-text">
        <h1>Découvrez notre collection</h1>
        <p>Des accessoires choisis avec soin pour accompagner votre style au quotidien.</p>
        <a class="button" href="#produits">Voir les produits</a>
      </div>
    </section>
    <!-- les cards -->
    <section class="products">
      <h2>Nos accessoires</h2>
      <div class="product-list">
        <?php foreach ($cards as $card): ?>
          <article class="product-card">
            <img src="images/<?= htmlspecialchars($card['img']) ?>" alt="bague">
            <div class="product-info">
              <h3><?= htmlspecialchars($card['titre']) ?></h3>
              <p><?= $card['paragraphe'] ?> 💗</p>
              <p class="price"><?= htmlspecialchars($card['prix']) ?></p>
              <a href="#"><?= htmlspecialchars($card['button']) ?></a>
              <?php if ($card['status'] == 'disponible'): ?>
                <img src="images/disponible.png" alt="disponible" class="disp">
              <?php else: ?>
                <img src="images/cercle-non-disponible.png" alt="non disponible" class="disp">
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="about">
      <h2>À propos d'ACCESSO</h2>
      <p>ACCESSO vous propose des accessoires élégants pour ajouter une jolie touche à votre quotidien.</p>
    </section>
  </main>
  <footer class="contact">
    <h2>Contact</h2>
    <p>Une question ? Écrivez-nous à contact@accesso.ma</p>
  </footer>

</body>

</html>