<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tareas</title>
    <!-- Agrega los enlaces a los estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Agregar Tarea</h1>
        <form method="post" action="{{ route('tarea.create') }}">
            @csrf 

            <!-- Campo de Nombre de Tarea -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-600">Nombre de la Tarea</label>
                <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
            </div>

            <!-- Campo de Fecha de Inicio -->
            <div class="mb-4">
                <label for="fecha_inicio" class="block text-gray-600">Fecha de Inicio</label>
                <input type="date" id="fechainicio" name="fechainicio" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
            </div>

            <!-- Campo de Fecha de Fin -->
            <div class="mb-4">
                <label for="fecha_fin" class="block text-gray-600">Fecha de Fin</label>
                <input type="date" id="fechafin" name="fechafin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
            </div>

            <!-- Campo de Asignación -->
            <div class="mb-4">
                <label for="asignacion" class="block text-gray-600">Asignación</label>
                <<input type="text" id="asginado" name="asginado" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
            </div>

            <!-- Botón para Enviar el Formulario -->
            <div class="text-center">
                <button type="submit" name="send" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg focus:outline-none">Agregar Tarea</button>
            </div>
        </form>
    </div>
</body>
</html>
