<?php 
if ($_GET["valor"]==1) {
echo '<input pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.-]{2,48}" class="buscar" name="busca" type="search" autofocus id="Familycomplete" onkeypress="cambio();">
			<label>Family<label>
		';
}elseif ($_GET["valor"]==2) {
	echo '
			<input  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.-]{2,48}" class="buscar " name="busca" type="search"  autofocus id="Genuscomplete">
			<label>Genus<label>
			';
}
 ?>
