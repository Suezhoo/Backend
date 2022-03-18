<?php 
    // Is there a post request?
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Validate username length
        if(strlen($_POST['username']) < 8){
            header("Location: forbidden.php");
        }else{
            header("Location: profile.php");
        };
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend WC2</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container d-flex flex-column justify-content-start align-items-center bg-dark text-white gap-5 mb-5 mt-5">
    <h1 class="m-3 text-center w-75">Exercise 3 : Redirecting to mutliple pages</h1>
        <form action="index.php" method="POST" class="w-75">
            <label for="username">Username</label>
            <input type="text" class="mb-3 form-control text-dark bg-light d-flex" name="username" id="username" required>
            <label for="country">Country</label>
            <input type="text" name="country" id="country" class="form-control text-dark bg-light d-flex" required> 
            <button type="submit" class="btn btn-light text-dark mt-3">Log in</button>
            <input type="hidden" name="loginform" value="10">
        </form>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>