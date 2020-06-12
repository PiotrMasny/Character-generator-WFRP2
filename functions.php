<?php
require 'Dwarf.php';
function chooseRace()
{
    $form = <<<ID1
    <h3>Choose a race</h3>
    <form action="checkAction.php" method="post">
        <input type="radio" id="dwarf" name="race" value="Dwarf">
        <label for="dwarf">Dwarf</label><br><br>
        <input type="submit" value="Submit">
    </form>
    ID1;
    return $form;
}

function viewStats($character)
{
    $race = $_POST["race"];
    $form = "<div><h3>$race</h3></div>";
    $form .= "<div style=\"float: left;\"><form action=\"checkAction.php\" method=\"post\">";
    $form .= "<table>";
        $form.= "<tr><td>Weapon Skill</td><td>$character->ws</td>";
        if ($character->wsRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeWs\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Ballistic Skill</td><td>$character->bs</td>";
        if ($character->bsRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeBs\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Strength</td><td>$character->s</td>";
        if ($character->sRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeS\" value=\"Shallya's Mercy\"><td>";
        $form .= "</tr><tr><td>Toughness</td><td>$character->t</td>";
        if ($character->tRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeT\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Agility</td><td>$character->ag</td>";
        if ($character->agRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeAg\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Intelligence</td><td>$character->int</td>";
        if ($character->intRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeInt\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Will Power</td><td>$character->wp</td>";
        if ($character->wpRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeWp\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Fellowship</td><td>$character->fel</td>";
        if ($character->felRand < 11)
            $form .= "<td><input type=\"submit\" name=\"upgradeFel\" value=\"Shallya's Mercy\"></td>";
    $form .= "</table></form></div>";
    $form .= "<div><table>";
        $form .= "</tr><tr><td>Attacks</td><td>$character->a</td></tr>";
        $form .= "<tr><td>Wounds</td><td>$character->w</td></tr>";
        $form .= "<tr><td>Strength Bonus</td><td>$character->sb</td></tr>";
        $form .= "<tr><td>Toughness Bonus</td><td>$character->tb</td></tr>";
        $form .= "<tr><td>Movement</td><td>$character->m</td></tr>";
        $form .= "<tr><td>Magic</td><td>$character->mag<td></tr>";
        $form .= "<tr><td>Insanity Points</td><td>$character->ip</td></tr>";
        $form .= "<tr><td>Fate Points</td><td>$character->fp</td></tr>";
    $form .= "</table></div>";
    $form .= "<div style=\"clear: both;\"></div>";
    return $form;
}
?>