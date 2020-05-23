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

    public function randomizeStatistics() {
        //main profile --------------------------------------------------------------------------------
        $this->wsRand = rand(2,20);
        $this->ws += $this->wsRand;
        echo "Weapon Skill: $this->ws <br />";

        $this->bsRand = rand(2,20);
        $this->bs += $this->bsRand;
        echo "Ballistic Skill: $this->bs <br />";

        $this->sRand = rand(2,20);
        $this->s += $this->sRand;
        echo "Strength: $this->s <br />";

        $this->tRand = rand(2,20);
        $this->t += $this->tRand;
        echo "Toughness: $this->t <br />";

        $this->agRand = rand(2,20);
        $this->ag += $this->agRand;
        echo "Agility: $this->ag <br />";

        $this->intRand = rand(2,20);
        $this->int += $this->intRand;
        echo "Intelligence: $this->int <br />";

        $this->wpRand = rand(2,20);
        $this->wp += $this->wpRand;
        echo "Will Power: $this->wp <br />";

        $this->felRand = rand(2,20);
        $this->fel += $this->felRand;
        echo "Fellowship: $this->fel <br />";



        //secondary profile ---------------------------------------------------------------------------
        echo "Attacks: $this->a <br />";
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
        echo "Wounds: $this->w <br />";

        $this->sb = $this->s / 10;
        echo "Strength Bonus: ".(int)$this->sb."<br />";

        $this->tb = $this->t / 10;
        echo "Toughness Bonus: ".(int)$this->tb."<br />";

        echo "Movement: $this->m <br />";

        echo "Magic: $this->mag <br />";

        echo "Insanity Points: $this->ip <br />";

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
        echo "Fate Points: $this->fp <br />";
    }
    //-------------------------------------------------------------------------------------------------
    public function shallyasMercy() {
        echo "<form action=\"checkMercy.php\" method=\"post\">";
        if ($this->wsRand < 11) 
            echo "Weapon Skill: $this->ws"."<input type=\"submit\" name=\"submitDwarfWs\" value=\"Mercy\" /> <br />";
        if ($this->bsRand < 11)
            echo "Ballistic Skill: $this->bs"."<input type=\"submit\" name=\"submitDwarfBs\" value=\"Mercy\" /> <br />";
        if ($this->sRand < 11)
            echo "Strength: $this->s"."<input type=\"submit\" name=\"submitDwarfS\" value=\"Mercy\" /> <br />";
        if ($this->tRand < 11)
            echo "Toughness: $this->t"."<input type=\"submit\" name=\"submitDwarfT\" value=\"Mercy\" /> <br />";
        if ($this->agRand < 11)
            echo "Agility: $this->ag"."<input type=\"submit\" name=\"submitDwarfAg\" value=\"Mercy\" /> <br />";
        if ($this->intRand < 11)
            echo "Intelligence: $this->int"."<input type=\"submit\" name=\"submitDwarfInt\" value=\"Mercy\" /> <br />";
        if ($this->wpRand < 11)
            echo "Will Power: $this->wp"."<input type=\"submit\" name=\"submitDwarfWp\" value=\"Mercy\" /> <br />";
        if ($this->felRand < 11)
            echo "Fellowship: $this->fel"."<input type=\"submit\" name=\"submitDwarfFel\" value=\"Mercy\" /> <br />";
        echo "</form>";
    }
}

?>