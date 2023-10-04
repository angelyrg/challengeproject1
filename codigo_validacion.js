/*
    Puedes ejecutar esta funcion para obtener la siguiente pista.
    ¡Suerte!
*/

async function obtenerCodigo(){
    const response = await fetch("qjtub1.php");
    const data = await response.json();
    console.log(data);
}
