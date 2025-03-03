<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><a class='num2'>2</a><input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num3'>3</a><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><a class='num4'>4</a><input class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><a class='num5'>5</a><input class='field14' type='text' name='q14' value='<?php if(isset($_POST['q14'])) echo $_POST['q14']; ?>'><a class='num6'>6</a><input class='field19' type='text' name='q19' value='<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>'><a class='num7'>7</a><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'к' || $answer1 == 'К') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'е' || $answer2 == 'Е') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'н' || $answer7 == 'Н') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'г' || $answer8 == 'Г') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'ш' || $answer13 == 'Ш') { $totalCorrect++; }
$answer14 = $_POST['q14'];
if ($answer14 == 'щ' || $answer14 == 'Щ') { $totalCorrect++; }
$answer19 = $_POST['q19'];
if ($answer19 == 'з' || $answer19 == 'З') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'х' || $answer20 == 'Х') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='question'>4. </div>";
echo "<div class='question'>5. </div>";
echo "<div class='question'>6. </div>";
echo "<div class='question'>7. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 8 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>