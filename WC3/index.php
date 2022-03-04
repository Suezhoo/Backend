<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic OOP and filesystem</title>
</head>
<body>
    <header><a href="logoverview.php">Log overview</a></header>
    <h1>Register for event</h1>
    <form action="savedata.php" method="POST">
        <fieldset>
            <legend>Name and E-mail</legend>
            <label for="name">Full Name</label><br>
            <input type="text" name="name" id="name" placeholder="John Johnson" required><br>
            <label for="email">E-mail</label><br>
            <input type="text" name="email" id="email" placeholder="your@email.com" required><br>
        </fieldset>
        <fieldset>
            <legend>Favorite Food</legend>
            <label><input type="radio" name="food" id="julientje" value="Julientje" required>Julientje</label>
            <label><input type="radio" name="food" id="macaroni" value="Macaroni">Macaroni</label>
            <label><input type="radio" name="food" id="hespenrollen" value="Hespenrollen">Hespenrollen</label>
        </fieldset>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>