<?php
session_start();
if (!(isset($_SESSION['logged-in']))) {
    header('Location: login.php');
    exit();
}
$shortName = $_GET['sn'];
?>
<?php include 'header.php'; ?>
<div class="container loginContainer">
    <br style="clear:both;" />
    <br /><br /><br /><br /><br /><br /><br />
    <h1>Nueva Tarea<span>(<?php echo $_GET['sn']; ?>)</span></h1>
    <div class="login-box newTaskBox">
        <form method="post" action="newTaskValidation.php?sn=<?php echo $shortName; ?>">
            <div class="input-box">
                <label for="taskTitle">Título:</label>
                <textarea name="taskTitle" class="taskTitle"> </textarea>
            </div>
            <div class="input-box">
                <label for="short">Descripción:</label>
                <textarea name="taskDescription" class="taskDesc"></textarea>
            </div>
            <button type="submit">Agregar Tarea</button>
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
