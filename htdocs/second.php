<form action='' method='post'>
<span style='display: inline-block; width: 43.6px; height: 0px;'></span>
<input class='field' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input class='field' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><input class='field' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><br><span style='display: inline-block; width: 43.6px; height: 0px;'></span>
<input class='field' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><span style='display: inline-block; width: 43.6px; height: 0px;'></span>
<span style='display: inline-block; width: 43.6px; height: 0px;'></span>
<br><input class='field' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><input class='field' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><input class='field' type='text' name='q11' value='<?php if(isset($_POST['q11'])) echo $_POST['q11']; ?>'><span style='display: inline-block; width: 43.6px; height: 0px;'></span>
<br><br><input type='submit' value='Submit' class='submitbtn' />
</form
<?php
error_reporting(0);
$totalCorrect = 0;
$answer2 = $_POST['q2'];
if ($answer2 == 'а') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'а') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'а') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'б') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'в') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 'б') { $totalCorrect++; }
$answer11 = $_POST['q11'];
if ($answer11 == 'а') { $totalCorrect++; }
echo "<div id='results'> $totalCorrect / 7 correct</div>";
return 0
?>