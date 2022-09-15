<?php
include_once '../Conexion.php';
include "./Test_varaibles.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  	<link rel="icon" type="image/png" sizes="32x32" href="../files/logoUPT.svg"  >
  	<title>UPT app 2022</title>
  	<link rel="stylesheet" href="styles.css">
  	<!-- Modificamos el Style -->
  	<style>
    	.attribution { font-size: 11px; text-align: center; }
    	.attribution a { color: hsl(228, 45%, 44%); }
  	</style>
</head>

<body>
    <main class="main-container">
        <section class="first-section">  				
          <!-- El main card vendria a ser   -->  
        	<div class="main-card">            <!--La primera seccion contendra la imagen , la segunda seccion tendra el titulo con el nombre del estudiante  
                                                  En la aplicacion desktop estas secciones se agruparan de manera distinta-->
           			<!-- Todo esta primera clase sera el recueadro superior que contendra la imagen , el texto y el nombre -->
            	<div class="main-card__user">                                    
                	<img class="main-card__image" src="../images/Fernando.PNG" width="200px" heigth="120px "alt="Fernando">      
					    <!-- En la parte de src (System Resource Controller) especificamos el url de la imagen que tomaremos
                        En alt colocaremos un texto que se nos mostrara en caso que no carge la imagen de src. --> 
						                                    <!--  --> 
              			<!-- Nuestro programa esta diseñado para tener dos bloques , dentro del primer div (el de arriba) terndremos el bloque de la foto del usuario
                   		Y en el div de abajo tendremos las clases: m-c_name y m-c_title para nuestros parrafos-->              			
              		<div>
                		<p class="main-card__title" > Reporte de el alumno: </p>  <!--Dentro del div contenedor tendremos tre elementos: la imagen , el parrafo y el nombre del usuario -->
                		<p class="main-card__name" > Fernando Acostupa</p>       <!--Cada uno de estos elementos seran elementos hijos de el div que los contiene -->      
            		</div>
       			</div> 
				                                            <!--  -->                         
            	<!-- Aqui en este nuevo div tendremos las fechas y los botones -->
            	<div class ="main-card__dates">
             		<!-- Para diferenciar cual de los textos esta siendo presionado les colocaremos un ID-->
              		<p>Resumen del estudiante</p>
               		<!-- La estructura de las clases es: el-bloque_elemento  , otro-bloque_elemento--modificador    [Utilizamos la metodolodia bem] -->
               		<!-- El elemento de coloca con doble guion bajo ( __ ) y el modificador con doble guion medio (--)   
                    utilizando un modificador nos permitira cambiar el estilo del texto que esta siendo seleccionado -->
              		<p id="semanal" class= "main-card__frequency" class="main-card__frequncy--active" >Semanal <?php #echo $fruta ?></p>            
              		<p id="mensual" class= "main-card__frequency" class="main-card__frequncy--active" >Mensual</p>
              		<p id="semestral" class= "main-card__frequency" class="main-card__frequncy--active" >Semestral</p>
            	</div>
            </div>  
    	</section>


        <section class="second-section">
          <!--Creamos la clase cards(este sera nuestro bloque) , por lo que todos los divs dentro de este seran elementos: cards__elemento -->
          	<div class= "cards">   
            	<div class= "card__background">                                          <!-- https://es.acervolima.com/como-cambiar-el-tamano-de-una-imagen-svg/ -->
              		<img src ="../files/calendar-day-solid.svg" width="40" heigth="60" alt="Calendario-dia">  <!-- Ajustamos el tamaño de el archivo svg usando w y h  -->
            	</div>
            	<div class ="card_details">
               		<div class="card__activity">
                		<p class="card__title"></p>
                		<img src="../files/ellipsis-solid.svg" width="100" heigth="300" alt ="tres puntos">
              		</div>
              		<div class="card_hours">  <!-- https://es.stackoverflow.com/questions/77302/mostrar-contenido-de-una-variable-en-html-desde-php-->
                		<p class="Card_hour"> <?php echo $horas1  ?>  </p>
                		<p class="Card_previous"> <?php echo $horasprevias  ?>  </p>
              		</div>
            	</div>
          	</div> 
          <!-- Creamos las 6 tarjetas -->
		  
          <!-- Primera Tarjeta Trabajo -->
          	<div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/eye-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title"> Actividad </p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> 

          <!-- Segunda Tarjeta  -->
		    <div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/book-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title"> Estado </p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> 

          <!-- Tercera Tarjeta -->
		    <div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/eye-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title"> Informacion </p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> 
			
            <!-- Cuarta Tarjeta
		    <div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/eye-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title">Work</p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> 

          		 Quinta Tarjeta
		    <div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/eye-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title">Work</p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> 

                Sexta Tarjeta
		    <div class="card-work">
            	<div class="card-work__background">
             		<img class="card-work__background--image" src="..//files/eye-solid.svg" width="200" heigth="300" alt="Icono de el tema">
            	</div>
            	<div class="card-work__details">
                	<div class="card-work__up">
                  		<p class="card-work__title">Work</p>
                  		<img class="card-work__dots" src="../files/ellipsis-solid.svg" alt="dots">
                	</div>
                	<div class="card-work__down">
                  		<p class="card-work__hours">32hrs</p>
                  		<p class="card-work__state">Previous - 7hrs</p>
                	</div>
            	</div>
          	</div> -->
        </section>
    </main>	
    <!-- <footer class="attribution">
        Test N°3 <a href="https://www.frontendmentor.io?ref=challenge" target="_blank"> Link </a>. 
    	Referenciado <a href="https://www.youtube.com/CodingTube"> Fernando</a>.
    </footer>  -->
  	<script type="module" src="./main.js"></script>
</body>
</html>