<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Challenge</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@300;500;600;700&display=swap');

        body {
            margin: 0;
            overflow: hidden;
            background-color: #141c2a;
            font-family: 'Urbanist', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #1b2333;
            color: #fff;
            width: 300px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #header_text.loop_size{
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        #form_container > p{
            margin-top: 30px;
        }
        #form_container > span{
            font-size: .8em;
            color: #97e304;
        }

        .input_wrapper{
            text-align: start;
        }

        .input-text {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #97e304;
            color: #fff;
            outline: none;
            margin-top: 20px;
            margin-bottom: 5px;
            padding: 10px 0;
            width: 100%;
        }

        .btn-wrapper {
            margin-top: 20px;
            text-align: center;
        }

        .custom-btn {
            background-color: #97e304;
            color: #333;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .hide{
            transition-duration: 1.5s;
            transition-timing-function: ease-in;
            transform: scale(0);
        }
        .show{
            transition-duration: .5s;
            transition-timing-function: ease-out;
            transform: scale(1);
        }

        .custom-btn:hover{
            background-color: #88cc04;
        }

        .custom-btn:active {
            transform: scale(0.95);
        }

        .custom-btn:focus {
            outline:none;
        }

        .initial-clue{
            font-size: .7em;
            margin-top: 10px;
            color: rgba(255, 255, 255, 0.2);

            animation: fade 10s ease-in-out infinite;

        }
        @keyframes fade {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }

        /* Estilos para el contenedor de partículas */
        #particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div id="particles-container"></div>
    <div class="card">
        <?php 
            $flag = false;
            if (isset($_COOKIE['solved_time'])) {
                $fechaExpiracion = $_COOKIE['solved_time'];
                if ($fechaExpiracion > time()) {
                    $flag = true;
                }
            }
            if (!$flag){
                ?>
                <h4 class="text-center" id="header_text">¡Hola! 👋🙂</h4>
                <div id="form_container" class="text-center">
                    <p class="fst-italic">Encuentra el código de validación para completar el challenge.</p>
                    <div class="input_wrapper">
                        <input type="text" class="input-text" name="code" id="code" placeholder="Código de validación" autocomplete="off" autofocus>
                        <small id="msg" ></small>
                    </div>
                    <div class="btn-wrapper">
                        <button class="custom-btn" id="validate_button">Validar</button>
                    </div>
                    <label class="initial-clue">Tienes un mensaje en la consola</label>
                </div>
                <?php
            }else{

                ?>
                <h4 class="text-center" id="header_text">Hola de nuevo :)</h4>
                <div id="form_container" class="text-center">
                    <p>Ya has completado este challenge</p>
                    <small class="msg">Vuelve más tarde para intentarlo nuevamente ;)</small>
                </div>
                <?php

            }
         ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="codigo_validacion.js"></script>
    <script>

console.log(`%c
              |))    |))
.             |  )) /   ))
\\\\   ^ ^      |    /      ))
 \\\\(((  )))   |   /        ))
  / G    )))  |  /        ))
 |o  _)   ))) | /       )))
  --' |     ))\`/      )))
   ___|              )))
  / __\\             ))))\`()))
 /\\@   /             \`(())))
 \\/   /  /\`_______/\\   \\  ))))
      | |          \\ \\  |  )))
      | |           | | |   )))
      |_@           |_|_@    ))
     /_/           /_/_/
Valkyrie quiere decirte algo:\nEsta página carga un archivo js interesante.`, 'color:#9acc14; font-family: monospace');

        particlesJS('particles-container', {
            "particles": {
                "number": {
                    "value": 50, // Cantidad de partículas
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff" // Color de las partículas
                },
                "shape": {
                    "type": "circle", // Forma de las partículas (puedes usar "circle", "edge", "triangle", etc.)
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                },
                "opacity": {
                    "value": 0.5, // Opacidad de las partículas
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3, // Tamaño de las partículas
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150, // Distancia entre partículas
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                }
            }
        });

        const validate_btn = document.getElementById("validate_button");
        const form_container = document.getElementById("form_container");
        const header_text = document.getElementById("header_text");        

        validate_btn.addEventListener('click', function(e){

            const code_input = document.getElementById('code');
            if (code_input.value == ''){
                return;
            }            
            const data = { input_code: code_input.value };
            fetch('validate_code.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('La solicitud no fue exitosa');
                }
                return response.json();
            })
            .then(data => {
                const valid_code = data.valid;

                const input_text = document.getElementById("code");
                const msg = document.getElementById("msg");
                if (!valid_code){
                    input_text.style.borderBottomColor="#E74C3C";
                    msg.style.color="#E74C3C";
                    msg.textContent  = "Código inválido";
                    
                }else{

                    const URL_API = "https://api.ipify.org/?format=json";
                    fetch(URL_API)
                        .then(respuestaRaw => respuestaRaw.json())
                        .then(respuesta => {
                            abc = respuesta.ip;
                            const cba = { c: code_input.value, a:abc };
                            fetch('tbwf_dpef.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify(cba)
                            });
                    });

                    input_text.style.borderBottomColor="#97e304";
                    msg.style.color="#97e304";
                    msg.textContent  = "Código válido";

                    document.getElementById("header_text").textContent = "¡¡Felicidades!!";
                    document.getElementById("header_text").classList.add('loop_size');


                    const part_container = document.getElementById("particles-container");
                    const jsConfetti = new JSConfetti({ part_container })
                    jsConfetti.addConfetti()
                    setTimeout(()=>{form_container.classList.add("hide")}, 1000);
                    setTimeout(()=>{
                        form_container.innerHTML = `<p>Lograste completar el challenge.</p><img src="edc2181b40e3b.gif" class="img-fluid px-5" alt=""><span>Deberías estar orgulloso de ti :)</span>`;
                        form_container.classList.add("show");
                    }, 2500);
                }
            })
            .catch(error => {
                console.error('Ocurrió un error:', error);
            });
        });
        
    </script>
</body>

</html>