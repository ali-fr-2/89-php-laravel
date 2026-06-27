<?php
include "./pdo.php";

if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $statement=$conn->query("SELECT `password` FROM users WHERE `email`= '$email'");
    $statement->execute();
    $result=$statement->fetchAll();
    if(password_verify($password,$result[0]['password'])){
        echo "sucess";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  
                    <button type="submit" class="btn btn-primary"   name="sub"                >Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>