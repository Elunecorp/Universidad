<?php
include "./Test_varaibles.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/Fernando.PNG">
  
  <title>Frontend Mentor | Time tracking dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
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
              <div>
                <img class="main-card_image" src="./images/Fernando.PNG" alt="">      <!-- En la parte de src (System Resource Controller) especificamos el url de la imagen que tomaremos
                  En alt colocaremos un texto que se nos mostrara en caso que no carge la imagen de src. -->
              </div>      
              <!-- Nuestro programa esta diseñado para tener dos bloques , dentro del primer div (el de arriba) terndremos el bloque de la foto del usuario
                   Y en el div de abajo tendremos las clases: m-c_name y m-c_title para nuestros parrafos
              -->
              <div>
                <p class="main-card_name" Reporte de el alumno: </p>  <!--Dentro del div contenedor tendremos tre elementos: la imagen , el parrafo y el nombre del usuario -->
                <p class="main-card_title" Fernando Acostupa</p>       <!--Cada uno de estos elementos seran elementos hijos de el div que los contiene -->      
              </div>
            </div> 
            
            
            <!-- Aqui en este nuevo div tendremos las fechas y los botones -->
            <div class ="main-card__dates">
              <!-- Para diferenciar cual de los textos esta siendo presionado les colocaremos un ID-->
              <p>Resumen del estudiante</p>
               <!-- La estructura de las clases es: el-bloque_elemento  , otro-bloque_elemento--modificador    [Utilizamos la metodolodia bem] -->
               <!-- El elemento de coloca con doble guion bajo ( __ ) y el modificador con doble guion medio (--)   
                    utilizando un modificador nos permitira cambiar el estilo del texto que esta siendo seleccionado -->
              <p id="semanal" class= "main-card__frequency" class="main-card_frequncy--active" >Semanal <?php #echo $fruta ?></p>            
              <p id="mensual" class= "main-card__frequency" class="main-card_frequncy--active" >Mensual</p>
              <p id="semestral" class= "main-card__frequency" class="main-card_frequncy--active" >Semestral</p>
            </div>

          </div>  
        </section>


        <section class="second-section">
          <!--Creamos la clase cards(este sera nuestro bloque) , por lo que todos los divs dentro de este seran elementos: cards__elemento -->
          <div class= "cards">   
            <div class= "card__background">                                          <!-- https://es.acervolima.com/como-cambiar-el-tamano-de-una-imagen-svg/ -->
              <img src ="files/calendar-day-solid.svg" width="40" heigth="60" alt="Calendario-dia">  <!-- Ajustamos el tamaño de el archivo svg usando w y h  -->

            </div>
            <div class ="card_details"
              <div class="card__activity">
                <p class="card__title"></p>
                <img src="./files/ellipsis-solid.svg" width="100" heigth="300" alt ="tres puntos">
              </div>
              <div class="card_hours">  <!-- https://es.stackoverflow.com/questions/77302/mostrar-contenido-de-una-variable-en-html-desde-php-->
                <p>  </p>
                <p>  </p>


              </div>
              </div>
          </div> 

        </section>


       <!-- <div class="card-work">
        <div class="card-work__background">
          <img class="card-work__background--image" src="./images/icon-work.svg" alt="">
        </div>
        <div class="card-work__details">
          <div class="card-work__up">
            <p class="card-work__title">Work</p>
            <img class="card-work__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-work__down">
            <p class="card-work__hours">32hrs</p>
            <p class="card-work__state">Previous - 7hrs</p>
          </div>
        </div>
      </div> -->
      <!--
      <div class="card-play">
        <div class="card-play__background">
          <img class="card-play__background--image" src="./images/icon-play.svg" alt="play">
        </div>
        <div class="card-play__details">
          <div class="card-play__up">
            <p class="card-play__title">Play</p>
            <img class="card-play__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-play__down">
            <p class="card-play__hours">32hrs</p>
            <p class="card-play__state">Previous - 7hrs</p>
          </div>
        </div>
      </div>
      <div class="card-study">
        <div class="card-study__background">
          <img class="card-study__background--image" src="./images/icon-study.svg" alt="study">
        </div>
        <div class="card-study__details">
          <div class="card-study__up">
            <p class="card-study__title">Study</p>
            <img class="card-study__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-study__down">
            <p class="card-study__hours">32hrs</p>
            <p class="card-study__state">Previous - 7hrs</p>
          </div>
        </div>
      </div>
      <div class="card-exercise">
        <div class="card-exercise__background">
          <img class="card-exercise__background--image" src="./images/icon-exercise.svg" alt="exercise">
        </div>
        <div class="card-exercise__details">
          <div class="card-exercise__up">
            <p class="card-exercise__title">Exercise</p>
            <img class="card-exercise__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-exercise__down">
            <p class="card-exercise__hours">32hrs</p>
            <p class="card-exercise__state">Previous - 7hrs</p>
          </div>
        </div>
      </div>
      <div class="card-social">
        <div class="card-social__background">
          <img class="card-social__background--image" src="./images/icon-social.svg" alt="social">
        </div>
        <div class="card-social__details">
          <div class="card-social__up">
            <p class="card-social__title">Social</p>
            <img class="card-social__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-social__down">
            <p class="card-social__hours">32hrs</p>
            <p class="card-social__state">Previous - 7hrs</p>
          </div>
        </div>
      </div>
      <div class="card-self-care">
        <div class="card-self-care__background">
          <img class="card-self-care__background--image" src="./images/icon-self-care.svg" alt="self care">
        </div>
        <div class="card-self-care__details">
          <div class="card-self-care__up">
            <p class="card-self-care__title">Self Care</p>
            <img class="card-self-care__dots" src="./images/icon-ellipsis.svg" alt="dots">
          </div>
          <div class="card-self-care__down">
            <p class="card-self-care__hours">32hrs</p>
            <p class="card-self-care__state">Previous - 7hrs</p>
          </div>
        </div>
      </div> -->

    
  </main>
  <!-- <footer class="attribution">
    Test N°3 <a href="https://www.frontendmentor.io?ref=challenge" target="_blank"> Link </a>. 
    Referenciado <a href="https://www.youtube.com/CodingTube"> Fernando</a>.
  </footer>  -->
  <script type="module" src="./main.js"></script>
</body>
</html>