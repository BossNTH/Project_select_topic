<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>
<body>
  <form action="adMenu.php" >
    <div class="sign-in">Sign in</div>
      <i id="logo" class="fas fa-user-circle"></i>
      <!-- User -->
    <div class="login-form">
     <i class="fas fa-user" id="logo-input"></i>
     <input type="text" class="textbox" id="username" placeholder="username">
    </div>
      <!-- Passwod -->
    <div class="login-form">
      <i class="fas fa-lock" id="logo-input"></i>        
      <input type="password" class="textbox" id="password" placeholder="password">
    </div>
      <!-- submit -->
    <input class="submit" type="submit" value="Login">
      <!-- checkbox -->
    <div class="checkbox mb-3">
      <label>
       <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
            
  </form>
</body>
</html>