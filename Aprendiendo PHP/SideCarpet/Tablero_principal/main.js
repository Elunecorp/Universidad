import data from './data.json' assert {type: 'json'}

let BgColors = [
    {activity: 'actividad', color: 'hsl(120, 100%, 70%)'},
    {activity: 'asistencia', color: 'hsl(195, 74%, 62%)'},
    {activity: 'resumen', color: 'hsl(310, 100%, 68%)'},
]
// Console.log(data)

let semanalArray = data.map(item => item.timeframes.semanal);          // item.timeframes.daily   , si cambiamos dayli por semanal debemos cambiar la variable tambien en 
let mensualArray = data.map(item => item.timeframes.mensual);         // nuestro data.json dentro de timeframes
let semestralArray = data.map(item => item.timeframes.semestral);

// Para nuestras variables seleccionables:   
// Ademas como "semanal" es un ID debemos usar un # 

//Colocaremos a nuestros botones con los nombres: semanalBtn , mensualBtn , semestralBtn
let semanalBtn = document.querySelector('#semanal');
let mensualBtn = document.querySelector('#mensual');
let semestralBtn = document.querySelector('#semestral');

//tenemos un elemento al que podemos llamar con query selector
let secondSection = document.querySelector('.second-section')


// Por cada uno de estos elementos se deberia dibujar una tarjeta
// Entonces forEach(element)  => dibujara una tarjeta
data.forEach(element=>{
    console.log(element.title.toLocaleLowerCase())
});

// Para semanalBtn (boton semanal) crearemos un evento que queremos escuchar, este evento es el evento click
// Asi cada vez que alguien clikea en la ID lo sabremos. , en consola podremos ver si funciona usando: console.log('se hizo click');
semanalBtn.addEventListener('click', ()=>{    
    drawElements(semanalArray);
});

mensualBtn.addEventListener('click', ()=>{    
    drawElements(mensualArray);
});

semestralBtn.addEventListener('click', ()=>{    
    drawElements(semestralArray);
});

function drawElements(array){
    secondSection.innerHTML = '';
    array.forEach((element, index) => {
        let activity = data[index].title;
        let activityLowerCase = activity.toLocaleLowerCase();
        
        //Buscar el color
        let colorObject = BgColors.find(element => element.activity === activityLowerCase)
        console.log()

        if(activityLowerCase === 'self care'){
            activityLowerCase = 'self-care'
        }

        
        secondSection.innerHTML += `
        <div class="card">
            <div class="card__background" style="background-color: ${colorObject.color};">
            <img class="card__background--image" src="../files/icon-${activityLowerCase}.svg" heigth="60px" width="40" alt="">
            </div>
            <div class="card__details">
                <div class="card__up">
                    <p class="card__title">${activity}</p>
                    <img class="card__dots" src="../files/icon-ellipsis.svg" heigth="40px" width="20" alt="dots">
                </div>
                <div class="card__time">
                    <p class="card__hour"> --> ${element.current}hrs</p>   <!--Aqui estamos imprimiento en car hour , el elemento de nuestra tabla json y current(actual)-->
                    <p class="card__previous">Anteriormente - ${element.previous}hrs</p>    <!--Entonces debemos cambiar el nombre de los elementos en el archivo data.json -->
                </div>
            </div>
        </div>
        ` 
    });
}