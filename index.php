<!DOCTYPE html>
<html>
<head>
    <title>Warhammer Fantasy Roleplay 2ed - Generator of characters</title>
</head>
<body>
    <div>
        <h1>Welcome in my generator of characters to Warhammer Fantasy Roleplay 2ed :)</h1>
    </div>

    <div>
       
        <?php
        $form = <<<'ID1'
        <h3>Choose a race</h3> 
        <form action="index.php" method="post">
            <input type="radio" name="race" value="dwarf" />Dwarf <br />
            <input type="radio" name="race" value="elf" />Elf <br />
            <input type="radio" name="race" value="halfling" />Halfling <br />
            <input type="radio" name="race" value="human" />Human <br />
            <input type="submit" name="submit" value="Choose" />
        </form>
        ID1;

        if(isset($_POST['submit']) && isset($_POST['race'])){
            switch ($_POST['race']) {
                case 'dwarf':
                    require 'races/Dwarf.php';
                    $dwarf1 = new Dwarf;
                    echo "<h3>Dwarf</h3>";
                    $dwarf1->randomizeStatistics();
                break;
                case 'elf':
                    require 'races/Elf.php';
                    echo "Elf";
                break;
                case 'halfling':
                    require 'races/Halfling.php';
                    echo "Halfling";
                break;
                case 'human':
                    require 'races/Human.php';
                    echo "Human";
                break;
                default:
                break;
            }
        }
        elseif(isset($_POST['submit']))
            echo $form."<strong style=\"color: red;\">Choose a race!</strong>";
        else {
            echo $form;
        }
        ?>
    <div>
</body>
</html>