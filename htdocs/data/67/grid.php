<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer8 = $_POST['q8']; if ($answer8 == 'м' || $answer8 == 'М') echo "background: #8fff80"; else if($answer8 != '') echo "background: #ff6969"?>' class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer10 = $_POST['q10']; if ($answer10 == 'в' || $answer10 == 'В') echo "background: #8fff80"; else if($answer10 != '') echo "background: #ff6969"?>' class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer11 = $_POST['q11']; if ($answer11 == 'а' || $answer11 == 'А') echo "background: #8fff80"; else if($answer11 != '') echo "background: #ff6969"?>' class='field11' type='text' name='q11' value='<?php if(isset($_POST['q11'])) echo $_POST['q11']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer12 = $_POST['q12']; if ($answer12 == 'ш' || $answer12 == 'Ш') echo "background: #8fff80"; else if($answer12 != '') echo "background: #ff6969"?>' class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><input maxlength='1' style='<?php $answer13 = $_POST['q13']; if ($answer13 == 'и' || $answer13 == 'И') echo "background: #8fff80"; else if($answer13 != '') echo "background: #ff6969"?>' class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><input maxlength='1' style='<?php $answer14 = $_POST['q14']; if ($answer14 == 'н' || $answer14 == 'Н') echo "background: #8fff80"; else if($answer14 != '') echo "background: #ff6969"?>' class='field14' type='text' name='q14' value='<?php if(isset($_POST['q14'])) echo $_POST['q14']; ?>'><input maxlength='1' style='<?php $answer15 = $_POST['q15']; if ($answer15 == 'г' || $answer15 == 'Г') echo "background: #8fff80"; else if($answer15 != '') echo "background: #ff6969"?>' class='field15' type='text' name='q15' value='<?php if(isset($_POST['q15'])) echo $_POST['q15']; ?>'><input maxlength='1' style='<?php $answer16 = $_POST['q16']; if ($answer16 == 'т' || $answer16 == 'Т') echo "background: #8fff80"; else if($answer16 != '') echo "background: #ff6969"?>' class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><input maxlength='1' style='<?php $answer17 = $_POST['q17']; if ($answer17 == 'о' || $answer17 == 'О') echo "background: #8fff80"; else if($answer17 != '') echo "background: #ff6969"?>' class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><input maxlength='1' style='<?php $answer18 = $_POST['q18']; if ($answer18 == 'н' || $answer18 == 'Н') echo "background: #8fff80"; else if($answer18 != '') echo "background: #ff6969"?>' class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input maxlength='1' style='<?php $answer20 = $_POST['q20']; if ($answer20 == 'с' || $answer20 == 'С') echo "background: #8fff80"; else if($answer20 != '') echo "background: #ff6969"?>' class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><input maxlength='1' style='<?php $answer26 = $_POST['q26']; if ($answer26 == 'с' || $answer26 == 'С') echo "background: #8fff80"; else if($answer26 != '') echo "background: #ff6969"?>' class='field26' type='text' name='q26' value='<?php if(isset($_POST['q26'])) echo $_POST['q26']; ?>'><input maxlength='1' style='<?php $answer29 = $_POST['q29']; if ($answer29 == 'т' || $answer29 == 'Т') echo "background: #8fff80"; else if($answer29 != '') echo "background: #ff6969"?>' class='field29' type='text' name='q29' value='<?php if(isset($_POST['q29'])) echo $_POST['q29']; ?>'><input maxlength='1' style='<?php $answer35 = $_POST['q35']; if ($answer35 == 'к' || $answer35 == 'К') echo "background: #8fff80"; else if($answer35 != '') echo "background: #ff6969"?>' class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input maxlength='1' style='<?php $answer38 = $_POST['q38']; if ($answer38 == 'а' || $answer38 == 'А') echo "background: #8fff80"; else if($answer38 != '') echo "background: #ff6969"?>' class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input maxlength='1' style='<?php $answer44 = $_POST['q44']; if ($answer44 == 'в' || $answer44 == 'В') echo "background: #8fff80"; else if($answer44 != '') echo "background: #ff6969"?>' class='field44' type='text' name='q44' value='<?php if(isset($_POST['q44'])) echo $_POST['q44']; ?>'><input maxlength='1' style='<?php $answer47 = $_POST['q47']; if ($answer47 == 'н' || $answer47 == 'Н') echo "background: #8fff80"; else if($answer47 != '') echo "background: #ff6969"?>' class='field47' type='text' name='q47' value='<?php if(isset($_POST['q47'])) echo $_POST['q47']; ?>'><input maxlength='1' style='<?php $answer53 = $_POST['q53']; if ($answer53 == 'а' || $answer53 == 'А') echo "background: #8fff80"; else if($answer53 != '') echo "background: #ff6969"?>' class='field53' type='text' name='q53' value='<?php if(isset($_POST['q53'])) echo $_POST['q53']; ?>'><input maxlength='1' style='<?php $answer56 = $_POST['q56']; if ($answer56 == 'а' || $answer56 == 'А') echo "background: #8fff80"; else if($answer56 != '') echo "background: #ff6969"?>' class='field56' type='text' name='q56' value='<?php if(isset($_POST['q56'])) echo $_POST['q56']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer8 = $_POST['q8'];
if ($answer8 == 'м' || $answer8 == 'М') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 'в' || $answer10 == 'В') { $totalCorrect++; }
$answer11 = $_POST['q11'];
if ($answer11 == 'а' || $answer11 == 'А') { $totalCorrect++; }
$answer12 = $_POST['q12'];
if ($answer12 == 'ш' || $answer12 == 'Ш') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'и' || $answer13 == 'И') { $totalCorrect++; }
$answer14 = $_POST['q14'];
if ($answer14 == 'н' || $answer14 == 'Н') { $totalCorrect++; }
$answer15 = $_POST['q15'];
if ($answer15 == 'г' || $answer15 == 'Г') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'т' || $answer16 == 'Т') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'о' || $answer17 == 'О') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'н' || $answer18 == 'Н') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'с' || $answer20 == 'С') { $totalCorrect++; }
$answer26 = $_POST['q26'];
if ($answer26 == 'с' || $answer26 == 'С') { $totalCorrect++; }
$answer29 = $_POST['q29'];
if ($answer29 == 'т' || $answer29 == 'Т') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'к' || $answer35 == 'К') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'а' || $answer38 == 'А') { $totalCorrect++; }
$answer44 = $_POST['q44'];
if ($answer44 == 'в' || $answer44 == 'В') { $totalCorrect++; }
$answer47 = $_POST['q47'];
if ($answer47 == 'н' || $answer47 == 'Н') { $totalCorrect++; }
$answer53 = $_POST['q53'];
if ($answer53 == 'а' || $answer53 == 'А') { $totalCorrect++; }
$answer56 = $_POST['q56'];
if ($answer56 == 'а' || $answer56 == 'А') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Россия</div>";
echo "<div class='question'>2. США</div>";
echo "<div class='question'>3. Казахстан</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 19 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>