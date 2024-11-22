<h1>Recipe List</h1>
<a href="index.php?action=create">Add Recipe</a>
<ul>
    <?php foreach ($recipes as $recipe): ?>
        <li>
            <strong><?= $recipe['name'] ?></strong><br>
            Ingredients: <?= nl2br($recipe['ingredients']) ?><br>
            <a href="index.php?action=edit&id=<?= $recipe['id'] ?>">Edit</a> | 
            <a href="index.php?action=delete&id=<?= $recipe['id'] ?>">Delete</a>
        </li>
        <hr>
    <?php endforeach; ?>
</ul>

