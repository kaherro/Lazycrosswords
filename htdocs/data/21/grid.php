<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num1'>1</a><input class='field33' type='text' name='q33' value='<?php if(isset($_POST['q33'])) echo $_POST['q33']; ?>'><a class='num2'>2</a><input class='field34' type='text' name='q34' value='<?php if(isset($_POST['q34'])) echo $_POST['q34']; ?>'><input class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input class='field36' type='text' name='q36' value='<?php if(isset($_POST['q36'])) echo $_POST['q36']; ?>'><input class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><input class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input class='field40' type='text' name='q40' value='<?php if(isset($_POST['q40'])) echo $_POST['q40']; ?>'><input class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input class='field61' type='text' name='q61' value='<?php if(isset($_POST['q61'])) echo $_POST['q61']; ?>'><input class='field85' type='text' name='q85' value='<?php if(isset($_POST['q85'])) echo $_POST['q85']; ?>'><a class='num3'>3</a><a class='num4'>4</a><input class='field86' type='text' name='q86' value='<?php if(isset($_POST['q86'])) echo $_POST['q86']; ?>'><input class='field87' type='text' name='q87' value='<?php if(isset($_POST['q87'])) echo $_POST['q87']; ?>'><input class='field88' type='text' name='q88' value='<?php if(isset($_POST['q88'])) echo $_POST['q88']; ?>'><input class='field89' type='text' name='q89' value='<?php if(isset($_POST['q89'])) echo $_POST['q89']; ?>'><input class='field90' type='text' name='q90' value='<?php if(isset($_POST['q90'])) echo $_POST['q90']; ?>'><a class='num5'>5</a><input class='field91' type='text' name='q91' value='<?php if(isset($_POST['q91'])) echo $_POST['q91']; ?>'><input class='field92' type='text' name='q92' value='<?php if(isset($_POST['q92'])) echo $_POST['q92']; ?>'><input class='field112' type='text' name='q112' value='<?php if(isset($_POST['q112'])) echo $_POST['q112']; ?>'><input class='field115' type='text' name='q115' value='<?php if(isset($_POST['q115'])) echo $_POST['q115']; ?>'><input class='field117' type='text' name='q117' value='<?php if(isset($_POST['q117'])) echo $_POST['q117']; ?>'><input class='field139' type='text' name='q139' value='<?php if(isset($_POST['q139'])) echo $_POST['q139']; ?>'><input class='field144' type='text' name='q144' value='<?php if(isset($_POST['q144'])) echo $_POST['q144']; ?>'><input class='field153' type='text' name='q153' value='<?php if(isset($_POST['q153'])) echo $_POST['q153']; ?>'><a class='num6'>6</a><input class='field166' type='text' name='q166' value='<?php if(isset($_POST['q166'])) echo $_POST['q166']; ?>'><input class='field171' type='text' name='q171' value='<?php if(isset($_POST['q171'])) echo $_POST['q171']; ?>'><input class='field174' type='text' name='q174' value='<?php if(isset($_POST['q174'])) echo $_POST['q174']; ?>'><a class='num7'>7</a><input class='field180' type='text' name='q180' value='<?php if(isset($_POST['q180'])) echo $_POST['q180']; ?>'><input class='field193' type='text' name='q193' value='<?php if(isset($_POST['q193'])) echo $_POST['q193']; ?>'><input class='field196' type='text' name='q196' value='<?php if(isset($_POST['q196'])) echo $_POST['q196']; ?>'><a class='num8'>8</a><input class='field197' type='text' name='q197' value='<?php if(isset($_POST['q197'])) echo $_POST['q197']; ?>'><input class='field198' type='text' name='q198' value='<?php if(isset($_POST['q198'])) echo $_POST['q198']; ?>'><input class='field199' type='text' name='q199' value='<?php if(isset($_POST['q199'])) echo $_POST['q199']; ?>'><input class='field200' type='text' name='q200' value='<?php if(isset($_POST['q200'])) echo $_POST['q200']; ?>'><input class='field201' type='text' name='q201' value='<?php if(isset($_POST['q201'])) echo $_POST['q201']; ?>'><input class='field202' type='text' name='q202' value='<?php if(isset($_POST['q202'])) echo $_POST['q202']; ?>'><input class='field203' type='text' name='q203' value='<?php if(isset($_POST['q203'])) echo $_POST['q203']; ?>'><input class='field204' type='text' name='q204' value='<?php if(isset($_POST['q204'])) echo $_POST['q204']; ?>'><a class='num9'>9</a><input class='field205' type='text' name='q205' value='<?php if(isset($_POST['q205'])) echo $_POST['q205']; ?>'><input class='field206' type='text' name='q206' value='<?php if(isset($_POST['q206'])) echo $_POST['q206']; ?>'><input class='field207' type='text' name='q207' value='<?php if(isset($_POST['q207'])) echo $_POST['q207']; ?>'><input class='field220' type='text' name='q220' value='<?php if(isset($_POST['q220'])) echo $_POST['q220']; ?>'><input class='field228' type='text' name='q228' value='<?php if(isset($_POST['q228'])) echo $_POST['q228']; ?>'><input class='field231' type='text' name='q231' value='<?php if(isset($_POST['q231'])) echo $_POST['q231']; ?>'><input class='field234' type='text' name='q234' value='<?php if(isset($_POST['q234'])) echo $_POST['q234']; ?>'><input class='field247' type='text' name='q247' value='<?php if(isset($_POST['q247'])) echo $_POST['q247']; ?>'><input class='field255' type='text' name='q255' value='<?php if(isset($_POST['q255'])) echo $_POST['q255']; ?>'><input class='field258' type='text' name='q258' value='<?php if(isset($_POST['q258'])) echo $_POST['q258']; ?>'><input class='field261' type='text' name='q261' value='<?php if(isset($_POST['q261'])) echo $_POST['q261']; ?>'><input class='field270' type='text' name='q270' value='<?php if(isset($_POST['q270'])) echo $_POST['q270']; ?>'><a class='num10'>10</a><input class='field274' type='text' name='q274' value='<?php if(isset($_POST['q274'])) echo $_POST['q274']; ?>'><input class='field282' type='text' name='q282' value='<?php if(isset($_POST['q282'])) echo $_POST['q282']; ?>'><input class='field285' type='text' name='q285' value='<?php if(isset($_POST['q285'])) echo $_POST['q285']; ?>'><input class='field287' type='text' name='q287' value='<?php if(isset($_POST['q287'])) echo $_POST['q287']; ?>'><a class='num11'>11</a><input class='field288' type='text' name='q288' value='<?php if(isset($_POST['q288'])) echo $_POST['q288']; ?>'><input class='field289' type='text' name='q289' value='<?php if(isset($_POST['q289'])) echo $_POST['q289']; ?>'><input class='field290' type='text' name='q290' value='<?php if(isset($_POST['q290'])) echo $_POST['q290']; ?>'><input class='field291' type='text' name='q291' value='<?php if(isset($_POST['q291'])) echo $_POST['q291']; ?>'><input class='field292' type='text' name='q292' value='<?php if(isset($_POST['q292'])) echo $_POST['q292']; ?>'><input class='field293' type='text' name='q293' value='<?php if(isset($_POST['q293'])) echo $_POST['q293']; ?>'><input class='field294' type='text' name='q294' value='<?php if(isset($_POST['q294'])) echo $_POST['q294']; ?>'><input class='field295' type='text' name='q295' value='<?php if(isset($_POST['q295'])) echo $_POST['q295']; ?>'><input class='field296' type='text' name='q296' value='<?php if(isset($_POST['q296'])) echo $_POST['q296']; ?>'><input class='field297' type='text' name='q297' value='<?php if(isset($_POST['q297'])) echo $_POST['q297']; ?>'><input class='field298' type='text' name='q298' value='<?php if(isset($_POST['q298'])) echo $_POST['q298']; ?>'><a class='num12'>12</a><input class='field299' type='text' name='q299' value='<?php if(isset($_POST['q299'])) echo $_POST['q299']; ?>'><input class='field300' type='text' name='q300' value='<?php if(isset($_POST['q300'])) echo $_POST['q300']; ?>'><input class='field301' type='text' name='q301' value='<?php if(isset($_POST['q301'])) echo $_POST['q301']; ?>'><input class='field302' type='text' name='q302' value='<?php if(isset($_POST['q302'])) echo $_POST['q302']; ?>'><input class='field303' type='text' name='q303' value='<?php if(isset($_POST['q303'])) echo $_POST['q303']; ?>'><a class='num13'>13</a><input class='field304' type='text' name='q304' value='<?php if(isset($_POST['q304'])) echo $_POST['q304']; ?>'><input class='field305' type='text' name='q305' value='<?php if(isset($_POST['q305'])) echo $_POST['q305']; ?>'><input class='field306' type='text' name='q306' value='<?php if(isset($_POST['q306'])) echo $_POST['q306']; ?>'><input class='field307' type='text' name='q307' value='<?php if(isset($_POST['q307'])) echo $_POST['q307']; ?>'><input class='field309' type='text' name='q309' value='<?php if(isset($_POST['q309'])) echo $_POST['q309']; ?>'><input class='field312' type='text' name='q312' value='<?php if(isset($_POST['q312'])) echo $_POST['q312']; ?>'><input class='field315' type='text' name='q315' value='<?php if(isset($_POST['q315'])) echo $_POST['q315']; ?>'><input class='field324' type='text' name='q324' value='<?php if(isset($_POST['q324'])) echo $_POST['q324']; ?>'><input class='field328' type='text' name='q328' value='<?php if(isset($_POST['q328'])) echo $_POST['q328']; ?>'><input class='field330' type='text' name='q330' value='<?php if(isset($_POST['q330'])) echo $_POST['q330']; ?>'><input class='field337' type='text' name='q337' value='<?php if(isset($_POST['q337'])) echo $_POST['q337']; ?>'><a class='num14'>14</a><input class='field338' type='text' name='q338' value='<?php if(isset($_POST['q338'])) echo $_POST['q338']; ?>'><input class='field339' type='text' name='q339' value='<?php if(isset($_POST['q339'])) echo $_POST['q339']; ?>'><input class='field340' type='text' name='q340' value='<?php if(isset($_POST['q340'])) echo $_POST['q340']; ?>'><input class='field341' type='text' name='q341' value='<?php if(isset($_POST['q341'])) echo $_POST['q341']; ?>'><a class='num15'>15</a><input class='field351' type='text' name='q351' value='<?php if(isset($_POST['q351'])) echo $_POST['q351']; ?>'><input class='field357' type='text' name='q357' value='<?php if(isset($_POST['q357'])) echo $_POST['q357']; ?>'><input class='field366' type='text' name='q366' value='<?php if(isset($_POST['q366'])) echo $_POST['q366']; ?>'><input class='field368' type='text' name='q368' value='<?php if(isset($_POST['q368'])) echo $_POST['q368']; ?>'><a class='num16'>16</a><input class='field369' type='text' name='q369' value='<?php if(isset($_POST['q369'])) echo $_POST['q369']; ?>'><input class='field370' type='text' name='q370' value='<?php if(isset($_POST['q370'])) echo $_POST['q370']; ?>'><input class='field371' type='text' name='q371' value='<?php if(isset($_POST['q371'])) echo $_POST['q371']; ?>'><input class='field378' type='text' name='q378' value='<?php if(isset($_POST['q378'])) echo $_POST['q378']; ?>'><input class='field384' type='text' name='q384' value='<?php if(isset($_POST['q384'])) echo $_POST['q384']; ?>'><input class='field393' type='text' name='q393' value='<?php if(isset($_POST['q393'])) echo $_POST['q393']; ?>'><input class='field395' type='text' name='q395' value='<?php if(isset($_POST['q395'])) echo $_POST['q395']; ?>'><input class='field411' type='text' name='q411' value='<?php if(isset($_POST['q411'])) echo $_POST['q411']; ?>'><input class='field420' type='text' name='q420' value='<?php if(isset($_POST['q420'])) echo $_POST['q420']; ?>'><input class='field422' type='text' name='q422' value='<?php if(isset($_POST['q422'])) echo $_POST['q422']; ?>'><input class='field438' type='text' name='q438' value='<?php if(isset($_POST['q438'])) echo $_POST['q438']; ?>'><input class='field449' type='text' name='q449' value='<?php if(isset($_POST['q449'])) echo $_POST['q449']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer7 = $_POST['q7'];
if ($answer7 == 'j' || $answer7 == 'J') { $totalCorrect++; }
$answer33 = $_POST['q33'];
if ($answer33 == 's' || $answer33 == 'S') { $totalCorrect++; }
$answer34 = $_POST['q34'];
if ($answer34 == 'u' || $answer34 == 'U') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 's' || $answer35 == 'S') { $totalCorrect++; }
$answer36 = $_POST['q36'];
if ($answer36 == 'p' || $answer36 == 'P') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 'i' || $answer37 == 'I') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'c' || $answer38 == 'C') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'i' || $answer39 == 'I') { $totalCorrect++; }
$answer40 = $_POST['q40'];
if ($answer40 == 'o' || $answer40 == 'O') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'n' || $answer41 == 'N') { $totalCorrect++; }
$answer61 = $_POST['q61'];
if ($answer61 == 'd' || $answer61 == 'D') { $totalCorrect++; }
$answer85 = $_POST['q85'];
if ($answer85 == 'b' || $answer85 == 'B') { $totalCorrect++; }
$answer86 = $_POST['q86'];
if ($answer86 == 'u' || $answer86 == 'U') { $totalCorrect++; }
$answer87 = $_POST['q87'];
if ($answer87 == 'r' || $answer87 == 'R') { $totalCorrect++; }
$answer88 = $_POST['q88'];
if ($answer88 == 'g' || $answer88 == 'G') { $totalCorrect++; }
$answer89 = $_POST['q89'];
if ($answer89 == 'l' || $answer89 == 'L') { $totalCorrect++; }
$answer90 = $_POST['q90'];
if ($answer90 == 'a' || $answer90 == 'A') { $totalCorrect++; }
$answer91 = $_POST['q91'];
if ($answer91 == 'r' || $answer91 == 'R') { $totalCorrect++; }
$answer92 = $_POST['q92'];
if ($answer92 == 'y' || $answer92 == 'Y') { $totalCorrect++; }
$answer112 = $_POST['q112'];
if ($answer112 == 'a' || $answer112 == 'A') { $totalCorrect++; }
$answer115 = $_POST['q115'];
if ($answer115 == 'e' || $answer115 == 'E') { $totalCorrect++; }
$answer117 = $_POST['q117'];
if ($answer117 == 'r' || $answer117 == 'R') { $totalCorrect++; }
$answer139 = $_POST['q139'];
if ($answer139 == 'n' || $answer139 == 'N') { $totalCorrect++; }
$answer144 = $_POST['q144'];
if ($answer144 == 's' || $answer144 == 'S') { $totalCorrect++; }
$answer153 = $_POST['q153'];
if ($answer153 == 'f' || $answer153 == 'F') { $totalCorrect++; }
$answer166 = $_POST['q166'];
if ($answer166 == 'i' || $answer166 == 'I') { $totalCorrect++; }
$answer171 = $_POST['q171'];
if ($answer171 == 'o' || $answer171 == 'O') { $totalCorrect++; }
$answer174 = $_POST['q174'];
if ($answer174 == 'l' || $answer174 == 'L') { $totalCorrect++; }
$answer180 = $_POST['q180'];
if ($answer180 == 'o' || $answer180 == 'O') { $totalCorrect++; }
$answer193 = $_POST['q193'];
if ($answer193 == 's' || $answer193 == 'S') { $totalCorrect++; }
$answer196 = $_POST['q196'];
if ($answer196 == 'm' || $answer196 == 'M') { $totalCorrect++; }
$answer197 = $_POST['q197'];
if ($answer197 == 'a' || $answer197 == 'A') { $totalCorrect++; }
$answer198 = $_POST['q198'];
if ($answer198 == 'n' || $answer198 == 'N') { $totalCorrect++; }
$answer199 = $_POST['q199'];
if ($answer199 == 's' || $answer199 == 'S') { $totalCorrect++; }
$answer200 = $_POST['q200'];
if ($answer200 == 'l' || $answer200 == 'L') { $totalCorrect++; }
$answer201 = $_POST['q201'];
if ($answer201 == 'a' || $answer201 == 'A') { $totalCorrect++; }
$answer202 = $_POST['q202'];
if ($answer202 == 'u' || $answer202 == 'U') { $totalCorrect++; }
$answer203 = $_POST['q203'];
if ($answer203 == 'g' || $answer203 == 'G') { $totalCorrect++; }
$answer204 = $_POST['q204'];
if ($answer204 == 'h' || $answer204 == 'H') { $totalCorrect++; }
$answer205 = $_POST['q205'];
if ($answer205 == 't' || $answer205 == 'T') { $totalCorrect++; }
$answer206 = $_POST['q206'];
if ($answer206 == 'e' || $answer206 == 'E') { $totalCorrect++; }
$answer207 = $_POST['q207'];
if ($answer207 == 'r' || $answer207 == 'R') { $totalCorrect++; }
$answer220 = $_POST['q220'];
if ($answer220 == 'h' || $answer220 == 'H') { $totalCorrect++; }
$answer228 = $_POST['q228'];
if ($answer228 == 'w' || $answer228 == 'W') { $totalCorrect++; }
$answer231 = $_POST['q231'];
if ($answer231 == 'a' || $answer231 == 'A') { $totalCorrect++; }
$answer234 = $_POST['q234'];
if ($answer234 == 'g' || $answer234 == 'G') { $totalCorrect++; }
$answer247 = $_POST['q247'];
if ($answer247 == 'm' || $answer247 == 'M') { $totalCorrect++; }
$answer255 = $_POST['q255'];
if ($answer255 == 'y' || $answer255 == 'Y') { $totalCorrect++; }
$answer258 = $_POST['q258'];
if ($answer258 == 'n' || $answer258 == 'N') { $totalCorrect++; }
$answer261 = $_POST['q261'];
if ($answer261 == 'e' || $answer261 == 'E') { $totalCorrect++; }
$answer270 = $_POST['q270'];
if ($answer270 == 'b' || $answer270 == 'B') { $totalCorrect++; }
$answer274 = $_POST['q274'];
if ($answer274 == 'e' || $answer274 == 'E') { $totalCorrect++; }
$answer282 = $_POST['q282'];
if ($answer282 == 'e' || $answer282 == 'E') { $totalCorrect++; }
$answer285 = $_POST['q285'];
if ($answer285 == 'd' || $answer285 == 'D') { $totalCorrect++; }
$answer287 = $_POST['q287'];
if ($answer287 == 'd' || $answer287 == 'D') { $totalCorrect++; }
$answer288 = $_POST['q288'];
if ($answer288 == 'r' || $answer288 == 'R') { $totalCorrect++; }
$answer289 = $_POST['q289'];
if ($answer289 == 'u' || $answer289 == 'U') { $totalCorrect++; }
$answer290 = $_POST['q290'];
if ($answer290 == 'g' || $answer290 == 'G') { $totalCorrect++; }
$answer291 = $_POST['q291'];
if ($answer291 == ' ' || $answer291 == ' ') { $totalCorrect++; }
$answer292 = $_POST['q292'];
if ($answer292 == 'd' || $answer292 == 'D') { $totalCorrect++; }
$answer293 = $_POST['q293'];
if ($answer293 == 'e' || $answer293 == 'E') { $totalCorrect++; }
$answer294 = $_POST['q294'];
if ($answer294 == 'a' || $answer294 == 'A') { $totalCorrect++; }
$answer295 = $_POST['q295'];
if ($answer295 == 'l' || $answer295 == 'L') { $totalCorrect++; }
$answer296 = $_POST['q296'];
if ($answer296 == 'e' || $answer296 == 'E') { $totalCorrect++; }
$answer297 = $_POST['q297'];
if ($answer297 == 'r' || $answer297 == 'R') { $totalCorrect++; }
$answer298 = $_POST['q298'];
if ($answer298 == 'k' || $answer298 == 'K') { $totalCorrect++; }
$answer299 = $_POST['q299'];
if ($answer299 == 'i' || $answer299 == 'I') { $totalCorrect++; }
$answer300 = $_POST['q300'];
if ($answer300 == 'd' || $answer300 == 'D') { $totalCorrect++; }
$answer301 = $_POST['q301'];
if ($answer301 == 'n' || $answer301 == 'N') { $totalCorrect++; }
$answer302 = $_POST['q302'];
if ($answer302 == 'a' || $answer302 == 'A') { $totalCorrect++; }
$answer303 = $_POST['q303'];
if ($answer303 == 'p' || $answer303 == 'P') { $totalCorrect++; }
$answer304 = $_POST['q304'];
if ($answer304 == 'p' || $answer304 == 'P') { $totalCorrect++; }
$answer305 = $_POST['q305'];
if ($answer305 == 'i' || $answer305 == 'I') { $totalCorrect++; }
$answer306 = $_POST['q306'];
if ($answer306 == 'n' || $answer306 == 'N') { $totalCorrect++; }
$answer307 = $_POST['q307'];
if ($answer307 == 'g' || $answer307 == 'G') { $totalCorrect++; }
$answer309 = $_POST['q309'];
if ($answer309 == 'r' || $answer309 == 'R') { $totalCorrect++; }
$answer312 = $_POST['q312'];
if ($answer312 == 'c' || $answer312 == 'C') { $totalCorrect++; }
$answer315 = $_POST['q315'];
if ($answer315 == 'y' || $answer315 == 'Y') { $totalCorrect++; }
$answer324 = $_POST['q324'];
if ($answer324 == 'i' || $answer324 == 'I') { $totalCorrect++; }
$answer328 = $_POST['q328'];
if ($answer328 == 't' || $answer328 == 'T') { $totalCorrect++; }
$answer330 = $_POST['q330'];
if ($answer330 == 'r' || $answer330 == 'R') { $totalCorrect++; }
$answer337 = $_POST['q337'];
if ($answer337 == 'c' || $answer337 == 'C') { $totalCorrect++; }
$answer338 = $_POST['q338'];
if ($answer338 == 'o' || $answer338 == 'O') { $totalCorrect++; }
$answer339 = $_POST['q339'];
if ($answer339 == 'u' || $answer339 == 'U') { $totalCorrect++; }
$answer340 = $_POST['q340'];
if ($answer340 == 'r' || $answer340 == 'R') { $totalCorrect++; }
$answer341 = $_POST['q341'];
if ($answer341 == 't' || $answer341 == 'T') { $totalCorrect++; }
$answer351 = $_POST['q351'];
if ($answer351 == 'b' || $answer351 == 'B') { $totalCorrect++; }
$answer357 = $_POST['q357'];
if ($answer357 == 'i' || $answer357 == 'I') { $totalCorrect++; }
$answer366 = $_POST['q366'];
if ($answer366 == 'f' || $answer366 == 'F') { $totalCorrect++; }
$answer368 = $_POST['q368'];
if ($answer368 == 'r' || $answer368 == 'R') { $totalCorrect++; }
$answer369 = $_POST['q369'];
if ($answer369 == 'a' || $answer369 == 'A') { $totalCorrect++; }
$answer370 = $_POST['q370'];
if ($answer370 == 'p' || $answer370 == 'P') { $totalCorrect++; }
$answer371 = $_POST['q371'];
if ($answer371 == 'e' || $answer371 == 'E') { $totalCorrect++; }
$answer378 = $_POST['q378'];
if ($answer378 == 'e' || $answer378 == 'E') { $totalCorrect++; }
$answer384 = $_POST['q384'];
if ($answer384 == 's' || $answer384 == 'S') { $totalCorrect++; }
$answer393 = $_POST['q393'];
if ($answer393 == 'f' || $answer393 == 'F') { $totalCorrect++; }
$answer395 = $_POST['q395'];
if ($answer395 == 'i' || $answer395 == 'I') { $totalCorrect++; }
$answer411 = $_POST['q411'];
if ($answer411 == 'o' || $answer411 == 'O') { $totalCorrect++; }
$answer420 = $_POST['q420'];
if ($answer420 == 's' || $answer420 == 'S') { $totalCorrect++; }
$answer422 = $_POST['q422'];
if ($answer422 == 'a' || $answer422 == 'A') { $totalCorrect++; }
$answer438 = $_POST['q438'];
if ($answer438 == 'n' || $answer438 == 'N') { $totalCorrect++; }
$answer449 = $_POST['q449'];
if ($answer449 == 'l' || $answer449 == 'L') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. the one who makes a decision on the case in court </div>";
echo "<div class='question'>2. an assumption about who might be the culprit</div>";
echo "<div class='question'>3. breaking and entering</div>";
echo "<div class='question'>4. forced departure from the country</div>";
echo "<div class='question'>5. who did this causing your house to burn down</div>";
echo "<div class='question'>6. fake copy of money or documents</div>";
echo "<div class='question'>7. the one who defends the rights of the accused in court</div>";
echo "<div class='question'>8. Action if you accidentally killed a person</div>";
echo "<div class='question'>9. this is put on the criminal when arrested</div>";
echo "<div class='question'>10. you give it to a policeman if he stopped your car</div>";
echo "<div class='question'>11. The man who sells drugs.</div>";
echo "<div class='question'>12. stealing people for ransom</div>";
echo "<div class='question'>13. place of detention of criminals</div>";
echo "<div class='question'>14. The place where you are judged.</div>";
echo "<div class='question'>15. court proceedings</div>";
echo "<div class='question'>16. sexual harassment</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {        if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {    $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; }$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 102 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";}
?>