<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><a class='num2'>2</a><input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><input class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><input class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><input class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><input class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><a class='num3'>3</a><input class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input class='field19' type='text' name='q19' value='<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>'><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'z' || $answer1 == 'Z') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'q' || $answer4 == 'Q') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'x' || $answer5 == 'X') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'w' || $answer8 == 'W') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'c' || $answer9 == 'C') { $totalCorrect++; }
$answer12 = $_POST['q12'];
if ($answer12 == 'e' || $answer12 == 'E') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'v' || $answer13 == 'V') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'r' || $answer16 == 'R') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'a' || $answer17 == 'A') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 's' || $answer18 == 'S') { $totalCorrect++; }
$answer19 = $_POST['q19'];
if ($answer19 == 'd' || $answer19 == 'D') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'f' || $answer20 == 'F') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 12 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>