<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input class='field52' type='text' name='q52' value='<?php if(isset($_POST['q52'])) echo $_POST['q52']; ?>'><input class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><input class='field86' type='text' name='q86' value='<?php if(isset($_POST['q86'])) echo $_POST['q86']; ?>'><input class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field137' type='text' name='q137' value='<?php if(isset($_POST['q137'])) echo $_POST['q137']; ?>'><a class='num2'>2</a><input class='field138' type='text' name='q138' value='<?php if(isset($_POST['q138'])) echo $_POST['q138']; ?>'><input class='field139' type='text' name='q139' value='<?php if(isset($_POST['q139'])) echo $_POST['q139']; ?>'><input class='field140' type='text' name='q140' value='<?php if(isset($_POST['q140'])) echo $_POST['q140']; ?>'><input class='field141' type='text' name='q141' value='<?php if(isset($_POST['q141'])) echo $_POST['q141']; ?>'><input class='field142' type='text' name='q142' value='<?php if(isset($_POST['q142'])) echo $_POST['q142']; ?>'><input class='field143' type='text' name='q143' value='<?php if(isset($_POST['q143'])) echo $_POST['q143']; ?>'><input class='field144' type='text' name='q144' value='<?php if(isset($_POST['q144'])) echo $_POST['q144']; ?>'><input class='field145' type='text' name='q145' value='<?php if(isset($_POST['q145'])) echo $_POST['q145']; ?>'><a class='num3'>3</a><input class='field162' type='text' name='q162' value='<?php if(isset($_POST['q162'])) echo $_POST['q162']; ?>'><input class='field179' type='text' name='q179' value='<?php if(isset($_POST['q179'])) echo $_POST['q179']; ?>'><input class='field196' type='text' name='q196' value='<?php if(isset($_POST['q196'])) echo $_POST['q196']; ?>'><input class='field213' type='text' name='q213' value='<?php if(isset($_POST['q213'])) echo $_POST['q213']; ?>'><input class='field230' type='text' name='q230' value='<?php if(isset($_POST['q230'])) echo $_POST['q230']; ?>'><input class='field247' type='text' name='q247' value='<?php if(isset($_POST['q247'])) echo $_POST['q247']; ?>'><input class='field264' type='text' name='q264' value='<?php if(isset($_POST['q264'])) echo $_POST['q264']; ?>'><input class='field281' type='text' name='q281' value='<?php if(isset($_POST['q281'])) echo $_POST['q281']; ?>'><a class='num4'>4</a><input class='field282' type='text' name='q282' value='<?php if(isset($_POST['q282'])) echo $_POST['q282']; ?>'><input class='field283' type='text' name='q283' value='<?php if(isset($_POST['q283'])) echo $_POST['q283']; ?>'><input class='field284' type='text' name='q284' value='<?php if(isset($_POST['q284'])) echo $_POST['q284']; ?>'><input class='field285' type='text' name='q285' value='<?php if(isset($_POST['q285'])) echo $_POST['q285']; ?>'><input class='field286' type='text' name='q286' value='<?php if(isset($_POST['q286'])) echo $_POST['q286']; ?>'><input class='field287' type='text' name='q287' value='<?php if(isset($_POST['q287'])) echo $_POST['q287']; ?>'><input class='field288' type='text' name='q288' value='<?php if(isset($_POST['q288'])) echo $_POST['q288']; ?>'><input class='field289' type='text' name='q289' value='<?php if(isset($_POST['q289'])) echo $_POST['q289']; ?>'><a class='num5'>5</a><input class='field306' type='text' name='q306' value='<?php if(isset($_POST['q306'])) echo $_POST['q306']; ?>'><input class='field323' type='text' name='q323' value='<?php if(isset($_POST['q323'])) echo $_POST['q323']; ?>'><input class='field340' type='text' name='q340' value='<?php if(isset($_POST['q340'])) echo $_POST['q340']; ?>'><input class='field357' type='text' name='q357' value='<?php if(isset($_POST['q357'])) echo $_POST['q357']; ?>'><input class='field374' type='text' name='q374' value='<?php if(isset($_POST['q374'])) echo $_POST['q374']; ?>'><input class='field391' type='text' name='q391' value='<?php if(isset($_POST['q391'])) echo $_POST['q391']; ?>'><input class='field408' type='text' name='q408' value='<?php if(isset($_POST['q408'])) echo $_POST['q408']; ?>'><input class='field425' type='text' name='q425' value='<?php if(isset($_POST['q425'])) echo $_POST['q425']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'a' || $answer1 == 'A') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'a' || $answer18 == 'A') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'a' || $answer35 == 'A') { $totalCorrect++; }
$answer52 = $_POST['q52'];
if ($answer52 == 'a' || $answer52 == 'A') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == 'a' || $answer69 == 'A') { $totalCorrect++; }
$answer86 = $_POST['q86'];
if ($answer86 == 'a' || $answer86 == 'A') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == 'a' || $answer103 == 'A') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'a' || $answer120 == 'A') { $totalCorrect++; }
$answer137 = $_POST['q137'];
if ($answer137 == 'b' || $answer137 == 'B') { $totalCorrect++; }
$answer138 = $_POST['q138'];
if ($answer138 == 'c' || $answer138 == 'C') { $totalCorrect++; }
$answer139 = $_POST['q139'];
if ($answer139 == 'c' || $answer139 == 'C') { $totalCorrect++; }
$answer140 = $_POST['q140'];
if ($answer140 == 'c' || $answer140 == 'C') { $totalCorrect++; }
$answer141 = $_POST['q141'];
if ($answer141 == 'c' || $answer141 == 'C') { $totalCorrect++; }
$answer142 = $_POST['q142'];
if ($answer142 == 'c' || $answer142 == 'C') { $totalCorrect++; }
$answer143 = $_POST['q143'];
if ($answer143 == 'c' || $answer143 == 'C') { $totalCorrect++; }
$answer144 = $_POST['q144'];
if ($answer144 == 'c' || $answer144 == 'C') { $totalCorrect++; }
$answer145 = $_POST['q145'];
if ($answer145 == 'd' || $answer145 == 'D') { $totalCorrect++; }
$answer162 = $_POST['q162'];
if ($answer162 == 'd' || $answer162 == 'D') { $totalCorrect++; }
$answer179 = $_POST['q179'];
if ($answer179 == 'd' || $answer179 == 'D') { $totalCorrect++; }
$answer196 = $_POST['q196'];
if ($answer196 == 'd' || $answer196 == 'D') { $totalCorrect++; }
$answer213 = $_POST['q213'];
if ($answer213 == 'd' || $answer213 == 'D') { $totalCorrect++; }
$answer230 = $_POST['q230'];
if ($answer230 == 'd' || $answer230 == 'D') { $totalCorrect++; }
$answer247 = $_POST['q247'];
if ($answer247 == 'd' || $answer247 == 'D') { $totalCorrect++; }
$answer264 = $_POST['q264'];
if ($answer264 == 'd' || $answer264 == 'D') { $totalCorrect++; }
$answer281 = $_POST['q281'];
if ($answer281 == 'f' || $answer281 == 'F') { $totalCorrect++; }
$answer282 = $_POST['q282'];
if ($answer282 == 'f' || $answer282 == 'F') { $totalCorrect++; }
$answer283 = $_POST['q283'];
if ($answer283 == 'f' || $answer283 == 'F') { $totalCorrect++; }
$answer284 = $_POST['q284'];
if ($answer284 == 'f' || $answer284 == 'F') { $totalCorrect++; }
$answer285 = $_POST['q285'];
if ($answer285 == 'f' || $answer285 == 'F') { $totalCorrect++; }
$answer286 = $_POST['q286'];
if ($answer286 == 'f' || $answer286 == 'F') { $totalCorrect++; }
$answer287 = $_POST['q287'];
if ($answer287 == 'f' || $answer287 == 'F') { $totalCorrect++; }
$answer288 = $_POST['q288'];
if ($answer288 == 'f' || $answer288 == 'F') { $totalCorrect++; }
$answer289 = $_POST['q289'];
if ($answer289 == 'g' || $answer289 == 'G') { $totalCorrect++; }
$answer306 = $_POST['q306'];
if ($answer306 == 'q' || $answer306 == 'Q') { $totalCorrect++; }
$answer323 = $_POST['q323'];
if ($answer323 == 'q' || $answer323 == 'Q') { $totalCorrect++; }
$answer340 = $_POST['q340'];
if ($answer340 == 'q' || $answer340 == 'Q') { $totalCorrect++; }
$answer357 = $_POST['q357'];
if ($answer357 == 'q' || $answer357 == 'Q') { $totalCorrect++; }
$answer374 = $_POST['q374'];
if ($answer374 == 'q' || $answer374 == 'Q') { $totalCorrect++; }
$answer391 = $_POST['q391'];
if ($answer391 == 'q' || $answer391 == 'Q') { $totalCorrect++; }
$answer408 = $_POST['q408'];
if ($answer408 == 'q' || $answer408 == 'Q') { $totalCorrect++; }
$answer425 = $_POST['q425'];
if ($answer425 == 'q' || $answer425 == 'Q') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='question'>4. </div>";
echo "<div class='question'>5. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 41 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>