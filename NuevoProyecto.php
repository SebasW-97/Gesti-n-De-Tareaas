<?php
session_start();
if (!(isset($_SESSION['logged-in']))) {
    header('Location: login.php');
    exit();
}
?>
<?php include 'header.php'; ?>

<div class="container loginContainer">
    <h1>Nuevo Proyecto</h1>
    <div class="lg-12" style="text-align: center;">
        <a class="back" href="index.php">&lt;--- Volver</a>
    </div>
    <div class="login-box">
        <form method="post" action="newProjectValidation.php">
            <div class="input-box">
                <label for="full">Nombre Completo del Proyecto:</label>
                <input type="text" name="full">
            </div>
            <div class="input-box">
                <label for="short">Nombre Corto del Proyecto:</label>
                <input type="text" name="short">
            </div>
            <button type="submit">Agregar Nuevo Proyecto</button>
        </form>
        <?php
        if (isset($_SESSION['addProjectError'])) {
            echo $_SESSION['addProjectError'];
            unset($_SESSION['addProjectError']);
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
