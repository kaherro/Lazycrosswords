<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>РІС‹Р№С‚Рё</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer1 = $_POST['q1']; if ($answer1 == 'a' || $answer1 == 'A') echo "background: #8fff80"; else if($answer1 != '') echo "background: #ff6969"?>' class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><a class='num2'>2</a><input maxlength='1' style='<?php $answer2 = $_POST['q2']; if ($answer2 == 'a' || $answer2 == 'A') echo "background: #8fff80"; else if($answer2 != '') echo "background: #ff6969"?>' class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input maxlength='1' style='<?php $answer3 = $_POST['q3']; if ($answer3 == 'a' || $answer3 == 'A') echo "background: #8fff80"; else if($answer3 != '') echo "background: #ff6969"?>' class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer4 = $_POST['q4']; if ($answer4 == 'a' || $answer4 == 'A') echo "background: #8fff80"; else if($answer4 != '') echo "background: #ff6969"?>' class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input maxlength='1' style='<?php $answer6 = $_POST['q6']; if ($answer6 == 'a' || $answer6 == 'A') echo "background: #8fff80"; else if($answer6 != '') echo "background: #ff6969"?>' class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input maxlength='1' style='<?php $answer7 = $_POST['q7']; if ($answer7 == 'a' || $answer7 == 'A') echo "background: #8fff80"; else if($answer7 != '') echo "background: #ff6969"?>' class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><input maxlength='1' style='<?php $answer9 = $_POST['q9']; if ($answer9 == 'a' || $answer9 == 'A') echo "background: #8fff80"; else if($answer9 != '') echo "background: #ff6969"?>' class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>РџСЂРѕРІРµСЂРёС‚СЊ</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'a' || $answer1 == 'A') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'a' || $answer2 == 'A') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'a' || $answer3 == 'A') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'a' || $answer4 == 'A') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'a' || $answer6 == 'A') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'a' || $answer7 == 'A') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'a' || $answer9 == 'A') { $totalCorrect++; }
echo "<div class='questions'>Р’РѕРїСЂРѕСЃС‹</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='stats'>РЎС‚Р°С‚РёСЃС‚РёРєР°:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 7 correct</div>";else echo '<div class="nomore"> РљРѕР»РёС‡РµСЃС‚РІРѕ РІР°С€РёС… РїРѕРїС‹С‚РѕРє Р·Р°РєРѕРЅС‡РёР»РѕСЃСЊ! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr РїРѕРїС‹С‚РєРё(-РѕРє) РѕСЃС‚Р°Р»РѕСЃСЊ<br></div>";}
?>