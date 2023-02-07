<?php
require_once "config.php";
?>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
</head>
<body>
  <div align="center">                        
    <p>Seleccione un pais del siguiente menú:</p>
    <p>Paises:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $link -> query ("SELECT * FROM Directorio");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores["id"].'">'.$valores["COL 29"].'</option>';
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
</body>

</html>
