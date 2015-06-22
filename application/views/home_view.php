<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/codeigniter/css/foundation.css" />
    <link rel="stylesheet" href="http://localhost/codeigniter/css/foundation.min.css" />
    <link rel="stylesheet" href="http://localhost/codeigniter/css/normalize.css" />

    <script src="http://localhost/codeigniter/js/fondation.min.js"></script>
  
    <script src="http://localhost/codeigniter/js/vendor/modernizr.js"></script>
    <script src="http://localhost/codeigniter/js/vendor/fastclick.js"></script>
    <script src="http://localhost/codeigniter/js/vendor/jquery.cookie.js"></script>
    <script src="http://localhost/codeigniter/js/vendor/jquery.js"></script>
    <script src="jhttp://localhost/codeigniter/s/vendor/placeholder.js"></script>

    <script src="http://localhost/codeigniter/js/foundation/foundation.abide.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.accordion.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.alert.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.clearing.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.dropdow.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.equalizer.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.interchange.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.joyride.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.magellan.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.offcanvas.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.orbit.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.reveal.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.slider.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.tab.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.tooltip.js"></script>
    <script src="http://localhost/codeigniter/js/foundation/foundation.topbar.js"></script>






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
