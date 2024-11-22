<h1>Edit Recipe</h1>
<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $recipe['name'] ?>" required><br>
    <label>Ingredients:</label>
    <textarea name="ingredients" required><?= $recipe['ingredients'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
