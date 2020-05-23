<?php
session_start();
if (isset($_POST['submitDwarfWs'])){
    $_SESSION['dwarf1'] = $dwarf1;
    $dwarf1->wsRand = 11;
    echo $dwarf1->wsRand;
}
?>