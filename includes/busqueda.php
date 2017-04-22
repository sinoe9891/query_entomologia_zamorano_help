
  <?php  
require_once('base/conexion.php');
// Aqui validamos si la variable $_POST["busca"] existe como validacion
// Si es que esta cargando la pagina o haciendo una bsuqueda.
if(empty($_POST))
  {
    echo '<h4 align="center">Enter data to search</h4>';;
  //si es una Busqueda entrara en este siguente IF lo cual iniciara el proceso
  }elseif(!empty($_POST)){
  //Sustituimos caracteres especiales para que el servidor no lo determine como codigo
    if ($_POST["search"]=="family") {
        $busca=htmlspecialchars($_POST["autoFamily"]);
    }elseif ($_POST["search"]=="genus") {
      $busca=htmlspecialchars($_POST["autoGenus"]);
    }
    
    //Validacion interna de lo valores en el campo de busqueda
    if(filter_var($_POST, FILTER_VALIDATE_INT)){
      echo "You must write letters from A - Z";
    }else {
      $busqueda="SELECT locality_data,deremination_label,order1,family,subfamily,tribe,genus,species FROM entomologia3 WHERE family LIKE '%".$busca."%'  OR genus LIKE '%".$busca."%' GROUP BY order1,family,subfamily,tribe,genus,species ORDER BY `entomologia3`.`species` ASC";
      //cambiar nombre de la tabla de busqueda

      $resultado = $mysqli->query($busqueda); 
      //Ejecución de la consulta
      //Si hay resultados...
      if (mysqli_num_rows($resultado) > 0){ 
        echo '<h4 align="center">WE HAVE FOUND ' . mysqli_num_rows($resultado) . ' RECORDS FOR "'.$busca.'"</h4>';
        echo '<table class="striped responsive-table" id="myTable">
           <thead>
             <td><strong>Family</strong></td>
             <td><strong>Subfamily</strong></td>
             <td><strong>Tribe</strong></td>
             <td><strong>Genus</strong></td>
             <td><strong>Species</strong></td>
             <td><strong>Locality Data</strong></td>
             <td><strong>Determination Label</strong></td>
           </thead><tbody>';

          while($f=mysqli_fetch_array($resultado)){


              echo '<tr><td>'.$f['family'].'</td>
              <td>'.$f['subfamily'].'</td>
              <td>'.$f['tribe'].'</td>
              <td>'.$f['genus'].'</td>
              <td>'.$f['species'].'</td>
              <td>'.$f['locality_data'].'</td>
              <td>'.$f['deremination_label'].'</td>
              </tr>';

          //onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
          //cambiar los nombres de los campos de busqueda
          }
          echo "<tbody></table>";
    }else{
      echo '<h4 align="center">WE HAVE FOUND ' . mysqli_num_rows($resultado) . ' RECORDS</h4>';

    }
}
}

?>
