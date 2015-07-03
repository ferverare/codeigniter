 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Formularios GET</title>
       <?=$this->load->view('header/style');?>
  </head>


 <h1>Agregando registro utilizando Form Validation</h1>
 

  <form  style="width: 80%"role="form" id="form" name="form" action="<?=base_url()?>index.php/api/userBusqueda" method="POST">
        
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



