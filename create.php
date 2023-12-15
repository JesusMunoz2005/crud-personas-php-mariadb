<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $trabajo = $_POST['trabajo'];

    try {
        $sql = "INSERT INTO personas(nombre, apellido, trabajo) VALUES (:nombre, :apellido, :trabajo)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'apellido' => $apellido, 'trabajo' => $trabajo]);

        $message = 'Persona añadida con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir la persona: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Persona</title>
</head>
<body>
<h2>Añadir nueva persona</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="apellido">apellido:</label>
    <input type="text" name="apellido" id="apellido">
    <br>
    <label for="trabajo">Trabajo:</label>
    <input type="text" name="trabajo" id="trabajo" required>
    <br>
    <input type="submit" value="Añadir persona">
</form>

</body>
</html>
