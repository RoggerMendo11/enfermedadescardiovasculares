<?php
    if ($_SESSION['tipo_sbm']!= "Administrador") {
        echo $lc->forzar_cierre_sesion_controlador();
    }
?>
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Sistema web <small>Cinica Baca & Mariños</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
            <?php 
                require "./controladores/administradorControlador.php";
                $IAdmin= new administradorControlador();

                //conteo administrador
                $CAdmin=$IAdmin->datos_administrador_controlador("Conteo",0);
             ?>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Administradores
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $CAdmin->rowCount(); ?></p>
					<small>Registrados</small>
				</div>
			</article>

            <!-- conteo para pacientes-->
            <?php 
                require "./controladores/pacienteControlador.php";
                $IPaciente= new pacienteControlador();

                //contando los pacientes registrados 
                // el el parametro $codigo, ponemos el 0, porque no utlizamos ese parametro
                $CPaciente=$IPaciente->datos_paciente_controlador("Conteo",0);
             ?>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Pacientes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $CPaciente->rowCount(); ?></p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Sesiones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">70</p>
					<small>Register</small>
				</div>
			</article>
		</div>
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Control <small>de Sesiones</small></h1>
			</div>
			<section id="cd-timeline" class="cd-container">
                <!-- para cmabiar lo estatico con dinamico, se tiene que borrar
                    primero lo dinamico, y adaptarlo en el controlador. Luego
                    en donde se borró lo dinamico osea en la vista,
                    abrir codigo php y su cierre, requiere el controlador que se va usasr
                    , luego se crea un objeto dedl controlador, se instancia. Despues con
                    echo , con el objeto creo, y simbolo de flecha, se llama a la function del controlador.
                    con sus parametros
                -->
                <?php 
                    require "./controladores/bitacoraControlador.php";
                    $IBitacora = new bitacoraControlador();
                     echo $IBitacora->listado_bitacora_controlador(5);
                 ?>
            </section>


		</div>