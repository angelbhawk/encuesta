<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h2>Nombre de la encuesta</h2>
        <p>Fecha actual</p>
    </header>
    <section>
        <article id="encuesta">
            @yield('content')
        </article>
        <article id="resultados">
            <h4>Hola</h4>
            <p>¡Tu respuesta fue enviada con exito!</p>
            <button type="button" class="btn btn-primary" onclick="borrarValores()">Borrar respuestas</button>
        </article>
    </section>

    <script>
        // Comprobamos si el objeto que estamos buscando existe en localStorage
        if (localStorage.getItem('respuestas') === null) 
        {
            // Si el objeto no se encuentra en localStorage, ocultamos el formulario
            var article_res = document.getElementById('resultados'); // Reemplaza 'tuFormulario' con el ID de tu formulario
            article_res.style.display = 'none';
        }
        else
        {
            var article_enc = document.getElementById('encuesta'); // Reemplaza 'tuFormulario' con el ID de tu formulario
            article_enc.style.display = 'none';
        }

        function borrarValores() 
        {
            localStorage.removeItem("respuestas");
            location.reload();
        }
    </script>
</body>
</html>