<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><a class='num1'>1</a><input class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num2'>2</a><a class='num3'>3</a><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><input class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><input class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer3 = $_POST['q3'];
if ($answer3 == 'a' || $answer3 == 'A') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 's' || $answer6 == 'S') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'a' || $answer7 == 'A') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 's' || $answer8 == 'S') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'd' || $answer9 == 'D') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 's' || $answer10 == 'S') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'd' || $answer13 == 'D') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 7 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>