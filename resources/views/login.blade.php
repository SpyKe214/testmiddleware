<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Digital - Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f9; }
        form { display: inline-block; text-align: left; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #218838; }
        .info { font-size: 0.9em; color: #666; margin-bottom: 20px; background: #e9ecef; padding: 10px; border-radius: 4px; }
        .error { color: #721c24; background-color: #f8d7da; padding: 10px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #f5c6cb; }
        .link-volver { display: block; margin-top: 20px; color: #007BFF; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div class="info">
            <strong>Cuentas de prueba:</strong><br>
            admin@test.com<br>
            adulto@test.com<br>
            menor@test.com<br>
            <em>Contraseña para todas: password</em>
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="password" required>
        </div>
        
        <button type="submit">Entrar</button>
    </form>
    
    <a href="/" class="link-volver">← Volver al inicio</a>
</body>
</html>