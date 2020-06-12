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
?>