<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación grupo KFC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            background-color: #f8f9fa;
            overflow-y: auto;
        }

        .content {
            max-width: 600px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }

        p {
            text-align: left;
        }

        #resultado, #resultado-suma {
            margin-top: 20px;
            height: 100px;
            resize: none;
        }

        .question {
            margin-top: 50px;
        }

    </style>
</head>
<body>
<div class="content">
    <div class="question">
        <h2>1.- Problemas de diseño - 1 punto</h2>
        <p>Has sido encargado de plantear una solución al siguiente problema.</p>
        <p>Imagina que tenemos un sistema escrito en cualquier lenguaje de programación compilado,
            este sistema se conecta a una base de datos SQL, el sistema funciona muy bien cuando hay
            baja demanda de transacciones, pero cuando la cantidad de transacciones aumenta el sistema
            deja de responder solicitudes, se encontró que la base de datos es el cuello de botella y no
            acepta solicitudes en paralelo para completar las transacciones. ¿Qué solución plantearías
            para receptar más cantidad de transacciones adaptándonos al cuello de botella de la base de
            datos?</p>
        <p><b>Respuesta:</b> <br> Teniendo en cuenta que el cuello de botella se genera cuando la cantidad de transacciones aumenta, lo mas acertado seria crear un sistema de colas, que gestione
            las peticiones hacia la base de datos, controlando el flujo de estas y haciendo que se puedan atender de manera asincrona. Esto permite que si las transacciones aumentan, solo se sature
            la cola y no la base de datos, por lo cual eventualmente cada transaccion sera procesada sin que la base de datos se caiga o colapse. Dependiendo de las consultas que necesitemos tambien
            podemos considerar el uso de cache (por ejemplo Redis), para mejorar los tiempos y evitar consultas redundantes. </p>
    </div>

    <div class="question">
        <h2>2.- Encripta tu mensaje – 3.5 puntos</h2>
        <p>Has sido encargado de desarrollar una nueva forma de encriptar comunicaciones.</p>
        <p>Básicamente, cada vocal del mensaje de entrada deberá ser precedida por otra cadena,
            llamada la clave. La función recibirá dos parámetros de cadena: el primero será la clave y el
            segundo, el mensaje. La función devolverá una cadena.</p>
        <p>Ejemplo: Clave: dcj, Mensaje: I love prOgrAmming! Esto debería devolver: dcjI ldcjovdcje prdcjOgrdcjAmmdcjing!</p>
        <br>
        <p>No se tomarán en cuenta las vocales con acentos. <br>
            Cuando se reciba una cadena vacía, debería devolver una cadena vacía. Si el mensaje es
            nulo o vacío, devolver una cadena vacía. Si la clave es nula o vacía, entonces utiliza
            DCJ como valor predeterminado.

        </p>
        <div class="form-group">
            <input type="text" id="clave" class="form-control" placeholder="Ingrese la clave" />
        </div>
        <div class="form-group">
            <input type="text" id="mensaje" class="form-control" placeholder="Ingrese el mensaje" />
        </div>
        <button class="btn btn-primary" onclick="encriptar()">Encriptar</button>
        <textarea id="resultado" class="form-control mt-3" readonly></textarea>
    </div>

    <div class="question">
        <h2>3.- Suma a cero – 3.5 puntos</h2>
        <p>Dado un arreglo de enteros, elimina todos los nodos consecutivos cuya suma sea cero y
            devuelve los nodos restantes. Un arreglo vacío también puede ser un resultado válido. Si se
            recibe un valor nulo, devuelve un arreglo vacío.</p>
        <p>Ejemplo: <br> Entrada: [3, 4, -7, 5, -6, 2, 5, -1, 8] <br>
            Salida: [5, 8] </p>
        <div class="form-group">
            <input type="text" id="array" class="form-control" placeholder="Ingrese los números separado por comas." />
        </div>

        <button class="btn btn-primary" onclick="sumar()">Sumar</button>
        <textarea id="resultado-suma" class="form-control mt-3" readonly></textarea>
    </div>

    <div class="question">
        <h2>4.- Aprendizaje – 1 punto</h2>
        <p>Se te ha asignado poder entender esta arquitectura para poder aplicarlo a un
            nuevo proyecto. Se necesita que expliques a detalle cuál es la función de cada
            término mostrado en la imagen. Si desconoces alguno, explica lo que crees que significa
            según el flujo que sigue cada proceso. Si existieran cosas que mejorarías, agrégalo con un
            detalle explicativo del por qué.</p>

        <img src="{{ asset('media/imagen.png') }}" alt="Imagen de la pregunta 4" class="img-fluid" style="max-width:100%; height:auto;">

        <br><br>
        <p><b>Respuesta:</b> <br>
            Se observa que una un flujo en el cual una app web y movil consume nuestra API, la cual se comunica con varios microservicios, cada microservicio tiene funcion especifica y dos de estos microservicios se comunican entre si a traves de
            un broker de mensajeria para que efectuen una accion, en este caso tenemos descuentos y ordering, que seguramente actualizaran la informacion que tenga
            el cliente en la aplicacion respecto a su carrito de compras y precios.
        </p>
    </div>
    <div class="question">
        <h2>5.- Demostrando tus hallazgos – 1 punto</h2>
        <p>Se te ha asignado la tarea de presentar una nueva tecnología que mejorará el rendimiento del sistema de órdenes a un grupo
            de stakeholders no técnicos. La tecnología implica el uso de microservicios para mejorar la escalabilidad y reducir el
            tiempo de respuesta. ¿Cómo explicarías esta nueva tecnología y sus beneficios en términos no técnicos para asegurar que
            todos comprendan su importancia y el impacto que tendrá en el negocio?</p>
        <br>
        <p><b>Respuesta:</b> <br> Utilizando palabras no tecnicas y analogias que se puedan comprender. La nueva tecnologia permite escalabilidad, esto se refiere a que los futuros cambios realizados a nuestro proyecto sean faciles de implementar,
        incluyendo una reduccion de tiempo en que los cambios que deseamos se efectuen y sin que debamos modificar nuestro proyecto para que se acople a lo nuevo, como si un edificio de dos pisos deseara crear mas pisos,
        ya que el edificio se construyo con bases muy resistentes, no es necesario demolerlo o crear mas bases para que este pueda crecer varios pisos mas. Asi mismo se mejoran los tiempos que pasan entre que un usuario realiza una peticion
             y recibe la respuesta,por ejemplo, un cliente consulta los menus disponibles, la espera en que su telefono reciba la informacion de los menus sera reducida.</p>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function encriptar() {
        const clave = document.getElementById('clave').value;
        const mensaje = document.getElementById('mensaje').value;

        $.ajax({
            url: 'encriptar',
            type: 'POST',
            data: {
                clave: clave,
                mensaje: mensaje,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                document.getElementById('resultado').innerText = response.resultado;
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    function sumar() {
        const array = document.getElementById('array').value;

        $.ajax({
            url: 'sumar',
            type: 'POST',
            data: {
                array: array,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                document.getElementById('resultado-suma').innerText = response.resultado;
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }
</script>
</body>
</html>
