<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Digital - Habitación</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #e3f2fd; }
        .menu { list-style: none; padding: 0; }
        .menu li { margin: 15px 0; }
        .menu a { padding: 15px 30px; color: white; text-decoration: none; border-radius: 5px; display: inline-block; width: 250px; font-weight: bold; }
        .btn-casino { background: #6f42c1; }
        .btn-admin { background: #343a40; }
        .logout-btn { padding: 10px 20px; background: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 30px; }
        .alerta { color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; margin: 20px auto; width: 400px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Habitación del Cliente</h1>
    <p>Bienvenido a tu zona privada, <strong>{{ auth()->user()->name }}</strong>.</p>

    @if(session('error'))
        <div class="alerta">
            <strong>⚠️ {{ session('error') }}</strong>
        </div>
    @endif

    <ul class="menu">
        <li><a href="/casino" class="btn-casino">Ir al Casino (Solo +18)</a></li>
        <li><a href="/admin" class="btn-admin">Ir a Oficina Dirección (Solo Admin)</a></li>
    </ul>

    <form action="/logout" method="POST">
        @csrf 
        <button type="submit" class="logout-btn">Cerrar Sesión</button>
    </form>
</body>
</html>