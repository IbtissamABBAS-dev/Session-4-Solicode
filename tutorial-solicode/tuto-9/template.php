
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        h1, h2 {
            text-align: center;
        }

        .filtre-categories {
            text-align: center;
            margin-bottom: 40px;
        }

        .liste-filtres {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .pilule-filtre {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 20px;
            background-color: white;
            color: #333;
        }

        .pilule-filtre.actif {
            background-color: #1d4ed8;
            color: white;
        }

        .articles {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .carte {
            background-color: white;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
        }

        .etiquette-categorie {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .etiquette-categorie.bleu {
            background-color: #dbeafe;
            color: #1d4ed8;
        }

        .etiquette-categorie.rose {
            background-color: #fce7f3;
            color: #be185d;
        }

        .badge-special {
            display: block;
            color: #d97706;
            margin-bottom: 12px;
        }

        .carte a {
            color: #222;
            text-decoration: none;
        }

        .carte-meta {
            display: flex;
            justify-content: space-between;
            color: gray;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <h1>Mon Blog</h1>

    
    <section class="filtre-categories">

        <h2>Explorer par thème</h2>

        <div class="liste-filtres">

            <a href="index.php" class="pilule-filtre actif">
                Tous les articles
            </a>

            <?php foreach ($categories as $cat): ?>

                <a href="categorie.php?id=<?= $cat['id'] ?>" class="pilule-filtre">
                    <?= htmlspecialchars($cat['libelle']) ?>
                </a>

            <?php endforeach; ?>

        </div>

    </section>

    
    <section class="articles">

        <?php foreach ($articles as $article): ?>

            <article class="carte">

                <div class="carte-contenu">

                    <?php if ($article['id'] == 1): ?>
                        <small class="badge-special">⭐ À la une</small>
                    <?php endif; ?>

                    <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                        <?= htmlspecialchars($article['categorie_libelle']) ?>
                    </span>

                    <h3>
                        <a href="article.php?id=<?= $article['id'] ?>">
                            <?= htmlspecialchars($article['titre']) ?>
                        </a>
                    </h3>

                    <p>
                        <?= htmlspecialchars(mb_substr($article['contenu'], 0, 100)) ?>...
                    </p>

                    <div class="carte-meta">

                        <span>
                            <?= date('d M Y', strtotime($article['date_creation'])) ?>
                        </span>

                        <span>5 min</span>

                    </div>

                </div>

            </article>

        <?php endforeach; ?>

    </section>

</body>
</html>
