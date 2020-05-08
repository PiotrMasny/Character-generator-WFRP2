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
        <form action="index.php" method="post">
            <input type="radio" name="race" value="human" />Human <br />
            <input type="radio" name="race" value="elf" />Elf <br />
            <input type="radio" name="race" value="dwarf" />Dwarf <br />
            <input type="radio" name="race" value="halfling" />Halfling <br />
            <input type="submit" name="submit" value="Choose" />
        </form>
        ID1;

        if(isset($_POST['submit']) && isset($_POST['race']))
            echo "It works!!!";
        elseif(isset($_POST['submit']))
            echo $form."<strong style=\"color: red;\">Choose race!</strong>";
        else {
            echo $form;
        }
        ?>
    <div>
</body>
</html>