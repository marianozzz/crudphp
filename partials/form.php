<?php if(isset($user))
{

foreach($user as $item){

?>
<input type="text" hidden name="id" value="<?php echo $item['id']; ?>">
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="nombre" value="<?php echo $item['name'];?>" class="form-control" placeholder="Ingrese un nombre" required>
</div>
<div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" name="apellido"  value="<?php echo $item['lastname'];?>" class="form-control" placeholder="Ingrese apellido" required>
</div>

<?php 
    } /*if */ 
        } //foreach
?>