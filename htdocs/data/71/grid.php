<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer1 = $_POST['q1']; if ($answer1 == 'м' || $answer1 == 'М') echo "background: #8fff80"; else if($answer1 != '') echo "background: #ff6969"?>' class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer2 = $_POST['q2']; if ($answer2 == 'о' || $answer2 == 'О') echo "background: #8fff80"; else if($answer2 != '') echo "background: #ff6969"?>' class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input maxlength='1' style='<?php $answer3 = $_POST['q3']; if ($answer3 == 'с' || $answer3 == 'С') echo "background: #8fff80"; else if($answer3 != '') echo "background: #ff6969"?>' class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><input maxlength='1' style='<?php $answer4 = $_POST['q4']; if ($answer4 == 'к' || $answer4 == 'К') echo "background: #8fff80"; else if($answer4 != '') echo "background: #ff6969"?>' class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input maxlength='1' style='<?php $answer5 = $_POST['q5']; if ($answer5 == 'в' || $answer5 == 'В') echo "background: #8fff80"; else if($answer5 != '') echo "background: #ff6969"?>' class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer6 = $_POST['q6']; if ($answer6 == 'а' || $answer6 == 'А') echo "background: #8fff80"; else if($answer6 != '') echo "background: #ff6969"?>' class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input maxlength='1' style='<?php $answer22 = $_POST['q22']; if ($answer22 == 'а' || $answer22 == 'А') echo "background: #8fff80"; else if($answer22 != '') echo "background: #ff6969"?>' class='field22' type='text' name='q22' value='<?php if(isset($_POST['q22'])) echo $_POST['q22']; ?>'><input maxlength='1' style='<?php $answer37 = $_POST['q37']; if ($answer37 == 'п' || $answer37 == 'П') echo "background: #8fff80"; else if($answer37 != '') echo "background: #ff6969"?>' class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer38 = $_POST['q38']; if ($answer38 == 'а' || $answer38 == 'А') echo "background: #8fff80"; else if($answer38 != '') echo "background: #ff6969"?>' class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input maxlength='1' style='<?php $answer39 = $_POST['q39']; if ($answer39 == 'р' || $answer39 == 'Р') echo "background: #8fff80"; else if($answer39 != '') echo "background: #ff6969"?>' class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input maxlength='1' style='<?php $answer40 = $_POST['q40']; if ($answer40 == 'и' || $answer40 == 'И') echo "background: #8fff80"; else if($answer40 != '') echo "background: #ff6969"?>' class='field40' type='text' name='q40' value='<?php if(isset($_POST['q40'])) echo $_POST['q40']; ?>'><input maxlength='1' style='<?php $answer41 = $_POST['q41']; if ($answer41 == 'ж' || $answer41 == 'Ж') echo "background: #8fff80"; else if($answer41 != '') echo "background: #ff6969"?>' class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input maxlength='1' style='<?php $answer56 = $_POST['q56']; if ($answer56 == 'ш' || $answer56 == 'Ш') echo "background: #8fff80"; else if($answer56 != '') echo "background: #ff6969"?>' class='field56' type='text' name='q56' value='<?php if(isset($_POST['q56'])) echo $_POST['q56']; ?>'><input maxlength='1' style='<?php $answer60 = $_POST['q60']; if ($answer60 == 'б' || $answer60 == 'Б') echo "background: #8fff80"; else if($answer60 != '') echo "background: #ff6969"?>' class='field60' type='text' name='q60' value='<?php if(isset($_POST['q60'])) echo $_POST['q60']; ?>'><a class='num4'>4</a><input maxlength='1' style='<?php $answer67 = $_POST['q67']; if ($answer67 == 'л' || $answer67 == 'Л') echo "background: #8fff80"; else if($answer67 != '') echo "background: #ff6969"?>' class='field67' type='text' name='q67' value='<?php if(isset($_POST['q67'])) echo $_POST['q67']; ?>'><a class='num5'>5</a><input maxlength='1' style='<?php $answer73 = $_POST['q73']; if ($answer73 == 'а' || $answer73 == 'А') echo "background: #8fff80"; else if($answer73 != '') echo "background: #ff6969"?>' class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><a class='num6'>6</a><input maxlength='1' style='<?php $answer74 = $_POST['q74']; if ($answer74 == 'м' || $answer74 == 'М') echo "background: #8fff80"; else if($answer74 != '') echo "background: #ff6969"?>' class='field74' type='text' name='q74' value='<?php if(isset($_POST['q74'])) echo $_POST['q74']; ?>'><input maxlength='1' style='<?php $answer75 = $_POST['q75']; if ($answer75 == 'с' || $answer75 == 'С') echo "background: #8fff80"; else if($answer75 != '') echo "background: #ff6969"?>' class='field75' type='text' name='q75' value='<?php if(isset($_POST['q75'])) echo $_POST['q75']; ?>'><a class='num7'>7</a><input maxlength='1' style='<?php $answer76 = $_POST['q76']; if ($answer76 == 'т' || $answer76 == 'Т') echo "background: #8fff80"; else if($answer76 != '') echo "background: #ff6969"?>' class='field76' type='text' name='q76' value='<?php if(isset($_POST['q76'])) echo $_POST['q76']; ?>'><input maxlength='1' style='<?php $answer77 = $_POST['q77']; if ($answer77 == 'е' || $answer77 == 'Е') echo "background: #8fff80"; else if($answer77 != '') echo "background: #ff6969"?>' class='field77' type='text' name='q77' value='<?php if(isset($_POST['q77'])) echo $_POST['q77']; ?>'><input maxlength='1' style='<?php $answer78 = $_POST['q78']; if ($answer78 == 'р' || $answer78 == 'Р') echo "background: #8fff80"; else if($answer78 != '') echo "background: #ff6969"?>' class='field78' type='text' name='q78' value='<?php if(isset($_POST['q78'])) echo $_POST['q78']; ?>'><input maxlength='1' style='<?php $answer79 = $_POST['q79']; if ($answer79 == 'д' || $answer79 == 'Д') echo "background: #8fff80"; else if($answer79 != '') echo "background: #ff6969"?>' class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><input maxlength='1' style='<?php $answer80 = $_POST['q80']; if ($answer80 == 'а' || $answer80 == 'А') echo "background: #8fff80"; else if($answer80 != '') echo "background: #ff6969"?>' class='field80' type='text' name='q80' value='<?php if(isset($_POST['q80'])) echo $_POST['q80']; ?>'><input maxlength='1' style='<?php $answer81 = $_POST['q81']; if ($answer81 == 'м' || $answer81 == 'М') echo "background: #8fff80"; else if($answer81 != '') echo "background: #ff6969"?>' class='field81' type='text' name='q81' value='<?php if(isset($_POST['q81'])) echo $_POST['q81']; ?>'><a class='num8'>8</a><input maxlength='1' style='<?php $answer84 = $_POST['q84']; if ($answer84 == 'о' || $answer84 == 'О') echo "background: #8fff80"; else if($answer84 != '') echo "background: #ff6969"?>' class='field84' type='text' name='q84' value='<?php if(isset($_POST['q84'])) echo $_POST['q84']; ?>'><input maxlength='1' style='<?php $answer90 = $_POST['q90']; if ($answer90 == 'в' || $answer90 == 'В') echo "background: #8fff80"; else if($answer90 != '') echo "background: #ff6969"?>' class='field90' type='text' name='q90' value='<?php if(isset($_POST['q90'])) echo $_POST['q90']; ?>'><input maxlength='1' style='<?php $answer92 = $_POST['q92']; if ($answer92 == 'о' || $answer92 == 'О') echo "background: #8fff80"; else if($answer92 != '') echo "background: #ff6969"?>' class='field92' type='text' name='q92' value='<?php if(isset($_POST['q92'])) echo $_POST['q92']; ?>'><input maxlength='1' style='<?php $answer94 = $_POST['q94']; if ($answer94 == 'р' || $answer94 == 'Р') echo "background: #8fff80"; else if($answer94 != '') echo "background: #ff6969"?>' class='field94' type='text' name='q94' value='<?php if(isset($_POST['q94'])) echo $_POST['q94']; ?>'><input maxlength='1' style='<?php $answer98 = $_POST['q98']; if ($answer98 == 'а' || $answer98 == 'А') echo "background: #8fff80"; else if($answer98 != '') echo "background: #ff6969"?>' class='field98' type='text' name='q98' value='<?php if(isset($_POST['q98'])) echo $_POST['q98']; ?>'><a class='num9'>9</a><input maxlength='1' style='<?php $answer99 = $_POST['q99']; if ($answer99 == 'ф' || $answer99 == 'Ф') echo "background: #8fff80"; else if($answer99 != '') echo "background: #ff6969"?>' class='field99' type='text' name='q99' value='<?php if(isset($_POST['q99'])) echo $_POST['q99']; ?>'><input maxlength='1' style='<?php $answer100 = $_POST['q100']; if ($answer100 == 'и' || $answer100 == 'И') echo "background: #8fff80"; else if($answer100 != '') echo "background: #ff6969"?>' class='field100' type='text' name='q100' value='<?php if(isset($_POST['q100'])) echo $_POST['q100']; ?>'><input maxlength='1' style='<?php $answer101 = $_POST['q101']; if ($answer101 == 'н' || $answer101 == 'Н') echo "background: #8fff80"; else if($answer101 != '') echo "background: #ff6969"?>' class='field101' type='text' name='q101' value='<?php if(isset($_POST['q101'])) echo $_POST['q101']; ?>'><input maxlength='1' style='<?php $answer102 = $_POST['q102']; if ($answer102 == 'ы' || $answer102 == 'Ы') echo "background: #8fff80"; else if($answer102 != '') echo "background: #ff6969"?>' class='field102' type='text' name='q102' value='<?php if(isset($_POST['q102'])) echo $_POST['q102']; ?>'><input maxlength='1' style='<?php $answer107 = $_POST['q107']; if ($answer107 == 'а' || $answer107 == 'А') echo "background: #8fff80"; else if($answer107 != '') echo "background: #ff6969"?>' class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input maxlength='1' style='<?php $answer109 = $_POST['q109']; if ($answer109 == 'ф' || $answer109 == 'Ф') echo "background: #8fff80"; else if($answer109 != '') echo "background: #ff6969"?>' class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input maxlength='1' style='<?php $answer111 = $_POST['q111']; if ($answer111 == 'л' || $answer111 == 'Л') echo "background: #8fff80"; else if($answer111 != '') echo "background: #ff6969"?>' class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input maxlength='1' style='<?php $answer115 = $_POST['q115']; if ($answer115 == 'д' || $answer115 == 'Д') echo "background: #8fff80"; else if($answer115 != '') echo "background: #ff6969"?>' class='field115' type='text' name='q115' value='<?php if(isset($_POST['q115'])) echo $_POST['q115']; ?>'><input maxlength='1' style='<?php $answer118 = $_POST['q118']; if ($answer118 == 'д' || $answer118 == 'Д') echo "background: #8fff80"; else if($answer118 != '') echo "background: #ff6969"?>' class='field118' type='text' name='q118' value='<?php if(isset($_POST['q118'])) echo $_POST['q118']; ?>'><input maxlength='1' style='<?php $answer126 = $_POST['q126']; if ($answer126 == 'и' || $answer126 == 'И') echo "background: #8fff80"; else if($answer126 != '') echo "background: #ff6969"?>' class='field126' type='text' name='q126' value='<?php if(isset($_POST['q126'])) echo $_POST['q126']; ?>'><input maxlength='1' style='<?php $answer128 = $_POST['q128']; if ($answer128 == 'и' || $answer128 == 'И') echo "background: #8fff80"; else if($answer128 != '') echo "background: #ff6969"?>' class='field128' type='text' name='q128' value='<?php if(isset($_POST['q128'])) echo $_POST['q128']; ?>'><input maxlength='1' style='<?php $answer130 = $_POST['q130']; if ($answer130 == 'б' || $answer130 == 'Б') echo "background: #8fff80"; else if($answer130 != '') echo "background: #ff6969"?>' class='field130' type='text' name='q130' value='<?php if(isset($_POST['q130'])) echo $_POST['q130']; ?>'><a class='num10'>10</a><input maxlength='1' style='<?php $answer131 = $_POST['q131']; if ($answer131 == 'е' || $answer131 == 'Е') echo "background: #8fff80"; else if($answer131 != '') echo "background: #ff6969"?>' class='field131' type='text' name='q131' value='<?php if(isset($_POST['q131'])) echo $_POST['q131']; ?>'><input maxlength='1' style='<?php $answer132 = $_POST['q132']; if ($answer132 == 'р' || $answer132 == 'Р') echo "background: #8fff80"; else if($answer132 != '') echo "background: #ff6969"?>' class='field132' type='text' name='q132' value='<?php if(isset($_POST['q132'])) echo $_POST['q132']; ?>'><input maxlength='1' style='<?php $answer133 = $_POST['q133']; if ($answer133 == 'н' || $answer133 == 'Н') echo "background: #8fff80"; else if($answer133 != '') echo "background: #ff6969"?>' class='field133' type='text' name='q133' value='<?php if(isset($_POST['q133'])) echo $_POST['q133']; ?>'><input maxlength='1' style='<?php $answer135 = $_POST['q135']; if ($answer135 == 'о' || $answer135 == 'О') echo "background: #8fff80"; else if($answer135 != '') echo "background: #ff6969"?>' class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><input maxlength='1' style='<?php $answer143 = $_POST['q143']; if ($answer143 == 'я' || $answer143 == 'Я') echo "background: #8fff80"; else if($answer143 != '') echo "background: #ff6969"?>' class='field143' type='text' name='q143' value='<?php if(isset($_POST['q143'])) echo $_POST['q143']; ?>'><input maxlength='1' style='<?php $answer145 = $_POST['q145']; if ($answer145 == 'н' || $answer145 == 'Н') echo "background: #8fff80"; else if($answer145 != '') echo "background: #ff6969"?>' class='field145' type='text' name='q145' value='<?php if(isset($_POST['q145'])) echo $_POST['q145']; ?>'><input maxlength='1' style='<?php $answer149 = $_POST['q149']; if ($answer149 == 'и' || $answer149 == 'И') echo "background: #8fff80"; else if($answer149 != '') echo "background: #ff6969"?>' class='field149' type='text' name='q149' value='<?php if(isset($_POST['q149'])) echo $_POST['q149']; ?>'><input maxlength='1' style='<?php $answer152 = $_POST['q152']; if ($answer152 == 'н' || $answer152 == 'Н') echo "background: #8fff80"; else if($answer152 != '') echo "background: #ff6969"?>' class='field152' type='text' name='q152' value='<?php if(isset($_POST['q152'])) echo $_POST['q152']; ?>'><input maxlength='1' style='<?php $answer166 = $_POST['q166']; if ($answer166 == 'д' || $answer166 == 'Д') echo "background: #8fff80"; else if($answer166 != '') echo "background: #ff6969"?>' class='field166' type='text' name='q166' value='<?php if(isset($_POST['q166'])) echo $_POST['q166']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'м' || $answer1 == 'М') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'о' || $answer2 == 'О') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'с' || $answer3 == 'С') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'к' || $answer4 == 'К') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'в' || $answer5 == 'В') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'а' || $answer6 == 'А') { $totalCorrect++; }
$answer22 = $_POST['q22'];
if ($answer22 == 'а' || $answer22 == 'А') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 'п' || $answer37 == 'П') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'а' || $answer38 == 'А') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'р' || $answer39 == 'Р') { $totalCorrect++; }
$answer40 = $_POST['q40'];
if ($answer40 == 'и' || $answer40 == 'И') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'ж' || $answer41 == 'Ж') { $totalCorrect++; }
$answer56 = $_POST['q56'];
if ($answer56 == 'ш' || $answer56 == 'Ш') { $totalCorrect++; }
$answer60 = $_POST['q60'];
if ($answer60 == 'б' || $answer60 == 'Б') { $totalCorrect++; }
$answer67 = $_POST['q67'];
if ($answer67 == 'л' || $answer67 == 'Л') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == 'а' || $answer73 == 'А') { $totalCorrect++; }
$answer74 = $_POST['q74'];
if ($answer74 == 'м' || $answer74 == 'М') { $totalCorrect++; }
$answer75 = $_POST['q75'];
if ($answer75 == 'с' || $answer75 == 'С') { $totalCorrect++; }
$answer76 = $_POST['q76'];
if ($answer76 == 'т' || $answer76 == 'Т') { $totalCorrect++; }
$answer77 = $_POST['q77'];
if ($answer77 == 'е' || $answer77 == 'Е') { $totalCorrect++; }
$answer78 = $_POST['q78'];
if ($answer78 == 'р' || $answer78 == 'Р') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'д' || $answer79 == 'Д') { $totalCorrect++; }
$answer80 = $_POST['q80'];
if ($answer80 == 'а' || $answer80 == 'А') { $totalCorrect++; }
$answer81 = $_POST['q81'];
if ($answer81 == 'м' || $answer81 == 'М') { $totalCorrect++; }
$answer84 = $_POST['q84'];
if ($answer84 == 'о' || $answer84 == 'О') { $totalCorrect++; }
$answer90 = $_POST['q90'];
if ($answer90 == 'в' || $answer90 == 'В') { $totalCorrect++; }
$answer92 = $_POST['q92'];
if ($answer92 == 'о' || $answer92 == 'О') { $totalCorrect++; }
$answer94 = $_POST['q94'];
if ($answer94 == 'р' || $answer94 == 'Р') { $totalCorrect++; }
$answer98 = $_POST['q98'];
if ($answer98 == 'а' || $answer98 == 'А') { $totalCorrect++; }
$answer99 = $_POST['q99'];
if ($answer99 == 'ф' || $answer99 == 'Ф') { $totalCorrect++; }
$answer100 = $_POST['q100'];
if ($answer100 == 'и' || $answer100 == 'И') { $totalCorrect++; }
$answer101 = $_POST['q101'];
if ($answer101 == 'н' || $answer101 == 'Н') { $totalCorrect++; }
$answer102 = $_POST['q102'];
if ($answer102 == 'ы' || $answer102 == 'Ы') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == 'а' || $answer107 == 'А') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == 'ф' || $answer109 == 'Ф') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'л' || $answer111 == 'Л') { $totalCorrect++; }
$answer115 = $_POST['q115'];
if ($answer115 == 'д' || $answer115 == 'Д') { $totalCorrect++; }
$answer118 = $_POST['q118'];
if ($answer118 == 'д' || $answer118 == 'Д') { $totalCorrect++; }
$answer126 = $_POST['q126'];
if ($answer126 == 'и' || $answer126 == 'И') { $totalCorrect++; }
$answer128 = $_POST['q128'];
if ($answer128 == 'и' || $answer128 == 'И') { $totalCorrect++; }
$answer130 = $_POST['q130'];
if ($answer130 == 'б' || $answer130 == 'Б') { $totalCorrect++; }
$answer131 = $_POST['q131'];
if ($answer131 == 'е' || $answer131 == 'Е') { $totalCorrect++; }
$answer132 = $_POST['q132'];
if ($answer132 == 'р' || $answer132 == 'Р') { $totalCorrect++; }
$answer133 = $_POST['q133'];
if ($answer133 == 'н' || $answer133 == 'Н') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'о' || $answer135 == 'О') { $totalCorrect++; }
$answer143 = $_POST['q143'];
if ($answer143 == 'я' || $answer143 == 'Я') { $totalCorrect++; }
$answer145 = $_POST['q145'];
if ($answer145 == 'н' || $answer145 == 'Н') { $totalCorrect++; }
$answer149 = $_POST['q149'];
if ($answer149 == 'и' || $answer149 == 'И') { $totalCorrect++; }
$answer152 = $_POST['q152'];
if ($answer152 == 'н' || $answer152 == 'Н') { $totalCorrect++; }
$answer166 = $_POST['q166'];
if ($answer166 == 'д' || $answer166 == 'Д') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Россия</div>";
echo "<div class='question'>2. Польша</div>";
echo "<div class='question'>3. Франция</div>";
echo "<div class='question'>4. Германия</div>";
echo "<div class='question'>5. Великобритания</div>";
echo "<div class='question'>6. Нидерланды</div>";
echo "<div class='question'>7. Болгария</div>";
echo "<div class='question'>8. Испания</div>";
echo "<div class='question'>9. Греция</div>";
echo "<div class='question'>10. Швейцария</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 50 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>