<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer9 = $_POST['q9']; if ($answer9 == 'm' || $answer9 == 'M') echo "background: #8fff80"; else if($answer9 != '') echo "background: #ff6969"?>' class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer39 = $_POST['q39']; if ($answer39 == 't' || $answer39 == 'T') echo "background: #8fff80"; else if($answer39 != '') echo "background: #ff6969"?>' class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer40 = $_POST['q40']; if ($answer40 == 'r' || $answer40 == 'R') echo "background: #8fff80"; else if($answer40 != '') echo "background: #ff6969"?>' class='field40' type='text' name='q40' value='<?php if(isset($_POST['q40'])) echo $_POST['q40']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer41 = $_POST['q41']; if ($answer41 == 'i' || $answer41 == 'I') echo "background: #8fff80"; else if($answer41 != '') echo "background: #ff6969"?>' class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input maxlength='1' style='<?php $answer42 = $_POST['q42']; if ($answer42 == 'a' || $answer42 == 'A') echo "background: #8fff80"; else if($answer42 != '') echo "background: #ff6969"?>' class='field42' type='text' name='q42' value='<?php if(isset($_POST['q42'])) echo $_POST['q42']; ?>'><input maxlength='1' style='<?php $answer43 = $_POST['q43']; if ($answer43 == 'l' || $answer43 == 'L') echo "background: #8fff80"; else if($answer43 != '') echo "background: #ff6969"?>' class='field43' type='text' name='q43' value='<?php if(isset($_POST['q43'])) echo $_POST['q43']; ?>'><input maxlength='1' style='<?php $answer73 = $_POST['q73']; if ($answer73 == 'a' || $answer73 == 'A') echo "background: #8fff80"; else if($answer73 != '') echo "background: #ff6969"?>' class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><input maxlength='1' style='<?php $answer75 = $_POST['q75']; if ($answer75 == 'n' || $answer75 == 'N') echo "background: #8fff80"; else if($answer75 != '') echo "background: #ff6969"?>' class='field75' type='text' name='q75' value='<?php if(isset($_POST['q75'])) echo $_POST['q75']; ?>'><input maxlength='1' style='<?php $answer79 = $_POST['q79']; if ($answer79 == 'k' || $answer79 == 'K') echo "background: #8fff80"; else if($answer79 != '') echo "background: #ff6969"?>' class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><a class='num4'>4</a><input maxlength='1' style='<?php $answer82 = $_POST['q82']; if ($answer82 == 'c' || $answer82 == 'C') echo "background: #8fff80"; else if($answer82 != '') echo "background: #ff6969"?>' class='field82' type='text' name='q82' value='<?php if(isset($_POST['q82'])) echo $_POST['q82']; ?>'><a class='num5'>5</a><input maxlength='1' style='<?php $answer106 = $_POST['q106']; if ($answer106 == 'p' || $answer106 == 'P') echo "background: #8fff80"; else if($answer106 != '') echo "background: #ff6969"?>' class='field106' type='text' name='q106' value='<?php if(isset($_POST['q106'])) echo $_POST['q106']; ?>'><input maxlength='1' style='<?php $answer108 = $_POST['q108']; if ($answer108 == 's' || $answer108 == 'S') echo "background: #8fff80"; else if($answer108 != '') echo "background: #ff6969"?>' class='field108' type='text' name='q108' value='<?php if(isset($_POST['q108'])) echo $_POST['q108']; ?>'><a class='num6'>6</a><input maxlength='1' style='<?php $answer109 = $_POST['q109']; if ($answer109 == 'u' || $answer109 == 'U') echo "background: #8fff80"; else if($answer109 != '') echo "background: #ff6969"?>' class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input maxlength='1' style='<?php $answer110 = $_POST['q110']; if ($answer110 == 's' || $answer110 == 'S') echo "background: #8fff80"; else if($answer110 != '') echo "background: #ff6969"?>' class='field110' type='text' name='q110' value='<?php if(isset($_POST['q110'])) echo $_POST['q110']; ?>'><input maxlength='1' style='<?php $answer111 = $_POST['q111']; if ($answer111 == 'p' || $answer111 == 'P') echo "background: #8fff80"; else if($answer111 != '') echo "background: #ff6969"?>' class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input maxlength='1' style='<?php $answer112 = $_POST['q112']; if ($answer112 == 'i' || $answer112 == 'I') echo "background: #8fff80"; else if($answer112 != '') echo "background: #ff6969"?>' class='field112' type='text' name='q112' value='<?php if(isset($_POST['q112'])) echo $_POST['q112']; ?>'><input maxlength='1' style='<?php $answer113 = $_POST['q113']; if ($answer113 == 'c' || $answer113 == 'C') echo "background: #8fff80"; else if($answer113 != '') echo "background: #ff6969"?>' class='field113' type='text' name='q113' value='<?php if(isset($_POST['q113'])) echo $_POST['q113']; ?>'><input maxlength='1' style='<?php $answer114 = $_POST['q114']; if ($answer114 == 'i' || $answer114 == 'I') echo "background: #8fff80"; else if($answer114 != '') echo "background: #ff6969"?>' class='field114' type='text' name='q114' value='<?php if(isset($_POST['q114'])) echo $_POST['q114']; ?>'><input maxlength='1' style='<?php $answer115 = $_POST['q115']; if ($answer115 == 'o' || $answer115 == 'O') echo "background: #8fff80"; else if($answer115 != '') echo "background: #ff6969"?>' class='field115' type='text' name='q115' value='<?php if(isset($_POST['q115'])) echo $_POST['q115']; ?>'><input maxlength='1' style='<?php $answer116 = $_POST['q116']; if ($answer116 == 'n' || $answer116 == 'N') echo "background: #8fff80"; else if($answer116 != '') echo "background: #ff6969"?>' class='field116' type='text' name='q116' value='<?php if(isset($_POST['q116'])) echo $_POST['q116']; ?>'><input maxlength='1' style='<?php $answer135 = $_POST['q135']; if ($answer135 == 'j' || $answer135 == 'J') echo "background: #8fff80"; else if($answer135 != '') echo "background: #ff6969"?>' class='field135' type='text' name='q135' value='<?php if(isset($_POST['q135'])) echo $_POST['q135']; ?>'><a class='num7'>7</a><input maxlength='1' style='<?php $answer136 = $_POST['q136']; if ($answer136 == 'u' || $answer136 == 'U') echo "background: #8fff80"; else if($answer136 != '') echo "background: #ff6969"?>' class='field136' type='text' name='q136' value='<?php if(isset($_POST['q136'])) echo $_POST['q136']; ?>'><input maxlength='1' style='<?php $answer137 = $_POST['q137']; if ($answer137 == 'd' || $answer137 == 'D') echo "background: #8fff80"; else if($answer137 != '') echo "background: #ff6969"?>' class='field137' type='text' name='q137' value='<?php if(isset($_POST['q137'])) echo $_POST['q137']; ?>'><input maxlength='1' style='<?php $answer138 = $_POST['q138']; if ($answer138 == 'g' || $answer138 == 'G') echo "background: #8fff80"; else if($answer138 != '') echo "background: #ff6969"?>' class='field138' type='text' name='q138' value='<?php if(isset($_POST['q138'])) echo $_POST['q138']; ?>'><input maxlength='1' style='<?php $answer139 = $_POST['q139']; if ($answer139 == 'e' || $answer139 == 'E') echo "background: #8fff80"; else if($answer139 != '') echo "background: #ff6969"?>' class='field139' type='text' name='q139' value='<?php if(isset($_POST['q139'])) echo $_POST['q139']; ?>'><input maxlength='1' style='<?php $answer141 = $_POST['q141']; if ($answer141 == 'l' || $answer141 == 'L') echo "background: #8fff80"; else if($answer141 != '') echo "background: #ff6969"?>' class='field141' type='text' name='q141' value='<?php if(isset($_POST['q141'])) echo $_POST['q141']; ?>'><input maxlength='1' style='<?php $answer145 = $_POST['q145']; if ($answer145 == 'd' || $answer145 == 'D') echo "background: #8fff80"; else if($answer145 != '') echo "background: #ff6969"?>' class='field145' type='text' name='q145' value='<?php if(isset($_POST['q145'])) echo $_POST['q145']; ?>'><input maxlength='1' style='<?php $answer148 = $_POST['q148']; if ($answer148 == 'u' || $answer148 == 'U') echo "background: #8fff80"; else if($answer148 != '') echo "background: #ff6969"?>' class='field148' type='text' name='q148' value='<?php if(isset($_POST['q148'])) echo $_POST['q148']; ?>'><input maxlength='1' style='<?php $answer174 = $_POST['q174']; if ($answer174 == 'a' || $answer174 == 'A') echo "background: #8fff80"; else if($answer174 != '') echo "background: #ff6969"?>' class='field174' type='text' name='q174' value='<?php if(isset($_POST['q174'])) echo $_POST['q174']; ?>'><input maxlength='1' style='<?php $answer176 = $_POST['q176']; if ($answer176 == 'w' || $answer176 == 'W') echo "background: #8fff80"; else if($answer176 != '') echo "background: #ff6969"?>' class='field176' type='text' name='q176' value='<?php if(isset($_POST['q176'])) echo $_POST['q176']; ?>'><a class='num8'>8</a><input maxlength='1' style='<?php $answer178 = $_POST['q178']; if ($answer178 == 'n' || $answer178 == 'N') echo "background: #8fff80"; else if($answer178 != '') echo "background: #ff6969"?>' class='field178' type='text' name='q178' value='<?php if(isset($_POST['q178'])) echo $_POST['q178']; ?>'><input maxlength='1' style='<?php $answer180 = $_POST['q180']; if ($answer180 == 'a' || $answer180 == 'A') echo "background: #8fff80"; else if($answer180 != '') echo "background: #ff6969"?>' class='field180' type='text' name='q180' value='<?php if(isset($_POST['q180'])) echo $_POST['q180']; ?>'><a class='num9'>9</a><input maxlength='1' style='<?php $answer181 = $_POST['q181']; if ($answer181 == 'r' || $answer181 == 'R') echo "background: #8fff80"; else if($answer181 != '') echo "background: #ff6969"?>' class='field181' type='text' name='q181' value='<?php if(isset($_POST['q181'])) echo $_POST['q181']; ?>'><input maxlength='1' style='<?php $answer182 = $_POST['q182']; if ($answer182 == 's' || $answer182 == 'S') echo "background: #8fff80"; else if($answer182 != '') echo "background: #ff6969"?>' class='field182' type='text' name='q182' value='<?php if(isset($_POST['q182'])) echo $_POST['q182']; ?>'><input maxlength='1' style='<?php $answer183 = $_POST['q183']; if ($answer183 == 'o' || $answer183 == 'O') echo "background: #8fff80"; else if($answer183 != '') echo "background: #ff6969"?>' class='field183' type='text' name='q183' value='<?php if(isset($_POST['q183'])) echo $_POST['q183']; ?>'><input maxlength='1' style='<?php $answer184 = $_POST['q184']; if ($answer184 == 'n' || $answer184 == 'N') echo "background: #8fff80"; else if($answer184 != '') echo "background: #ff6969"?>' class='field184' type='text' name='q184' value='<?php if(isset($_POST['q184'])) echo $_POST['q184']; ?>'><input maxlength='1' style='<?php $answer202 = $_POST['q202']; if ($answer202 == 's' || $answer202 == 'S') echo "background: #8fff80"; else if($answer202 != '') echo "background: #ff6969"?>' class='field202' type='text' name='q202' value='<?php if(isset($_POST['q202'])) echo $_POST['q202']; ?>'><a class='num10'>10</a><input maxlength='1' style='<?php $answer206 = $_POST['q206']; if ($answer206 == 'j' || $answer206 == 'J') echo "background: #8fff80"; else if($answer206 != '') echo "background: #ff6969"?>' class='field206' type='text' name='q206' value='<?php if(isset($_POST['q206'])) echo $_POST['q206']; ?>'><a class='num11'>11</a><input maxlength='1' style='<?php $answer207 = $_POST['q207']; if ($answer207 == 'u' || $answer207 == 'U') echo "background: #8fff80"; else if($answer207 != '') echo "background: #ff6969"?>' class='field207' type='text' name='q207' value='<?php if(isset($_POST['q207'])) echo $_POST['q207']; ?>'><input maxlength='1' style='<?php $answer208 = $_POST['q208']; if ($answer208 == 'r' || $answer208 == 'R') echo "background: #8fff80"; else if($answer208 != '') echo "background: #ff6969"?>' class='field208' type='text' name='q208' value='<?php if(isset($_POST['q208'])) echo $_POST['q208']; ?>'><input maxlength='1' style='<?php $answer209 = $_POST['q209']; if ($answer209 == 'i' || $answer209 == 'I') echo "background: #8fff80"; else if($answer209 != '') echo "background: #ff6969"?>' class='field209' type='text' name='q209' value='<?php if(isset($_POST['q209'])) echo $_POST['q209']; ?>'><input maxlength='1' style='<?php $answer211 = $_POST['q211']; if ($answer211 == 'a' || $answer211 == 'A') echo "background: #8fff80"; else if($answer211 != '') echo "background: #ff6969"?>' class='field211' type='text' name='q211' value='<?php if(isset($_POST['q211'])) echo $_POST['q211']; ?>'><input maxlength='1' style='<?php $answer214 = $_POST['q214']; if ($answer214 == 't' || $answer214 == 'T') echo "background: #8fff80"; else if($answer214 != '') echo "background: #ff6969"?>' class='field214' type='text' name='q214' value='<?php if(isset($_POST['q214'])) echo $_POST['q214']; ?>'><input maxlength='1' style='<?php $answer235 = $_POST['q235']; if ($answer235 == 'm' || $answer235 == 'M') echo "background: #8fff80"; else if($answer235 != '') echo "background: #ff6969"?>' class='field235' type='text' name='q235' value='<?php if(isset($_POST['q235'])) echo $_POST['q235']; ?>'><input maxlength='1' style='<?php $answer240 = $_POST['q240']; if ($answer240 == 'g' || $answer240 == 'G') echo "background: #8fff80"; else if($answer240 != '') echo "background: #ff6969"?>' class='field240' type='text' name='q240' value='<?php if(isset($_POST['q240'])) echo $_POST['q240']; ?>'><input maxlength='1' style='<?php $answer242 = $_POST['q242']; if ($answer242 == 't' || $answer242 == 'T') echo "background: #8fff80"; else if($answer242 != '') echo "background: #ff6969"?>' class='field242' type='text' name='q242' value='<?php if(isset($_POST['q242'])) echo $_POST['q242']; ?>'><input maxlength='1' style='<?php $answer244 = $_POST['q244']; if ($answer244 == 'p' || $answer244 == 'P') echo "background: #8fff80"; else if($answer244 != '') echo "background: #ff6969"?>' class='field244' type='text' name='q244' value='<?php if(isset($_POST['q244'])) echo $_POST['q244']; ?>'><input maxlength='1' style='<?php $answer248 = $_POST['q248']; if ($answer248 == 'r' || $answer248 == 'R') echo "background: #8fff80"; else if($answer248 != '') echo "background: #ff6969"?>' class='field248' type='text' name='q248' value='<?php if(isset($_POST['q248'])) echo $_POST['q248']; ?>'><a class='num12'>12</a><input maxlength='1' style='<?php $answer268 = $_POST['q268']; if ($answer268 == 'u' || $answer268 == 'U') echo "background: #8fff80"; else if($answer268 != '') echo "background: #ff6969"?>' class='field268' type='text' name='q268' value='<?php if(isset($_POST['q268'])) echo $_POST['q268']; ?>'><input maxlength='1' style='<?php $answer273 = $_POST['q273']; if ($answer273 == 'h' || $answer273 == 'H') echo "background: #8fff80"; else if($answer273 != '') echo "background: #ff6969"?>' class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input maxlength='1' style='<?php $answer275 = $_POST['q275']; if ($answer275 == 'n' || $answer275 == 'N') echo "background: #8fff80"; else if($answer275 != '') echo "background: #ff6969"?>' class='field275' type='text' name='q275' value='<?php if(isset($_POST['q275'])) echo $_POST['q275']; ?>'><input maxlength='1' style='<?php $answer277 = $_POST['q277']; if ($answer277 == 'p' || $answer277 == 'P') echo "background: #8fff80"; else if($answer277 != '') echo "background: #ff6969"?>' class='field277' type='text' name='q277' value='<?php if(isset($_POST['q277'])) echo $_POST['q277']; ?>'><a class='num13'>13</a><input maxlength='1' style='<?php $answer278 = $_POST['q278']; if ($answer278 == 'r' || $answer278 == 'R') echo "background: #8fff80"; else if($answer278 != '') echo "background: #ff6969"?>' class='field278' type='text' name='q278' value='<?php if(isset($_POST['q278'])) echo $_POST['q278']; ?>'><input maxlength='1' style='<?php $answer279 = $_POST['q279']; if ($answer279 == 'i' || $answer279 == 'I') echo "background: #8fff80"; else if($answer279 != '') echo "background: #ff6969"?>' class='field279' type='text' name='q279' value='<?php if(isset($_POST['q279'])) echo $_POST['q279']; ?>'><input maxlength='1' style='<?php $answer280 = $_POST['q280']; if ($answer280 == 's' || $answer280 == 'S') echo "background: #8fff80"; else if($answer280 != '') echo "background: #ff6969"?>' class='field280' type='text' name='q280' value='<?php if(isset($_POST['q280'])) echo $_POST['q280']; ?>'><input maxlength='1' style='<?php $answer281 = $_POST['q281']; if ($answer281 == 'o' || $answer281 == 'O') echo "background: #8fff80"; else if($answer281 != '') echo "background: #ff6969"?>' class='field281' type='text' name='q281' value='<?php if(isset($_POST['q281'])) echo $_POST['q281']; ?>'><input maxlength='1' style='<?php $answer282 = $_POST['q282']; if ($answer282 == 'n' || $answer282 == 'N') echo "background: #8fff80"; else if($answer282 != '') echo "background: #ff6969"?>' class='field282' type='text' name='q282' value='<?php if(isset($_POST['q282'])) echo $_POST['q282']; ?>'><input maxlength='1' style='<?php $answer301 = $_POST['q301']; if ($answer301 == 'g' || $answer301 == 'G') echo "background: #8fff80"; else if($answer301 != '') echo "background: #ff6969"?>' class='field301' type='text' name='q301' value='<?php if(isset($_POST['q301'])) echo $_POST['q301']; ?>'><input maxlength='1' style='<?php $answer306 = $_POST['q306']; if ($answer306 == 't' || $answer306 == 'T') echo "background: #8fff80"; else if($answer306 != '') echo "background: #ff6969"?>' class='field306' type='text' name='q306' value='<?php if(isset($_POST['q306'])) echo $_POST['q306']; ?>'><input maxlength='1' style='<?php $answer308 = $_POST['q308']; if ($answer308 == 'e' || $answer308 == 'E') echo "background: #8fff80"; else if($answer308 != '') echo "background: #ff6969"?>' class='field308' type='text' name='q308' value='<?php if(isset($_POST['q308'])) echo $_POST['q308']; ?>'><input maxlength='1' style='<?php $answer310 = $_POST['q310']; if ($answer310 == 'i' || $answer310 == 'I') echo "background: #8fff80"; else if($answer310 != '') echo "background: #ff6969"?>' class='field310' type='text' name='q310' value='<?php if(isset($_POST['q310'])) echo $_POST['q310']; ?>'><input maxlength='1' style='<?php $answer314 = $_POST['q314']; if ($answer314 == 'b' || $answer314 == 'B') echo "background: #8fff80"; else if($answer314 != '') echo "background: #ff6969"?>' class='field314' type='text' name='q314' value='<?php if(isset($_POST['q314'])) echo $_POST['q314']; ?>'><input maxlength='1' style='<?php $answer334 = $_POST['q334']; if ($answer334 == 'g' || $answer334 == 'G') echo "background: #8fff80"; else if($answer334 != '') echo "background: #ff6969"?>' class='field334' type='text' name='q334' value='<?php if(isset($_POST['q334'])) echo $_POST['q334']; ?>'><input maxlength='1' style='<?php $answer339 = $_POST['q339']; if ($answer339 == 'e' || $answer339 == 'E') echo "background: #8fff80"; else if($answer339 != '') echo "background: #ff6969"?>' class='field339' type='text' name='q339' value='<?php if(isset($_POST['q339'])) echo $_POST['q339']; ?>'><input maxlength='1' style='<?php $answer341 = $_POST['q341']; if ($answer341 == 's' || $answer341 == 'S') echo "background: #8fff80"; else if($answer341 != '') echo "background: #ff6969"?>' class='field341' type='text' name='q341' value='<?php if(isset($_POST['q341'])) echo $_POST['q341']; ?>'><input maxlength='1' style='<?php $answer343 = $_POST['q343']; if ($answer343 == 'n' || $answer343 == 'N') echo "background: #8fff80"; else if($answer343 != '') echo "background: #ff6969"?>' class='field343' type='text' name='q343' value='<?php if(isset($_POST['q343'])) echo $_POST['q343']; ?>'><input maxlength='1' style='<?php $answer347 = $_POST['q347']; if ($answer347 == 'b' || $answer347 == 'B') echo "background: #8fff80"; else if($answer347 != '') echo "background: #ff6969"?>' class='field347' type='text' name='q347' value='<?php if(isset($_POST['q347'])) echo $_POST['q347']; ?>'><a class='num14'>14</a><input maxlength='1' style='<?php $answer348 = $_POST['q348']; if ($answer348 == 'a' || $answer348 == 'A') echo "background: #8fff80"; else if($answer348 != '') echo "background: #ff6969"?>' class='field348' type='text' name='q348' value='<?php if(isset($_POST['q348'])) echo $_POST['q348']; ?>'><input maxlength='1' style='<?php $answer349 = $_POST['q349']; if ($answer349 == 'n' || $answer349 == 'N') echo "background: #8fff80"; else if($answer349 != '') echo "background: #ff6969"?>' class='field349' type='text' name='q349' value='<?php if(isset($_POST['q349'])) echo $_POST['q349']; ?>'><input maxlength='1' style='<?php $answer350 = $_POST['q350']; if ($answer350 == 'i' || $answer350 == 'I') echo "background: #8fff80"; else if($answer350 != '') echo "background: #ff6969"?>' class='field350' type='text' name='q350' value='<?php if(isset($_POST['q350'])) echo $_POST['q350']; ?>'><input maxlength='1' style='<?php $answer351 = $_POST['q351']; if ($answer351 == 's' || $answer351 == 'S') echo "background: #8fff80"; else if($answer351 != '') echo "background: #ff6969"?>' class='field351' type='text' name='q351' value='<?php if(isset($_POST['q351'])) echo $_POST['q351']; ?>'><input maxlength='1' style='<?php $answer352 = $_POST['q352']; if ($answer352 == 'h' || $answer352 == 'H') echo "background: #8fff80"; else if($answer352 != '') echo "background: #ff6969"?>' class='field352' type='text' name='q352' value='<?php if(isset($_POST['q352'])) echo $_POST['q352']; ?>'><input maxlength='1' style='<?php $answer353 = $_POST['q353']; if ($answer353 == 'm' || $answer353 == 'M') echo "background: #8fff80"; else if($answer353 != '') echo "background: #ff6969"?>' class='field353' type='text' name='q353' value='<?php if(isset($_POST['q353'])) echo $_POST['q353']; ?>'><input maxlength='1' style='<?php $answer354 = $_POST['q354']; if ($answer354 == 'e' || $answer354 == 'E') echo "background: #8fff80"; else if($answer354 != '') echo "background: #ff6969"?>' class='field354' type='text' name='q354' value='<?php if(isset($_POST['q354'])) echo $_POST['q354']; ?>'><input maxlength='1' style='<?php $answer355 = $_POST['q355']; if ($answer355 == 'n' || $answer355 == 'N') echo "background: #8fff80"; else if($answer355 != '') echo "background: #ff6969"?>' class='field355' type='text' name='q355' value='<?php if(isset($_POST['q355'])) echo $_POST['q355']; ?>'><input maxlength='1' style='<?php $answer356 = $_POST['q356']; if ($answer356 == 't' || $answer356 == 'T') echo "background: #8fff80"; else if($answer356 != '') echo "background: #ff6969"?>' class='field356' type='text' name='q356' value='<?php if(isset($_POST['q356'])) echo $_POST['q356']; ?>'><a class='num15'>15</a><input maxlength='1' style='<?php $answer367 = $_POST['q367']; if ($answer367 == 'l' || $answer367 == 'L') echo "background: #8fff80"; else if($answer367 != '') echo "background: #ff6969"?>' class='field367' type='text' name='q367' value='<?php if(isset($_POST['q367'])) echo $_POST['q367']; ?>'><a class='num16'>16</a><input maxlength='1' style='<?php $answer368 = $_POST['q368']; if ($answer368 == 'a' || $answer368 == 'A') echo "background: #8fff80"; else if($answer368 != '') echo "background: #ff6969"?>' class='field368' type='text' name='q368' value='<?php if(isset($_POST['q368'])) echo $_POST['q368']; ?>'><input maxlength='1' style='<?php $answer369 = $_POST['q369']; if ($answer369 == 'w' || $answer369 == 'W') echo "background: #8fff80"; else if($answer369 != '') echo "background: #ff6969"?>' class='field369' type='text' name='q369' value='<?php if(isset($_POST['q369'])) echo $_POST['q369']; ?>'><input maxlength='1' style='<?php $answer370 = $_POST['q370']; if ($answer370 == 'y' || $answer370 == 'Y') echo "background: #8fff80"; else if($answer370 != '') echo "background: #ff6969"?>' class='field370' type='text' name='q370' value='<?php if(isset($_POST['q370'])) echo $_POST['q370']; ?>'><input maxlength='1' style='<?php $answer371 = $_POST['q371']; if ($answer371 == 'e' || $answer371 == 'E') echo "background: #8fff80"; else if($answer371 != '') echo "background: #ff6969"?>' class='field371' type='text' name='q371' value='<?php if(isset($_POST['q371'])) echo $_POST['q371']; ?>'><input maxlength='1' style='<?php $answer372 = $_POST['q372']; if ($answer372 == 'r' || $answer372 == 'R') echo "background: #8fff80"; else if($answer372 != '') echo "background: #ff6969"?>' class='field372' type='text' name='q372' value='<?php if(isset($_POST['q372'])) echo $_POST['q372']; ?>'><input maxlength='1' style='<?php $answer374 = $_POST['q374']; if ($answer374 == 's' || $answer374 == 'S') echo "background: #8fff80"; else if($answer374 != '') echo "background: #ff6969"?>' class='field374' type='text' name='q374' value='<?php if(isset($_POST['q374'])) echo $_POST['q374']; ?>'><input maxlength='1' style='<?php $answer376 = $_POST['q376']; if ($answer376 == 'g' || $answer376 == 'G') echo "background: #8fff80"; else if($answer376 != '') echo "background: #ff6969"?>' class='field376' type='text' name='q376' value='<?php if(isset($_POST['q376'])) echo $_POST['q376']; ?>'><input maxlength='1' style='<?php $answer380 = $_POST['q380']; if ($answer380 == 'e' || $answer380 == 'E') echo "background: #8fff80"; else if($answer380 != '') echo "background: #ff6969"?>' class='field380' type='text' name='q380' value='<?php if(isset($_POST['q380'])) echo $_POST['q380']; ?>'><input maxlength='1' style='<?php $answer389 = $_POST['q389']; if ($answer389 == 'r' || $answer389 == 'R') echo "background: #8fff80"; else if($answer389 != '') echo "background: #ff6969"?>' class='field389' type='text' name='q389' value='<?php if(isset($_POST['q389'])) echo $_POST['q389']; ?>'><input maxlength='1' style='<?php $answer400 = $_POST['q400']; if ($answer400 == 'i' || $answer400 == 'I') echo "background: #8fff80"; else if($answer400 != '') echo "background: #ff6969"?>' class='field400' type='text' name='q400' value='<?php if(isset($_POST['q400'])) echo $_POST['q400']; ?>'><input maxlength='1' style='<?php $answer411 = $_POST['q411']; if ($answer411 == 'b' || $answer411 == 'B') echo "background: #8fff80"; else if($answer411 != '') echo "background: #ff6969"?>' class='field411' type='text' name='q411' value='<?php if(isset($_POST['q411'])) echo $_POST['q411']; ?>'><a class='num17'>17</a><a class='num18'>18</a><input maxlength='1' style='<?php $answer412 = $_POST['q412']; if ($answer412 == 'u' || $answer412 == 'U') echo "background: #8fff80"; else if($answer412 != '') echo "background: #ff6969"?>' class='field412' type='text' name='q412' value='<?php if(isset($_POST['q412'])) echo $_POST['q412']; ?>'><input maxlength='1' style='<?php $answer413 = $_POST['q413']; if ($answer413 == 'r' || $answer413 == 'R') echo "background: #8fff80"; else if($answer413 != '') echo "background: #ff6969"?>' class='field413' type='text' name='q413' value='<?php if(isset($_POST['q413'])) echo $_POST['q413']; ?>'><input maxlength='1' style='<?php $answer414 = $_POST['q414']; if ($answer414 == 'g' || $answer414 == 'G') echo "background: #8fff80"; else if($answer414 != '') echo "background: #ff6969"?>' class='field414' type='text' name='q414' value='<?php if(isset($_POST['q414'])) echo $_POST['q414']; ?>'><input maxlength='1' style='<?php $answer415 = $_POST['q415']; if ($answer415 == 'l' || $answer415 == 'L') echo "background: #8fff80"; else if($answer415 != '') echo "background: #ff6969"?>' class='field415' type='text' name='q415' value='<?php if(isset($_POST['q415'])) echo $_POST['q415']; ?>'><input maxlength='1' style='<?php $answer416 = $_POST['q416']; if ($answer416 == 'a' || $answer416 == 'A') echo "background: #8fff80"; else if($answer416 != '') echo "background: #ff6969"?>' class='field416' type='text' name='q416' value='<?php if(isset($_POST['q416'])) echo $_POST['q416']; ?>'><input maxlength='1' style='<?php $answer417 = $_POST['q417']; if ($answer417 == 'r' || $answer417 == 'R') echo "background: #8fff80"; else if($answer417 != '') echo "background: #ff6969"?>' class='field417' type='text' name='q417' value='<?php if(isset($_POST['q417'])) echo $_POST['q417']; ?>'><input maxlength='1' style='<?php $answer418 = $_POST['q418']; if ($answer418 == 'y' || $answer418 == 'Y') echo "background: #8fff80"; else if($answer418 != '') echo "background: #ff6969"?>' class='field418' type='text' name='q418' value='<?php if(isset($_POST['q418'])) echo $_POST['q418']; ?>'><input maxlength='1' style='<?php $answer422 = $_POST['q422']; if ($answer422 == 'e' || $answer422 == 'E') echo "background: #8fff80"; else if($answer422 != '') echo "background: #ff6969"?>' class='field422' type='text' name='q422' value='<?php if(isset($_POST['q422'])) echo $_POST['q422']; ?>'><input maxlength='1' style='<?php $answer431 = $_POST['q431']; if ($answer431 == 'p' || $answer431 == 'P') echo "background: #8fff80"; else if($answer431 != '') echo "background: #ff6969"?>' class='field431' type='text' name='q431' value='<?php if(isset($_POST['q431'])) echo $_POST['q431']; ?>'><a class='num19'>19</a><input maxlength='1' style='<?php $answer433 = $_POST['q433']; if ($answer433 == 'n' || $answer433 == 'N') echo "background: #8fff80"; else if($answer433 != '') echo "background: #ff6969"?>' class='field433' type='text' name='q433' value='<?php if(isset($_POST['q433'])) echo $_POST['q433']; ?>'><input maxlength='1' style='<?php $answer437 = $_POST['q437']; if ($answer437 == 'v' || $answer437 == 'V') echo "background: #8fff80"; else if($answer437 != '') echo "background: #ff6969"?>' class='field437' type='text' name='q437' value='<?php if(isset($_POST['q437'])) echo $_POST['q437']; ?>'><a class='num20'>20</a><input maxlength='1' style='<?php $answer444 = $_POST['q444']; if ($answer444 == 'r' || $answer444 == 'R') echo "background: #8fff80"; else if($answer444 != '') echo "background: #ff6969"?>' class='field444' type='text' name='q444' value='<?php if(isset($_POST['q444'])) echo $_POST['q444']; ?>'><input maxlength='1' style='<?php $answer446 = $_POST['q446']; if ($answer446 == 'y' || $answer446 == 'Y') echo "background: #8fff80"; else if($answer446 != '') echo "background: #ff6969"?>' class='field446' type='text' name='q446' value='<?php if(isset($_POST['q446'])) echo $_POST['q446']; ?>'><input maxlength='1' style='<?php $answer454 = $_POST['q454']; if ($answer454 == 'h' || $answer454 == 'H') echo "background: #8fff80"; else if($answer454 != '') echo "background: #ff6969"?>' class='field454' type='text' name='q454' value='<?php if(isset($_POST['q454'])) echo $_POST['q454']; ?>'><a class='num21'>21</a><input maxlength='1' style='<?php $answer455 = $_POST['q455']; if ($answer455 == 'a' || $answer455 == 'A') echo "background: #8fff80"; else if($answer455 != '') echo "background: #ff6969"?>' class='field455' type='text' name='q455' value='<?php if(isset($_POST['q455'])) echo $_POST['q455']; ?>'><input maxlength='1' style='<?php $answer456 = $_POST['q456']; if ($answer456 == 'n' || $answer456 == 'N') echo "background: #8fff80"; else if($answer456 != '') echo "background: #ff6969"?>' class='field456' type='text' name='q456' value='<?php if(isset($_POST['q456'])) echo $_POST['q456']; ?>'><input maxlength='1' style='<?php $answer457 = $_POST['q457']; if ($answer457 == 'd' || $answer457 == 'D') echo "background: #8fff80"; else if($answer457 != '') echo "background: #ff6969"?>' class='field457' type='text' name='q457' value='<?php if(isset($_POST['q457'])) echo $_POST['q457']; ?>'><input maxlength='1' style='<?php $answer458 = $_POST['q458']; if ($answer458 == 'c' || $answer458 == 'C') echo "background: #8fff80"; else if($answer458 != '') echo "background: #ff6969"?>' class='field458' type='text' name='q458' value='<?php if(isset($_POST['q458'])) echo $_POST['q458']; ?>'><input maxlength='1' style='<?php $answer459 = $_POST['q459']; if ($answer459 == 'u' || $answer459 == 'U') echo "background: #8fff80"; else if($answer459 != '') echo "background: #ff6969"?>' class='field459' type='text' name='q459' value='<?php if(isset($_POST['q459'])) echo $_POST['q459']; ?>'><input maxlength='1' style='<?php $answer460 = $_POST['q460']; if ($answer460 == 'f' || $answer460 == 'F') echo "background: #8fff80"; else if($answer460 != '') echo "background: #ff6969"?>' class='field460' type='text' name='q460' value='<?php if(isset($_POST['q460'])) echo $_POST['q460']; ?>'><a class='num22'>22</a><input maxlength='1' style='<?php $answer461 = $_POST['q461']; if ($answer461 == 'f' || $answer461 == 'F') echo "background: #8fff80"; else if($answer461 != '') echo "background: #ff6969"?>' class='field461' type='text' name='q461' value='<?php if(isset($_POST['q461'])) echo $_POST['q461']; ?>'><input maxlength='1' style='<?php $answer462 = $_POST['q462']; if ($answer462 == 's' || $answer462 == 'S') echo "background: #8fff80"; else if($answer462 != '') echo "background: #ff6969"?>' class='field462' type='text' name='q462' value='<?php if(isset($_POST['q462'])) echo $_POST['q462']; ?>'><input maxlength='1' style='<?php $answer463 = $_POST['q463']; if ($answer463 == 'd' || $answer463 == 'D') echo "background: #8fff80"; else if($answer463 != '') echo "background: #ff6969"?>' class='field463' type='text' name='q463' value='<?php if(isset($_POST['q463'])) echo $_POST['q463']; ?>'><a class='num23'>23</a><input maxlength='1' style='<?php $answer464 = $_POST['q464']; if ($answer464 == 'r' || $answer464 == 'R') echo "background: #8fff80"; else if($answer464 != '') echo "background: #ff6969"?>' class='field464' type='text' name='q464' value='<?php if(isset($_POST['q464'])) echo $_POST['q464']; ?>'><input maxlength='1' style='<?php $answer465 = $_POST['q465']; if ($answer465 == 'u' || $answer465 == 'U') echo "background: #8fff80"; else if($answer465 != '') echo "background: #ff6969"?>' class='field465' type='text' name='q465' value='<?php if(isset($_POST['q465'])) echo $_POST['q465']; ?>'><input maxlength='1' style='<?php $answer466 = $_POST['q466']; if ($answer466 == 'g' || $answer466 == 'G') echo "background: #8fff80"; else if($answer466 != '') echo "background: #ff6969"?>' class='field466' type='text' name='q466' value='<?php if(isset($_POST['q466'])) echo $_POST['q466']; ?>'><input maxlength='1' style='<?php $answer467 = $_POST['q467']; if ($answer467 == ' ' || $answer467 == ' ') echo "background: #8fff80"; else if($answer467 != '') echo "background: #ff6969"?>' class='field467' type='text' name='q467' value='<?php if(isset($_POST['q467'])) echo $_POST['q467']; ?>'><input maxlength='1' style='<?php $answer468 = $_POST['q468']; if ($answer468 == 'd' || $answer468 == 'D') echo "background: #8fff80"; else if($answer468 != '') echo "background: #ff6969"?>' class='field468' type='text' name='q468' value='<?php if(isset($_POST['q468'])) echo $_POST['q468']; ?>'><input maxlength='1' style='<?php $answer469 = $_POST['q469']; if ($answer469 == 'e' || $answer469 == 'E') echo "background: #8fff80"; else if($answer469 != '') echo "background: #ff6969"?>' class='field469' type='text' name='q469' value='<?php if(isset($_POST['q469'])) echo $_POST['q469']; ?>'><input maxlength='1' style='<?php $answer470 = $_POST['q470']; if ($answer470 == 'a' || $answer470 == 'A') echo "background: #8fff80"; else if($answer470 != '') echo "background: #ff6969"?>' class='field470' type='text' name='q470' value='<?php if(isset($_POST['q470'])) echo $_POST['q470']; ?>'><input maxlength='1' style='<?php $answer471 = $_POST['q471']; if ($answer471 == 'l' || $answer471 == 'L') echo "background: #8fff80"; else if($answer471 != '') echo "background: #ff6969"?>' class='field471' type='text' name='q471' value='<?php if(isset($_POST['q471'])) echo $_POST['q471']; ?>'><input maxlength='1' style='<?php $answer472 = $_POST['q472']; if ($answer472 == 'e' || $answer472 == 'E') echo "background: #8fff80"; else if($answer472 != '') echo "background: #ff6969"?>' class='field472' type='text' name='q472' value='<?php if(isset($_POST['q472'])) echo $_POST['q472']; ?>'><input maxlength='1' style='<?php $answer473 = $_POST['q473']; if ($answer473 == 'r' || $answer473 == 'R') echo "background: #8fff80"; else if($answer473 != '') echo "background: #ff6969"?>' class='field473' type='text' name='q473' value='<?php if(isset($_POST['q473'])) echo $_POST['q473']; ?>'><input maxlength='1' style='<?php $answer477 = $_POST['q477']; if ($answer477 == 'i' || $answer477 == 'I') echo "background: #8fff80"; else if($answer477 != '') echo "background: #ff6969"?>' class='field477' type='text' name='q477' value='<?php if(isset($_POST['q477'])) echo $_POST['q477']; ?>'><input maxlength='1' style='<?php $answer488 = $_POST['q488']; if ($answer488 == 's' || $answer488 == 'S') echo "background: #8fff80"; else if($answer488 != '') echo "background: #ff6969"?>' class='field488' type='text' name='q488' value='<?php if(isset($_POST['q488'])) echo $_POST['q488']; ?>'><input maxlength='1' style='<?php $answer493 = $_POST['q493']; if ($answer493 == 'o' || $answer493 == 'O') echo "background: #8fff80"; else if($answer493 != '') echo "background: #ff6969"?>' class='field493' type='text' name='q493' value='<?php if(isset($_POST['q493'])) echo $_POST['q493']; ?>'><input maxlength='1' style='<?php $answer497 = $_POST['q497']; if ($answer497 == 'o' || $answer497 == 'O') echo "background: #8fff80"; else if($answer497 != '') echo "background: #ff6969"?>' class='field497' type='text' name='q497' value='<?php if(isset($_POST['q497'])) echo $_POST['q497']; ?>'><input maxlength='1' style='<?php $answer503 = $_POST['q503']; if ($answer503 == 'n' || $answer503 == 'N') echo "background: #8fff80"; else if($answer503 != '') echo "background: #ff6969"?>' class='field503' type='text' name='q503' value='<?php if(isset($_POST['q503'])) echo $_POST['q503']; ?>'><input maxlength='1' style='<?php $answer510 = $_POST['q510']; if ($answer510 == 'b' || $answer510 == 'B') echo "background: #8fff80"; else if($answer510 != '') echo "background: #ff6969"?>' class='field510' type='text' name='q510' value='<?php if(isset($_POST['q510'])) echo $_POST['q510']; ?>'><input maxlength='1' style='<?php $answer521 = $_POST['q521']; if ($answer521 == 'o' || $answer521 == 'O') echo "background: #8fff80"; else if($answer521 != '') echo "background: #ff6969"?>' class='field521' type='text' name='q521' value='<?php if(isset($_POST['q521'])) echo $_POST['q521']; ?>'><input maxlength='1' style='<?php $answer526 = $_POST['q526']; if ($answer526 == 'r' || $answer526 == 'R') echo "background: #8fff80"; else if($answer526 != '') echo "background: #ff6969"?>' class='field526' type='text' name='q526' value='<?php if(isset($_POST['q526'])) echo $_POST['q526']; ?>'><input maxlength='1' style='<?php $answer530 = $_POST['q530']; if ($answer530 == 's' || $answer530 == 'S') echo "background: #8fff80"; else if($answer530 != '') echo "background: #ff6969"?>' class='field530' type='text' name='q530' value='<?php if(isset($_POST['q530'])) echo $_POST['q530']; ?>'><input maxlength='1' style='<?php $answer536 = $_POST['q536']; if ($answer536 == 'd' || $answer536 == 'D') echo "background: #8fff80"; else if($answer536 != '') echo "background: #ff6969"?>' class='field536' type='text' name='q536' value='<?php if(isset($_POST['q536'])) echo $_POST['q536']; ?>'><input maxlength='1' style='<?php $answer543 = $_POST['q543']; if ($answer543 == 'e' || $answer543 == 'E') echo "background: #8fff80"; else if($answer543 != '') echo "background: #ff6969"?>' class='field543' type='text' name='q543' value='<?php if(isset($_POST['q543'])) echo $_POST['q543']; ?>'><a class='num24'>24</a><input maxlength='1' style='<?php $answer544 = $_POST['q544']; if ($answer544 == 'v' || $answer544 == 'V') echo "background: #8fff80"; else if($answer544 != '') echo "background: #ff6969"?>' class='field544' type='text' name='q544' value='<?php if(isset($_POST['q544'])) echo $_POST['q544']; ?>'><input maxlength='1' style='<?php $answer545 = $_POST['q545']; if ($answer545 == 'i' || $answer545 == 'I') echo "background: #8fff80"; else if($answer545 != '') echo "background: #ff6969"?>' class='field545' type='text' name='q545' value='<?php if(isset($_POST['q545'])) echo $_POST['q545']; ?>'><input maxlength='1' style='<?php $answer546 = $_POST['q546']; if ($answer546 == 'c' || $answer546 == 'C') echo "background: #8fff80"; else if($answer546 != '') echo "background: #ff6969"?>' class='field546' type='text' name='q546' value='<?php if(isset($_POST['q546'])) echo $_POST['q546']; ?>'><input maxlength='1' style='<?php $answer547 = $_POST['q547']; if ($answer547 == 't' || $answer547 == 'T') echo "background: #8fff80"; else if($answer547 != '') echo "background: #ff6969"?>' class='field547' type='text' name='q547' value='<?php if(isset($_POST['q547'])) echo $_POST['q547']; ?>'><input maxlength='1' style='<?php $answer548 = $_POST['q548']; if ($answer548 == 'i' || $answer548 == 'I') echo "background: #8fff80"; else if($answer548 != '') echo "background: #ff6969"?>' class='field548' type='text' name='q548' value='<?php if(isset($_POST['q548'])) echo $_POST['q548']; ?>'><input maxlength='1' style='<?php $answer549 = $_POST['q549']; if ($answer549 == 'o' || $answer549 == 'O') echo "background: #8fff80"; else if($answer549 != '') echo "background: #ff6969"?>' class='field549' type='text' name='q549' value='<?php if(isset($_POST['q549'])) echo $_POST['q549']; ?>'><input maxlength='1' style='<?php $answer550 = $_POST['q550']; if ($answer550 == 'n' || $answer550 == 'N') echo "background: #8fff80"; else if($answer550 != '') echo "background: #ff6969"?>' class='field550' type='text' name='q550' value='<?php if(isset($_POST['q550'])) echo $_POST['q550']; ?>'><input maxlength='1' style='<?php $answer554 = $_POST['q554']; if ($answer554 == 'n' || $answer554 == 'N') echo "background: #8fff80"; else if($answer554 != '') echo "background: #ff6969"?>' class='field554' type='text' name='q554' value='<?php if(isset($_POST['q554'])) echo $_POST['q554']; ?>'><input maxlength='1' style='<?php $answer559 = $_POST['q559']; if ($answer559 == 'g' || $answer559 == 'G') echo "background: #8fff80"; else if($answer559 != '') echo "background: #ff6969"?>' class='field559' type='text' name='q559' value='<?php if(isset($_POST['q559'])) echo $_POST['q559']; ?>'><input maxlength='1' style='<?php $answer563 = $_POST['q563']; if ($answer563 == 'e' || $answer563 == 'E') echo "background: #8fff80"; else if($answer563 != '') echo "background: #ff6969"?>' class='field563' type='text' name='q563' value='<?php if(isset($_POST['q563'])) echo $_POST['q563']; ?>'><input maxlength='1' style='<?php $answer568 = $_POST['q568']; if ($answer568 == 'h' || $answer568 == 'H') echo "background: #8fff80"; else if($answer568 != '') echo "background: #ff6969"?>' class='field568' type='text' name='q568' value='<?php if(isset($_POST['q568'])) echo $_POST['q568']; ?>'><a class='num25'>25</a><input maxlength='1' style='<?php $answer569 = $_POST['q569']; if ($answer569 == 'a' || $answer569 == 'A') echo "background: #8fff80"; else if($answer569 != '') echo "background: #ff6969"?>' class='field569' type='text' name='q569' value='<?php if(isset($_POST['q569'])) echo $_POST['q569']; ?>'><input maxlength='1' style='<?php $answer570 = $_POST['q570']; if ($answer570 == 'c' || $answer570 == 'C') echo "background: #8fff80"; else if($answer570 != '') echo "background: #ff6969"?>' class='field570' type='text' name='q570' value='<?php if(isset($_POST['q570'])) echo $_POST['q570']; ?>'><input maxlength='1' style='<?php $answer571 = $_POST['q571']; if ($answer571 == 'k' || $answer571 == 'K') echo "background: #8fff80"; else if($answer571 != '') echo "background: #ff6969"?>' class='field571' type='text' name='q571' value='<?php if(isset($_POST['q571'])) echo $_POST['q571']; ?>'><input maxlength='1' style='<?php $answer572 = $_POST['q572']; if ($answer572 == 'i' || $answer572 == 'I') echo "background: #8fff80"; else if($answer572 != '') echo "background: #ff6969"?>' class='field572' type='text' name='q572' value='<?php if(isset($_POST['q572'])) echo $_POST['q572']; ?>'><input maxlength='1' style='<?php $answer573 = $_POST['q573']; if ($answer573 == 'n' || $answer573 == 'N') echo "background: #8fff80"; else if($answer573 != '') echo "background: #ff6969"?>' class='field573' type='text' name='q573' value='<?php if(isset($_POST['q573'])) echo $_POST['q573']; ?>'><input maxlength='1' style='<?php $answer574 = $_POST['q574']; if ($answer574 == 'g' || $answer574 == 'G') echo "background: #8fff80"; else if($answer574 != '') echo "background: #ff6969"?>' class='field574' type='text' name='q574' value='<?php if(isset($_POST['q574'])) echo $_POST['q574']; ?>'><input maxlength='1' style='<?php $answer592 = $_POST['q592']; if ($answer592 == 'e' || $answer592 == 'E') echo "background: #8fff80"; else if($answer592 != '') echo "background: #ff6969"?>' class='field592' type='text' name='q592' value='<?php if(isset($_POST['q592'])) echo $_POST['q592']; ?>'><input maxlength='1' style='<?php $answer596 = $_POST['q596']; if ($answer596 == 'c' || $answer596 == 'C') echo "background: #8fff80"; else if($answer596 != '') echo "background: #ff6969"?>' class='field596' type='text' name='q596' value='<?php if(isset($_POST['q596'])) echo $_POST['q596']; ?>'><input maxlength='1' style='<?php $answer602 = $_POST['q602']; if ($answer602 == 'l' || $answer602 == 'L') echo "background: #8fff80"; else if($answer602 != '') echo "background: #ff6969"?>' class='field602' type='text' name='q602' value='<?php if(isset($_POST['q602'])) echo $_POST['q602']; ?>'><input maxlength='1' style='<?php $answer625 = $_POST['q625']; if ($answer625 == 'r' || $answer625 == 'R') echo "background: #8fff80"; else if($answer625 != '') echo "background: #ff6969"?>' class='field625' type='text' name='q625' value='<?php if(isset($_POST['q625'])) echo $_POST['q625']; ?>'><input maxlength='1' style='<?php $answer629 = $_POST['q629']; if ($answer629 == 'u' || $answer629 == 'U') echo "background: #8fff80"; else if($answer629 != '') echo "background: #ff6969"?>' class='field629' type='text' name='q629' value='<?php if(isset($_POST['q629'])) echo $_POST['q629']; ?>'><input maxlength='1' style='<?php $answer635 = $_POST['q635']; if ($answer635 == 'i' || $answer635 == 'I') echo "background: #8fff80"; else if($answer635 != '') echo "background: #ff6969"?>' class='field635' type='text' name='q635' value='<?php if(isset($_POST['q635'])) echo $_POST['q635']; ?>'><input maxlength='1' style='<?php $answer658 = $_POST['q658']; if ($answer658 == 'y' || $answer658 == 'Y') echo "background: #8fff80"; else if($answer658 != '') echo "background: #ff6969"?>' class='field658' type='text' name='q658' value='<?php if(isset($_POST['q658'])) echo $_POST['q658']; ?>'><input maxlength='1' style='<?php $answer662 = $_POST['q662']; if ($answer662 == 't' || $answer662 == 'T') echo "background: #8fff80"; else if($answer662 != '') echo "background: #ff6969"?>' class='field662' type='text' name='q662' value='<?php if(isset($_POST['q662'])) echo $_POST['q662']; ?>'><input maxlength='1' style='<?php $answer668 = $_POST['q668']; if ($answer668 == 's' || $answer668 == 'S') echo "background: #8fff80"; else if($answer668 != '') echo "background: #ff6969"?>' class='field668' type='text' name='q668' value='<?php if(isset($_POST['q668'])) echo $_POST['q668']; ?>'><input maxlength='1' style='<?php $answer695 = $_POST['q695']; if ($answer695 == 'o' || $answer695 == 'O') echo "background: #8fff80"; else if($answer695 != '') echo "background: #ff6969"?>' class='field695' type='text' name='q695' value='<?php if(isset($_POST['q695'])) echo $_POST['q695']; ?>'><input maxlength='1' style='<?php $answer701 = $_POST['q701']; if ($answer701 == 'm' || $answer701 == 'M') echo "background: #8fff80"; else if($answer701 != '') echo "background: #ff6969"?>' class='field701' type='text' name='q701' value='<?php if(isset($_POST['q701'])) echo $_POST['q701']; ?>'><input maxlength='1' style='<?php $answer728 = $_POST['q728']; if ($answer728 == 'r' || $answer728 == 'R') echo "background: #8fff80"; else if($answer728 != '') echo "background: #ff6969"?>' class='field728' type='text' name='q728' value='<?php if(isset($_POST['q728'])) echo $_POST['q728']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer9 = $_POST['q9'];
if ($answer9 == 'm' || $answer9 == 'M') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 't' || $answer39 == 'T') { $totalCorrect++; }
$answer40 = $_POST['q40'];
if ($answer40 == 'r' || $answer40 == 'R') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'i' || $answer41 == 'I') { $totalCorrect++; }
$answer42 = $_POST['q42'];
if ($answer42 == 'a' || $answer42 == 'A') { $totalCorrect++; }
$answer43 = $_POST['q43'];
if ($answer43 == 'l' || $answer43 == 'L') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == 'a' || $answer73 == 'A') { $totalCorrect++; }
$answer75 = $_POST['q75'];
if ($answer75 == 'n' || $answer75 == 'N') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'k' || $answer79 == 'K') { $totalCorrect++; }
$answer82 = $_POST['q82'];
if ($answer82 == 'c' || $answer82 == 'C') { $totalCorrect++; }
$answer106 = $_POST['q106'];
if ($answer106 == 'p' || $answer106 == 'P') { $totalCorrect++; }
$answer108 = $_POST['q108'];
if ($answer108 == 's' || $answer108 == 'S') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == 'u' || $answer109 == 'U') { $totalCorrect++; }
$answer110 = $_POST['q110'];
if ($answer110 == 's' || $answer110 == 'S') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == 'p' || $answer111 == 'P') { $totalCorrect++; }
$answer112 = $_POST['q112'];
if ($answer112 == 'i' || $answer112 == 'I') { $totalCorrect++; }
$answer113 = $_POST['q113'];
if ($answer113 == 'c' || $answer113 == 'C') { $totalCorrect++; }
$answer114 = $_POST['q114'];
if ($answer114 == 'i' || $answer114 == 'I') { $totalCorrect++; }
$answer115 = $_POST['q115'];
if ($answer115 == 'o' || $answer115 == 'O') { $totalCorrect++; }
$answer116 = $_POST['q116'];
if ($answer116 == 'n' || $answer116 == 'N') { $totalCorrect++; }
$answer135 = $_POST['q135'];
if ($answer135 == 'j' || $answer135 == 'J') { $totalCorrect++; }
$answer136 = $_POST['q136'];
if ($answer136 == 'u' || $answer136 == 'U') { $totalCorrect++; }
$answer137 = $_POST['q137'];
if ($answer137 == 'd' || $answer137 == 'D') { $totalCorrect++; }
$answer138 = $_POST['q138'];
if ($answer138 == 'g' || $answer138 == 'G') { $totalCorrect++; }
$answer139 = $_POST['q139'];
if ($answer139 == 'e' || $answer139 == 'E') { $totalCorrect++; }
$answer141 = $_POST['q141'];
if ($answer141 == 'l' || $answer141 == 'L') { $totalCorrect++; }
$answer145 = $_POST['q145'];
if ($answer145 == 'd' || $answer145 == 'D') { $totalCorrect++; }
$answer148 = $_POST['q148'];
if ($answer148 == 'u' || $answer148 == 'U') { $totalCorrect++; }
$answer174 = $_POST['q174'];
if ($answer174 == 'a' || $answer174 == 'A') { $totalCorrect++; }
$answer176 = $_POST['q176'];
if ($answer176 == 'w' || $answer176 == 'W') { $totalCorrect++; }
$answer178 = $_POST['q178'];
if ($answer178 == 'n' || $answer178 == 'N') { $totalCorrect++; }
$answer180 = $_POST['q180'];
if ($answer180 == 'a' || $answer180 == 'A') { $totalCorrect++; }
$answer181 = $_POST['q181'];
if ($answer181 == 'r' || $answer181 == 'R') { $totalCorrect++; }
$answer182 = $_POST['q182'];
if ($answer182 == 's' || $answer182 == 'S') { $totalCorrect++; }
$answer183 = $_POST['q183'];
if ($answer183 == 'o' || $answer183 == 'O') { $totalCorrect++; }
$answer184 = $_POST['q184'];
if ($answer184 == 'n' || $answer184 == 'N') { $totalCorrect++; }
$answer202 = $_POST['q202'];
if ($answer202 == 's' || $answer202 == 'S') { $totalCorrect++; }
$answer206 = $_POST['q206'];
if ($answer206 == 'j' || $answer206 == 'J') { $totalCorrect++; }
$answer207 = $_POST['q207'];
if ($answer207 == 'u' || $answer207 == 'U') { $totalCorrect++; }
$answer208 = $_POST['q208'];
if ($answer208 == 'r' || $answer208 == 'R') { $totalCorrect++; }
$answer209 = $_POST['q209'];
if ($answer209 == 'i' || $answer209 == 'I') { $totalCorrect++; }
$answer211 = $_POST['q211'];
if ($answer211 == 'a' || $answer211 == 'A') { $totalCorrect++; }
$answer214 = $_POST['q214'];
if ($answer214 == 't' || $answer214 == 'T') { $totalCorrect++; }
$answer235 = $_POST['q235'];
if ($answer235 == 'm' || $answer235 == 'M') { $totalCorrect++; }
$answer240 = $_POST['q240'];
if ($answer240 == 'g' || $answer240 == 'G') { $totalCorrect++; }
$answer242 = $_POST['q242'];
if ($answer242 == 't' || $answer242 == 'T') { $totalCorrect++; }
$answer244 = $_POST['q244'];
if ($answer244 == 'p' || $answer244 == 'P') { $totalCorrect++; }
$answer248 = $_POST['q248'];
if ($answer248 == 'r' || $answer248 == 'R') { $totalCorrect++; }
$answer268 = $_POST['q268'];
if ($answer268 == 'u' || $answer268 == 'U') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == 'h' || $answer273 == 'H') { $totalCorrect++; }
$answer275 = $_POST['q275'];
if ($answer275 == 'n' || $answer275 == 'N') { $totalCorrect++; }
$answer277 = $_POST['q277'];
if ($answer277 == 'p' || $answer277 == 'P') { $totalCorrect++; }
$answer278 = $_POST['q278'];
if ($answer278 == 'r' || $answer278 == 'R') { $totalCorrect++; }
$answer279 = $_POST['q279'];
if ($answer279 == 'i' || $answer279 == 'I') { $totalCorrect++; }
$answer280 = $_POST['q280'];
if ($answer280 == 's' || $answer280 == 'S') { $totalCorrect++; }
$answer281 = $_POST['q281'];
if ($answer281 == 'o' || $answer281 == 'O') { $totalCorrect++; }
$answer282 = $_POST['q282'];
if ($answer282 == 'n' || $answer282 == 'N') { $totalCorrect++; }
$answer301 = $_POST['q301'];
if ($answer301 == 'g' || $answer301 == 'G') { $totalCorrect++; }
$answer306 = $_POST['q306'];
if ($answer306 == 't' || $answer306 == 'T') { $totalCorrect++; }
$answer308 = $_POST['q308'];
if ($answer308 == 'e' || $answer308 == 'E') { $totalCorrect++; }
$answer310 = $_POST['q310'];
if ($answer310 == 'i' || $answer310 == 'I') { $totalCorrect++; }
$answer314 = $_POST['q314'];
if ($answer314 == 'b' || $answer314 == 'B') { $totalCorrect++; }
$answer334 = $_POST['q334'];
if ($answer334 == 'g' || $answer334 == 'G') { $totalCorrect++; }
$answer339 = $_POST['q339'];
if ($answer339 == 'e' || $answer339 == 'E') { $totalCorrect++; }
$answer341 = $_POST['q341'];
if ($answer341 == 's' || $answer341 == 'S') { $totalCorrect++; }
$answer343 = $_POST['q343'];
if ($answer343 == 'n' || $answer343 == 'N') { $totalCorrect++; }
$answer347 = $_POST['q347'];
if ($answer347 == 'b' || $answer347 == 'B') { $totalCorrect++; }
$answer348 = $_POST['q348'];
if ($answer348 == 'a' || $answer348 == 'A') { $totalCorrect++; }
$answer349 = $_POST['q349'];
if ($answer349 == 'n' || $answer349 == 'N') { $totalCorrect++; }
$answer350 = $_POST['q350'];
if ($answer350 == 'i' || $answer350 == 'I') { $totalCorrect++; }
$answer351 = $_POST['q351'];
if ($answer351 == 's' || $answer351 == 'S') { $totalCorrect++; }
$answer352 = $_POST['q352'];
if ($answer352 == 'h' || $answer352 == 'H') { $totalCorrect++; }
$answer353 = $_POST['q353'];
if ($answer353 == 'm' || $answer353 == 'M') { $totalCorrect++; }
$answer354 = $_POST['q354'];
if ($answer354 == 'e' || $answer354 == 'E') { $totalCorrect++; }
$answer355 = $_POST['q355'];
if ($answer355 == 'n' || $answer355 == 'N') { $totalCorrect++; }
$answer356 = $_POST['q356'];
if ($answer356 == 't' || $answer356 == 'T') { $totalCorrect++; }
$answer367 = $_POST['q367'];
if ($answer367 == 'l' || $answer367 == 'L') { $totalCorrect++; }
$answer368 = $_POST['q368'];
if ($answer368 == 'a' || $answer368 == 'A') { $totalCorrect++; }
$answer369 = $_POST['q369'];
if ($answer369 == 'w' || $answer369 == 'W') { $totalCorrect++; }
$answer370 = $_POST['q370'];
if ($answer370 == 'y' || $answer370 == 'Y') { $totalCorrect++; }
$answer371 = $_POST['q371'];
if ($answer371 == 'e' || $answer371 == 'E') { $totalCorrect++; }
$answer372 = $_POST['q372'];
if ($answer372 == 'r' || $answer372 == 'R') { $totalCorrect++; }
$answer374 = $_POST['q374'];
if ($answer374 == 's' || $answer374 == 'S') { $totalCorrect++; }
$answer376 = $_POST['q376'];
if ($answer376 == 'g' || $answer376 == 'G') { $totalCorrect++; }
$answer380 = $_POST['q380'];
if ($answer380 == 'e' || $answer380 == 'E') { $totalCorrect++; }
$answer389 = $_POST['q389'];
if ($answer389 == 'r' || $answer389 == 'R') { $totalCorrect++; }
$answer400 = $_POST['q400'];
if ($answer400 == 'i' || $answer400 == 'I') { $totalCorrect++; }
$answer411 = $_POST['q411'];
if ($answer411 == 'b' || $answer411 == 'B') { $totalCorrect++; }
$answer412 = $_POST['q412'];
if ($answer412 == 'u' || $answer412 == 'U') { $totalCorrect++; }
$answer413 = $_POST['q413'];
if ($answer413 == 'r' || $answer413 == 'R') { $totalCorrect++; }
$answer414 = $_POST['q414'];
if ($answer414 == 'g' || $answer414 == 'G') { $totalCorrect++; }
$answer415 = $_POST['q415'];
if ($answer415 == 'l' || $answer415 == 'L') { $totalCorrect++; }
$answer416 = $_POST['q416'];
if ($answer416 == 'a' || $answer416 == 'A') { $totalCorrect++; }
$answer417 = $_POST['q417'];
if ($answer417 == 'r' || $answer417 == 'R') { $totalCorrect++; }
$answer418 = $_POST['q418'];
if ($answer418 == 'y' || $answer418 == 'Y') { $totalCorrect++; }
$answer422 = $_POST['q422'];
if ($answer422 == 'e' || $answer422 == 'E') { $totalCorrect++; }
$answer431 = $_POST['q431'];
if ($answer431 == 'p' || $answer431 == 'P') { $totalCorrect++; }
$answer433 = $_POST['q433'];
if ($answer433 == 'n' || $answer433 == 'N') { $totalCorrect++; }
$answer437 = $_POST['q437'];
if ($answer437 == 'v' || $answer437 == 'V') { $totalCorrect++; }
$answer444 = $_POST['q444'];
if ($answer444 == 'r' || $answer444 == 'R') { $totalCorrect++; }
$answer446 = $_POST['q446'];
if ($answer446 == 'y' || $answer446 == 'Y') { $totalCorrect++; }
$answer454 = $_POST['q454'];
if ($answer454 == 'h' || $answer454 == 'H') { $totalCorrect++; }
$answer455 = $_POST['q455'];
if ($answer455 == 'a' || $answer455 == 'A') { $totalCorrect++; }
$answer456 = $_POST['q456'];
if ($answer456 == 'n' || $answer456 == 'N') { $totalCorrect++; }
$answer457 = $_POST['q457'];
if ($answer457 == 'd' || $answer457 == 'D') { $totalCorrect++; }
$answer458 = $_POST['q458'];
if ($answer458 == 'c' || $answer458 == 'C') { $totalCorrect++; }
$answer459 = $_POST['q459'];
if ($answer459 == 'u' || $answer459 == 'U') { $totalCorrect++; }
$answer460 = $_POST['q460'];
if ($answer460 == 'f' || $answer460 == 'F') { $totalCorrect++; }
$answer461 = $_POST['q461'];
if ($answer461 == 'f' || $answer461 == 'F') { $totalCorrect++; }
$answer462 = $_POST['q462'];
if ($answer462 == 's' || $answer462 == 'S') { $totalCorrect++; }
$answer463 = $_POST['q463'];
if ($answer463 == 'd' || $answer463 == 'D') { $totalCorrect++; }
$answer464 = $_POST['q464'];
if ($answer464 == 'r' || $answer464 == 'R') { $totalCorrect++; }
$answer465 = $_POST['q465'];
if ($answer465 == 'u' || $answer465 == 'U') { $totalCorrect++; }
$answer466 = $_POST['q466'];
if ($answer466 == 'g' || $answer466 == 'G') { $totalCorrect++; }
$answer467 = $_POST['q467'];
if ($answer467 == ' ' || $answer467 == ' ') { $totalCorrect++; }
$answer468 = $_POST['q468'];
if ($answer468 == 'd' || $answer468 == 'D') { $totalCorrect++; }
$answer469 = $_POST['q469'];
if ($answer469 == 'e' || $answer469 == 'E') { $totalCorrect++; }
$answer470 = $_POST['q470'];
if ($answer470 == 'a' || $answer470 == 'A') { $totalCorrect++; }
$answer471 = $_POST['q471'];
if ($answer471 == 'l' || $answer471 == 'L') { $totalCorrect++; }
$answer472 = $_POST['q472'];
if ($answer472 == 'e' || $answer472 == 'E') { $totalCorrect++; }
$answer473 = $_POST['q473'];
if ($answer473 == 'r' || $answer473 == 'R') { $totalCorrect++; }
$answer477 = $_POST['q477'];
if ($answer477 == 'i' || $answer477 == 'I') { $totalCorrect++; }
$answer488 = $_POST['q488'];
if ($answer488 == 's' || $answer488 == 'S') { $totalCorrect++; }
$answer493 = $_POST['q493'];
if ($answer493 == 'o' || $answer493 == 'O') { $totalCorrect++; }
$answer497 = $_POST['q497'];
if ($answer497 == 'o' || $answer497 == 'O') { $totalCorrect++; }
$answer503 = $_POST['q503'];
if ($answer503 == 'n' || $answer503 == 'N') { $totalCorrect++; }
$answer510 = $_POST['q510'];
if ($answer510 == 'b' || $answer510 == 'B') { $totalCorrect++; }
$answer521 = $_POST['q521'];
if ($answer521 == 'o' || $answer521 == 'O') { $totalCorrect++; }
$answer526 = $_POST['q526'];
if ($answer526 == 'r' || $answer526 == 'R') { $totalCorrect++; }
$answer530 = $_POST['q530'];
if ($answer530 == 's' || $answer530 == 'S') { $totalCorrect++; }
$answer536 = $_POST['q536'];
if ($answer536 == 'd' || $answer536 == 'D') { $totalCorrect++; }
$answer543 = $_POST['q543'];
if ($answer543 == 'e' || $answer543 == 'E') { $totalCorrect++; }
$answer544 = $_POST['q544'];
if ($answer544 == 'v' || $answer544 == 'V') { $totalCorrect++; }
$answer545 = $_POST['q545'];
if ($answer545 == 'i' || $answer545 == 'I') { $totalCorrect++; }
$answer546 = $_POST['q546'];
if ($answer546 == 'c' || $answer546 == 'C') { $totalCorrect++; }
$answer547 = $_POST['q547'];
if ($answer547 == 't' || $answer547 == 'T') { $totalCorrect++; }
$answer548 = $_POST['q548'];
if ($answer548 == 'i' || $answer548 == 'I') { $totalCorrect++; }
$answer549 = $_POST['q549'];
if ($answer549 == 'o' || $answer549 == 'O') { $totalCorrect++; }
$answer550 = $_POST['q550'];
if ($answer550 == 'n' || $answer550 == 'N') { $totalCorrect++; }
$answer554 = $_POST['q554'];
if ($answer554 == 'n' || $answer554 == 'N') { $totalCorrect++; }
$answer559 = $_POST['q559'];
if ($answer559 == 'g' || $answer559 == 'G') { $totalCorrect++; }
$answer563 = $_POST['q563'];
if ($answer563 == 'e' || $answer563 == 'E') { $totalCorrect++; }
$answer568 = $_POST['q568'];
if ($answer568 == 'h' || $answer568 == 'H') { $totalCorrect++; }
$answer569 = $_POST['q569'];
if ($answer569 == 'a' || $answer569 == 'A') { $totalCorrect++; }
$answer570 = $_POST['q570'];
if ($answer570 == 'c' || $answer570 == 'C') { $totalCorrect++; }
$answer571 = $_POST['q571'];
if ($answer571 == 'k' || $answer571 == 'K') { $totalCorrect++; }
$answer572 = $_POST['q572'];
if ($answer572 == 'i' || $answer572 == 'I') { $totalCorrect++; }
$answer573 = $_POST['q573'];
if ($answer573 == 'n' || $answer573 == 'N') { $totalCorrect++; }
$answer574 = $_POST['q574'];
if ($answer574 == 'g' || $answer574 == 'G') { $totalCorrect++; }
$answer592 = $_POST['q592'];
if ($answer592 == 'e' || $answer592 == 'E') { $totalCorrect++; }
$answer596 = $_POST['q596'];
if ($answer596 == 'c' || $answer596 == 'C') { $totalCorrect++; }
$answer602 = $_POST['q602'];
if ($answer602 == 'l' || $answer602 == 'L') { $totalCorrect++; }
$answer625 = $_POST['q625'];
if ($answer625 == 'r' || $answer625 == 'R') { $totalCorrect++; }
$answer629 = $_POST['q629'];
if ($answer629 == 'u' || $answer629 == 'U') { $totalCorrect++; }
$answer635 = $_POST['q635'];
if ($answer635 == 'i' || $answer635 == 'I') { $totalCorrect++; }
$answer658 = $_POST['q658'];
if ($answer658 == 'y' || $answer658 == 'Y') { $totalCorrect++; }
$answer662 = $_POST['q662'];
if ($answer662 == 't' || $answer662 == 'T') { $totalCorrect++; }
$answer668 = $_POST['q668'];
if ($answer668 == 's' || $answer668 == 'S') { $totalCorrect++; }
$answer695 = $_POST['q695'];
if ($answer695 == 'o' || $answer695 == 'O') { $totalCorrect++; }
$answer701 = $_POST['q701'];
if ($answer701 == 'm' || $answer701 == 'M') { $totalCorrect++; }
$answer728 = $_POST['q728'];
if ($answer728 == 'r' || $answer728 == 'R') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. Action if you accidentally killed a person</div>";
echo "<div class='question'>2. court proceedings</div>";
echo "<div class='question'>3. sexual harassment</div>";
echo "<div class='question'>4. stealing people for ransom</div>";
echo "<div class='question'>5. The place where you are judged.</div>";
echo "<div class='question'>6. an assumption about who might be the culprit</div>";
echo "<div class='question'>7. the one who makes a decision on the case in court </div>";
echo "<div class='question'>8. the man who saw the crime</div>";
echo "<div class='question'>9. who did this causing your house to burn down</div>";
echo "<div class='question'>10. illegal movement of goods across the state border</div>";
echo "<div class='question'>11. people who do not have a legal education. They decide in court whether the accused is guilty or not.</div>";
echo "<div class='question'>12. an attempt to take other people's things by force</div>";
echo "<div class='question'>13. place of detention of criminals</div>";
echo "<div class='question'>14. forced departure from the country</div>";
echo "<div class='question'>15. a crime against one's state</div>";
echo "<div class='question'>16. the one who defends the rights of the accused in court</div>";
echo "<div class='question'>17. breaking and entering</div>";
echo "<div class='question'>18. you give it to a policeman if he stopped your car</div>";
echo "<div class='question'>19. in court, he presents arguments against the accused</div>";
echo "<div class='question'>20. deliberate damage of art and culture objects</div>";
echo "<div class='question'>21. this is put on the criminal when arrested</div>";
echo "<div class='question'>22. fake copy of money or documents</div>";
echo "<div class='question'>23. The man who sells drugs.</div>";
echo "<div class='question'>24. deprivation of property</div>";
echo "<div class='question'>25. attacks on your computer</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 161 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>