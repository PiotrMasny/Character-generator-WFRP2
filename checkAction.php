<?php
require 'functions.php';
if (isset($_POST["race"])) {
    switch ($_POST["race"]) {
        case 'Dwarf':
            $character = new Dwarf;
            break;
        
        default:
            break;
    }
    echo viewStats($character);
}
else 
    echo chooseRace();
?>