<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Digital - Casino</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #1a1a1a; color: white; }
        h1 { color: #f1c40f; font-size: 3em; margin-bottom: 10px; }
        .content { background: #2a2a2a; padding: 40px; margin: 0 auto; width: 50%; border-radius: 15px; border: 2px solid #f1c40f; }
        a { padding: 10px 20px; background: #f1c40f; color: black; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 30px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="content">
        <h1>CASINO VIP</h1>
        <p>Bienvenido a la sala de juegos, <strong>{{ auth()->user()->name }}</strong>.</p>
        <p>Si puedes leer esto es porque nuestro portero de seguridad ha comprobado que tienes <strong>{{ auth()->user()->age }} años</strong> (Mayor de edad).</p>
        
        <a href="/panel">← Volver a mi habitación</a>
    </div>
</body>
</html>