<?php session_start();error_reporting(0);$dir = dirname(__FILE__);$name = file_get_contents('author.txt'); if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && ($name == '' || $name ==$_SESSION['user_name']) && $dir != 'I:XAMPPhtdocs') { ?><!DOCTYPE html><html><head>	<title>Lazycrosswords</title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a href='../../logout.php' class='logout'>�����</a></body></html><?php }else{     header('Location: ../../start_page.php');     exit();} ?>
<input class='field5' type='text' name='q5' value='<?php echo '�' ?>'>
<a class='num1'>1</a><input class='field6' type='text' name='q6' value='<?php echo '�' ?>'>
<input class='field7' type='text' name='q7' value='<?php echo '�' ?>'>
<input class='field8' type='text' name='q8' value='<?php echo '�' ?>'>
<input class='field9' type='text' name='q9' value='<?php echo '�' ?>'>
<a class='num2'>2</a><input class='field28' type='text' name='q28' value='<?php echo '�' ?>'>
<input class='field32' type='text' name='q32' value='<?php echo '�' ?>'>
<a class='num3'>3</a><a class='num4'>4</a><input class='field33' type='text' name='q33' value='<?php echo '�' ?>'>
<input class='field34' type='text' name='q34' value='<?php echo '�' ?>'>
<input class='field35' type='text' name='q35' value='<?php echo '�' ?>'>
<input class='field36' type='text' name='q36' value='<?php echo '�' ?>'>
<input class='field37' type='text' name='q37' value='<?php echo '�' ?>'>
<input class='field38' type='text' name='q38' value='<?php echo '�' ?>'>
<input class='field47' type='text' name='q47' value='<?php echo '�' ?>'>
<input class='field51' type='text' name='q51' value='<?php echo '�' ?>'>
<input class='field65' type='text' name='q65' value='<?php echo '�' ?>'>
<a class='num5'>5</a><a class='num6'>6</a><input class='field66' type='text' name='q66' value='<?php echo '�' ?>'>
<input class='field67' type='text' name='q67' value='<?php echo '�' ?>'>
<input class='field68' type='text' name='q68' value='<?php echo '�' ?>'>
<input class='field69' type='text' name='q69' value='<?php echo '�' ?>'>
<input class='field70' type='text' name='q70' value='<?php echo '�' ?>'>
<input class='field71' type='text' name='q71' value='<?php echo '�' ?>'>
<input class='field72' type='text' name='q72' value='<?php echo '�' ?>'>
<input class='field73' type='text' name='q73' value='<?php echo '�' ?>'>
<input class='field84' type='text' name='q84' value='<?php echo '�' ?>'>
<input class='field89' type='text' name='q89' value='<?php echo '�' ?>'>
<input class='field103' type='text' name='q103' value='<?php echo '�' ?>'>
<input class='field106' type='text' name='q106' value='<?php echo '�' ?>'>
<a class='num7'>7</a><input class='field107' type='text' name='q107' value='<?php echo '�' ?>'>
<input class='field108' type='text' name='q108' value='<?php echo '�' ?>'>
<input class='field109' type='text' name='q109' value='<?php echo '�' ?>'>
<input class='field110' type='text' name='q110' value='<?php echo '�' ?>'>
<a class='num8'>8</a><input class='field111' type='text' name='q111' value='<?php echo '�' ?>'>
<input class='field112' type='text' name='q112' value='<?php echo '�' ?>'>
<input class='field122' type='text' name='q122' value='<?php echo '�' ?>'>
<input class='field127' type='text' name='q127' value='<?php echo '�' ?>'>
<input class='field129' type='text' name='q129' value='<?php echo '�' ?>'>
<input class='field138' type='text' name='q138' value='<?php echo '�' ?>'>
<a class='num9'>9</a><input class='field141' type='text' name='q141' value='<?php echo '�' ?>'>
<input class='field148' type='text' name='q148' value='<?php echo '�' ?>'>
<input class='field157' type='text' name='q157' value='<?php echo '�' ?>'>
<a class='num10'>10</a><input class='field158' type='text' name='q158' value='<?php echo '�' ?>'>
<input class='field159' type='text' name='q159' value='<?php echo '�' ?>'>
<input class='field160' type='text' name='q160' value='<?php echo '�' ?>'>
<input class='field161' type='text' name='q161' value='<?php echo '�' ?>'>
<input class='field162' type='text' name='q162' value='<?php echo '�' ?>'>
<input class='field163' type='text' name='q163' value='<?php echo '�' ?>'>
<a class='num11'>11</a><input class='field167' type='text' name='q167' value='<?php echo '�' ?>'>
<input class='field176' type='text' name='q176' value='<?php echo '�' ?>'>
<input class='field179' type='text' name='q179' value='<?php echo '�' ?>'>
<input class='field182' type='text' name='q182' value='<?php echo '�' ?>'>
<input class='field195' type='text' name='q195' value='<?php echo '�' ?>'>
<input class='field198' type='text' name='q198' value='<?php echo '�' ?>'>
<input class='field201' type='text' name='q201' value='<?php echo '�' ?>'>
<input class='field214' type='text' name='q214' value='<?php echo '�' ?>'>
<input class='field217' type='text' name='q217' value='<?php echo '�' ?>'>
<input class='field220' type='text' name='q220' value='<?php echo '�' ?>'>
<input class='field222' type='text' name='q222' value='<?php echo '�' ?>'>
<a class='num12'>12</a><input class='field233' type='text' name='q233' value='<?php echo '�' ?>'>
<input class='field236' type='text' name='q236' value='<?php echo '�' ?>'>
<input class='field238' type='text' name='q238' value='<?php echo '�' ?>'>
<a class='num13'>13</a><input class='field239' type='text' name='q239' value='<?php echo '�' ?>'>
<input class='field240' type='text' name='q240' value='<?php echo '�' ?>'>
<input class='field241' type='text' name='q241' value='<?php echo '�' ?>'>
<input class='field242' type='text' name='q242' value='<?php echo '�' ?>'>
<input class='field252' type='text' name='q252' value='<?php echo '�' ?>'>
<input class='field258' type='text' name='q258' value='<?php echo '�' ?>'>
<input class='field260' type='text' name='q260' value='<?php echo '�' ?>'>
<input class='field267' type='text' name='q267' value='<?php echo '�' ?>'>
<a class='num14'>14</a><input class='field268' type='text' name='q268' value='<?php echo '�' ?>'>
<input class='field269' type='text' name='q269' value='<?php echo '�' ?>'>
<input class='field270' type='text' name='q270' value='<?php echo '�' ?>'>
<input class='field271' type='text' name='q271' value='<?php echo '�' ?>'>
<input class='field272' type='text' name='q272' value='<?php echo '�' ?>'>
<input class='field273' type='text' name='q273' value='<?php echo '�' ?>'>
<input class='field274' type='text' name='q274' value='<?php echo '�' ?>'>
<input class='field275' type='text' name='q275' value='<?php echo '�' ?>'>
<input class='field279' type='text' name='q279' value='<?php echo '�' ?>'>
<input class='field290' type='text' name='q290' value='<?php echo '�' ?>'>
