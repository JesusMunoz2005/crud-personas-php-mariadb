<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $trabajo = $_POST['trabajo'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE personas SET nombre = ?, apellido= ? WHERE id = ?");
    $stmt->execute([$nombre, $apellido, $trabajo]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM personas WHERE id = $id");
$personas = $stmt->fetch();

?>

<h2>Editar persona</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $personas['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $personas['nombre']; ?>"><br>
    Apellido: $<input type="text" name="precio" value="<?php echo $personas['apellido']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
