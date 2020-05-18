<?php

class Dwarf
{
    public $ws = 30;
    public $bs = 20;
    public $s = 20;
    public $t = 30;
    public $ag = 10;
    public $int = 20;
    public $wp = 20;
    public $fel = 10;
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
        $this->ws = $this->ws + rand(2,20);
        echo "Weapon Skill: $this->ws <br />";

        $this->bs = $this->bs + rand(2,20);
        echo "Ballistic Skill: $this->bs <br />";

        $this->s = $this->s + rand(2,20);
        echo "Strength: $this->s <br />";

        $this->t = $this->t + rand(2,20);
        echo "Toughness: $this->t <br />";

        $this->ag = $this->ag + rand(2,20);
        echo "Agility: $this->ag <br />";

        $this->int = $this->int + rand(2,20);
        echo "Intelligence: $this->int <br />";

        $this->wp = $this->wp + rand(2,20);
        echo "Will Power: $this->wp <br />";

        $this->fel = $this->fel + rand(2,20);
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
        echo "Strength Bonus: $this->sb <br />"; //I finished here
    }
}

?>