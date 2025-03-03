<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num1'>1</a><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><a class='num2'>2</a><input class='field15' type='text' name='q15' value='<?php if(isset($_POST['q15'])) echo $_POST['q15']; ?>'><a class='num3'>3</a><input class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><input class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><input class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input class='field19' type='text' name='q19' value='<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>'><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><input class='field21' type='text' name='q21' value='<?php if(isset($_POST['q21'])) echo $_POST['q21']; ?>'><input class='field22' type='text' name='q22' value='<?php if(isset($_POST['q22'])) echo $_POST['q22']; ?>'><input class='field25' type='text' name='q25' value='<?php if(isset($_POST['q25'])) echo $_POST['q25']; ?>'><a class='num4'>4</a><input class='field27' type='text' name='q27' value='<?php if(isset($_POST['q27'])) echo $_POST['q27']; ?>'><input class='field30' type='text' name='q30' value='<?php if(isset($_POST['q30'])) echo $_POST['q30']; ?>'><input class='field34' type='text' name='q34' value='<?php if(isset($_POST['q34'])) echo $_POST['q34']; ?>'><a class='num5'>5</a><input class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input class='field36' type='text' name='q36' value='<?php if(isset($_POST['q36'])) echo $_POST['q36']; ?>'><input class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><input class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input class='field47' type='text' name='q47' value='<?php if(isset($_POST['q47'])) echo $_POST['q47']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><input class='field52' type='text' name='q52' value='<?php if(isset($_POST['q52'])) echo $_POST['q52']; ?>'><input class='field58' type='text' name='q58' value='<?php if(isset($_POST['q58'])) echo $_POST['q58']; ?>'><input class='field63' type='text' name='q63' value='<?php if(isset($_POST['q63'])) echo $_POST['q63']; ?>'><input class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer5 = $_POST['q5'];
if ($answer5 == 'р' || $answer5 == 'Р') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'м' || $answer8 == 'М') { $totalCorrect++; }
$answer15 = $_POST['q15'];
if ($answer15 == 'ш' || $answer15 == 'Ш') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'и' || $answer16 == 'И') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'м' || $answer17 == 'М') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'п' || $answer18 == 'П') { $totalCorrect++; }
$answer19 = $_POST['q19'];
if ($answer19 == 'а' || $answer19 == 'А') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'н' || $answer20 == 'Н') { $totalCorrect++; }
$answer21 = $_POST['q21'];
if ($answer21 == 'з' || $answer21 == 'З') { $totalCorrect++; }
$answer22 = $_POST['q22'];
if ($answer22 == 'е' || $answer22 == 'Е') { $totalCorrect++; }
$answer25 = $_POST['q25'];
if ($answer25 == 'к' || $answer25 == 'К') { $totalCorrect++; }
$answer27 = $_POST['q27'];
if ($answer27 == 'н' || $answer27 == 'Н') { $totalCorrect++; }
$answer30 = $_POST['q30'];
if ($answer30 == 'к' || $answer30 == 'К') { $totalCorrect++; }
$answer34 = $_POST['q34'];
if ($answer34 == 'п' || $answer34 == 'П') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'р' || $answer35 == 'Р') { $totalCorrect++; }
$answer36 = $_POST['q36'];
if ($answer36 == 'и' || $answer36 == 'И') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 'м' || $answer37 == 'М') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'а' || $answer38 == 'А') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'т' || $answer39 == 'Т') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'а' || $answer41 == 'А') { $totalCorrect++; }
$answer47 = $_POST['q47'];
if ($answer47 == 'р' || $answer47 == 'Р') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'т' || $answer49 == 'Т') { $totalCorrect++; }
$answer52 = $_POST['q52'];
if ($answer52 == 'к' || $answer52 == 'К') { $totalCorrect++; }
$answer58 = $_POST['q58'];
if ($answer58 == 'и' || $answer58 == 'И') { $totalCorrect++; }
$answer63 = $_POST['q63'];
if ($answer63 == 'а' || $answer63 == 'А') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == 'л' || $answer69 == 'Л') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. человек который пикает тинкера</div>";
echo "<div class='question'>2.  маленькая обезьяна</div>";
echo "<div class='question'>3. шимпанзе</div>";
echo "<div class='question'>4. корица</div>";
echo "<div class='question'>5. эльпримо</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 26 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>