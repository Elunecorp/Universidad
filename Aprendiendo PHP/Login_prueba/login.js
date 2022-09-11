/*  Esta es una base de datos de prueba , jamas de deberia usar este tipo de base de datos 
    cuando queremos proteger la infrmacion de los usuarios , esto deberia esta en la parte del servidor y 
    no en el almacenamiento local del cliente.
*/
baseDeDatos = localStorage.getItem("sistema-de-login")
//Cargaremos los datos iniciales de la BD , esto nos servira para compactarla.
if(!baseDeDatos){
    cargarDatosBD()
}


function cargarDatosBD(){
    baseDeDatos = {
        2019063857:{
            contraseña:"2019063857",
            puntaje: 0,
        },
        2019063858:{
            contraseña:"2019063857",
            puntaje: 0,
        },
        2016065877:{
            contraseña:"2019063857",
            puntaje: 0,
        },
    
    };
}
swal.fire("OK")
