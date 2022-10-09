<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamental 1</title>
</head>
<body>
<?php
$a = 10;
$b = 2.5;
$c = 'Hello';
$d = 'World';
$word = 'apple banana orange';
$space1= strpos($word, ' ');
$space2= strpos($word, ' ', $space1+1);
?>
<hp3>ผลการทำงานใน PHP</h3>
<pre>
$a = <?= $a ?>;
$b = <?= $b ?>;
$c = '<?= $c ?>'';
$d = '<?= $d ?>'';
##########
$a + $b จะมีค่าเป็น <?= $a + $b ?>;
$c.' '.$d จะมีค่าเป็น <?= $c. ' '.$d ?>
##########
$word คำที่ 1 คือ <?= substr($word, 0, $space1) ?> 
$word คำที่ 2 คือ <?= substr($word, ++$space1, $space2 - $space1) ?> 
$word คำที่ 3 คือ <?= substr($word, ++$space2) ?> 
ตัวอีกษรที่สุ่มได้จาก $words คือ "<?= substr($word,rand(0, strlen($word)-1), 1) ?> "
</pre>
</body>
</html>