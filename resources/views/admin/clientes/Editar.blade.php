

<form action = "/inicio" method="post">

<input type="hidden" name="_token" value = "<?php echo csrf_token(); ?>">


<label for="">rut_cl</label><br>

<input type="text" name="rut_cl"></br>

<input type = 'submit' value = "Edit Clientes"/>

</form>