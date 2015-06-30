 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Users Post</title>
       <?=$this->load->view('header/style');?>
  </head>
  <body>
  <h1>Agregar Usuarios</h1>

  <form  style="width: 35%"role="form" id="form" name="form" action="<?=base_url()?>index.php/api/userPost" method="GET">
        
            <label for="nombre">Nombre</label>
            <input type="text" id="username" name="username" >
            <br/>
            <label for="Contraseña">Contraseña</label>
            <input type="password" id="password" name="password" >
            <br/>
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion" >
            <br/>

            <button type="submit" id="guardar" name="guardar">Guardar</button>              
          
        </form>

  <h1>Agregar Productos</h1>

  <form  style="width: 35%" role="form" id="form" name="form" action="<?=base_url()?>index.php/api/productoPost" method="POST">
        
            <label for="sku">Sku</label>
            <input type="text" id="sku" name="sku" placeholder="Sku producto">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto">

            <label for="descripcion">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion producto">
           
            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" placeholder="Cantidad producto">

            <label for="precio_individual">Precio Individual</label>
            <input type="text" id="precio_individual" name="precio_individual" placeholder="Precio Individual">

            <label for="precio_total">Precio Individual</label>
            <input type="text" id="precio_total" name="precio_total" placeholder="Precio Total">
    
          

            <button type="submit" id="guardar" name="guardar">Guardar</button>              
          
    </form>
  </body>
</html>
