<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><a class='num2'>2</a><input class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><input class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num3'>3</a><input class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><a class='num4'>4</a><input class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><input class='field11' type='text' name='q11' value='<?php if(isset($_POST['q11'])) echo $_POST['q11']; ?>'><input class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input class='field43' type='text' name='q43' value='<?php if(isset($_POST['q43'])) echo $_POST['q43']; ?>'><input class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><input class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><input class='field77' type='text' name='q77' value='<?php if(isset($_POST['q77'])) echo $_POST['q77']; ?>'><input class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><input class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input class='field137' type='text' name='q137' value='<?php if(isset($_POST['q137'])) echo $_POST['q137']; ?>'><input class='field141' type='text' name='q141' value='<?php if(isset($_POST['q141'])) echo $_POST['q141']; ?>'><input class='field145' type='text' name='q145' value='<?php if(isset($_POST['q145'])) echo $_POST['q145']; ?>'><input class='field171' type='text' name='q171' value='<?php if(isset($_POST['q171'])) echo $_POST['q171']; ?>'><input class='field175' type='text' name='q175' value='<?php if(isset($_POST['q175'])) echo $_POST['q175']; ?>'><input class='field179' type='text' name='q179' value='<?php if(isset($_POST['q179'])) echo $_POST['q179']; ?>'><a class='num5'>5</a><input class='field180' type='text' name='q180' value='<?php if(isset($_POST['q180'])) echo $_POST['q180']; ?>'><input class='field181' type='text' name='q181' value='<?php if(isset($_POST['q181'])) echo $_POST['q181']; ?>'><input class='field182' type='text' name='q182' value='<?php if(isset($_POST['q182'])) echo $_POST['q182']; ?>'><input class='field183' type='text' name='q183' value='<?php if(isset($_POST['q183'])) echo $_POST['q183']; ?>'><input class='field184' type='text' name='q184' value='<?php if(isset($_POST['q184'])) echo $_POST['q184']; ?>'><input class='field185' type='text' name='q185' value='<?php if(isset($_POST['q185'])) echo $_POST['q185']; ?>'><input class='field186' type='text' name='q186' value='<?php if(isset($_POST['q186'])) echo $_POST['q186']; ?>'><input class='field187' type='text' name='q187' value='<?php if(isset($_POST['q187'])) echo $_POST['q187']; ?>'><input class='field188' type='text' name='q188' value='<?php if(isset($_POST['q188'])) echo $_POST['q188']; ?>'><a class='num6'>6</a><input class='field189' type='text' name='q189' value='<?php if(isset($_POST['q189'])) echo $_POST['q189']; ?>'><input class='field190' type='text' name='q190' value='<?php if(isset($_POST['q190'])) echo $_POST['q190']; ?>'><input class='field191' type='text' name='q191' value='<?php if(isset($_POST['q191'])) echo $_POST['q191']; ?>'><input class='field192' type='text' name='q192' value='<?php if(isset($_POST['q192'])) echo $_POST['q192']; ?>'><input class='field193' type='text' name='q193' value='<?php if(isset($_POST['q193'])) echo $_POST['q193']; ?>'><input class='field194' type='text' name='q194' value='<?php if(isset($_POST['q194'])) echo $_POST['q194']; ?>'><input class='field205' type='text' name='q205' value='<?php if(isset($_POST['q205'])) echo $_POST['q205']; ?>'><input class='field209' type='text' name='q209' value='<?php if(isset($_POST['q209'])) echo $_POST['q209']; ?>'><input class='field213' type='text' name='q213' value='<?php if(isset($_POST['q213'])) echo $_POST['q213']; ?>'><input class='field222' type='text' name='q222' value='<?php if(isset($_POST['q222'])) echo $_POST['q222']; ?>'><input class='field239' type='text' name='q239' value='<?php if(isset($_POST['q239'])) echo $_POST['q239']; ?>'><input class='field243' type='text' name='q243' value='<?php if(isset($_POST['q243'])) echo $_POST['q243']; ?>'><input class='field247' type='text' name='q247' value='<?php if(isset($_POST['q247'])) echo $_POST['q247']; ?>'><input class='field256' type='text' name='q256' value='<?php if(isset($_POST['q256'])) echo $_POST['q256']; ?>'><input class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input class='field277' type='text' name='q277' value='<?php if(isset($_POST['q277'])) echo $_POST['q277']; ?>'><input class='field281' type='text' name='q281' value='<?php if(isset($_POST['q281'])) echo $_POST['q281']; ?>'><input class='field290' type='text' name='q290' value='<?php if(isset($_POST['q290'])) echo $_POST['q290']; ?>'><input class='field307' type='text' name='q307' value='<?php if(isset($_POST['q307'])) echo $_POST['q307']; ?>'><input class='field311' type='text' name='q311' value='<?php if(isset($_POST['q311'])) echo $_POST['q311']; ?>'><input class='field315' type='text' name='q315' value='<?php if(isset($_POST['q315'])) echo $_POST['q315']; ?>'><input class='field324' type='text' name='q324' value='<?php if(isset($_POST['q324'])) echo $_POST['q324']; ?>'><input class='field341' type='text' name='q341' value='<?php if(isset($_POST['q341'])) echo $_POST['q341']; ?>'><input class='field345' type='text' name='q345' value='<?php if(isset($_POST['q345'])) echo $_POST['q345']; ?>'><input class='field349' type='text' name='q349' value='<?php if(isset($_POST['q349'])) echo $_POST['q349']; ?>'><input class='field358' type='text' name='q358' value='<?php if(isset($_POST['q358'])) echo $_POST['q358']; ?>'><input class='field375' type='text' name='q375' value='<?php if(isset($_POST['q375'])) echo $_POST['q375']; ?>'><input class='field379' type='text' name='q379' value='<?php if(isset($_POST['q379'])) echo $_POST['q379']; ?>'><input class='field383' type='text' name='q383' value='<?php if(isset($_POST['q383'])) echo $_POST['q383']; ?>'><input class='field392' type='text' name='q392' value='<?php if(isset($_POST['q392'])) echo $_POST['q392']; ?>'><input class='field409' type='text' name='q409' value='<?php if(isset($_POST['q409'])) echo $_POST['q409']; ?>'><input class='field413' type='text' name='q413' value='<?php if(isset($_POST['q413'])) echo $_POST['q413']; ?>'><input class='field417' type='text' name='q417' value='<?php if(isset($_POST['q417'])) echo $_POST['q417']; ?>'><input class='field426' type='text' name='q426' value='<?php if(isset($_POST['q426'])) echo $_POST['q426']; ?>'><input class='field447' type='text' name='q447' value='<?php if(isset($_POST['q447'])) echo $_POST['q447']; ?>'><input class='field451' type='text' name='q451' value='<?php if(isset($_POST['q451'])) echo $_POST['q451']; ?>'><input class='field460' type='text' name='q460' value='<?php if(isset($_POST['q460'])) echo $_POST['q460']; ?>'><input class='field494' type='text' name='q494' value='<?php if(isset($_POST['q494'])) echo $_POST['q494']; ?>'><input class='field528' type='text' name='q528' value='<?php if(isset($_POST['q528'])) echo $_POST['q528']; ?>'><input class='field562' type='text' name='q562' value='<?php if(isset($_POST['q562'])) echo $_POST['q562']; ?>'><input class='field596' type='text' name='q596' value='<?php if(isset($_POST['q596'])) echo $_POST['q596']; ?>'><input class='field630' type='text' name='q630' value='<?php if(isset($_POST['q630'])) echo $_POST['q630']; ?>'><a class='num7'>7</a><input class='field631' type='text' name='q631' value='<?php if(isset($_POST['q631'])) echo $_POST['q631']; ?>'><input class='field632' type='text' name='q632' value='<?php if(isset($_POST['q632'])) echo $_POST['q632']; ?>'><input class='field633' type='text' name='q633' value='<?php if(isset($_POST['q633'])) echo $_POST['q633']; ?>'><input class='field634' type='text' name='q634' value='<?php if(isset($_POST['q634'])) echo $_POST['q634']; ?>'><input class='field635' type='text' name='q635' value='<?php if(isset($_POST['q635'])) echo $_POST['q635']; ?>'><input class='field636' type='text' name='q636' value='<?php if(isset($_POST['q636'])) echo $_POST['q636']; ?>'><input class='field637' type='text' name='q637' value='<?php if(isset($_POST['q637'])) echo $_POST['q637']; ?>'><input class='field638' type='text' name='q638' value='<?php if(isset($_POST['q638'])) echo $_POST['q638']; ?>'><input class='field639' type='text' name='q639' value='<?php if(isset($_POST['q639'])) echo $_POST['q639']; ?>'><input class='field640' type='text' name='q640' value='<?php if(isset($_POST['q640'])) echo $_POST['q640']; ?>'><a class='num8'>8</a><input class='field641' type='text' name='q641' value='<?php if(isset($_POST['q641'])) echo $_POST['q641']; ?>'><input class='field642' type='text' name='q642' value='<?php if(isset($_POST['q642'])) echo $_POST['q642']; ?>'><input class='field643' type='text' name='q643' value='<?php if(isset($_POST['q643'])) echo $_POST['q643']; ?>'><input class='field644' type='text' name='q644' value='<?php if(isset($_POST['q644'])) echo $_POST['q644']; ?>'><input class='field645' type='text' name='q645' value='<?php if(isset($_POST['q645'])) echo $_POST['q645']; ?>'><input class='field646' type='text' name='q646' value='<?php if(isset($_POST['q646'])) echo $_POST['q646']; ?>'><input class='field674' type='text' name='q674' value='<?php if(isset($_POST['q674'])) echo $_POST['q674']; ?>'><input class='field708' type='text' name='q708' value='<?php if(isset($_POST['q708'])) echo $_POST['q708']; ?>'><input class='field742' type='text' name='q742' value='<?php if(isset($_POST['q742'])) echo $_POST['q742']; ?>'><input class='field776' type='text' name='q776' value='<?php if(isset($_POST['q776'])) echo $_POST['q776']; ?>'><input class='field810' type='text' name='q810' value='<?php if(isset($_POST['q810'])) echo $_POST['q810']; ?>'><input class='field844' type='text' name='q844' value='<?php if(isset($_POST['q844'])) echo $_POST['q844']; ?>'><input class='field878' type='text' name='q878' value='<?php if(isset($_POST['q878'])) echo $_POST['q878']; ?>'><input class='field912' type='text' name='q912' value='<?php if(isset($_POST['q912'])) echo $_POST['q912']; ?>'><input class='field946' type='text' name='q946' value='<?php if(isset($_POST['q946'])) echo $_POST['q946']; ?>'><input class='field980' type='text' name='q980' value='<?php if(isset($_POST['q980'])) echo $_POST['q980']; ?>'><input class='field1014' type='text' name='q1014' value='<?php if(isset($_POST['q1014'])) echo $_POST['q1014']; ?>'><input class='field1048' type='text' name='q1048' value='<?php if(isset($_POST['q1048'])) echo $_POST['q1048']; ?>'><input class='field1082' type='text' name='q1082' value='<?php if(isset($_POST['q1082'])) echo $_POST['q1082']; ?>'><input class='field1116' type='text' name='q1116' value='<?php if(isset($_POST['q1116'])) echo $_POST['q1116']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'a' || $answer1 == 'A') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 's' || $answer2 == 'S') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'd' || $answer3 == 'D') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'g' || $answer4 == 'G') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'j' || $answer5 == 'J') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'b' || $answer6 == 'B') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'l' || $answer7 == 'L') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'd' || $answer8 == 'D') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'a' || $answer9 == 'A') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 'g' || $answer10 == 'G') { $totalCorrect++; }
$answer11 = $_POST['q11'];
if ($answer11 == 's' || $answer11 == 'S') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'd' || $answer35 == 'D') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'l' || $answer39 == 'L') { $totalCorrect++; }
$answer43 = $_POST['q43'];
if ($answer43 == 's' || $answer43 == 'S') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == 's' || $answer69 == 'S') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == 'b' || $answer73 == 'B') { $totalCorrect++; }
$answer77 = $_POST['q77'];
if ($answer77 == 'd' || $answer77 == 'D') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == 'j' || $answer103 == 'J') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'b' || $answer107 == 'B') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'g' || $answer111 == 'G') { $totalCorrect++; }
$answer137 = $_POST['q137'];
if ($answer137 == 'b' || $answer137 == 'B') { $totalCorrect++; }
$answer141 = $_POST['q141'];
if ($answer141 == 'g' || $answer141 == 'G') { $totalCorrect++; }
$answer145 = $_POST['q145'];
if ($answer145 == 'n' || $answer145 == 'N') { $totalCorrect++; }
$answer171 = $_POST['q171'];
if ($answer171 == 'g' || $answer171 == 'G') { $totalCorrect++; }
$answer175 = $_POST['q175'];
if ($answer175 == 'k' || $answer175 == 'K') { $totalCorrect++; }
$answer179 = $_POST['q179'];
if ($answer179 == 'a' || $answer179 == 'A') { $totalCorrect++; }
$answer180 = $_POST['q180'];
if ($answer180 == 's' || $answer180 == 'S') { $totalCorrect++; }
$answer181 = $_POST['q181'];
if ($answer181 == 'd' || $answer181 == 'D') { $totalCorrect++; }
$answer182 = $_POST['q182'];
if ($answer182 == 'g' || $answer182 == 'G') { $totalCorrect++; }
$answer183 = $_POST['q183'];
if ($answer183 == 'l' || $answer183 == 'L') { $totalCorrect++; }
$answer184 = $_POST['q184'];
if ($answer184 == 'n' || $answer184 == 'N') { $totalCorrect++; }
$answer185 = $_POST['q185'];
if ($answer185 == 'k' || $answer185 == 'K') { $totalCorrect++; }
$answer186 = $_POST['q186'];
if ($answer186 == 'b' || $answer186 == 'B') { $totalCorrect++; }
$answer187 = $_POST['q187'];
if ($answer187 == 'b' || $answer187 == 'B') { $totalCorrect++; }
$answer188 = $_POST['q188'];
if ($answer188 == 'j' || $answer188 == 'J') { $totalCorrect++; }
$answer189 = $_POST['q189'];
if ($answer189 == 'k' || $answer189 == 'K') { $totalCorrect++; }
$answer190 = $_POST['q190'];
if ($answer190 == 's' || $answer190 == 'S') { $totalCorrect++; }
$answer191 = $_POST['q191'];
if ($answer191 == 'd' || $answer191 == 'D') { $totalCorrect++; }
$answer192 = $_POST['q192'];
if ($answer192 == 'a' || $answer192 == 'A') { $totalCorrect++; }
$answer193 = $_POST['q193'];
if ($answer193 == 'g' || $answer193 == 'G') { $totalCorrect++; }
$answer194 = $_POST['q194'];
if ($answer194 == 'l' || $answer194 == 'L') { $totalCorrect++; }
$answer205 = $_POST['q205'];
if ($answer205 == 'l' || $answer205 == 'L') { $totalCorrect++; }
$answer209 = $_POST['q209'];
if ($answer209 == 'j' || $answer209 == 'J') { $totalCorrect++; }
$answer213 = $_POST['q213'];
if ($answer213 == ';' || $answer213 == '') { $totalCorrect++; }
$answer222 = $_POST['q222'];
if ($answer222 == 'a' || $answer222 == 'A') { $totalCorrect++; }
$answer239 = $_POST['q239'];
if ($answer239 == 'b' || $answer239 == 'B') { $totalCorrect++; }
$answer243 = $_POST['q243'];
if ($answer243 == 'd' || $answer243 == 'D') { $totalCorrect++; }
$answer247 = $_POST['q247'];
if ($answer247 == 'n' || $answer247 == 'N') { $totalCorrect++; }
$answer256 = $_POST['q256'];
if ($answer256 == 'n' || $answer256 == 'N') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == 'k' || $answer273 == 'K') { $totalCorrect++; }
$answer277 = $_POST['q277'];
if ($answer277 == 's' || $answer277 == 'S') { $totalCorrect++; }
$answer281 = $_POST['q281'];
if ($answer281 == 'l' || $answer281 == 'L') { $totalCorrect++; }
$answer290 = $_POST['q290'];
if ($answer290 == 'd' || $answer290 == 'D') { $totalCorrect++; }
$answer307 = $_POST['q307'];
if ($answer307 == 's' || $answer307 == 'S') { $totalCorrect++; }
$answer311 = $_POST['q311'];
if ($answer311 == 'l' || $answer311 == 'L') { $totalCorrect++; }
$answer315 = $_POST['q315'];
if ($answer315 == 'k' || $answer315 == 'K') { $totalCorrect++; }
$answer324 = $_POST['q324'];
if ($answer324 == 's' || $answer324 == 'S') { $totalCorrect++; }
$answer341 = $_POST['q341'];
if ($answer341 == 'a' || $answer341 == 'A') { $totalCorrect++; }
$answer345 = $_POST['q345'];
if ($answer345 == 'a' || $answer345 == 'A') { $totalCorrect++; }
$answer349 = $_POST['q349'];
if ($answer349 == 'd' || $answer349 == 'D') { $totalCorrect++; }
$answer358 = $_POST['q358'];
if ($answer358 == 'g' || $answer358 == 'G') { $totalCorrect++; }
$answer375 = $_POST['q375'];
if ($answer375 == 'd' || $answer375 == 'D') { $totalCorrect++; }
$answer379 = $_POST['q379'];
if ($answer379 == 'b' || $answer379 == 'B') { $totalCorrect++; }
$answer383 = $_POST['q383'];
if ($answer383 == 's' || $answer383 == 'S') { $totalCorrect++; }
$answer392 = $_POST['q392'];
if ($answer392 == ';' || $answer392 == '') { $totalCorrect++; }
$answer409 = $_POST['q409'];
if ($answer409 == 'g' || $answer409 == 'G') { $totalCorrect++; }
$answer413 = $_POST['q413'];
if ($answer413 == 'j' || $answer413 == 'J') { $totalCorrect++; }
$answer417 = $_POST['q417'];
if ($answer417 == 'g' || $answer417 == 'G') { $totalCorrect++; }
$answer426 = $_POST['q426'];
if ($answer426 == 'n' || $answer426 == 'N') { $totalCorrect++; }
$answer447 = $_POST['q447'];
if ($answer447 == 'k' || $answer447 == 'K') { $totalCorrect++; }
$answer451 = $_POST['q451'];
if ($answer451 == 'l' || $answer451 == 'L') { $totalCorrect++; }
$answer460 = $_POST['q460'];
if ($answer460 == 's' || $answer460 == 'S') { $totalCorrect++; }
$answer494 = $_POST['q494'];
if ($answer494 == 'd' || $answer494 == 'D') { $totalCorrect++; }
$answer528 = $_POST['q528'];
if ($answer528 == 'a' || $answer528 == 'A') { $totalCorrect++; }
$answer562 = $_POST['q562'];
if ($answer562 == ';' || $answer562 == '') { $totalCorrect++; }
$answer596 = $_POST['q596'];
if ($answer596 == 'g' || $answer596 == 'G') { $totalCorrect++; }
$answer630 = $_POST['q630'];
if ($answer630 == 'j' || $answer630 == 'J') { $totalCorrect++; }
$answer631 = $_POST['q631'];
if ($answer631 == 'k' || $answer631 == 'K') { $totalCorrect++; }
$answer632 = $_POST['q632'];
if ($answer632 == 'd' || $answer632 == 'D') { $totalCorrect++; }
$answer633 = $_POST['q633'];
if ($answer633 == 's' || $answer633 == 'S') { $totalCorrect++; }
$answer634 = $_POST['q634'];
if ($answer634 == 'a' || $answer634 == 'A') { $totalCorrect++; }
$answer635 = $_POST['q635'];
if ($answer635 == 'g' || $answer635 == 'G') { $totalCorrect++; }
$answer636 = $_POST['q636'];
if ($answer636 == 'n' || $answer636 == 'N') { $totalCorrect++; }
$answer637 = $_POST['q637'];
if ($answer637 == 'b' || $answer637 == 'B') { $totalCorrect++; }
$answer638 = $_POST['q638'];
if ($answer638 == 'l' || $answer638 == 'L') { $totalCorrect++; }
$answer639 = $_POST['q639'];
if ($answer639 == 'b' || $answer639 == 'B') { $totalCorrect++; }
$answer640 = $_POST['q640'];
if ($answer640 == 'j' || $answer640 == 'J') { $totalCorrect++; }
$answer641 = $_POST['q641'];
if ($answer641 == 'k' || $answer641 == 'K') { $totalCorrect++; }
$answer642 = $_POST['q642'];
if ($answer642 == 'n' || $answer642 == 'N') { $totalCorrect++; }
$answer643 = $_POST['q643'];
if ($answer643 == 'a' || $answer643 == 'A') { $totalCorrect++; }
$answer644 = $_POST['q644'];
if ($answer644 == 's' || $answer644 == 'S') { $totalCorrect++; }
$answer645 = $_POST['q645'];
if ($answer645 == 'd' || $answer645 == 'D') { $totalCorrect++; }
$answer646 = $_POST['q646'];
if ($answer646 == 'g' || $answer646 == 'G') { $totalCorrect++; }
$answer674 = $_POST['q674'];
if ($answer674 == 'k' || $answer674 == 'K') { $totalCorrect++; }
$answer708 = $_POST['q708'];
if ($answer708 == 'b' || $answer708 == 'B') { $totalCorrect++; }
$answer742 = $_POST['q742'];
if ($answer742 == 's' || $answer742 == 'S') { $totalCorrect++; }
$answer776 = $_POST['q776'];
if ($answer776 == 'k' || $answer776 == 'K') { $totalCorrect++; }
$answer810 = $_POST['q810'];
if ($answer810 == 'd' || $answer810 == 'D') { $totalCorrect++; }
$answer844 = $_POST['q844'];
if ($answer844 == 'a' || $answer844 == 'A') { $totalCorrect++; }
$answer878 = $_POST['q878'];
if ($answer878 == 'g' || $answer878 == 'G') { $totalCorrect++; }
$answer912 = $_POST['q912'];
if ($answer912 == 'k' || $answer912 == 'K') { $totalCorrect++; }
$answer946 = $_POST['q946'];
if ($answer946 == 'j' || $answer946 == 'J') { $totalCorrect++; }
$answer980 = $_POST['q980'];
if ($answer980 == 'l' || $answer980 == 'L') { $totalCorrect++; }
$answer1014 = $_POST['q1014'];
if ($answer1014 == 'a' || $answer1014 == 'A') { $totalCorrect++; }
$answer1048 = $_POST['q1048'];
if ($answer1048 == 's' || $answer1048 == 'S') { $totalCorrect++; }
$answer1082 = $_POST['q1082'];
if ($answer1082 == 'd' || $answer1082 == 'D') { $totalCorrect++; }
$answer1116 = $_POST['q1116'];
if ($answer1116 == 'g' || $answer1116 == 'G') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='question'>4. </div>";
echo "<div class='question'>5. </div>";
echo "<div class='question'>6. </div>";
echo "<div class='question'>7. </div>";
echo "<div class='question'>8. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 107 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>