<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><a class='num2'>2</a><input class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><input class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><a class='num3'>3</a><input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><input class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><input class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><input class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><input class='field24' type='text' name='q24' value='<?php if(isset($_POST['q24'])) echo $_POST['q24']; ?>'><input class='field27' type='text' name='q27' value='<?php if(isset($_POST['q27'])) echo $_POST['q27']; ?>'><input class='field34' type='text' name='q34' value='<?php if(isset($_POST['q34'])) echo $_POST['q34']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'а' || $answer1 == 'А') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'р' || $answer2 == 'Р') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'т' || $answer3 == 'Т') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'ё' || $answer4 == '') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'м' || $answer5 == 'М') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'к' || $answer6 == 'К') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'а' || $answer7 == 'А') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 'е' || $answer10 == 'Е') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'о' || $answer13 == 'О') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'с' || $answer17 == 'С') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'а' || $answer20 == 'А') { $totalCorrect++; }
$answer24 = $_POST['q24'];
if ($answer24 == 'т' || $answer24 == 'Т') { $totalCorrect++; }
$answer27 = $_POST['q27'];
if ($answer27 == 'л' || $answer27 == 'Л') { $totalCorrect++; }
$answer34 = $_POST['q34'];
if ($answer34 == 'а' || $answer34 == 'А') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. токсик</div>";
echo "<div class='question'>2. тест</div>";
echo "<div class='question'>3. создатель</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 14 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>