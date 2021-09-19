<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>


<div class="flex flex-row justify-center items-center min-h-screen bg-center bg-no-repeat bg-cover">
    <main class="flex flex-col lg:flex-ro backdrop-filter backdrop-blur-lg bg-opacity-20 rounded-xl overflow-hidden w-full max-w-5xl shadow-lg m-4 lg:m-6">
        <div class="flex-1 p-4 lg:p-6 bg-white">

            <div class="grid grid-rows-4 grid-cols-1 gap-4 md:grid-rows-2 md:grid-cols-2">

            <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email' ]}}</p>
            <p><strong>Asunto:</strong>{{ $msg['subject']}}</p>        
            <p><strong>Contenido:</strong>{{ $msg['content']}}</p>
            </div>

        </div>
    </main>
</div>



</body>
</html>




