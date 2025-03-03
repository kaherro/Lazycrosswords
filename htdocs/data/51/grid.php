<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num1'>1</a><input class='field18' type='text' name='q18' value='<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>'><input class='field29' type='text' name='q29' value='<?php if(isset($_POST['q29'])) echo $_POST['q29']; ?>'><input class='field40' type='text' name='q40' value='<?php if(isset($_POST['q40'])) echo $_POST['q40']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><a class='num2'>2</a><input class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input class='field56' type='text' name='q56' value='<?php if(isset($_POST['q56'])) echo $_POST['q56']; ?>'><a class='num3'>3</a><input class='field57' type='text' name='q57' value='<?php if(isset($_POST['q57'])) echo $_POST['q57']; ?>'><a class='num4'>4</a><input class='field58' type='text' name='q58' value='<?php if(isset($_POST['q58'])) echo $_POST['q58']; ?>'><input class='field59' type='text' name='q59' value='<?php if(isset($_POST['q59'])) echo $_POST['q59']; ?>'><input class='field60' type='text' name='q60' value='<?php if(isset($_POST['q60'])) echo $_POST['q60']; ?>'><input class='field61' type='text' name='q61' value='<?php if(isset($_POST['q61'])) echo $_POST['q61']; ?>'><input class='field62' type='text' name='q62' value='<?php if(isset($_POST['q62'])) echo $_POST['q62']; ?>'><input class='field63' type='text' name='q63' value='<?php if(isset($_POST['q63'])) echo $_POST['q63']; ?>'><a class='num5'>5</a><input class='field64' type='text' name='q64' value='<?php if(isset($_POST['q64'])) echo $_POST['q64']; ?>'><input class='field68' type='text' name='q68' value='<?php if(isset($_POST['q68'])) echo $_POST['q68']; ?>'><input class='field71' type='text' name='q71' value='<?php if(isset($_POST['q71'])) echo $_POST['q71']; ?>'><input class='field74' type='text' name='q74' value='<?php if(isset($_POST['q74'])) echo $_POST['q74']; ?>'><input class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><input class='field82' type='text' name='q82' value='<?php if(isset($_POST['q82'])) echo $_POST['q82']; ?>'><input class='field85' type='text' name='q85' value='<?php if(isset($_POST['q85'])) echo $_POST['q85']; ?>'><input class='field87' type='text' name='q87' value='<?php if(isset($_POST['q87'])) echo $_POST['q87']; ?>'><a class='num6'>6</a><input class='field90' type='text' name='q90' value='<?php if(isset($_POST['q90'])) echo $_POST['q90']; ?>'><input class='field94' type='text' name='q94' value='<?php if(isset($_POST['q94'])) echo $_POST['q94']; ?>'><a class='num7'>7</a><input class='field95' type='text' name='q95' value='<?php if(isset($_POST['q95'])) echo $_POST['q95']; ?>'><input class='field96' type='text' name='q96' value='<?php if(isset($_POST['q96'])) echo $_POST['q96']; ?>'><input class='field97' type='text' name='q97' value='<?php if(isset($_POST['q97'])) echo $_POST['q97']; ?>'><input class='field98' type='text' name='q98' value='<?php if(isset($_POST['q98'])) echo $_POST['q98']; ?>'><input class='field99' type='text' name='q99' value='<?php if(isset($_POST['q99'])) echo $_POST['q99']; ?>'><input class='field101' type='text' name='q101' value='<?php if(isset($_POST['q101'])) echo $_POST['q101']; ?>'><input class='field104' type='text' name='q104' value='<?php if(isset($_POST['q104'])) echo $_POST['q104']; ?>'><a class='num8'>8</a><input class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><a class='num9'>9</a><input class='field112' type='text' name='q112' value='<?php if(isset($_POST['q112'])) echo $_POST['q112']; ?>'><input class='field113' type='text' name='q113' value='<?php if(isset($_POST['q113'])) echo $_POST['q113']; ?>'><input class='field114' type='text' name='q114' value='<?php if(isset($_POST['q114'])) echo $_POST['q114']; ?>'><input class='field115' type='text' name='q115' value='<?php if(isset($_POST['q115'])) echo $_POST['q115']; ?>'><input class='field116' type='text' name='q116' value='<?php if(isset($_POST['q116'])) echo $_POST['q116']; ?>'><input class='field117' type='text' name='q117' value='<?php if(isset($_POST['q117'])) echo $_POST['q117']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field126' type='text' name='q126' value='<?php if(isset($_POST['q126'])) echo $_POST['q126']; ?>'><input class='field131' type='text' name='q131' value='<?php if(isset($_POST['q131'])) echo $_POST['q131']; ?>'><input class='field133' type='text' name='q133' value='<?php if(isset($_POST['q133'])) echo $_POST['q133']; ?>'><a class='num10'>10</a><input class='field134' type='text' name='q134' value='<?php if(isset($_POST['q134'])) echo $_POST['q134']; ?>'><input class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><input class='field136' type='text' name='q136' value='<?php if(isset($_POST['q136'])) echo $_POST['q136']; ?>'><input class='field137' type='text' name='q137' value='<?php if(isset($_POST['q137'])) echo $_POST['q137']; ?>'><input class='field138' type='text' name='q138' value='<?php if(isset($_POST['q138'])) echo $_POST['q138']; ?>'><input class='field148' type='text' name='q148' value='<?php if(isset($_POST['q148'])) echo $_POST['q148']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer7 = $_POST['q7'];
if ($answer7 == 'м' || $answer7 == 'М') { $totalCorrect++; }
$answer18 = $_POST['q18'];
if ($answer18 == 'а' || $answer18 == 'А') { $totalCorrect++; }
$answer29 = $_POST['q29'];
if ($answer29 == 'д' || $answer29 == 'Д') { $totalCorrect++; }
$answer40 = $_POST['q40'];
if ($answer40 == 'р' || $answer40 == 'Р') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'б' || $answer49 == 'Б') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == 'и' || $answer51 == 'И') { $totalCorrect++; }
$answer56 = $_POST['q56'];
if ($answer56 == 'а' || $answer56 == 'А') { $totalCorrect++; }
$answer57 = $_POST['q57'];
if ($answer57 == 'м' || $answer57 == 'М') { $totalCorrect++; }
$answer58 = $_POST['q58'];
if ($answer58 == 'с' || $answer58 == 'С') { $totalCorrect++; }
$answer59 = $_POST['q59'];
if ($answer59 == 'т' || $answer59 == 'Т') { $totalCorrect++; }
$answer60 = $_POST['q60'];
if ($answer60 == 'е' || $answer60 == 'Е') { $totalCorrect++; }
$answer61 = $_POST['q61'];
if ($answer61 == 'р' || $answer61 == 'Р') { $totalCorrect++; }
$answer62 = $_POST['q62'];
if ($answer62 == 'д' || $answer62 == 'Д') { $totalCorrect++; }
$answer63 = $_POST['q63'];
if ($answer63 == 'а' || $answer63 == 'А') { $totalCorrect++; }
$answer64 = $_POST['q64'];
if ($answer64 == 'м' || $answer64 == 'М') { $totalCorrect++; }
$answer68 = $_POST['q68'];
if ($answer68 == 'о' || $answer68 == 'О') { $totalCorrect++; }
$answer71 = $_POST['q71'];
if ($answer71 == 'р' || $answer71 == 'Р') { $totalCorrect++; }
$answer74 = $_POST['q74'];
if ($answer74 == 'ф' || $answer74 == 'Ф') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'с' || $answer79 == 'С') { $totalCorrect++; }
$answer82 = $_POST['q82'];
if ($answer82 == 'н' || $answer82 == 'Н') { $totalCorrect++; }
$answer85 = $_POST['q85'];
if ($answer85 == 'и' || $answer85 == 'И') { $totalCorrect++; }
$answer87 = $_POST['q87'];
if ($answer87 == 'с' || $answer87 == 'С') { $totalCorrect++; }
$answer90 = $_POST['q90'];
if ($answer90 == 'к' || $answer90 == 'К') { $totalCorrect++; }
$answer94 = $_POST['q94'];
if ($answer94 == 'л' || $answer94 == 'Л') { $totalCorrect++; }
$answer95 = $_POST['q95'];
if ($answer95 == 'о' || $answer95 == 'О') { $totalCorrect++; }
$answer96 = $_POST['q96'];
if ($answer96 == 'н' || $answer96 == 'Н') { $totalCorrect++; }
$answer97 = $_POST['q97'];
if ($answer97 == 'д' || $answer97 == 'Д') { $totalCorrect++; }
$answer98 = $_POST['q98'];
if ($answer98 == 'о' || $answer98 == 'О') { $totalCorrect++; }
$answer99 = $_POST['q99'];
if ($answer99 == 'н' || $answer99 == 'Н') { $totalCorrect++; }
$answer101 = $_POST['q101'];
if ($answer101 == 'в' || $answer101 == 'В') { $totalCorrect++; }
$answer104 = $_POST['q104'];
if ($answer104 == 'п' || $answer104 == 'П') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'ы' || $answer107 == 'Ы') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == 'ф' || $answer109 == 'Ф') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'в' || $answer111 == 'В') { $totalCorrect++; }
$answer112 = $_POST['q112'];
if ($answer112 == 'а' || $answer112 == 'А') { $totalCorrect++; }
$answer113 = $_POST['q113'];
if ($answer113 == 'р' || $answer113 == 'Р') { $totalCorrect++; }
$answer114 = $_POST['q114'];
if ($answer114 == 'ш' || $answer114 == 'Ш') { $totalCorrect++; }
$answer115 = $_POST['q115'];
if ($answer115 == 'а' || $answer115 == 'А') { $totalCorrect++; }
$answer116 = $_POST['q116'];
if ($answer116 == 'в' || $answer116 == 'В') { $totalCorrect++; }
$answer117 = $_POST['q117'];
if ($answer117 == 'а' || $answer117 == 'А') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'и' || $answer120 == 'И') { $totalCorrect++; }
$answer126 = $_POST['q126'];
if ($answer126 == 'р' || $answer126 == 'Р') { $totalCorrect++; }
$answer131 = $_POST['q131'];
if ($answer131 == 'я' || $answer131 == 'Я') { $totalCorrect++; }
$answer133 = $_POST['q133'];
if ($answer133 == 'б' || $answer133 == 'Б') { $totalCorrect++; }
$answer134 = $_POST['q134'];
if ($answer134 == 'е' || $answer134 == 'Е') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'р' || $answer135 == 'Р') { $totalCorrect++; }
$answer136 = $_POST['q136'];
if ($answer136 == 'л' || $answer136 == 'Л') { $totalCorrect++; }
$answer137 = $_POST['q137'];
if ($answer137 == 'и' || $answer137 == 'И') { $totalCorrect++; }
$answer138 = $_POST['q138'];
if ($answer138 == 'н' || $answer138 == 'Н') { $totalCorrect++; }
$answer148 = $_POST['q148'];
if ($answer148 == 'ж' || $answer148 == 'Ж') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Испания</div>";
echo "<div class='question'>2. Швейцария</div>";
echo "<div class='question'>3. Нидерланды</div>";
echo "<div class='question'>4. Россия</div>";
echo "<div class='question'>5. Греция</div>";
echo "<div class='question'>6. Болгария</div>";
echo "<div class='question'>7. Великобритания</div>";
echo "<div class='question'>8. Франция</div>";
echo "<div class='question'>9. Польша</div>";
echo "<div class='question'>10. Германия</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 50 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>