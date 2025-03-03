<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><a class='num1'>1</a><input class='field23' type='text' name='q23' value='<?php if(isset($_POST['q23'])) echo $_POST['q23']; ?>'><input class='field36' type='text' name='q36' value='<?php if(isset($_POST['q36'])) echo $_POST['q36']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><input class='field59' type='text' name='q59' value='<?php if(isset($_POST['q59'])) echo $_POST['q59']; ?>'><a class='num2'>2</a><input class='field62' type='text' name='q62' value='<?php if(isset($_POST['q62'])) echo $_POST['q62']; ?>'><input class='field71' type='text' name='q71' value='<?php if(isset($_POST['q71'])) echo $_POST['q71']; ?>'><a class='num3'>3</a><input class='field72' type='text' name='q72' value='<?php if(isset($_POST['q72'])) echo $_POST['q72']; ?>'><input class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><input class='field74' type='text' name='q74' value='<?php if(isset($_POST['q74'])) echo $_POST['q74']; ?>'><input class='field75' type='text' name='q75' value='<?php if(isset($_POST['q75'])) echo $_POST['q75']; ?>'><input class='field76' type='text' name='q76' value='<?php if(isset($_POST['q76'])) echo $_POST['q76']; ?>'><input class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><a class='num4'>4</a><input class='field83' type='text' name='q83' value='<?php if(isset($_POST['q83'])) echo $_POST['q83']; ?>'><a class='num5'>5</a><input class='field85' type='text' name='q85' value='<?php if(isset($_POST['q85'])) echo $_POST['q85']; ?>'><input class='field88' type='text' name='q88' value='<?php if(isset($_POST['q88'])) echo $_POST['q88']; ?>'><input class='field92' type='text' name='q92' value='<?php if(isset($_POST['q92'])) echo $_POST['q92']; ?>'><a class='num6'>6</a><input class='field93' type='text' name='q93' value='<?php if(isset($_POST['q93'])) echo $_POST['q93']; ?>'><input class='field94' type='text' name='q94' value='<?php if(isset($_POST['q94'])) echo $_POST['q94']; ?>'><a class='num7'>7</a><input class='field95' type='text' name='q95' value='<?php if(isset($_POST['q95'])) echo $_POST['q95']; ?>'><input class='field96' type='text' name='q96' value='<?php if(isset($_POST['q96'])) echo $_POST['q96']; ?>'><input class='field97' type='text' name='q97' value='<?php if(isset($_POST['q97'])) echo $_POST['q97']; ?>'><input class='field98' type='text' name='q98' value='<?php if(isset($_POST['q98'])) echo $_POST['q98']; ?>'><input class='field99' type='text' name='q99' value='<?php if(isset($_POST['q99'])) echo $_POST['q99']; ?>'><input class='field100' type='text' name='q100' value='<?php if(isset($_POST['q100'])) echo $_POST['q100']; ?>'><a class='num8'>8</a><input class='field105' type='text' name='q105' value='<?php if(isset($_POST['q105'])) echo $_POST['q105']; ?>'><input class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input class='field113' type='text' name='q113' value='<?php if(isset($_POST['q113'])) echo $_POST['q113']; ?>'><a class='num9'>9</a><input class='field114' type='text' name='q114' value='<?php if(isset($_POST['q114'])) echo $_POST['q114']; ?>'><input class='field115' type='text' name='q115' value='<?php if(isset($_POST['q115'])) echo $_POST['q115']; ?>'><input class='field116' type='text' name='q116' value='<?php if(isset($_POST['q116'])) echo $_POST['q116']; ?>'><input class='field117' type='text' name='q117' value='<?php if(isset($_POST['q117'])) echo $_POST['q117']; ?>'><input class='field118' type='text' name='q118' value='<?php if(isset($_POST['q118'])) echo $_POST['q118']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field122' type='text' name='q122' value='<?php if(isset($_POST['q122'])) echo $_POST['q122']; ?>'><input class='field124' type='text' name='q124' value='<?php if(isset($_POST['q124'])) echo $_POST['q124']; ?>'><input class='field126' type='text' name='q126' value='<?php if(isset($_POST['q126'])) echo $_POST['q126']; ?>'><input class='field131' type='text' name='q131' value='<?php if(isset($_POST['q131'])) echo $_POST['q131']; ?>'><input class='field133' type='text' name='q133' value='<?php if(isset($_POST['q133'])) echo $_POST['q133']; ?>'><input class='field139' type='text' name='q139' value='<?php if(isset($_POST['q139'])) echo $_POST['q139']; ?>'><input class='field146' type='text' name='q146' value='<?php if(isset($_POST['q146'])) echo $_POST['q146']; ?>'><input class='field148' type='text' name='q148' value='<?php if(isset($_POST['q148'])) echo $_POST['q148']; ?>'><a class='num10'>10</a><input class='field149' type='text' name='q149' value='<?php if(isset($_POST['q149'])) echo $_POST['q149']; ?>'><input class='field150' type='text' name='q150' value='<?php if(isset($_POST['q150'])) echo $_POST['q150']; ?>'><input class='field151' type='text' name='q151' value='<?php if(isset($_POST['q151'])) echo $_POST['q151']; ?>'><input class='field152' type='text' name='q152' value='<?php if(isset($_POST['q152'])) echo $_POST['q152']; ?>'><input class='field153' type='text' name='q153' value='<?php if(isset($_POST['q153'])) echo $_POST['q153']; ?>'><input class='field165' type='text' name='q165' value='<?php if(isset($_POST['q165'])) echo $_POST['q165']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer10 = $_POST['q10'];
if ($answer10 == 'в' || $answer10 == 'В') { $totalCorrect++; }
$answer23 = $_POST['q23'];
if ($answer23 == 'а' || $answer23 == 'А') { $totalCorrect++; }
$answer36 = $_POST['q36'];
if ($answer36 == 'р' || $answer36 == 'Р') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'ш' || $answer49 == 'Ш') { $totalCorrect++; }
$answer59 = $_POST['q59'];
if ($answer59 == 'л' || $answer59 == 'Л') { $totalCorrect++; }
$answer62 = $_POST['q62'];
if ($answer62 == 'а' || $answer62 == 'А') { $totalCorrect++; }
$answer71 = $_POST['q71'];
if ($answer71 == 'м' || $answer71 == 'М') { $totalCorrect++; }
$answer72 = $_POST['q72'];
if ($answer72 == 'о' || $answer72 == 'О') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == 'с' || $answer73 == 'С') { $totalCorrect++; }
$answer74 = $_POST['q74'];
if ($answer74 == 'к' || $answer74 == 'К') { $totalCorrect++; }
$answer75 = $_POST['q75'];
if ($answer75 == 'в' || $answer75 == 'В') { $totalCorrect++; }
$answer76 = $_POST['q76'];
if ($answer76 == 'а' || $answer76 == 'А') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'п' || $answer79 == 'П') { $totalCorrect++; }
$answer83 = $_POST['q83'];
if ($answer83 == 'б' || $answer83 == 'Б') { $totalCorrect++; }
$answer85 = $_POST['q85'];
if ($answer85 == 'н' || $answer85 == 'Н') { $totalCorrect++; }
$answer88 = $_POST['q88'];
if ($answer88 == 'а' || $answer88 == 'А') { $totalCorrect++; }
$answer92 = $_POST['q92'];
if ($answer92 == 'а' || $answer92 == 'А') { $totalCorrect++; }
$answer93 = $_POST['q93'];
if ($answer93 == 'м' || $answer93 == 'М') { $totalCorrect++; }
$answer94 = $_POST['q94'];
if ($answer94 == 'с' || $answer94 == 'С') { $totalCorrect++; }
$answer95 = $_POST['q95'];
if ($answer95 == 'т' || $answer95 == 'Т') { $totalCorrect++; }
$answer96 = $_POST['q96'];
if ($answer96 == 'е' || $answer96 == 'Е') { $totalCorrect++; }
$answer97 = $_POST['q97'];
if ($answer97 == 'р' || $answer97 == 'Р') { $totalCorrect++; }
$answer98 = $_POST['q98'];
if ($answer98 == 'д' || $answer98 == 'Д') { $totalCorrect++; }
$answer99 = $_POST['q99'];
if ($answer99 == 'а' || $answer99 == 'А') { $totalCorrect++; }
$answer100 = $_POST['q100'];
if ($answer100 == 'м' || $answer100 == 'М') { $totalCorrect++; }
$answer105 = $_POST['q105'];
if ($answer105 == 'р' || $answer105 == 'Р') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'о' || $answer107 == 'О') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == 'р' || $answer109 == 'Р') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'о' || $answer111 == 'О') { $totalCorrect++; }
$answer113 = $_POST['q113'];
if ($answer113 == 'а' || $answer113 == 'А') { $totalCorrect++; }
$answer114 = $_POST['q114'];
if ($answer114 == 'ф' || $answer114 == 'Ф') { $totalCorrect++; }
$answer115 = $_POST['q115'];
if ($answer115 == 'и' || $answer115 == 'И') { $totalCorrect++; }
$answer116 = $_POST['q116'];
if ($answer116 == 'н' || $answer116 == 'Н') { $totalCorrect++; }
$answer117 = $_POST['q117'];
if ($answer117 == 'ы' || $answer117 == 'Ы') { $totalCorrect++; }
$answer118 = $_POST['q118'];
if ($answer118 == 'и' || $answer118 == 'И') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'ф' || $answer120 == 'Ф') { $totalCorrect++; }
$answer122 = $_POST['q122'];
if ($answer122 == 'н' || $answer122 == 'Н') { $totalCorrect++; }
$answer124 = $_POST['q124'];
if ($answer124 == 'н' || $answer124 == 'Н') { $totalCorrect++; }
$answer126 = $_POST['q126'];
if ($answer126 == 'д' || $answer126 == 'Д') { $totalCorrect++; }
$answer131 = $_POST['q131'];
if ($answer131 == 'ж' || $answer131 == 'Ж') { $totalCorrect++; }
$answer133 = $_POST['q133'];
if ($answer133 == 'и' || $answer133 == 'И') { $totalCorrect++; }
$answer139 = $_POST['q139'];
if ($answer139 == 'р' || $answer139 == 'Р') { $totalCorrect++; }
$answer146 = $_POST['q146'];
if ($answer146 == 'я' || $answer146 == 'Я') { $totalCorrect++; }
$answer148 = $_POST['q148'];
if ($answer148 == 'б' || $answer148 == 'Б') { $totalCorrect++; }
$answer149 = $_POST['q149'];
if ($answer149 == 'е' || $answer149 == 'Е') { $totalCorrect++; }
$answer150 = $_POST['q150'];
if ($answer150 == 'р' || $answer150 == 'Р') { $totalCorrect++; }
$answer151 = $_POST['q151'];
if ($answer151 == 'л' || $answer151 == 'Л') { $totalCorrect++; }
$answer152 = $_POST['q152'];
if ($answer152 == 'и' || $answer152 == 'И') { $totalCorrect++; }
$answer153 = $_POST['q153'];
if ($answer153 == 'н' || $answer153 == 'Н') { $totalCorrect++; }
$answer165 = $_POST['q165'];
if ($answer165 == 'д' || $answer165 == 'Д') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Польша</div>";
echo "<div class='question'>2. Великобритания</div>";
echo "<div class='question'>3. Россия</div>";
echo "<div class='question'>4. Франция</div>";
echo "<div class='question'>5. Швейцария</div>";
echo "<div class='question'>6. Нидерланды</div>";
echo "<div class='question'>7. Болгария</div>";
echo "<div class='question'>8. Испания</div>";
echo "<div class='question'>9. Греция</div>";
echo "<div class='question'>10. Германия</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 50 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>