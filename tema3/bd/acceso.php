<?php 
if (!isset($_SESSION['email']))
{
    ?>
    
    Usted no esta autorizado a ver esta pagina

    
    <meta http-equiv="refresh" content="3; url=form_login.html">

<?php
    die();
}    
?>