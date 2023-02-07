<?php
// Initialize the session
session_start();

require_once "config.php";



// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



?>
 
 <?php


$usuaria= htmlspecialchars($_SESSION["username"]);

$query = "SELECT * FROM Directorio where username = '$usuaria'";

if ($result = $link->query($query)) {

    while ($row = $result->fetch_assoc()) {
        
$field1name = $row["COL1"];
$field2name = $row["id"];
$field3name = $row["COL 3"];
$field4name = $row["rol"];
$field5name = $row["username"];
$field6name = $row["password"];
$field7name = $row["nombre"];
$field8name = $row["COL 8"];
$field9name = $row["COL 9"];
$field10name = $row["COL 10"];
$field11name = $row["COL 11"];
$field12name = $row["COL 12"];
$field13name = $row["COL 13"];
$field14name = $row["COL 14"];
$field15name = $row["COL 15"];
$field16name = $row["COL 16"];
$field17name = $row["COL 17"];
$field18name = $row["COL 18"];
$field19name = $row["COL 19"];
$field20name = $row["COL 20"];
$field21name = $row["COL 21"];
$field22name = $row["COL 22"];
$field23name = $row["COL 23"];
$field24name = $row["COL 24"];
$field25name = $row["COL 25"];
$field26name = $row["COL 26"];
$field27name = $row["COL 27"];
$field28name = $row["COL 28"];
$field29name = $row["pais2"];
$field30name = $row["COL 30"];
$field31name = $row["COL 31"];
$field32name = $row["COL 32"];


    }

/*freeresultset*/
$result->free();
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

<link rel="stylesheet" href="/form.css" />
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
<body >
    
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

      
      <form3 class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
              
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
         <a href="logout.php" class="btn btn-secondary btn-sm">Cerrar Sesión</a>
      </form3>

   
  
    </div>
  </div>
</nav>
  
      
    <!--======================================
=            Apock web design            =
=======================================
Gracias por utilizar mi contenido!
Me siento agradecido compartiendo para Uds
====-->
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="https://drive.google.com/file/d/1gw5UBbtZ6xj7eSHK9PWy-LFzR9NufDpy/previewg" alt="imagen">
                    </button>
                </div>

            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Bienvenida <?php echo $field7name?></h3> 
                <br>
                <p  class="texto"> <?php echo $field26name?>.</p>
            </div>
            

            <div class="perfil-usuario-footer">
                                <ul class="lista-datos">
                      <li><i class="icono fas fa-briefcase"></i> Institución a la que pertenece: <?php echo $field8name?></li>
    <li><i class="icono fas fa-building"></i> Nivel de formación profesional: <?php echo $field17name?></li>
                  <li><i class="icono fas fa-building"></i> Años de experiencia: <?php echo $field18name?></li>
                    <li><i class="icono fas fa-map-marker-alt"></i>País de origen: <?php echo $field9name?></li>
                     <li><i class="icono fas fa-map-marker-alt"></i>País de residencia: <?php echo $field29name?></li>
                    <li><i class="icono fas fa-share-alt"></i>Cuenta de Twitter: <?php echo $field13name?></li>
                   <li><i class="icono fas fa-phone-alt"></i> Telefono: <?php echo $field12name?></li>
                     <li><i class="icono fas fa-user-check"></i> Registro: <?php echo $field3name?></li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Temas de especialidad: <?php echo $field14name?></li>
                  <li><i class="icono fas fa-building"></i> Trabajos de su autoría: <?php echo $field19name?> </li>
                </ul>

            </div>

        </div>
        <br>
                        <p>
        <a href="reset-password.php" class="btn btn-secondary">Actualizar contraseña</a>
        <a href="logout.php" class="btn btn-info">Cerrar sesión</a>
    </p>
    </section>
    
    <!--====  End of html  ====-->

<!--=============================
redes sociales fijadas en pantalla
No es necesario que copies esto!
==============================-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>


   
   
   
   <!----Formulario--->
       <div class="overlay">
      <!-- LOGN IN FORM by Omar Dsoky -->
      <form>
        <!--   con = Container  for items in the form-->
        <div class="con">
          <!--     Start  header Content  -->
          <header class="head-form">
              <h4> 
                Si deseas actualizar tu información remplaza el texto del campo deseado a actualizar y presiona el botón al final. Debido a cambios en el formulario es posible que deba llenar campos que se encuentren vacios. 
              </h4>
        
          </header>
          <br />

          <br />
          <div class="field-set">


            <p>
              Nombre Completo
            </p>
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field7name; ?>"
              required
            />

            <p>
              Institución a la que pertenece
            </p>
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field8name; ?>"
              required
            />

            <p>
              País de origen
            </p>
            <br />
            <select name="pais" class="form-input">
              <option value="AF">Afganistán</option>
              <option value="AL">Albania</option>
              <option value="DE">Alemania</option>
              <option value="AD">Andorra</option>
              <option value="AO">Angola</option>
              <option value="AI">Anguilla</option>
              <option value="AQ">Antártida</option>
              <option value="AG">Antigua y Barbuda</option>
              <option value="AN">Antillas Holandesas</option>
              <option value="SA">Arabia Saudí</option>
              <option value="DZ">Argelia</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="AT">Austria</option>
              <option value="AZ">Azerbaiyán</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrein</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="BE">Bélgica</option>
              <option value="BZ">Belice</option>
              <option value="BJ">Benin</option>
              <option value="BM">Bermudas</option>
              <option value="BY">Bielorrusia</option>
              <option value="MM">Birmania</option>
              <option value="BO">Bolivia</option>
              <option value="BA">Bosnia y Herzegovina</option>
              <option value="BW">Botswana</option>
              <option value="BR">Brasil</option>
              <option value="BN">Brunei</option>
              <option value="BG">Bulgaria</option>
              <option value="BF">Burkina Faso</option>
              <option value="BI">Burundi</option>
              <option value="BT">Bután</option>
              <option value="CV">Cabo Verde</option>
              <option value="KH">Camboya</option>
              <option value="CM">Camerún</option>
              <option value="CA">Canadá</option>
              <option value="TD">Chad</option>
              <option value="CL">Chile</option>
              <option value="CN">China</option>
              <option value="CY">Chipre</option>
              <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
              <option value="CO">Colombia</option>
              <option value="KM">Comores</option>
              <option value="CG">Congo</option>
              <option value="CD">Congo, República Democrática del</option>
              <option value="KR">Corea</option>
              <option value="KP">Corea del Norte</option>
              <option value="CI">Costa de Marfíl</option>
              <option value="CR">Costa Rica</option>
              <option value="HR">Croacia (Hrvatska)</option>
              <option value="CU">Cuba</option>
              <option value="DK">Dinamarca</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="EC">Ecuador</option>
              <option value="EG">Egipto</option>
              <option value="SV">El Salvador</option>
              <option value="AE">Emiratos Árabes Unidos</option>
              <option value="ER">Eritrea</option>
              <option value="SI">Eslovenia</option>
              <option value="ES">España</option>
              <option value="US">Estados Unidos</option>
              <option value="EE">Estonia</option>
              <option value="ET">Etiopía</option>
              <option value="FJ">Fiji</option>
              <option value="PH">Filipinas</option>
              <option value="FI">Finlandia</option>
              <option value="FR">Francia</option>
              <option value="GA">Gabón</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="GH">Ghana</option>
              <option value="GI">Gibraltar</option>
              <option value="GD">Granada</option>
              <option value="GR">Grecia</option>
              <option value="GL">Groenlandia</option>
              <option value="GP">Guadalupe</option>
              <option value="GU">Guam</option>
              <option value="GT">Guatemala</option>
              <option value="GY">Guayana</option>
              <option value="GF">Guayana Francesa</option>
              <option value="GN">Guinea</option>
              <option value="GQ">Guinea Ecuatorial</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="HT">Haití</option>
              <option value="HN">Honduras</option>
              <option value="HU">Hungría</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IQ">Irak</option>
              <option value="IR">Irán</option>
              <option value="IE">Irlanda</option>
              <option value="BV">Isla Bouvet</option>
              <option value="CX">Isla de Christmas</option>
              <option value="IS">Islandia</option>
              <option value="KY">Islas Caimán</option>
              <option value="CK">Islas Cook</option>
              <option value="CC">Islas de Cocos o Keeling</option>
              <option value="FO">Islas Faroe</option>
              <option value="HM">Islas Heard y McDonald</option>
              <option value="FK">Islas Malvinas</option>
              <option value="MP">Islas Marianas del Norte</option>
              <option value="MH">Islas Marshall</option>
              <option value="UM">Islas menores de Estados Unidos</option>
              <option value="PW">Islas Palau</option>
              <option value="SB">Islas Salomón</option>
              <option value="SJ">Islas Svalbard y Jan Mayen</option>
              <option value="TK">Islas Tokelau</option>
              <option value="TC">Islas Turks y Caicos</option>
              <option value="VI">Islas Vírgenes (EEUU)</option>
              <option value="VG">Islas Vírgenes (Reino Unido)</option>
              <option value="WF">Islas Wallis y Futuna</option>
              <option value="IL">Israel</option>
              <option value="IT">Italia</option>
              <option value="JM">Jamaica</option>
              <option value="JP">Japón</option>
              <option value="JO">Jordania</option>
              <option value="KZ">Kazajistán</option>
              <option value="KE">Kenia</option>
              <option value="KG">Kirguizistán</option>
              <option value="KI">Kiribati</option>
              <option value="KW">Kuwait</option>
              <option value="LA">Laos</option>
              <option value="LS">Lesotho</option>
              <option value="LV">Letonia</option>
              <option value="LB">Líbano</option>
              <option value="LR">Liberia</option>
              <option value="LY">Libia</option>
              <option value="LI">Liechtenstein</option>
              <option value="LT">Lituania</option>
              <option value="LU">Luxemburgo</option>
              <option value="MK">Macedonia, Ex-República Yugoslava de</option>
              <option value="MG">Madagascar</option>
              <option value="MY">Malasia</option>
              <option value="MW">Malawi</option>
              <option value="MV">Maldivas</option>
              <option value="ML">Malí</option>
              <option value="MT">Malta</option>
              <option value="MA">Marruecos</option>
              <option value="MQ">Martinica</option>
              <option value="MU">Mauricio</option>
              <option value="MR">Mauritania</option>
              <option value="YT">Mayotte</option>
              <option value="MX">México</option>
              <option value="FM">Micronesia</option>
              <option value="MD">Moldavia</option>
              <option value="MC">Mónaco</option>
              <option value="MN">Mongolia</option>
              <option value="MS">Montserrat</option>
              <option value="MZ">Mozambique</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Níger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk</option>
              <option value="NO">Noruega</option>
              <option value="NC">Nueva Caledonia</option>
              <option value="NZ">Nueva Zelanda</option>
              <option value="OM">Omán</option>
              <option value="NL">Países Bajos</option>
              <option value="PA">Panamá</option>
              <option value="PG">Papúa Nueva Guinea</option>
              <option value="PK">Paquistán</option>
              <option value="PY">Paraguay</option>
              <option value="PE">Perú</option>
              <option value="PN">Pitcairn</option>
              <option value="PF">Polinesia Francesa</option>
              <option value="PL">Polonia</option>
              <option value="PT">Portugal</option>
              <option value="PR">Puerto Rico</option>
              <option value="QA">Qatar</option>
              <option value="UK">Reino Unido</option>
              <option value="CF">República Centroafricana</option>
              <option value="CZ">República Checa</option>
              <option value="ZA">República de Sudáfrica</option>
              <option value="DO">República Dominicana</option>
              <option value="SK">República Eslovaca</option>
              <option value="RE">Reunión</option>
              <option value="RW">Ruanda</option>
              <option value="RO">Rumania</option>
              <option value="RU">Rusia</option>
              <option value="EH">Sahara Occidental</option>
              <option value="KN">Saint Kitts y Nevis</option>
              <option value="WS">Samoa</option>
              <option value="AS">Samoa Americana</option>
              <option value="SM">San Marino</option>
              <option value="VC">San Vicente y Granadinas</option>
              <option value="SH">Santa Helena</option>
              <option value="LC">Santa Lucía</option>
              <option value="ST">Santo Tomé y Príncipe</option>
              <option value="SN">Senegal</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leona</option>
              <option value="SG">Singapur</option>
              <option value="SY">Siria</option>
              <option value="SO">Somalia</option>
              <option value="LK">Sri Lanka</option>
              <option value="PM">St Pierre y Miquelon</option>
              <option value="SZ">Suazilandia</option>
              <option value="SD">Sudán</option>
              <option value="SE">Suecia</option>
              <option value="CH">Suiza</option>
              <option value="SR">Surinam</option>
              <option value="TH">Tailandia</option>
              <option value="TW">Taiwán</option>
              <option value="TZ">Tanzania</option>
              <option value="TJ">Tayikistán</option>
              <option value="TF">Territorios franceses del Sur</option>
              <option value="TP">Timor Oriental</option>
              <option value="TG">Togo</option>
              <option value="TO">Tonga</option>
              <option value="TT">Trinidad y Tobago</option>
              <option value="TN">Túnez</option>
              <option value="TM">Turkmenistán</option>
              <option value="TR">Turquía</option>
              <option value="TV">Tuvalu</option>
              <option value="UA">Ucrania</option>
              <option value="UG">Uganda</option>
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistán</option>
              <option value="VU">Vanuatu</option>
              <option value="VE">Venezuela</option>
              <option value="VN">Vietnam</option>
              <option value="YE">Yemen</option>
              <option value="YU">Yugoslavia</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabue</option>
              <option value="<?php echo $field9name; ?>" selected><?php echo $field9name; ?></option>

            </select>
            
            <br />

            <br />

            <p>
              País de residencia
            </p>
            <br />
            <select name="pais" class="form-input">
              <option value="AF">Afganistán</option>
              <option value="AL">Albania</option>
              <option value="DE">Alemania</option>
              <option value="AD">Andorra</option>
              <option value="AO">Angola</option>
              <option value="AI">Anguilla</option>
              <option value="AQ">Antártida</option>
              <option value="AG">Antigua y Barbuda</option>
              <option value="AN">Antillas Holandesas</option>
              <option value="SA">Arabia Saudí</option>
              <option value="DZ">Argelia</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="AT">Austria</option>
              <option value="AZ">Azerbaiyán</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrein</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="BE">Bélgica</option>
              <option value="BZ">Belice</option>
              <option value="BJ">Benin</option>
              <option value="BM">Bermudas</option>
              <option value="BY">Bielorrusia</option>
              <option value="MM">Birmania</option>
              <option value="BO">Bolivia</option>
              <option value="BA">Bosnia y Herzegovina</option>
              <option value="BW">Botswana</option>
              <option value="BR">Brasil</option>
              <option value="BN">Brunei</option>
              <option value="BG">Bulgaria</option>
              <option value="BF">Burkina Faso</option>
              <option value="BI">Burundi</option>
              <option value="BT">Bután</option>
              <option value="CV">Cabo Verde</option>
              <option value="KH">Camboya</option>
              <option value="CM">Camerún</option>
              <option value="CA">Canadá</option>
              <option value="TD">Chad</option>
              <option value="CL">Chile</option>
              <option value="CN">China</option>
              <option value="CY">Chipre</option>
              <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
              <option value="CO">Colombia</option>
              <option value="KM">Comores</option>
              <option value="CG">Congo</option>
              <option value="CD">Congo, República Democrática del</option>
              <option value="KR">Corea</option>
              <option value="KP">Corea del Norte</option>
              <option value="CI">Costa de Marfíl</option>
              <option value="CR">Costa Rica</option>
              <option value="HR">Croacia (Hrvatska)</option>
              <option value="CU">Cuba</option>
              <option value="DK">Dinamarca</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="EC">Ecuador</option>
              <option value="EG">Egipto</option>
              <option value="SV">El Salvador</option>
              <option value="AE">Emiratos Árabes Unidos</option>
              <option value="ER">Eritrea</option>
              <option value="SI">Eslovenia</option>
              <option value="ES">España</option>
              <option value="US">Estados Unidos</option>
              <option value="EE">Estonia</option>
              <option value="ET">Etiopía</option>
              <option value="FJ">Fiji</option>
              <option value="PH">Filipinas</option>
              <option value="FI">Finlandia</option>
              <option value="FR">Francia</option>
              <option value="GA">Gabón</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="GH">Ghana</option>
              <option value="GI">Gibraltar</option>
              <option value="GD">Granada</option>
              <option value="GR">Grecia</option>
              <option value="GL">Groenlandia</option>
              <option value="GP">Guadalupe</option>
              <option value="GU">Guam</option>
              <option value="GT">Guatemala</option>
              <option value="GY">Guayana</option>
              <option value="GF">Guayana Francesa</option>
              <option value="GN">Guinea</option>
              <option value="GQ">Guinea Ecuatorial</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="HT">Haití</option>
              <option value="HN">Honduras</option>
              <option value="HU">Hungría</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IQ">Irak</option>
              <option value="IR">Irán</option>
              <option value="IE">Irlanda</option>
              <option value="BV">Isla Bouvet</option>
              <option value="CX">Isla de Christmas</option>
              <option value="IS">Islandia</option>
              <option value="KY">Islas Caimán</option>
              <option value="CK">Islas Cook</option>
              <option value="CC">Islas de Cocos o Keeling</option>
              <option value="FO">Islas Faroe</option>
              <option value="HM">Islas Heard y McDonald</option>
              <option value="FK">Islas Malvinas</option>
              <option value="MP">Islas Marianas del Norte</option>
              <option value="MH">Islas Marshall</option>
              <option value="UM">Islas menores de Estados Unidos</option>
              <option value="PW">Islas Palau</option>
              <option value="SB">Islas Salomón</option>
              <option value="SJ">Islas Svalbard y Jan Mayen</option>
              <option value="TK">Islas Tokelau</option>
              <option value="TC">Islas Turks y Caicos</option>
              <option value="VI">Islas Vírgenes (EEUU)</option>
              <option value="VG">Islas Vírgenes (Reino Unido)</option>
              <option value="WF">Islas Wallis y Futuna</option>
              <option value="IL">Israel</option>
              <option value="IT">Italia</option>
              <option value="JM">Jamaica</option>
              <option value="JP">Japón</option>
              <option value="JO">Jordania</option>
              <option value="KZ">Kazajistán</option>
              <option value="KE">Kenia</option>
              <option value="KG">Kirguizistán</option>
              <option value="KI">Kiribati</option>
              <option value="KW">Kuwait</option>
              <option value="LA">Laos</option>
              <option value="LS">Lesotho</option>
              <option value="LV">Letonia</option>
              <option value="LB">Líbano</option>
              <option value="LR">Liberia</option>
              <option value="LY">Libia</option>
              <option value="LI">Liechtenstein</option>
              <option value="LT">Lituania</option>
              <option value="LU">Luxemburgo</option>
              <option value="MK">Macedonia, Ex-República Yugoslava de</option>
              <option value="MG">Madagascar</option>
              <option value="MY">Malasia</option>
              <option value="MW">Malawi</option>
              <option value="MV">Maldivas</option>
              <option value="ML">Malí</option>
              <option value="MT">Malta</option>
              <option value="MA">Marruecos</option>
              <option value="MQ">Martinica</option>
              <option value="MU">Mauricio</option>
              <option value="MR">Mauritania</option>
              <option value="YT">Mayotte</option>
              <option value="MX">México</option>
              <option value="FM">Micronesia</option>
              <option value="MD">Moldavia</option>
              <option value="MC">Mónaco</option>
              <option value="MN">Mongolia</option>
              <option value="MS">Montserrat</option>
              <option value="MZ">Mozambique</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Níger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk</option>
              <option value="NO">Noruega</option>
              <option value="NC">Nueva Caledonia</option>
              <option value="NZ">Nueva Zelanda</option>
              <option value="OM">Omán</option>
              <option value="NL">Países Bajos</option>
              <option value="PA">Panamá</option>
              <option value="PG">Papúa Nueva Guinea</option>
              <option value="PK">Paquistán</option>
              <option value="PY">Paraguay</option>
              <option value="PE">Perú</option>
              <option value="PN">Pitcairn</option>
              <option value="PF">Polinesia Francesa</option>
              <option value="PL">Polonia</option>
              <option value="PT">Portugal</option>
              <option value="PR">Puerto Rico</option>
              <option value="QA">Qatar</option>
              <option value="UK">Reino Unido</option>
              <option value="CF">República Centroafricana</option>
              <option value="CZ">República Checa</option>
              <option value="ZA">República de Sudáfrica</option>
              <option value="DO">República Dominicana</option>
              <option value="SK">República Eslovaca</option>
              <option value="RE">Reunión</option>
              <option value="RW">Ruanda</option>
              <option value="RO">Rumania</option>
              <option value="RU">Rusia</option>
              <option value="EH">Sahara Occidental</option>
              <option value="KN">Saint Kitts y Nevis</option>
              <option value="WS">Samoa</option>
              <option value="AS">Samoa Americana</option>
              <option value="SM">San Marino</option>
              <option value="VC">San Vicente y Granadinas</option>
              <option value="SH">Santa Helena</option>
              <option value="LC">Santa Lucía</option>
              <option value="ST">Santo Tomé y Príncipe</option>
              <option value="SN">Senegal</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leona</option>
              <option value="SG">Singapur</option>
              <option value="SY">Siria</option>
              <option value="SO">Somalia</option>
              <option value="LK">Sri Lanka</option>
              <option value="PM">St Pierre y Miquelon</option>
              <option value="SZ">Suazilandia</option>
              <option value="SD">Sudán</option>
              <option value="SE">Suecia</option>
              <option value="CH">Suiza</option>
              <option value="SR">Surinam</option>
              <option value="TH">Tailandia</option>
              <option value="TW">Taiwán</option>
              <option value="TZ">Tanzania</option>
              <option value="TJ">Tayikistán</option>
              <option value="TF">Territorios franceses del Sur</option>
              <option value="TP">Timor Oriental</option>
              <option value="TG">Togo</option>
              <option value="TO">Tonga</option>
              <option value="TT">Trinidad y Tobago</option>
              <option value="TN">Túnez</option>
              <option value="TM">Turkmenistán</option>
              <option value="TR">Turquía</option>
              <option value="TV">Tuvalu</option>
              <option value="UA">Ucrania</option>
              <option value="UG">Uganda</option>
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistán</option>
              <option value="VU">Vanuatu</option>
              <option value="VE">Venezuela</option>
              <option value="VN">Vietnam</option>
              <option value="YE">Yemen</option>
              <option value="YU">Yugoslavia</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabue</option>
              <option value="<?php echo $field29name; ?>" selected><?php echo $field29name; ?></option>
            </select>
            <br />

            <style>
              /* The container */
              .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 16px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
              }

              /* Hide the browser's default checkbox */
              .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
              }

              /* Create a custom checkbox */
              .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
              }

              /* On mouse-over, add a grey background color */
              .container:hover input ~ .checkmark {
                background-color: #ccc;
              }

              /* When the checkbox is checked, add a blue background */
              .container input:checked ~ .checkmark {
                background-color: #2196F3;
              }

              /* Create the checkmark/indicator (hidden when not checked) */
              .checkmark:after {
                content: "";
                position: absolute;
                display: none;
              }

              /* Show the checkmark when checked */
              .container input:checked ~ .checkmark:after {
                display: block;
              }

              /* Style the checkmark/indicator */
              .container .checkmark:after {
                left: 9px;
                top: 5px;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 3px 3px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
              }
            </style>
            <br />
            <p>
              Selecciona la región, país o países de interés
            </p>
            <br />
            <label class="container"
              >Latinoamérica
              <input type="checkbox" checked="checked" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Centroamérica
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Centroamérica
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Suramérica
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Argentina
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Bolivia
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Brasil
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Chile
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Colombia
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Costa Rica
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Cuba
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Ecuador
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >El Salvador
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Guatemala
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Honduras
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >México
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Nicaragua
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Panamá
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Paraguar
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Perú
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >República Dominicana
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Uruguay
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Venezuela
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <br />

            <p>
              Teléfono celular (con indicativo país)
            </p>
            <input
              class="form-input"
              id=""
              type=""
              value="<?php echo $field12name; ?>"
              required
            />
            <br />
            <p>
              Cuenta de Twitter
            </p>
            <br />
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field13name; ?>"
              required
            />
            <br />
            <p>
              ¿Cuál de los siguientes datos de contacto deseas sean públicos en
              la base de datos de AMASSURU?
            </p>
            <br />
            <p>
              <br />
              <label class="container"
                >Correo Electrónico
                <br />
                <input type="checkbox" checked="checked" />
                <span class="checkmark"></span>
              </label>
              <label class="container"
                >Cuenta Twitter
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
              <label class="container"
                >Teléfono Celular
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
              <style>
                /* The container */
                .container {
                  display: block;
                  position: relative;
                  padding-left: 35px;
                  margin-bottom: 12px;
                  cursor: pointer;
                  font-size: 16px;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                }

                /* Hide the browser's default radio button */
                .container input {
                  position: absolute;
                  opacity: 0;
                  cursor: pointer;
                }

                /* Create a custom radio button */
                .checkmark {
                  position: absolute;
                  top: 0;
                  left: 0;
                  height: 25px;
                  width: 25px;
                  background-color: #eee;
                  border-radius: 50%;
                }

                /* On mouse-over, add a grey background color */
                .container:hover input ~ .checkmark {
                  background-color: #ccc;
                }

                /* When the radio button is checked, add a blue background */
                .container input:checked ~ .checkmark {
                  background-color: #2196F3;
                }

                /* Create the indicator (the dot/circle - hidden when not checked) */
                .checkmark:after {
                  content: "";
                  position: absolute;
                  display: none;
                }

                /* Show the indicator (dot/circle) when checked */
                .container input:checked ~ .checkmark:after {
                  display: block;
                }

                /* Style the indicator (dot/circle) */
                .container .checkmark:after {
                  top: 9px;
                  left: 9px;
                  width: 8px;
                  height: 8px;
                  border-radius: 50%;
                  background: white;
                }
              </style>
            </p>
            <br />
            <p>
              Estamos pensando en el futuro armar grupos de Whatsapp de acuerdo
              a los temas de trabajo de las participantes. ¿Estarías dispuesta a
              participar en un grupo?
            </p>
            <br />
            <label class="container"
              >Si
              <input type="radio" checked="checked" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >No
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <br />
            <p>
              Necesitamos clasificar a nuestras afiliadas por temas de
              especialidad. De la siguiente lista escoja el área de trabajo en
              el que desea ser considerada (Máximo 3)
            </p>
            <br />
            <label class="container"
              >1. Prevención y reducción de delitos y/o violencias
              <input type="checkbox" checked="checked" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >2. Gestión de Políticas Públicas de Seguridad
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >3. Monitoreo y Evaluación de Políticas de Seguridad
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >4. Sistemas de Información de Estadística Criminal
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >5. Crimen Organizado
              <input type="checkbox" checked="checked" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >6. Ciberseguridad
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >7. Terrorismo
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >8. Conflicto y Postconflicto
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >9. Fuerzas de Seguridad/Armadas
              <input type="checkbox" checked="checked" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >10. Sistema Judicial
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >11. Sistema Penitenciario
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >12. Cambio Climático y Seguridad
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >13. Cooperación en Seguridad Internacional
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <br />
            <p>
              ¿A qué sector dedica la mayor parte de su tiempo?
            </p>
            <br />
            <label class="container"
              >Sector Público/Gobierno
              <input type="radio" checked="checked" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Investigación Académica/Think-Tank
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Fuerza Pública/ de Seguridad
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >ONG/ Fundación
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Organismo internacional
              <input type="radio" checked="checked" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Periodismo y/o Comunicación
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Consultora independiente / Freelance
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Sector Privado
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Otro:
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <input
              class="form-input"
              id=""
              type="text"
              placeholder="¿Cuál?"
              required
            />
            <br />
            <p>
              ¿Cuál es su máximo nivel de formación profesional?
            </p>
            <br />
            <label class="container"
              >Licenciatura o Pregrado
              <input type="radio" checked="checked" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Especialización
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Maestría en curso
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Maestría Completa
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Doctorado en curso
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Doctorado completo
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <br />
            <p>
              ¿Cuántos años de experiencia tiene en el campo de la seguridad?
            </p>
            <br />
            <label class="container"
              >de 0 a 3 años
              <input type="radio" checked="checked" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >de 3 a 6 años
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >de 6 a 9 años
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >Más de 10 años
              <input type="radio" name="radio" />
              <span class="checkmark"></span>
            </label>
            <br />
            <p>
              Mencione trabajos de su autoría que considere destacables (Máximo
              5)
            </p>
            <br />
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field19name; ?>"
              required
            />
            <br />
            <p>
              Nos gustaría incluir un breve perfil con más detalle acerca de los
              temas de trabajo de cada una. ¿Puedes agregar un párrafo de no más
              de 150 palabras para ser publicado?
            </p>
            <br />
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field26name; ?>"
              required
            />
            <br />
            <p>
              ¿Te gustaría incluir una foto a tu perfil?
            </p>
            <br />
            <label class="container"
              >Si
              <input type="checkbox" checked="checked" />
              <span class="checkmark"></span>
            </label>
            <label class="container"
              >No
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <p>
              Subir enlace público de la foto
            </p>
            <br />
                  <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field28name; ?>"
              
            />

            <br>
            <br>
            <p>
              ¿Puede recomendarnos a otras mujeres del área?
            </p>
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field20name; ?>"
              required
            />
            <p>
              Por favor indica el nombre y correo electrónico de la(s) colega(s)
              que desea referenciar
            </p>
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field21name; ?>"
              required
            />

            <br />
            <p>
              ¿Pertenece a alguna otra red de mujeres? ¿Cuál?
            </p>
            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field22name; ?>"
              required
            />
            <p></p>

            ¿Tiene comentarios sobre esta iniciativa, o sobre el formulario?
         
            

            <input
              class="form-input"
              id=""
              type="text"
              value="<?php echo $field23name; ?>"
              required
            />

            <br />

            <br />
            <!--        buttons -->
            <!--      button LogIn -->
            <button class="btn btn-secondary">Actualizar</button>
          </div>

          <!--   End Conrainer  -->
        </div>

        <!-- End Form -->
      </form>
    </div>
   
   
   
</body>
</html>
