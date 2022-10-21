<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boletos para la boda de Isis y Juande</title>
    <style>
        .myButton:hover {
            background:linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
            background-color:#c62d1f;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
    </style>
</head>
<body>
    <h2>¡Hola!</h2>
    <p>Gracias por decidir ser parte del día más importante de nuestras vidas. A continuación, te enviamos un enlace en donde podrás obtener tu boleto, mismo que deberás mostrar para ingresar a la fiesta. No te preocupes, no es necesario que lo imprimas, basta con llevarlo en el celular.</p>

    <h4>NOTA: Sugerimos que le tomes un screenshot al código QR para que puedas mostrarlo en el celular sin necesidad de tener conexión a internet.</h4>

    <p>Haz clic en el siguiente botón para obtener tus boletos:</p>

    <a href="{{ $data['url'] }}" style="box-shadow:inset 0px 1px 0px 0px #f5978e; background:linear-gradient(to bottom, #f24537 5%, #c62d1f 100%); background-color:#f24537; border-radius:6px; border:1px solid #d02718; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; font-weight:bold; padding:16px 30px; text-decoration:none; text-shadow:0px 1px 0px #810e05;">Ver mis boletos</a>
</body>
</html>