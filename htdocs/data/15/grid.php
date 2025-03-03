<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><a class='num2'>2</a><input class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><input class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><input class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num3'>3</a><input class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><input class='field23' type='text' name='q23' value='<?php if(isset($_POST['q23'])) echo $_POST['q23']; ?>'><input class='field29' type='text' name='q29' value='<?php if(isset($_POST['q29'])) echo $_POST['q29']; ?>'><input class='field45' type='text' name='q45' value='<?php if(isset($_POST['q45'])) echo $_POST['q45']; ?>'><input class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input class='field53' type='text' name='q53' value='<?php if(isset($_POST['q53'])) echo $_POST['q53']; ?>'><a class='num4'>4</a><input class='field67' type='text' name='q67' value='<?php if(isset($_POST['q67'])) echo $_POST['q67']; ?>'><input class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><input class='field75' type='text' name='q75' value='<?php if(isset($_POST['q75'])) echo $_POST['q75']; ?>'><a class='num5'>5</a><input class='field76' type='text' name='q76' value='<?php if(isset($_POST['q76'])) echo $_POST['q76']; ?>'><input class='field77' type='text' name='q77' value='<?php if(isset($_POST['q77'])) echo $_POST['q77']; ?>'><input class='field78' type='text' name='q78' value='<?php if(isset($_POST['q78'])) echo $_POST['q78']; ?>'><input class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><input class='field80' type='text' name='q80' value='<?php if(isset($_POST['q80'])) echo $_POST['q80']; ?>'><input class='field81' type='text' name='q81' value='<?php if(isset($_POST['q81'])) echo $_POST['q81']; ?>'><input class='field89' type='text' name='q89' value='<?php if(isset($_POST['q89'])) echo $_POST['q89']; ?>'><input class='field95' type='text' name='q95' value='<?php if(isset($_POST['q95'])) echo $_POST['q95']; ?>'><input class='field97' type='text' name='q97' value='<?php if(isset($_POST['q97'])) echo $_POST['q97']; ?>'><input class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input class='field117' type='text' name='q117' value='<?php if(isset($_POST['q117'])) echo $_POST['q117']; ?>'><a class='num6'>6</a><input class='field118' type='text' name='q118' value='<?php if(isset($_POST['q118'])) echo $_POST['q118']; ?>'><input class='field119' type='text' name='q119' value='<?php if(isset($_POST['q119'])) echo $_POST['q119']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field121' type='text' name='q121' value='<?php if(isset($_POST['q121'])) echo $_POST['q121']; ?>'><a class='num7'>7</a><input class='field122' type='text' name='q122' value='<?php if(isset($_POST['q122'])) echo $_POST['q122']; ?>'><input class='field123' type='text' name='q123' value='<?php if(isset($_POST['q123'])) echo $_POST['q123']; ?>'><input class='field125' type='text' name='q125' value='<?php if(isset($_POST['q125'])) echo $_POST['q125']; ?>'><a class='num8'>8</a><input class='field133' type='text' name='q133' value='<?php if(isset($_POST['q133'])) echo $_POST['q133']; ?>'><input class='field143' type='text' name='q143' value='<?php if(isset($_POST['q143'])) echo $_POST['q143']; ?>'><input class='field147' type='text' name='q147' value='<?php if(isset($_POST['q147'])) echo $_POST['q147']; ?>'><input class='field155' type='text' name='q155' value='<?php if(isset($_POST['q155'])) echo $_POST['q155']; ?>'><input class='field163' type='text' name='q163' value='<?php if(isset($_POST['q163'])) echo $_POST['q163']; ?>'><a class='num9'>9</a><a class='num10'>10</a><input class='field164' type='text' name='q164' value='<?php if(isset($_POST['q164'])) echo $_POST['q164']; ?>'><input class='field165' type='text' name='q165' value='<?php if(isset($_POST['q165'])) echo $_POST['q165']; ?>'><input class='field166' type='text' name='q166' value='<?php if(isset($_POST['q166'])) echo $_POST['q166']; ?>'><input class='field167' type='text' name='q167' value='<?php if(isset($_POST['q167'])) echo $_POST['q167']; ?>'><input class='field168' type='text' name='q168' value='<?php if(isset($_POST['q168'])) echo $_POST['q168']; ?>'><input class='field169' type='text' name='q169' value='<?php if(isset($_POST['q169'])) echo $_POST['q169']; ?>'><input class='field177' type='text' name='q177' value='<?php if(isset($_POST['q177'])) echo $_POST['q177']; ?>'><input class='field185' type='text' name='q185' value='<?php if(isset($_POST['q185'])) echo $_POST['q185']; ?>'><input class='field187' type='text' name='q187' value='<?php if(isset($_POST['q187'])) echo $_POST['q187']; ?>'><input class='field191' type='text' name='q191' value='<?php if(isset($_POST['q191'])) echo $_POST['q191']; ?>'><input class='field199' type='text' name='q199' value='<?php if(isset($_POST['q199'])) echo $_POST['q199']; ?>'><input class='field207' type='text' name='q207' value='<?php if(isset($_POST['q207'])) echo $_POST['q207']; ?>'><input class='field212' type='text' name='q212' value='<?php if(isset($_POST['q212'])) echo $_POST['q212']; ?>'><a class='num11'>11</a><input class='field213' type='text' name='q213' value='<?php if(isset($_POST['q213'])) echo $_POST['q213']; ?>'><input class='field214' type='text' name='q214' value='<?php if(isset($_POST['q214'])) echo $_POST['q214']; ?>'><input class='field215' type='text' name='q215' value='<?php if(isset($_POST['q215'])) echo $_POST['q215']; ?>'><input class='field216' type='text' name='q216' value='<?php if(isset($_POST['q216'])) echo $_POST['q216']; ?>'><a class='num12'>12</a><input class='field217' type='text' name='q217' value='<?php if(isset($_POST['q217'])) echo $_POST['q217']; ?>'><input class='field218' type='text' name='q218' value='<?php if(isset($_POST['q218'])) echo $_POST['q218']; ?>'><input class='field219' type='text' name='q219' value='<?php if(isset($_POST['q219'])) echo $_POST['q219']; ?>'><input class='field220' type='text' name='q220' value='<?php if(isset($_POST['q220'])) echo $_POST['q220']; ?>'><input class='field229' type='text' name='q229' value='<?php if(isset($_POST['q229'])) echo $_POST['q229']; ?>'><input class='field238' type='text' name='q238' value='<?php if(isset($_POST['q238'])) echo $_POST['q238']; ?>'><input class='field250' type='text' name='q250' value='<?php if(isset($_POST['q250'])) echo $_POST['q250']; ?>'><a class='num13'>13</a><input class='field251' type='text' name='q251' value='<?php if(isset($_POST['q251'])) echo $_POST['q251']; ?>'><input class='field252' type='text' name='q252' value='<?php if(isset($_POST['q252'])) echo $_POST['q252']; ?>'><input class='field253' type='text' name='q253' value='<?php if(isset($_POST['q253'])) echo $_POST['q253']; ?>'><input class='field254' type='text' name='q254' value='<?php if(isset($_POST['q254'])) echo $_POST['q254']; ?>'><input class='field255' type='text' name='q255' value='<?php if(isset($_POST['q255'])) echo $_POST['q255']; ?>'><input class='field256' type='text' name='q256' value='<?php if(isset($_POST['q256'])) echo $_POST['q256']; ?>'><input class='field257' type='text' name='q257' value='<?php if(isset($_POST['q257'])) echo $_POST['q257']; ?>'><input class='field258' type='text' name='q258' value='<?php if(isset($_POST['q258'])) echo $_POST['q258']; ?>'><input class='field260' type='text' name='q260' value='<?php if(isset($_POST['q260'])) echo $_POST['q260']; ?>'><input class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input class='field282' type='text' name='q282' value='<?php if(isset($_POST['q282'])) echo $_POST['q282']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'б' || $answer1 == 'Б') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'р' || $answer2 == 'Р') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'ю' || $answer3 == 'Ю') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'м' || $answer4 == 'М') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'а' || $answer5 == 'А') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'с' || $answer6 == 'С') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'т' || $answer7 == 'Т') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'е' || $answer8 == 'Е') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'р' || $answer9 == 'Р') { $totalCorrect++; }
$answer23 = $_POST['q23'];
if ($answer23 == 'и' || $answer23 == 'И') { $totalCorrect++; }
$answer29 = $_POST['q29'];
if ($answer29 == 'е' || $answer29 == 'Е') { $totalCorrect++; }
$answer45 = $_POST['q45'];
if ($answer45 == 'с' || $answer45 == 'С') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == 'т' || $answer51 == 'Т') { $totalCorrect++; }
$answer53 = $_POST['q53'];
if ($answer53 == 'б' || $answer53 == 'Б') { $totalCorrect++; }
$answer67 = $_POST['q67'];
if ($answer67 == 'т' || $answer67 == 'Т') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == 'ч' || $answer73 == 'Ч') { $totalCorrect++; }
$answer75 = $_POST['q75'];
if ($answer75 == 'а' || $answer75 == 'А') { $totalCorrect++; }
$answer76 = $_POST['q76'];
if ($answer76 == 'п' || $answer76 == 'П') { $totalCorrect++; }
$answer77 = $_POST['q77'];
if ($answer77 == 'п' || $answer77 == 'П') { $totalCorrect++; }
$answer78 = $_POST['q78'];
if ($answer78 == 'а' || $answer78 == 'А') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'р' || $answer79 == 'Р') { $totalCorrect++; }
$answer80 = $_POST['q80'];
if ($answer80 == 'а' || $answer80 == 'А') { $totalCorrect++; }
$answer81 = $_POST['q81'];
if ($answer81 == 'т' || $answer81 == 'Т') { $totalCorrect++; }
$answer89 = $_POST['q89'];
if ($answer89 == 'м' || $answer89 == 'М') { $totalCorrect++; }
$answer95 = $_POST['q95'];
if ($answer95 == 'и' || $answer95 == 'И') { $totalCorrect++; }
$answer97 = $_POST['q97'];
if ($answer97 == 'р' || $answer97 == 'Р') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'а' || $answer111 == 'А') { $totalCorrect++; }
$answer117 = $_POST['q117'];
if ($answer117 == 'с' || $answer117 == 'С') { $totalCorrect++; }
$answer118 = $_POST['q118'];
if ($answer118 == 'н' || $answer118 == 'Н') { $totalCorrect++; }
$answer119 = $_POST['q119'];
if ($answer119 == 'а' || $answer119 == 'А') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'й' || $answer120 == 'Й') { $totalCorrect++; }
$answer121 = $_POST['q121'];
if ($answer121 == 'п' || $answer121 == 'П') { $totalCorrect++; }
$answer122 = $_POST['q122'];
if ($answer122 == 'е' || $answer122 == 'Е') { $totalCorrect++; }
$answer123 = $_POST['q123'];
if ($answer123 == 'р' || $answer123 == 'Р') { $totalCorrect++; }
$answer125 = $_POST['q125'];
if ($answer125 == 'л' || $answer125 == 'Л') { $totalCorrect++; }
$answer133 = $_POST['q133'];
if ($answer133 == 'с' || $answer133 == 'С') { $totalCorrect++; }
$answer143 = $_POST['q143'];
if ($answer143 == 'у' || $answer143 == 'У') { $totalCorrect++; }
$answer147 = $_POST['q147'];
if ($answer147 == 'ю' || $answer147 == 'Ю') { $totalCorrect++; }
$answer155 = $_POST['q155'];
if ($answer155 == 'т' || $answer155 == 'Т') { $totalCorrect++; }
$answer163 = $_POST['q163'];
if ($answer163 == 'х' || $answer163 == 'Х') { $totalCorrect++; }
$answer164 = $_POST['q164'];
if ($answer164 == 'у' || $answer164 == 'У') { $totalCorrect++; }
$answer165 = $_POST['q165'];
if ($answer165 == 'д' || $answer165 == 'Д') { $totalCorrect++; }
$answer166 = $_POST['q166'];
if ($answer166 == 'в' || $answer166 == 'В') { $totalCorrect++; }
$answer167 = $_POST['q167'];
if ($answer167 == 'и' || $answer167 == 'И') { $totalCorrect++; }
$answer168 = $_POST['q168'];
if ($answer168 == 'н' || $answer168 == 'Н') { $totalCorrect++; }
$answer169 = $_POST['q169'];
if ($answer169 == 'к' || $answer169 == 'К') { $totalCorrect++; }
$answer177 = $_POST['q177'];
if ($answer177 == 'е' || $answer177 == 'Е') { $totalCorrect++; }
$answer185 = $_POST['q185'];
if ($answer185 == 'у' || $answer185 == 'У') { $totalCorrect++; }
$answer187 = $_POST['q187'];
if ($answer187 == 'ж' || $answer187 == 'Ж') { $totalCorrect++; }
$answer191 = $_POST['q191'];
if ($answer191 == 'а' || $answer191 == 'А') { $totalCorrect++; }
$answer199 = $_POST['q199'];
if ($answer199 == 'р' || $answer199 == 'Р') { $totalCorrect++; }
$answer207 = $_POST['q207'];
if ($answer207 == 'с' || $answer207 == 'С') { $totalCorrect++; }
$answer212 = $_POST['q212'];
if ($answer212 == 'э' || $answer212 == 'Э') { $totalCorrect++; }
$answer213 = $_POST['q213'];
if ($answer213 == 'н' || $answer213 == 'Н') { $totalCorrect++; }
$answer214 = $_POST['q214'];
if ($answer214 == 'ч' || $answer214 == 'Ч') { $totalCorrect++; }
$answer215 = $_POST['q215'];
if ($answer215 == 'а' || $answer215 == 'А') { $totalCorrect++; }
$answer216 = $_POST['q216'];
if ($answer216 == 'н' || $answer216 == 'Н') { $totalCorrect++; }
$answer217 = $_POST['q217'];
if ($answer217 == 'т' || $answer217 == 'Т') { $totalCorrect++; }
$answer218 = $_POST['q218'];
if ($answer218 == 'р' || $answer218 == 'Р') { $totalCorrect++; }
$answer219 = $_POST['q219'];
if ($answer219 == 'е' || $answer219 == 'Е') { $totalCorrect++; }
$answer220 = $_POST['q220'];
if ($answer220 == 'с' || $answer220 == 'С') { $totalCorrect++; }
$answer229 = $_POST['q229'];
if ($answer229 == 'к' || $answer229 == 'К') { $totalCorrect++; }
$answer238 = $_POST['q238'];
if ($answer238 == 'е' || $answer238 == 'Е') { $totalCorrect++; }
$answer250 = $_POST['q250'];
if ($answer250 == 'ш' || $answer250 == 'Ш') { $totalCorrect++; }
$answer251 = $_POST['q251'];
if ($answer251 == 'а' || $answer251 == 'А') { $totalCorrect++; }
$answer252 = $_POST['q252'];
if ($answer252 == 'д' || $answer252 == 'Д') { $totalCorrect++; }
$answer253 = $_POST['q253'];
if ($answer253 == 'о' || $answer253 == 'О') { $totalCorrect++; }
$answer254 = $_POST['q254'];
if ($answer254 == 'у' || $answer254 == 'У') { $totalCorrect++; }
$answer255 = $_POST['q255'];
if ($answer255 == 'ф' || $answer255 == 'Ф') { $totalCorrect++; }
$answer256 = $_POST['q256'];
if ($answer256 == 'и' || $answer256 == 'И') { $totalCorrect++; }
$answer257 = $_POST['q257'];
if ($answer257 == 'н' || $answer257 == 'Н') { $totalCorrect++; }
$answer258 = $_POST['q258'];
if ($answer258 == 'д' || $answer258 == 'Д') { $totalCorrect++; }
$answer260 = $_POST['q260'];
if ($answer260 == 'к' || $answer260 == 'К') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == 'р' || $answer273 == 'Р') { $totalCorrect++; }
$answer282 = $_POST['q282'];
if ($answer282 == 'р' || $answer282 == 'Р') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. пиво</div>";
echo "<div class='question'>2. кабан</div>";
echo "<div class='question'>3. минер</div>";
echo "<div class='question'>4. такси</div>";
echo "<div class='question'>5. контра хускара</div>";
echo "<div class='question'>6. игрок кс</div>";
echo "<div class='question'>7. самый сексуальный мужчина</div>";
echo "<div class='question'>8. волк</div>";
echo "<div class='question'>9. белочка</div>";
echo "<div class='question'>10. армлеь</div>";
echo "<div class='question'>11. коза</div>";
echo "<div class='question'>12. коса</div>";
echo "<div class='question'>13. гуль</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 75 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>