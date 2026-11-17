<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a class="logo" href="">Mon <span>Profil</span></a>
        <ul class="list">
            <li><a href="">Accueil</a></li>
            <li><a href="">A propos</a></li>
            <li><a href="">Mes projets</a></li>
            <li><a href="">Compétance</a></li>
            <li><a href="">Contacter</a></li>
        </ul>
    </header>

    <section>
        <div class="presentation">
            <h1>A propos de <span>moi</span></h1>
            <div class="contenu">
                <p>Je suis HAKIMA, une passionnée par le <span>dévoloppement</span><span>Web</span>
                    et les nouvelles technoligies.J'aime apprendre,
                    crées des <span>Projets innovants</span>et
                    transformer mes idées en solutions numériques.
                </p>
                <img src="images/software_development_icon_design_template-removebg-preview.png" alt="">

            </div>

            <div class="cards">
                <div class="card">
                    <img src="images/paper-plane copy.png" alt="">
                    <p>Développeuse Web</p>
                </div>
                <div class="card">
                    <img src="images/lightbulb.png" alt="">
                    <p>Créative & Curieuse</p>
                </div>
                <div class="card">
                    <img src="images/paper-plane copy.png" alt="">
                    <p>Toujours en apprentissage</p>
                </div>
            </div>

            <h2>Mes Projets</h2>
            <div class="projets">
                <?php foreach ($projects as $pro): ?>
                    <div class="projet">
                        <a class="image" href=""><img src="images/<?= htmlspecialchars($pro['image']) ?>" alt=""></a>
                        <div class="description">
                            <h3><?= htmlspecialchars($pro['titre']) ?></h3>
                            <p><?= htmlspecialchars($pro['paragraphe']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer>
        <p>2026 Boutique Express. Tous droits réservés.</p>
    </footer>
</body>

</html>