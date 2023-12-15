<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM personas');
$personas = $stmt->fetchAll();
?>

<h2>Listado de personas</h2>

<!-- Botón para crear persona -->
<a href="create.php">Crear nueva persona</a>
<br><br>

<ul>
<?php foreach ($personas as $persona): ?>
    <li>
        <?php echo $persona['nombre']; ?> <?php echo $persona['apellido']; ?> <?php echo $persona['trabajo']; ?>
        <a href="edit.php?id=<?php echo $personas['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $personas['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
