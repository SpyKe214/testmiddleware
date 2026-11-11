<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Digital - Dirección</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f8f9fa; color: #333; }
        .box { background: white; border-top: 5px solid #007bff; padding: 40px; width: 50%; margin: 0 auto; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { margin-top: 0; }
        .badge { background: #28a745; color: white; padding: 5px 10px; border-radius: 20px; font-size: 0.8em; vertical-align: middle; }
        a { padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Oficina de Dirección <span class="badge">Privilegios Admin</span></h1>
        <p>Acceso concedido al panel de control del Resort.</p>
        <p>Estás logueado como: <strong>{{ auth()->user()->email }}</strong></p>
        
        <a href="/panel">← Volver a mi habitación</a>
    </div>
</body>
</html>