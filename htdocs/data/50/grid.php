<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num1'>1</a><input class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><a class='num2'>2</a><input class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><input class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input class='field19' type='text' name='q19' value='<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>'><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><input class='field21' type='text' name='q21' value='<?php if(isset($_POST['q21'])) echo $_POST['q21']; ?>'><input class='field22' type='text' name='q22' value='<?php if(isset($_POST['q22'])) echo $_POST['q22']; ?>'><input class='field23' type='text' name='q23' value='<?php if(isset($_POST['q23'])) echo $_POST['q23']; ?>'><input class='field24' type='text' name='q24' value='<?php if(isset($_POST['q24'])) echo $_POST['q24']; ?>'><a class='num3'>3</a><input class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input class='field50' type='text' name='q50' value='<?php if(isset($_POST['q50'])) echo $_POST['q50']; ?>'><input class='field54' type='text' name='q54' value='<?php if(isset($_POST['q54'])) echo $_POST['q54']; ?>'><a class='num4'>4</a><input class='field55' type='text' name='q55' value='<?php if(isset($_POST['q55'])) echo $_POST['q55']; ?>'><input class='field56' type='text' name='q56' value='<?php if(isset($_POST['q56'])) echo $_POST['q56']; ?>'><input class='field57' type='text' name='q57' value='<?php if(isset($_POST['q57'])) echo $_POST['q57']; ?>'><input class='field58' type='text' name='q58' value='<?php if(isset($_POST['q58'])) echo $_POST['q58']; ?>'><input class='field62' type='text' name='q62' value='<?php if(isset($_POST['q62'])) echo $_POST['q62']; ?>'><a class='num5'>5</a><input class='field63' type='text' name='q63' value='<?php if(isset($_POST['q63'])) echo $_POST['q63']; ?>'><a class='num6'>6</a><input class='field64' type='text' name='q64' value='<?php if(isset($_POST['q64'])) echo $_POST['q64']; ?>'><input class='field65' type='text' name='q65' value='<?php if(isset($_POST['q65'])) echo $_POST['q65']; ?>'><input class='field66' type='text' name='q66' value='<?php if(isset($_POST['q66'])) echo $_POST['q66']; ?>'><input class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><input class='field75' type='text' name='q75' value='<?php if(isset($_POST['q75'])) echo $_POST['q75']; ?>'><a class='num7'>7</a><input class='field78' type='text' name='q78' value='<?php if(isset($_POST['q78'])) echo $_POST['q78']; ?>'><input class='field80' type='text' name='q80' value='<?php if(isset($_POST['q80'])) echo $_POST['q80']; ?>'><input class='field84' type='text' name='q84' value='<?php if(isset($_POST['q84'])) echo $_POST['q84']; ?>'><a class='num8'>8</a><input class='field85' type='text' name='q85' value='<?php if(isset($_POST['q85'])) echo $_POST['q85']; ?>'><input class='field86' type='text' name='q86' value='<?php if(isset($_POST['q86'])) echo $_POST['q86']; ?>'><input class='field87' type='text' name='q87' value='<?php if(isset($_POST['q87'])) echo $_POST['q87']; ?>'><input class='field88' type='text' name='q88' value='<?php if(isset($_POST['q88'])) echo $_POST['q88']; ?>'><input class='field89' type='text' name='q89' value='<?php if(isset($_POST['q89'])) echo $_POST['q89']; ?>'><input class='field90' type='text' name='q90' value='<?php if(isset($_POST['q90'])) echo $_POST['q90']; ?>'><input class='field93' type='text' name='q93' value='<?php if(isset($_POST['q93'])) echo $_POST['q93']; ?>'><input class='field99' type='text' name='q99' value='<?php if(isset($_POST['q99'])) echo $_POST['q99']; ?>'><input class='field105' type='text' name='q105' value='<?php if(isset($_POST['q105'])) echo $_POST['q105']; ?>'><input class='field106' type='text' name='q106' value='<?php if(isset($_POST['q106'])) echo $_POST['q106']; ?>'><a class='num9'>9</a><input class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input class='field108' type='text' name='q108' value='<?php if(isset($_POST['q108'])) echo $_POST['q108']; ?>'><input class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input class='field110' type='text' name='q110' value='<?php if(isset($_POST['q110'])) echo $_POST['q110']; ?>'><input class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field123' type='text' name='q123' value='<?php if(isset($_POST['q123'])) echo $_POST['q123']; ?>'><input class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><input class='field150' type='text' name='q150' value='<?php if(isset($_POST['q150'])) echo $_POST['q150']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer5 = $_POST['q5'];
if ($answer5 == 'б' || $answer5 == 'Б') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'а' || $answer16 == 'А') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'м' || $answer17 == 'М') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'с' || $answer18 == 'С') { $totalCorrect++; }
$answer19 = $_POST['q19'];
if ($answer19 == 'т' || $answer19 == 'Т') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'е' || $answer20 == 'Е') { $totalCorrect++; }
$answer21 = $_POST['q21'];
if ($answer21 == 'р' || $answer21 == 'Р') { $totalCorrect++; }
$answer22 = $_POST['q22'];
if ($answer22 == 'д' || $answer22 == 'Д') { $totalCorrect++; }
$answer23 = $_POST['q23'];
if ($answer23 == 'а' || $answer23 == 'А') { $totalCorrect++; }
$answer24 = $_POST['q24'];
if ($answer24 == 'м' || $answer24 == 'М') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'р' || $answer35 == 'Р') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'о' || $answer39 == 'О') { $totalCorrect++; }
$answer50 = $_POST['q50'];
if ($answer50 == 'л' || $answer50 == 'Л') { $totalCorrect++; }
$answer54 = $_POST['q54'];
if ($answer54 == 'с' || $answer54 == 'С') { $totalCorrect++; }
$answer55 = $_POST['q55'];
if ($answer55 == 'о' || $answer55 == 'О') { $totalCorrect++; }
$answer56 = $_POST['q56'];
if ($answer56 == 'ф' || $answer56 == 'Ф') { $totalCorrect++; }
$answer57 = $_POST['q57'];
if ($answer57 == 'и' || $answer57 == 'И') { $totalCorrect++; }
$answer58 = $_POST['q58'];
if ($answer58 == 'я' || $answer58 == 'Я') { $totalCorrect++; }
$answer62 = $_POST['q62'];
if ($answer62 == 'п' || $answer62 == 'П') { $totalCorrect++; }
$answer63 = $_POST['q63'];
if ($answer63 == 'а' || $answer63 == 'А') { $totalCorrect++; }
$answer64 = $_POST['q64'];
if ($answer64 == 'р' || $answer64 == 'Р') { $totalCorrect++; }
$answer65 = $_POST['q65'];
if ($answer65 == 'и' || $answer65 == 'И') { $totalCorrect++; }
$answer66 = $_POST['q66'];
if ($answer66 == 'ж' || $answer66 == 'Ж') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == 'к' || $answer69 == 'К') { $totalCorrect++; }
$answer75 = $_POST['q75'];
if ($answer75 == 'м' || $answer75 == 'М') { $totalCorrect++; }
$answer78 = $_POST['q78'];
if ($answer78 == 'ф' || $answer78 == 'Ф') { $totalCorrect++; }
$answer80 = $_POST['q80'];
if ($answer80 == 'н' || $answer80 == 'Н') { $totalCorrect++; }
$answer84 = $_POST['q84'];
if ($answer84 == 'в' || $answer84 == 'В') { $totalCorrect++; }
$answer85 = $_POST['q85'];
if ($answer85 == 'а' || $answer85 == 'А') { $totalCorrect++; }
$answer86 = $_POST['q86'];
if ($answer86 == 'р' || $answer86 == 'Р') { $totalCorrect++; }
$answer87 = $_POST['q87'];
if ($answer87 == 'ш' || $answer87 == 'Ш') { $totalCorrect++; }
$answer88 = $_POST['q88'];
if ($answer88 == 'а' || $answer88 == 'А') { $totalCorrect++; }
$answer89 = $_POST['q89'];
if ($answer89 == 'в' || $answer89 == 'В') { $totalCorrect++; }
$answer90 = $_POST['q90'];
if ($answer90 == 'а' || $answer90 == 'А') { $totalCorrect++; }
$answer93 = $_POST['q93'];
if ($answer93 == 'и' || $answer93 == 'И') { $totalCorrect++; }
$answer99 = $_POST['q99'];
if ($answer99 == 'а' || $answer99 == 'А') { $totalCorrect++; }
$answer105 = $_POST['q105'];
if ($answer105 == 'д' || $answer105 == 'Д') { $totalCorrect++; }
$answer106 = $_POST['q106'];
if ($answer106 == 'л' || $answer106 == 'Л') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'о' || $answer107 == 'О') { $totalCorrect++; }
$answer108 = $_POST['q108'];
if ($answer108 == 'н' || $answer108 == 'Н') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == 'д' || $answer109 == 'Д') { $totalCorrect++; }
$answer110 = $_POST['q110'];
if ($answer110 == 'о' || $answer110 == 'О') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'н' || $answer111 == 'Н') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'р' || $answer120 == 'Р') { $totalCorrect++; }
$answer123 = $_POST['q123'];
if ($answer123 == 'ы' || $answer123 == 'Ы') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'и' || $answer135 == 'И') { $totalCorrect++; }
$answer150 = $_POST['q150'];
if ($answer150 == 'д' || $answer150 == 'Д') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Германия</div>";
echo "<div class='question'>2. Нидерланды</div>";
echo "<div class='question'>3. Россия</div>";
echo "<div class='question'>4. Болгария</div>";
echo "<div class='question'>5. Франция</div>";
echo "<div class='question'>6. Греция</div>";
echo "<div class='question'>7. Испания</div>";
echo "<div class='question'>8. Польша</div>";
echo "<div class='question'>9. Великобритания</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 47 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>