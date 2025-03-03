<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num1'>1</a><input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><a class='num2'>2</a><input class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><a class='num3'>3</a><input class='field21' type='text' name='q21' value='<?php if(isset($_POST['q21'])) echo $_POST['q21']; ?>'><a class='num4'>4</a><input class='field22' type='text' name='q22' value='<?php if(isset($_POST['q22'])) echo $_POST['q22']; ?>'><input class='field23' type='text' name='q23' value='<?php if(isset($_POST['q23'])) echo $_POST['q23']; ?>'><input class='field24' type='text' name='q24' value='<?php if(isset($_POST['q24'])) echo $_POST['q24']; ?>'><input class='field25' type='text' name='q25' value='<?php if(isset($_POST['q25'])) echo $_POST['q25']; ?>'><input class='field26' type='text' name='q26' value='<?php if(isset($_POST['q26'])) echo $_POST['q26']; ?>'><input class='field27' type='text' name='q27' value='<?php if(isset($_POST['q27'])) echo $_POST['q27']; ?>'><input class='field28' type='text' name='q28' value='<?php if(isset($_POST['q28'])) echo $_POST['q28']; ?>'><input class='field29' type='text' name='q29' value='<?php if(isset($_POST['q29'])) echo $_POST['q29']; ?>'><input class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><input class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input class='field44' type='text' name='q44' value='<?php if(isset($_POST['q44'])) echo $_POST['q44']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><a class='num5'>5</a><input class='field50' type='text' name='q50' value='<?php if(isset($_POST['q50'])) echo $_POST['q50']; ?>'><input class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input class='field52' type='text' name='q52' value='<?php if(isset($_POST['q52'])) echo $_POST['q52']; ?>'><input class='field53' type='text' name='q53' value='<?php if(isset($_POST['q53'])) echo $_POST['q53']; ?>'><input class='field54' type='text' name='q54' value='<?php if(isset($_POST['q54'])) echo $_POST['q54']; ?>'><input class='field57' type='text' name='q57' value='<?php if(isset($_POST['q57'])) echo $_POST['q57']; ?>'><input class='field60' type='text' name='q60' value='<?php if(isset($_POST['q60'])) echo $_POST['q60']; ?>'><input class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><input class='field76' type='text' name='q76' value='<?php if(isset($_POST['q76'])) echo $_POST['q76']; ?>'><a class='num6'>6</a><input class='field77' type='text' name='q77' value='<?php if(isset($_POST['q77'])) echo $_POST['q77']; ?>'><input class='field78' type='text' name='q78' value='<?php if(isset($_POST['q78'])) echo $_POST['q78']; ?>'><input class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><input class='field80' type='text' name='q80' value='<?php if(isset($_POST['q80'])) echo $_POST['q80']; ?>'><input class='field88' type='text' name='q88' value='<?php if(isset($_POST['q88'])) echo $_POST['q88']; ?>'><a class='num7'>7</a><input class='field92' type='text' name='q92' value='<?php if(isset($_POST['q92'])) echo $_POST['q92']; ?>'><input class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><a class='num8'>8</a><input class='field104' type='text' name='q104' value='<?php if(isset($_POST['q104'])) echo $_POST['q104']; ?>'><input class='field105' type='text' name='q105' value='<?php if(isset($_POST['q105'])) echo $_POST['q105']; ?>'><input class='field106' type='text' name='q106' value='<?php if(isset($_POST['q106'])) echo $_POST['q106']; ?>'><input class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input class='field108' type='text' name='q108' value='<?php if(isset($_POST['q108'])) echo $_POST['q108']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field134' type='text' name='q134' value='<?php if(isset($_POST['q134'])) echo $_POST['q134']; ?>'><a class='num9'>9</a><input class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><input class='field136' type='text' name='q136' value='<?php if(isset($_POST['q136'])) echo $_POST['q136']; ?>'><input class='field137' type='text' name='q137' value='<?php if(isset($_POST['q137'])) echo $_POST['q137']; ?>'><input class='field138' type='text' name='q138' value='<?php if(isset($_POST['q138'])) echo $_POST['q138']; ?>'><input class='field139' type='text' name='q139' value='<?php if(isset($_POST['q139'])) echo $_POST['q139']; ?>'><input class='field152' type='text' name='q152' value='<?php if(isset($_POST['q152'])) echo $_POST['q152']; ?>'><input class='field168' type='text' name='q168' value='<?php if(isset($_POST['q168'])) echo $_POST['q168']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer5 = $_POST['q5'];
if ($answer5 == 'п' || $answer5 == 'П') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'б' || $answer9 == 'Б') { $totalCorrect++; }
$answer12 = $_POST['q12'];
if ($answer12 == 'в' || $answer12 == 'В') { $totalCorrect++; }
$answer21 = $_POST['q21'];
if ($answer21 == 'а' || $answer21 == 'А') { $totalCorrect++; }
$answer22 = $_POST['q22'];
if ($answer22 == 'м' || $answer22 == 'М') { $totalCorrect++; }
$answer23 = $_POST['q23'];
if ($answer23 == 'с' || $answer23 == 'С') { $totalCorrect++; }
$answer24 = $_POST['q24'];
if ($answer24 == 'т' || $answer24 == 'Т') { $totalCorrect++; }
$answer25 = $_POST['q25'];
if ($answer25 == 'е' || $answer25 == 'Е') { $totalCorrect++; }
$answer26 = $_POST['q26'];
if ($answer26 == 'р' || $answer26 == 'Р') { $totalCorrect++; }
$answer27 = $_POST['q27'];
if ($answer27 == 'д' || $answer27 == 'Д') { $totalCorrect++; }
$answer28 = $_POST['q28'];
if ($answer28 == 'а' || $answer28 == 'А') { $totalCorrect++; }
$answer29 = $_POST['q29'];
if ($answer29 == 'м' || $answer29 == 'М') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 'р' || $answer37 == 'Р') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'р' || $answer41 == 'Р') { $totalCorrect++; }
$answer44 = $_POST['q44'];
if ($answer44 == 'р' || $answer44 == 'Р') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'б' || $answer49 == 'Б') { $totalCorrect++; }
$answer50 = $_POST['q50'];
if ($answer50 == 'е' || $answer50 == 'Е') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == 'р' || $answer51 == 'Р') { $totalCorrect++; }
$answer52 = $_POST['q52'];
if ($answer52 == 'л' || $answer52 == 'Л') { $totalCorrect++; }
$answer53 = $_POST['q53'];
if ($answer53 == 'и' || $answer53 == 'И') { $totalCorrect++; }
$answer54 = $_POST['q54'];
if ($answer54 == 'н' || $answer54 == 'Н') { $totalCorrect++; }
$answer57 = $_POST['q57'];
if ($answer57 == 'н' || $answer57 == 'Н') { $totalCorrect++; }
$answer60 = $_POST['q60'];
if ($answer60 == 'ш' || $answer60 == 'Ш') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == 'ж' || $answer69 == 'Ж') { $totalCorrect++; }
$answer76 = $_POST['q76'];
if ($answer76 == 'а' || $answer76 == 'А') { $totalCorrect++; }
$answer77 = $_POST['q77'];
if ($answer77 == 'ф' || $answer77 == 'Ф') { $totalCorrect++; }
$answer78 = $_POST['q78'];
if ($answer78 == 'и' || $answer78 == 'И') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'н' || $answer79 == 'Н') { $totalCorrect++; }
$answer80 = $_POST['q80'];
if ($answer80 == 'ы' || $answer80 == 'Ы') { $totalCorrect++; }
$answer88 = $_POST['q88'];
if ($answer88 == 'л' || $answer88 == 'Л') { $totalCorrect++; }
$answer92 = $_POST['q92'];
if ($answer92 == 'в' || $answer92 == 'В') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == 'м' || $answer103 == 'М') { $totalCorrect++; }
$answer104 = $_POST['q104'];
if ($answer104 == 'о' || $answer104 == 'О') { $totalCorrect++; }
$answer105 = $_POST['q105'];
if ($answer105 == 'с' || $answer105 == 'С') { $totalCorrect++; }
$answer106 = $_POST['q106'];
if ($answer106 == 'к' || $answer106 == 'К') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'в' || $answer107 == 'В') { $totalCorrect++; }
$answer108 = $_POST['q108'];
if ($answer108 == 'а' || $answer108 == 'А') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'н' || $answer120 == 'Н') { $totalCorrect++; }
$answer134 = $_POST['q134'];
if ($answer134 == 'м' || $answer134 == 'М') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'а' || $answer135 == 'А') { $totalCorrect++; }
$answer136 = $_POST['q136'];
if ($answer136 == 'д' || $answer136 == 'Д') { $totalCorrect++; }
$answer137 = $_POST['q137'];
if ($answer137 == 'р' || $answer137 == 'Р') { $totalCorrect++; }
$answer138 = $_POST['q138'];
if ($answer138 == 'и' || $answer138 == 'И') { $totalCorrect++; }
$answer139 = $_POST['q139'];
if ($answer139 == 'д' || $answer139 == 'Д') { $totalCorrect++; }
$answer152 = $_POST['q152'];
if ($answer152 == 'о' || $answer152 == 'О') { $totalCorrect++; }
$answer168 = $_POST['q168'];
if ($answer168 == 'н' || $answer168 == 'Н') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Франция</div>";
echo "<div class='question'>2. Швейцария</div>";
echo "<div class='question'>3. Польша</div>";
echo "<div class='question'>4. Нидерланды</div>";
echo "<div class='question'>5. Германия</div>";
echo "<div class='question'>6. Греция</div>";
echo "<div class='question'>7. Великобритания</div>";
echo "<div class='question'>8. Россия</div>";
echo "<div class='question'>9. Испания</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 46 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>