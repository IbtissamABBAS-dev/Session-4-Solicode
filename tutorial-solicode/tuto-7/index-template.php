
<h1>Mon Blog</h1>

<h2>Mes articles</h2>

<?php foreach ($articles as $article): ?>

    <h3>
        <?= htmlspecialchars($article['titre']) ?>
    </h3>

<?php endforeach; ?>
