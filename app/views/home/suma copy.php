<?php require_once __DIR__ . '/../templates/head.php' ?>

<main class="px-3">
    <h1>suma de Números.</h1>
    <form action="http://mibodegaweb.test/home/suma" method="POST">
        <div class="mb-3">
            <label for="number1" class="form-label">Número 1:</label>
            <input type="number" class="form-control" id="number1" name="number1" value="<?= $num1 ?>">
        </div>
        <div class="mb-3">
            <label for="number2" class="form-label">Número 2:</label>
            <input type="number" class="form-control" id="number2" name="number2" value="<?= $num2 ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
    </form>
    <div class="mb-3">
        <label>La respuesta es:</label>
        <input type="text" class="form-control" id="rpta" readonly value="<?= $rpta ?>">
    </div>
</main>

<?php require_once __DIR__ . '/../templates/footer.php' ?>