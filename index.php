<?php
class Dwarf
{
    public $ws = 30;
    public $wsRand;
    public $bs = 20;
    public $bsRand;
    public $s = 20;
    public $sRand;
    public $t = 30;
    public $tRand;
    public $ag = 10;
    public $adRand;
    public $int = 20;
    public $intRand;
    public $wp = 20;
    public $wpRand;
    public $fel = 10;
    public $felRand;
    public $a = 1;
    public $w;
    public $sb;
    public $tb;
    public $m = 3;
    public $mag = 0;
    public $ip = 0;
    public $fp;

    function __construct()
    {
        $this->wsRand = rand(2,20);
        $this->ws += $this->wsRand;

        $this->bsRand = rand(2,20);
        $this->bs += $this->bsRand;

        $this->sRand = rand(2,20);
        $this->s += $this->sRand;

        $this->tRand = rand(2,20);
        $this->t += $this->tRand;

        $this->agRand = rand(2,20);
        $this->ag += $this->agRand;

        $this->intRand = rand(2,20);
        $this->int += $this->intRand;

        $this->wpRand = rand(2,20);
        $this->wp += $this->wpRand;

        $this->felRand = rand(2,20);
        $this->fel += $this->felRand;
        //---------------------------------------------------------------------------------------------
        $stat = rand(1,10);
        switch ($stat) {
            case 1:
                $this->w = 11;
            break;
            case 2:
                $this->w = 11;
            break;
            case 3:
                $this->w = 11;
            break;
            case 4:
                $this->w = 12;
            break;
            case 5:
                $this->w = 12;
            break;
            case 6:
                $this->w = 12;
            break;
            case 7:
                $this->w = 13;
            break;
            case 8:
                $this->w = 13;
            break;
            case 9:
                $this->w = 13;
            break;
            case 10:
                $this->w = 14;
            break;
            default:
            break;
        }

        $this->sb = $this->s / 10;
        settype($this->sb, "integer");

        $this->tb = $this->t / 10;
        settype($this->tb, "integer");

        $stat = rand(1,10);
        switch ($stat) {
            case 1:
                $this->fp = 1;
            break;
            case 2:
                $this->fp = 1;
            break;
            case 3:
                $this->fp = 1;
            break;
            case 4:
                $this->fp = 1;
            break;
            case 5:
                $this->fp = 2;
            break;
            case 6:
                $this->fp = 2;
            break;
            case 7:
                $this->fp = 2;
            break;
            case 8:
                $this->fp = 3;
            break;
            case 9:
                $this->fp = 3;
            break;
            case 10:
                $this->fp = 3;
            break;
            default:
            break;
        }
    }
}
function chooseRace()
{
    $form = <<<ID1
    <h3>Choose a race</h3>
    <form action="" method="post">
        <input type="radio" id="dwarf" name="race" value="Dwarf">
        <label for="dwarf">Dwarf</label><br><br>
        <input type="submit" value="Submit">
    </form>
    ID1;
    return $form;
}
function createCharacter()
{
    switch ($_POST["race"]) {
        case 'Dwarf':
            $character = new Dwarf;
            break;
        
        default:
            break;
    }
    return $character;
}
function viewStats($character)
{
    $race = $_POST["race"];
    $form = "<div><h3>$race</h3></div>";
    $form .= "<div style=\"float: left;\"><form action=\"\" method=\"post\">";
    $form .= "<table>";
        $form.= "<tr><td>Weapon Skill</td><td>$character->ws</td>";
        if ($character->wsRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Ballistic Skill</td><td>$character->bs</td>";
        if ($character->bsRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Strength</td><td>$character->s</td>";
        if ($character->sRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"><td>";
        $form .= "</tr><tr><td>Toughness</td><td>$character->t</td>";
        if ($character->tRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Agility</td><td>$character->ag</td>";
        if ($character->agRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Intelligence</td><td>$character->int</td>";
        if ($character->intRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Will Power</td><td>$character->wp</td>";
        if ($character->wpRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
        $form .= "</tr><tr><td>Fellowship</td><td>$character->fel</td>";
        if ($character->felRand < 11)
            $form .= "<td><input type=\"submit\" value=\"Shallya's Mercy\"></td>";
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
<!doctype html>
<html>
<head>
</head>
<body>
    <?php
    if (isset($_POST["race"])) {
        echo viewStats(createCharacter());
    }
    else 
        echo chooseRace();
    ?>
</body>
</html>