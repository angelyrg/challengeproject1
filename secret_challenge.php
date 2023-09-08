<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hack Challenge</title>
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


        .input-text {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #97e304;
            color: #fff;
            outline: none;
            margin-top: 20px;
            padding: 10px 0;
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
            width: 100%; /* Ancho igual al del input */
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-btn:hover{
            background-color: #88cc04;
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
        <h4 class="text-center">Hola amigo :)</h4>
        <input type="text" class="input-text" placeholder="Código de validación" autofocus>
        <div class="btn-wrapper">
            <button class="custom-btn">Validar</button>
        </div>
    </div>

    <script src="test.js"></script>
    <script>
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
    </script>
</body>

</html>