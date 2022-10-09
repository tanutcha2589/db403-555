<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices Rollert</title>
</head>
<body>
<?php
function DiceRoller($score = false) {
    $d1 = rand(1, 6);
    $d2 = rand(1, 6);
    $sum = $d1 + $d2;
    $mid = $score ? "$d1 + $d2 => " : '';
    return '2 Dices Rollert =>' .$mid.'ผลรวมคือ' .$sum;
}
    
echo '<h1>without score</h1>';
echo DiceRoller();
echo '<h1>with score</h1>';
echo DiceRoller(true);
?>
</body>
</html>