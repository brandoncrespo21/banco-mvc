<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco MVC</title>
</head>
<body>
    <h1>Banco MVC</h1>
    <h2>Datos de la cuenta</h2>
    <p><strong>Cliente:</strong> <?= htmlspecialchars($cuenta['cliente']) ?></p>
    <p><strong>Número de cuenta:</strong> <?= htmlspecialchars($cuenta['numero']) ?></p>
    <p><strong>Saldo disponible:</strong> S/ <?= number_format($cuenta['saldo'], 2) ?></p>
</body>
</html>
