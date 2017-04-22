<!DOCTYPE html>
<html>
<style>
  #ui-id-1{
    padding: 10px;
    background-color: #ffffff;
    width: 300px;
    z-index: 2;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
    cursor: pointer;
  }
  #ui-id-2{
    padding: 10px;
    background-color: #ffffff;
    width: 300px;
    z-index: 2;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
    cursor: pointer;
  }
.ui-menu-item{
    padding: 5px;
  }
  .ui-widget-content .ui-state-active{
    background-color: #f2f2f2;
    padding-top: 3px;
    
  }

  .hidden{
    display: none;
  }
  .visible{
  display: block;
  }

</style>
  <?php require_once('base/session.php'); ?>
  <?php require_once('base/header.php'); ?>
  
<body >

<?php require_once('base/nav.php'); ?>
  

  <main class="container"> 

    <div class="row" > 
      <div  class="col s12 m12 l12" align="center">
        <h3 >ENTOMOLOGY</br>EAPZ DATABASE</h3>
        <p>Search by </br><strong>Family</strong> (e.g. Cerambycidae) or <strong>genus</strong> (e.g. Arhopalus).</p>
        <h6><strong><?php if(isset($_SESSION['perfiles_user']) ){echo "Usuario: ".$_SESSION['perfiles_user'];}?></strong></h6>
      </div>
    </div>

    <div class="row">
      <form  name="form1" method="post" action="index.php" id="cdr" class="container">
          
          <div align="center">
            <input name="search" type="radio"  id="family" checked value="family" onchange="checkBox();"/>
            <label for="family">Family</label>
            <input name="search" type="radio"  id="genus" value="genus" onchange="checkBox();"/>
            <label for="genus">Genus</label>
          </div>

          <div class="input-field col s12 " id="Family">
          <i class="material-icons prefix">search</i>

          <input class="active validate autocomplete" name="autoFamily" type="text"  autofocus id="autoFamily" 
          pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.-]{2,48}" >

      <label for="autocomplete">Family <label>
          </div>
          <div class="input-field col s12 " hidden id="Genus" >
          <i class="material-icons prefix">search</i>

          <input class="active validate autocomplete" name="autoGenus" type="text"  autofocus id="autoGenus" 
          pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.-]{2,48}" >

      <label for="autocomplete">Genus<label>
          </div>

          
    </div>
    
    <div class="row" align="center">
        <div class="col s12 m12 l12" align="center">
            <button align="center" class="waves-effect waves-light btn-large ripple-effect " style="background-color: rgb(232,172,53);" name="buscador" type="submit"><i class="material-icons left">send</i>Search</button>
        </div>
    </div>
    </form> 
 
    
    <div class="row">
        <?php require_once('includes/busqueda.php'); ?>
        
    </div>


   

  </main>


<?php require_once('base/footer.php'); ?>
  </body>
</html>






