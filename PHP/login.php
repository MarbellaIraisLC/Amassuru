<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su correo.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM Directorio WHERE username = ? and password = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){     

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);

	
                    if(mysqli_stmt_fetch($stmt)){
            
                            // Password is correct, so start a new session
                            session_start();
                                                    // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            echo'<script type="text/javascript"> 
                            window.location.href="welcome.php";</script>';
                                header("location: welcome.php");
                                exit;
                       
                         
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Contraseña o correo incorrectos.";
                }
            } else{
                echo "Lamentamos el inconveniente, por favor intente de nuevo.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://amassuru-web.000webhostapp.com/logo.png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <!-- 
      This is an HTML comment
      You can write text in a comment and the content won't be visible in the page font-weight:bold;
    -->

    <title>Amassuru</title>

    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css" />

    <!-- Import the webpage's javascript file -->
    <script src="/script.js" defer></script>
    
    
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body background="esq.png" style="background-repeat: no-repeat;">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
          <a class="navbar-brand" href="#">
      <img src="https://amassuru-web.000webhostapp.com/logo.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
     Amassuru
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Done</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Anuncios</a>
        </li>

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Datos 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="base.php">Base de datos</a></li>
            <li><a class="dropdown-item" href="#">Estadísticas</a></li>
        
          </ul>
        </li>    
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Boletín 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      
      
    <style>
        body{ font: 14px sans-serif;  background-color: #efdaf5;
        }
        .wrapper{ width: 360px; padding: 20px; 
            background-color: #fff;
            border-radius: 15px;
        }
    </style>

      
      <form class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <button type="button" class="btn btn-light"><i class="fa fa-language" style="font-size:20px"></i></button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Español</a></li>
            <li><a class="dropdown-item" href="/Ingles/index-en.html">English</a></li>
            <li><a class="dropdown-item" href="#">Português</a></li>
          </ul>
        </li>
     
           </ul>
              
          <a class="nav-link active" aria-current="page" href=""></a>
 
      </form>
    </div>
  </div>
</nav>
  
  <center>
  
       
       <br>
       <br>
       <br>
       
           <div class="wrapper">
        <h2>Inicio de sesión</h2>
        <p>Por favor ingresa tus datos para iniciar.</p>

<br>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Correo</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <br>
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>¿Aún no te has registrado? <a href="register.php">Registrate.</a>.</p>
        </form>
    </div>
    </center>
</body>
</html>