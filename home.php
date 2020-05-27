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
        <h3>Choose a race</h3> 
        <form action="home.php" method="post">
            <input type="radio" name="race" value="dwarf" />Dwarf <br />
            <input type="radio" name="race" value="elf" />Elf <br />
            <input type="radio" name="race" value="halfling" />Halfling <br />
            <input type="radio" name="race" value="human" />Human <br />
            <input type="submit" name="submit" value="Choose" />
        </form>
    </div>
        <?php
        if(isset($_POST['submit']) && isset($_POST['race'])){
            switch ($_POST['race']) {
                case 'dwarf':
                    header('Location:races/newDwarf.php');
                break;
                case 'elf':
                    header('Location:races/newElf.php');
                break;
                case 'halfling':
                    header('Location:races/newHalfling.php');
                break;
                case 'human':
                    header('Location:races/newHuman.php');
                break;
                default:
                break;
            }
        }
        ?>
</body>
</html>