<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer1 = $_POST['q1']; if ($answer1 == 'a' || $answer1 == 'A') echo "background: #8fff80"; else if($answer1 != '') echo "background: #ff6969"?>' class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer6 = $_POST['q6']; if ($answer6 == 'b' || $answer6 == 'B') echo "background: #8fff80"; else if($answer6 != '') echo "background: #ff6969"?>' class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer7 = $_POST['q7']; if ($answer7 == 'c' || $answer7 == 'C') echo "background: #8fff80"; else if($answer7 != '') echo "background: #ff6969"?>' class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer12 = $_POST['q12']; if ($answer12 == 'd' || $answer12 == 'D') echo "background: #8fff80"; else if($answer12 != '') echo "background: #ff6969"?>' class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><a class='num4'>4</a><input maxlength='1' style='<?php $answer13 = $_POST['q13']; if ($answer13 == 'e' || $answer13 == 'E') echo "background: #8fff80"; else if($answer13 != '') echo "background: #ff6969"?>' class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><a class='num5'>5</a><input maxlength='1' style='<?php $answer18 = $_POST['q18']; if ($answer18 == 'f' || $answer18 == 'F') echo "background: #8fff80"; else if($answer18 != '') echo "background: #ff6969"?>' class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><a class='num6'>6</a><input maxlength='1' style='<?php $answer19 = $_POST['q19']; if ($answer19 == 'g' || $answer19 == 'G') echo "background: #8fff80"; else if($answer19 != '') echo "background: #ff6969"?>' class='field19' type='text' name='q19' value='<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>'><a class='num7'>7</a><input maxlength='1' style='<?php $answer24 = $_POST['q24']; if ($answer24 == 'h' || $answer24 == 'H') echo "background: #8fff80"; else if($answer24 != '') echo "background: #ff6969"?>' class='field24' type='text' name='q24' value='<?php if(isset($_POST['q24'])) echo $_POST['q24']; ?>'><a class='num8'>8</a><input maxlength='1' style='<?php $answer25 = $_POST['q25']; if ($answer25 == 'i' || $answer25 == 'I') echo "background: #8fff80"; else if($answer25 != '') echo "background: #ff6969"?>' class='field25' type='text' name='q25' value='<?php if(isset($_POST['q25'])) echo $_POST['q25']; ?>'><a class='num9'>9</a><input maxlength='1' style='<?php $answer30 = $_POST['q30']; if ($answer30 == 'j' || $answer30 == 'J') echo "background: #8fff80"; else if($answer30 != '') echo "background: #ff6969"?>' class='field30' type='text' name='q30' value='<?php if(isset($_POST['q30'])) echo $_POST['q30']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'a' || $answer1 == 'A') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'b' || $answer6 == 'B') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'c' || $answer7 == 'C') { $totalCorrect++; }
$answer12 = $_POST['q12'];
if ($answer12 == 'd' || $answer12 == 'D') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'e' || $answer13 == 'E') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'f' || $answer18 == 'F') { $totalCorrect++; }
$answer19 = $_POST['q19'];
if ($answer19 == 'g' || $answer19 == 'G') { $totalCorrect++; }
$answer24 = $_POST['q24'];
if ($answer24 == 'h' || $answer24 == 'H') { $totalCorrect++; }
$answer25 = $_POST['q25'];
if ($answer25 == 'i' || $answer25 == 'I') { $totalCorrect++; }
$answer30 = $_POST['q30'];
if ($answer30 == 'j' || $answer30 == 'J') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='question'>4. </div>";
echo "<div class='question'>5. </div>";
echo "<div class='question'>6. </div>";
echo "<div class='question'>7. </div>";
echo "<div class='question'>8. </div>";
echo "<div class='question'>9. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 10 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>