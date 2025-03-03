<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><a class='num1'>1</a><input class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><a class='num2'>2</a><input class='field20' type='text' name='q20' value='<?php if(isset($_POST['q20'])) echo $_POST['q20']; ?>'><input class='field27' type='text' name='q27' value='<?php if(isset($_POST['q27'])) echo $_POST['q27']; ?>'><input class='field30' type='text' name='q30' value='<?php if(isset($_POST['q30'])) echo $_POST['q30']; ?>'><a class='num3'>3</a><input class='field31' type='text' name='q31' value='<?php if(isset($_POST['q31'])) echo $_POST['q31']; ?>'><input class='field32' type='text' name='q32' value='<?php if(isset($_POST['q32'])) echo $_POST['q32']; ?>'><input class='field33' type='text' name='q33' value='<?php if(isset($_POST['q33'])) echo $_POST['q33']; ?>'><input class='field36' type='text' name='q36' value='<?php if(isset($_POST['q36'])) echo $_POST['q36']; ?>'><a class='num4'>4</a><input class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><input class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input class='field42' type='text' name='q42' value='<?php if(isset($_POST['q42'])) echo $_POST['q42']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><a class='num5'>5</a><input class='field50' type='text' name='q50' value='<?php if(isset($_POST['q50'])) echo $_POST['q50']; ?>'><a class='num6'>6</a><input class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input class='field52' type='text' name='q52' value='<?php if(isset($_POST['q52'])) echo $_POST['q52']; ?>'><input class='field53' type='text' name='q53' value='<?php if(isset($_POST['q53'])) echo $_POST['q53']; ?>'><input class='field61' type='text' name='q61' value='<?php if(isset($_POST['q61'])) echo $_POST['q61']; ?>'><input class='field72' type='text' name='q72' value='<?php if(isset($_POST['q72'])) echo $_POST['q72']; ?>'><input class='field81' type='text' name='q81' value='<?php if(isset($_POST['q81'])) echo $_POST['q81']; ?>'><a class='num7'>7</a><a class='num8'>8</a><input class='field82' type='text' name='q82' value='<?php if(isset($_POST['q82'])) echo $_POST['q82']; ?>'><input class='field83' type='text' name='q83' value='<?php if(isset($_POST['q83'])) echo $_POST['q83']; ?>'><input class='field84' type='text' name='q84' value='<?php if(isset($_POST['q84'])) echo $_POST['q84']; ?>'><input class='field85' type='text' name='q85' value='<?php if(isset($_POST['q85'])) echo $_POST['q85']; ?>'><input class='field86' type='text' name='q86' value='<?php if(isset($_POST['q86'])) echo $_POST['q86']; ?>'><input class='field92' type='text' name='q92' value='<?php if(isset($_POST['q92'])) echo $_POST['q92']; ?>'><input class='field94' type='text' name='q94' value='<?php if(isset($_POST['q94'])) echo $_POST['q94']; ?>'><input class='field101' type='text' name='q101' value='<?php if(isset($_POST['q101'])) echo $_POST['q101']; ?>'><a class='num9'>9</a><input class='field102' type='text' name='q102' value='<?php if(isset($_POST['q102'])) echo $_POST['q102']; ?>'><input class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><input class='field104' type='text' name='q104' value='<?php if(isset($_POST['q104'])) echo $_POST['q104']; ?>'><input class='field105' type='text' name='q105' value='<?php if(isset($_POST['q105'])) echo $_POST['q105']; ?>'><input class='field114' type='text' name='q114' value='<?php if(isset($_POST['q114'])) echo $_POST['q114']; ?>'><input class='field125' type='text' name='q125' value='<?php if(isset($_POST['q125'])) echo $_POST['q125']; ?>'><input class='field133' type='text' name='q133' value='<?php if(isset($_POST['q133'])) echo $_POST['q133']; ?>'><a class='num10'>10</a><input class='field134' type='text' name='q134' value='<?php if(isset($_POST['q134'])) echo $_POST['q134']; ?>'><input class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><input class='field136' type='text' name='q136' value='<?php if(isset($_POST['q136'])) echo $_POST['q136']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer9 = $_POST['q9'];
if ($answer9 == 'к' || $answer9 == 'К') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'с' || $answer16 == 'С') { $totalCorrect++; }
$answer20 = $_POST['q20'];
if ($answer20 == 'р' || $answer20 == 'Р') { $totalCorrect++; }
$answer27 = $_POST['q27'];
if ($answer27 == 'о' || $answer27 == 'О') { $totalCorrect++; }
$answer30 = $_POST['q30'];
if ($answer30 == 'м' || $answer30 == 'М') { $totalCorrect++; }
$answer31 = $_POST['q31'];
if ($answer31 == 'ы' || $answer31 == 'Ы') { $totalCorrect++; }
$answer32 = $_POST['q32'];
if ($answer32 == 'ш' || $answer32 == 'Ш') { $totalCorrect++; }
$answer33 = $_POST['q33'];
if ($answer33 == 'ь' || $answer33 == 'Ь') { $totalCorrect++; }
$answer36 = $_POST['q36'];
if ($answer36 == 'л' || $answer36 == 'Л') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 'е' || $answer37 == 'Е') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'в' || $answer38 == 'В') { $totalCorrect++; }
$answer42 = $_POST['q42'];
if ($answer42 == 'с' || $answer42 == 'С') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'а' || $answer49 == 'А') { $totalCorrect++; }
$answer50 = $_POST['q50'];
if ($answer50 == 'к' || $answer50 == 'К') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == 'у' || $answer51 == 'У') { $totalCorrect++; }
$answer52 = $_POST['q52'];
if ($answer52 == 'л' || $answer52 == 'Л') { $totalCorrect++; }
$answer53 = $_POST['q53'];
if ($answer53 == 'а' || $answer53 == 'А') { $totalCorrect++; }
$answer61 = $_POST['q61'];
if ($answer61 == 'у' || $answer61 == 'У') { $totalCorrect++; }
$answer72 = $_POST['q72'];
if ($answer72 == 'р' || $answer72 == 'Р') { $totalCorrect++; }
$answer81 = $_POST['q81'];
if ($answer81 == 'с' || $answer81 == 'С') { $totalCorrect++; }
$answer82 = $_POST['q82'];
if ($answer82 == 'в' || $answer82 == 'В') { $totalCorrect++; }
$answer83 = $_POST['q83'];
if ($answer83 == 'и' || $answer83 == 'И') { $totalCorrect++; }
$answer84 = $_POST['q84'];
if ($answer84 == 'н' || $answer84 == 'Н') { $totalCorrect++; }
$answer85 = $_POST['q85'];
if ($answer85 == 'ь' || $answer85 == 'Ь') { $totalCorrect++; }
$answer86 = $_POST['q86'];
if ($answer86 == 'я' || $answer86 == 'Я') { $totalCorrect++; }
$answer92 = $_POST['q92'];
if ($answer92 == 'о' || $answer92 == 'О') { $totalCorrect++; }
$answer94 = $_POST['q94'];
if ($answer94 == 'ц' || $answer94 == 'Ц') { $totalCorrect++; }
$answer101 = $_POST['q101'];
if ($answer101 == 'з' || $answer101 == 'З') { $totalCorrect++; }
$answer102 = $_POST['q102'];
if ($answer102 == 'е' || $answer102 == 'Е') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == 'б' || $answer103 == 'Б') { $totalCorrect++; }
$answer104 = $_POST['q104'];
if ($answer104 == 'р' || $answer104 == 'Р') { $totalCorrect++; }
$answer105 = $_POST['q105'];
if ($answer105 == 'а' || $answer105 == 'А') { $totalCorrect++; }
$answer114 = $_POST['q114'];
if ($answer114 == 'а' || $answer114 == 'А') { $totalCorrect++; }
$answer125 = $_POST['q125'];
if ($answer125 == 'к' || $answer125 == 'К') { $totalCorrect++; }
$answer133 = $_POST['q133'];
if ($answer133 == 'р' || $answer133 == 'Р') { $totalCorrect++; }
$answer134 = $_POST['q134'];
if ($answer134 == 'ы' || $answer134 == 'Ы') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'б' || $answer135 == 'Б') { $totalCorrect++; }
$answer136 = $_POST['q136'];
if ($answer136 == 'а' || $answer136 == 'А') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. не мышь</div>";
echo "<div class='question'>2. агент из валоранта</div>";
echo "<div class='question'>3. кого боится слон</div>";
echo "<div class='question'>4. король зверей </div>";
echo "<div class='question'>5. рыба с зубками</div>";
echo "<div class='question'>6. KFC</div>";
echo "<div class='question'>7. вкусный бекончик</div>";
echo "<div class='question'>8. как кот но наоборот</div>";
echo "<div class='question'>9. пешеходный переход</div>";
echo "<div class='question'>10. суши</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 38 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>