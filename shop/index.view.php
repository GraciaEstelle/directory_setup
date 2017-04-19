<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="post" id="form" >
    <fieldset>
        <input type="text"  name="naam" placeholder="naam">
        <input type="text" name="prijs" placeholder="prijs">
        <input type="text" name="btw" placeholder="btw">
        <label for="categorie"></label>
        <select name="categorie" id="categorie">
            <?php include_once "Categorie.php";?>
        </select>
        <input type="submit" value="submit" name="submit">
    </fieldset>
</form>


</body>
</html>
