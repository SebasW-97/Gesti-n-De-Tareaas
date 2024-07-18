<?php
session_start();
if (isset($_SESSION['logged-in'])) {
    header('Location: index.php');
    exit();
}
?>
<?php include 'header.php'; ?>

<div class="container loginContainer">
    <div class="login-box">
        <h1>Sistema Tareas</h1>
        <form method="post" action="loginValidation.php">
            <div class="input-box">
                <label for="login">Usuario:</label>
                <input type="text" name="login">
            </div>
            <div class="input-box">
                <label for="password">Contraseña:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Ingresar</button>
        </form>
        <?php
        if (isset($_SESSION['loginError'])) {
            echo $_SESSION['loginError'];
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
