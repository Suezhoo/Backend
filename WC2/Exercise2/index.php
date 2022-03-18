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
    
    <?php 
        if(formSubmitted()){
            $username = $_POST['username'];
            $country =  $_POST['country'];
            echo "<div class='w-75 bg-light rounded text-dark p-3 d-flex justify-content-center flex-column m-0'>
            <h3 class='text-dark'>Form submitted</h3>
            <hr>
            <p class='p-0 m-0'>Username: $username</p>
            <p class='p-0 m-0'>Country: $country</p>
            </div>";
        }else{
            echo '<h1 class="m-3 text-center w-75">Exercise 2 : Redirecting to current page</h1>
            <form action="index.php" method="post" class="w-75">
                <label for="username">Username</label>
                <input type="text" class="mb-3 form-control text-dark bg-light d-flex" name="username" id="username" required>
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control text-dark bg-light d-flex" required> 
                <button type="submit" class="btn btn-light text-dark mt-3">Log in</button>
                <input type="hidden" name="loginform" value="10">
            </form>';
        };

        function validateUsername($username){
            if(strlen($username) < 8) return false;
            else return true;
        };

        function formSubmitted(){
            if(!empty($_POST['loginform'])){
                $username = $_POST['username'];
                $country =  $_POST['country'];
                if(validateUsername($username)){
                    return true;
                }else{
                    echo "<p class='p-3 bg-danger text-white rounded'>Username needs to be atleast 8 characters</p>";
                };
            } else return false;
        };
    ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>