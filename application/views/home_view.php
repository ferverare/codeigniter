<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Productos</title>
       <?=$this->load->view('header/style');?>
  </head>
  <body>

    

  <?=$this->load->view('header/menu');?>

    <h1>Inicio</h1>

    <h2>Bienvenido <?php echo $username; ?>!</h2>

    <div id="productos">

    <?php  echo $this->table->generate($productos); ?>
    	
    </div>
    <a href="home/logout">Salir</a>
  </body>
</html>
