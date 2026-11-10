
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Articles</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        .articles {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .carte {
            background: white;
            padding: 20px;
            width: 300px;
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

    <div class="articles">

        <?php foreach ($articles as $article): ?>

            <article class="carte">

                <div class="carte-contenu">

                    <?php if ($article['id'] == 1): ?>
                        <small class="badge-special"> À la une</small>
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

    </div>

</body>
</html>
