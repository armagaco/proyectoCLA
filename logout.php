<?php
session_start();
?>

<?php
if(isset($_SESSION['Salmeron'])){
session_destroy();
}
?>
