<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>�����</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer5 = $_POST['q5']; if ($answer5 == '�' || $answer5 == '�') echo "background: #8fff80"; else if($answer5 != '') echo "background: #ff6969"?>' class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer6 = $_POST['q6']; if ($answer6 == '�' || $answer6 == '�') echo "background: #8fff80"; else if($answer6 != '') echo "background: #ff6969"?>' class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input maxlength='1' style='<?php $answer7 = $_POST['q7']; if ($answer7 == '�' || $answer7 == '�') echo "background: #8fff80"; else if($answer7 != '') echo "background: #ff6969"?>' class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><input maxlength='1' style='<?php $answer8 = $_POST['q8']; if ($answer8 == '�' || $answer8 == '�') echo "background: #8fff80"; else if($answer8 != '') echo "background: #ff6969"?>' class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input maxlength='1' style='<?php $answer9 = $_POST['q9']; if ($answer9 == '�' || $answer9 == '�') echo "background: #8fff80"; else if($answer9 != '') echo "background: #ff6969"?>' class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer28 = $_POST['q28']; if ($answer28 == '�' || $answer28 == '�') echo "background: #8fff80"; else if($answer28 != '') echo "background: #ff6969"?>' class='field28' type='text' name='q28' value='<?php if(isset($_POST['q28'])) echo $_POST['q28']; ?>'><input maxlength='1' style='<?php $answer32 = $_POST['q32']; if ($answer32 == '�' || $answer32 == '�') echo "background: #8fff80"; else if($answer32 != '') echo "background: #ff6969"?>' class='field32' type='text' name='q32' value='<?php if(isset($_POST['q32'])) echo $_POST['q32']; ?>'><a class='num3'>3</a><a class='num4'>4</a><input maxlength='1' style='<?php $answer33 = $_POST['q33']; if ($answer33 == '�' || $answer33 == '�') echo "background: #8fff80"; else if($answer33 != '') echo "background: #ff6969"?>' class='field33' type='text' name='q33' value='<?php if(isset($_POST['q33'])) echo $_POST['q33']; ?>'><input maxlength='1' style='<?php $answer34 = $_POST['q34']; if ($answer34 == '�' || $answer34 == '�') echo "background: #8fff80"; else if($answer34 != '') echo "background: #ff6969"?>' class='field34' type='text' name='q34' value='<?php if(isset($_POST['q34'])) echo $_POST['q34']; ?>'><input maxlength='1' style='<?php $answer35 = $_POST['q35']; if ($answer35 == '�' || $answer35 == '�') echo "background: #8fff80"; else if($answer35 != '') echo "background: #ff6969"?>' class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input maxlength='1' style='<?php $answer36 = $_POST['q36']; if ($answer36 == '�' || $answer36 == '�') echo "background: #8fff80"; else if($answer36 != '') echo "background: #ff6969"?>' class='field36' type='text' name='q36' value='<?php if(isset($_POST['q36'])) echo $_POST['q36']; ?>'><input maxlength='1' style='<?php $answer37 = $_POST['q37']; if ($answer37 == '�' || $answer37 == '�') echo "background: #8fff80"; else if($answer37 != '') echo "background: #ff6969"?>' class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><input maxlength='1' style='<?php $answer38 = $_POST['q38']; if ($answer38 == '�' || $answer38 == '�') echo "background: #8fff80"; else if($answer38 != '') echo "background: #ff6969"?>' class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input maxlength='1' style='<?php $answer47 = $_POST['q47']; if ($answer47 == '�' || $answer47 == '�') echo "background: #8fff80"; else if($answer47 != '') echo "background: #ff6969"?>' class='field47' type='text' name='q47' value='<?php if(isset($_POST['q47'])) echo $_POST['q47']; ?>'><input maxlength='1' style='<?php $answer51 = $_POST['q51']; if ($answer51 == '�' || $answer51 == '�') echo "background: #8fff80"; else if($answer51 != '') echo "background: #ff6969"?>' class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input maxlength='1' style='<?php $answer65 = $_POST['q65']; if ($answer65 == '�' || $answer65 == '�') echo "background: #8fff80"; else if($answer65 != '') echo "background: #ff6969"?>' class='field65' type='text' name='q65' value='<?php if(isset($_POST['q65'])) echo $_POST['q65']; ?>'><a class='num5'>5</a><a class='num6'>6</a><input maxlength='1' style='<?php $answer66 = $_POST['q66']; if ($answer66 == '�' || $answer66 == '�') echo "background: #8fff80"; else if($answer66 != '') echo "background: #ff6969"?>' class='field66' type='text' name='q66' value='<?php if(isset($_POST['q66'])) echo $_POST['q66']; ?>'><input maxlength='1' style='<?php $answer67 = $_POST['q67']; if ($answer67 == '�' || $answer67 == '�') echo "background: #8fff80"; else if($answer67 != '') echo "background: #ff6969"?>' class='field67' type='text' name='q67' value='<?php if(isset($_POST['q67'])) echo $_POST['q67']; ?>'><input maxlength='1' style='<?php $answer68 = $_POST['q68']; if ($answer68 == '�' || $answer68 == '�') echo "background: #8fff80"; else if($answer68 != '') echo "background: #ff6969"?>' class='field68' type='text' name='q68' value='<?php if(isset($_POST['q68'])) echo $_POST['q68']; ?>'><input maxlength='1' style='<?php $answer69 = $_POST['q69']; if ($answer69 == '�' || $answer69 == '�') echo "background: #8fff80"; else if($answer69 != '') echo "background: #ff6969"?>' class='field69' type='text' name='q69' value='<?php if(isset($_POST['q69'])) echo $_POST['q69']; ?>'><input maxlength='1' style='<?php $answer70 = $_POST['q70']; if ($answer70 == '�' || $answer70 == '�') echo "background: #8fff80"; else if($answer70 != '') echo "background: #ff6969"?>' class='field70' type='text' name='q70' value='<?php if(isset($_POST['q70'])) echo $_POST['q70']; ?>'><input maxlength='1' style='<?php $answer71 = $_POST['q71']; if ($answer71 == '�' || $answer71 == '�') echo "background: #8fff80"; else if($answer71 != '') echo "background: #ff6969"?>' class='field71' type='text' name='q71' value='<?php if(isset($_POST['q71'])) echo $_POST['q71']; ?>'><input maxlength='1' style='<?php $answer72 = $_POST['q72']; if ($answer72 == '�' || $answer72 == '�') echo "background: #8fff80"; else if($answer72 != '') echo "background: #ff6969"?>' class='field72' type='text' name='q72' value='<?php if(isset($_POST['q72'])) echo $_POST['q72']; ?>'><input maxlength='1' style='<?php $answer73 = $_POST['q73']; if ($answer73 == '�' || $answer73 == '�') echo "background: #8fff80"; else if($answer73 != '') echo "background: #ff6969"?>' class='field73' type='text' name='q73' value='<?php if(isset($_POST['q73'])) echo $_POST['q73']; ?>'><input maxlength='1' style='<?php $answer84 = $_POST['q84']; if ($answer84 == '�' || $answer84 == '�') echo "background: #8fff80"; else if($answer84 != '') echo "background: #ff6969"?>' class='field84' type='text' name='q84' value='<?php if(isset($_POST['q84'])) echo $_POST['q84']; ?>'><input maxlength='1' style='<?php $answer89 = $_POST['q89']; if ($answer89 == '�' || $answer89 == '�') echo "background: #8fff80"; else if($answer89 != '') echo "background: #ff6969"?>' class='field89' type='text' name='q89' value='<?php if(isset($_POST['q89'])) echo $_POST['q89']; ?>'><input maxlength='1' style='<?php $answer103 = $_POST['q103']; if ($answer103 == '�' || $answer103 == '�') echo "background: #8fff80"; else if($answer103 != '') echo "background: #ff6969"?>' class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><input maxlength='1' style='<?php $answer106 = $_POST['q106']; if ($answer106 == '�' || $answer106 == '�') echo "background: #8fff80"; else if($answer106 != '') echo "background: #ff6969"?>' class='field106' type='text' name='q106' value='<?php if(isset($_POST['q106'])) echo $_POST['q106']; ?>'><a class='num7'>7</a><input maxlength='1' style='<?php $answer107 = $_POST['q107']; if ($answer107 == '�' || $answer107 == '�') echo "background: #8fff80"; else if($answer107 != '') echo "background: #ff6969"?>' class='field107' type='text' name='q107' value='<?php if(isset($_POST['q107'])) echo $_POST['q107']; ?>'><input maxlength='1' style='<?php $answer108 = $_POST['q108']; if ($answer108 == '�' || $answer108 == '�') echo "background: #8fff80"; else if($answer108 != '') echo "background: #ff6969"?>' class='field108' type='text' name='q108' value='<?php if(isset($_POST['q108'])) echo $_POST['q108']; ?>'><input maxlength='1' style='<?php $answer109 = $_POST['q109']; if ($answer109 == '�' || $answer109 == '�') echo "background: #8fff80"; else if($answer109 != '') echo "background: #ff6969"?>' class='field109' type='text' name='q109' value='<?php if(isset($_POST['q109'])) echo $_POST['q109']; ?>'><input maxlength='1' style='<?php $answer110 = $_POST['q110']; if ($answer110 == '�' || $answer110 == '�') echo "background: #8fff80"; else if($answer110 != '') echo "background: #ff6969"?>' class='field110' type='text' name='q110' value='<?php if(isset($_POST['q110'])) echo $_POST['q110']; ?>'><a class='num8'>8</a><input maxlength='1' style='<?php $answer111 = $_POST['q111']; if ($answer111 == '�' || $answer111 == '�') echo "background: #8fff80"; else if($answer111 != '') echo "background: #ff6969"?>' class='field111' type='text' name='q111' value='<?php if(isset($_POST['q111'])) echo $_POST['q111']; ?>'><input maxlength='1' style='<?php $answer112 = $_POST['q112']; if ($answer112 == '�' || $answer112 == '�') echo "background: #8fff80"; else if($answer112 != '') echo "background: #ff6969"?>' class='field112' type='text' name='q112' value='<?php if(isset($_POST['q112'])) echo $_POST['q112']; ?>'><input maxlength='1' style='<?php $answer122 = $_POST['q122']; if ($answer122 == '�' || $answer122 == '�') echo "background: #8fff80"; else if($answer122 != '') echo "background: #ff6969"?>' class='field122' type='text' name='q122' value='<?php if(isset($_POST['q122'])) echo $_POST['q122']; ?>'><input maxlength='1' style='<?php $answer127 = $_POST['q127']; if ($answer127 == '�' || $answer127 == '�') echo "background: #8fff80"; else if($answer127 != '') echo "background: #ff6969"?>' class='field127' type='text' name='q127' value='<?php if(isset($_POST['q127'])) echo $_POST['q127']; ?>'><input maxlength='1' style='<?php $answer129 = $_POST['q129']; if ($answer129 == '�' || $answer129 == '�') echo "background: #8fff80"; else if($answer129 != '') echo "background: #ff6969"?>' class='field129' type='text' name='q129' value='<?php if(isset($_POST['q129'])) echo $_POST['q129']; ?>'><input maxlength='1' style='<?php $answer138 = $_POST['q138']; if ($answer138 == '�' || $answer138 == '�') echo "background: #8fff80"; else if($answer138 != '') echo "background: #ff6969"?>' class='field138' type='text' name='q138' value='<?php if(isset($_POST['q138'])) echo $_POST['q138']; ?>'><a class='num9'>9</a><input maxlength='1' style='<?php $answer141 = $_POST['q141']; if ($answer141 == '�' || $answer141 == '�') echo "background: #8fff80"; else if($answer141 != '') echo "background: #ff6969"?>' class='field141' type='text' name='q141' value='<?php if(isset($_POST['q141'])) echo $_POST['q141']; ?>'><input maxlength='1' style='<?php $answer148 = $_POST['q148']; if ($answer148 == '�' || $answer148 == '�') echo "background: #8fff80"; else if($answer148 != '') echo "background: #ff6969"?>' class='field148' type='text' name='q148' value='<?php if(isset($_POST['q148'])) echo $_POST['q148']; ?>'><input maxlength='1' style='<?php $answer157 = $_POST['q157']; if ($answer157 == '�' || $answer157 == '�') echo "background: #8fff80"; else if($answer157 != '') echo "background: #ff6969"?>' class='field157' type='text' name='q157' value='<?php if(isset($_POST['q157'])) echo $_POST['q157']; ?>'><a class='num10'>10</a><input maxlength='1' style='<?php $answer158 = $_POST['q158']; if ($answer158 == '�' || $answer158 == '�') echo "background: #8fff80"; else if($answer158 != '') echo "background: #ff6969"?>' class='field158' type='text' name='q158' value='<?php if(isset($_POST['q158'])) echo $_POST['q158']; ?>'><input maxlength='1' style='<?php $answer159 = $_POST['q159']; if ($answer159 == '�' || $answer159 == '�') echo "background: #8fff80"; else if($answer159 != '') echo "background: #ff6969"?>' class='field159' type='text' name='q159' value='<?php if(isset($_POST['q159'])) echo $_POST['q159']; ?>'><input maxlength='1' style='<?php $answer160 = $_POST['q160']; if ($answer160 == '�' || $answer160 == '�') echo "background: #8fff80"; else if($answer160 != '') echo "background: #ff6969"?>' class='field160' type='text' name='q160' value='<?php if(isset($_POST['q160'])) echo $_POST['q160']; ?>'><input maxlength='1' style='<?php $answer161 = $_POST['q161']; if ($answer161 == '�' || $answer161 == '�') echo "background: #8fff80"; else if($answer161 != '') echo "background: #ff6969"?>' class='field161' type='text' name='q161' value='<?php if(isset($_POST['q161'])) echo $_POST['q161']; ?>'><input maxlength='1' style='<?php $answer162 = $_POST['q162']; if ($answer162 == '�' || $answer162 == '�') echo "background: #8fff80"; else if($answer162 != '') echo "background: #ff6969"?>' class='field162' type='text' name='q162' value='<?php if(isset($_POST['q162'])) echo $_POST['q162']; ?>'><input maxlength='1' style='<?php $answer163 = $_POST['q163']; if ($answer163 == '�' || $answer163 == '�') echo "background: #8fff80"; else if($answer163 != '') echo "background: #ff6969"?>' class='field163' type='text' name='q163' value='<?php if(isset($_POST['q163'])) echo $_POST['q163']; ?>'><a class='num11'>11</a><input maxlength='1' style='<?php $answer167 = $_POST['q167']; if ($answer167 == '�' || $answer167 == '�') echo "background: #8fff80"; else if($answer167 != '') echo "background: #ff6969"?>' class='field167' type='text' name='q167' value='<?php if(isset($_POST['q167'])) echo $_POST['q167']; ?>'><input maxlength='1' style='<?php $answer176 = $_POST['q176']; if ($answer176 == '�' || $answer176 == '�') echo "background: #8fff80"; else if($answer176 != '') echo "background: #ff6969"?>' class='field176' type='text' name='q176' value='<?php if(isset($_POST['q176'])) echo $_POST['q176']; ?>'><input maxlength='1' style='<?php $answer179 = $_POST['q179']; if ($answer179 == '�' || $answer179 == '�') echo "background: #8fff80"; else if($answer179 != '') echo "background: #ff6969"?>' class='field179' type='text' name='q179' value='<?php if(isset($_POST['q179'])) echo $_POST['q179']; ?>'><input maxlength='1' style='<?php $answer182 = $_POST['q182']; if ($answer182 == '�' || $answer182 == '�') echo "background: #8fff80"; else if($answer182 != '') echo "background: #ff6969"?>' class='field182' type='text' name='q182' value='<?php if(isset($_POST['q182'])) echo $_POST['q182']; ?>'><input maxlength='1' style='<?php $answer195 = $_POST['q195']; if ($answer195 == '�' || $answer195 == '�') echo "background: #8fff80"; else if($answer195 != '') echo "background: #ff6969"?>' class='field195' type='text' name='q195' value='<?php if(isset($_POST['q195'])) echo $_POST['q195']; ?>'><input maxlength='1' style='<?php $answer198 = $_POST['q198']; if ($answer198 == '�' || $answer198 == '�') echo "background: #8fff80"; else if($answer198 != '') echo "background: #ff6969"?>' class='field198' type='text' name='q198' value='<?php if(isset($_POST['q198'])) echo $_POST['q198']; ?>'><input maxlength='1' style='<?php $answer201 = $_POST['q201']; if ($answer201 == '�' || $answer201 == '�') echo "background: #8fff80"; else if($answer201 != '') echo "background: #ff6969"?>' class='field201' type='text' name='q201' value='<?php if(isset($_POST['q201'])) echo $_POST['q201']; ?>'><input maxlength='1' style='<?php $answer214 = $_POST['q214']; if ($answer214 == '�' || $answer214 == '�') echo "background: #8fff80"; else if($answer214 != '') echo "background: #ff6969"?>' class='field214' type='text' name='q214' value='<?php if(isset($_POST['q214'])) echo $_POST['q214']; ?>'><input maxlength='1' style='<?php $answer217 = $_POST['q217']; if ($answer217 == '�' || $answer217 == '�') echo "background: #8fff80"; else if($answer217 != '') echo "background: #ff6969"?>' class='field217' type='text' name='q217' value='<?php if(isset($_POST['q217'])) echo $_POST['q217']; ?>'><input maxlength='1' style='<?php $answer220 = $_POST['q220']; if ($answer220 == '�' || $answer220 == '�') echo "background: #8fff80"; else if($answer220 != '') echo "background: #ff6969"?>' class='field220' type='text' name='q220' value='<?php if(isset($_POST['q220'])) echo $_POST['q220']; ?>'><input maxlength='1' style='<?php $answer222 = $_POST['q222']; if ($answer222 == '�' || $answer222 == '�') echo "background: #8fff80"; else if($answer222 != '') echo "background: #ff6969"?>' class='field222' type='text' name='q222' value='<?php if(isset($_POST['q222'])) echo $_POST['q222']; ?>'><a class='num12'>12</a><input maxlength='1' style='<?php $answer233 = $_POST['q233']; if ($answer233 == '�' || $answer233 == '�') echo "background: #8fff80"; else if($answer233 != '') echo "background: #ff6969"?>' class='field233' type='text' name='q233' value='<?php if(isset($_POST['q233'])) echo $_POST['q233']; ?>'><input maxlength='1' style='<?php $answer236 = $_POST['q236']; if ($answer236 == '�' || $answer236 == '�') echo "background: #8fff80"; else if($answer236 != '') echo "background: #ff6969"?>' class='field236' type='text' name='q236' value='<?php if(isset($_POST['q236'])) echo $_POST['q236']; ?>'><input maxlength='1' style='<?php $answer238 = $_POST['q238']; if ($answer238 == '�' || $answer238 == '�') echo "background: #8fff80"; else if($answer238 != '') echo "background: #ff6969"?>' class='field238' type='text' name='q238' value='<?php if(isset($_POST['q238'])) echo $_POST['q238']; ?>'><a class='num13'>13</a><input maxlength='1' style='<?php $answer239 = $_POST['q239']; if ($answer239 == '�' || $answer239 == '�') echo "background: #8fff80"; else if($answer239 != '') echo "background: #ff6969"?>' class='field239' type='text' name='q239' value='<?php if(isset($_POST['q239'])) echo $_POST['q239']; ?>'><input maxlength='1' style='<?php $answer240 = $_POST['q240']; if ($answer240 == '�' || $answer240 == '�') echo "background: #8fff80"; else if($answer240 != '') echo "background: #ff6969"?>' class='field240' type='text' name='q240' value='<?php if(isset($_POST['q240'])) echo $_POST['q240']; ?>'><input maxlength='1' style='<?php $answer241 = $_POST['q241']; if ($answer241 == '�' || $answer241 == '�') echo "background: #8fff80"; else if($answer241 != '') echo "background: #ff6969"?>' class='field241' type='text' name='q241' value='<?php if(isset($_POST['q241'])) echo $_POST['q241']; ?>'><input maxlength='1' style='<?php $answer242 = $_POST['q242']; if ($answer242 == '�' || $answer242 == '�') echo "background: #8fff80"; else if($answer242 != '') echo "background: #ff6969"?>' class='field242' type='text' name='q242' value='<?php if(isset($_POST['q242'])) echo $_POST['q242']; ?>'><input maxlength='1' style='<?php $answer252 = $_POST['q252']; if ($answer252 == '�' || $answer252 == '�') echo "background: #8fff80"; else if($answer252 != '') echo "background: #ff6969"?>' class='field252' type='text' name='q252' value='<?php if(isset($_POST['q252'])) echo $_POST['q252']; ?>'><input maxlength='1' style='<?php $answer258 = $_POST['q258']; if ($answer258 == '�' || $answer258 == '�') echo "background: #8fff80"; else if($answer258 != '') echo "background: #ff6969"?>' class='field258' type='text' name='q258' value='<?php if(isset($_POST['q258'])) echo $_POST['q258']; ?>'><input maxlength='1' style='<?php $answer260 = $_POST['q260']; if ($answer260 == '�' || $answer260 == '�') echo "background: #8fff80"; else if($answer260 != '') echo "background: #ff6969"?>' class='field260' type='text' name='q260' value='<?php if(isset($_POST['q260'])) echo $_POST['q260']; ?>'><input maxlength='1' style='<?php $answer267 = $_POST['q267']; if ($answer267 == '�' || $answer267 == '�') echo "background: #8fff80"; else if($answer267 != '') echo "background: #ff6969"?>' class='field267' type='text' name='q267' value='<?php if(isset($_POST['q267'])) echo $_POST['q267']; ?>'><a class='num14'>14</a><input maxlength='1' style='<?php $answer268 = $_POST['q268']; if ($answer268 == '�' || $answer268 == '�') echo "background: #8fff80"; else if($answer268 != '') echo "background: #ff6969"?>' class='field268' type='text' name='q268' value='<?php if(isset($_POST['q268'])) echo $_POST['q268']; ?>'><input maxlength='1' style='<?php $answer269 = $_POST['q269']; if ($answer269 == '�' || $answer269 == '�') echo "background: #8fff80"; else if($answer269 != '') echo "background: #ff6969"?>' class='field269' type='text' name='q269' value='<?php if(isset($_POST['q269'])) echo $_POST['q269']; ?>'><input maxlength='1' style='<?php $answer270 = $_POST['q270']; if ($answer270 == '�' || $answer270 == '�') echo "background: #8fff80"; else if($answer270 != '') echo "background: #ff6969"?>' class='field270' type='text' name='q270' value='<?php if(isset($_POST['q270'])) echo $_POST['q270']; ?>'><input maxlength='1' style='<?php $answer271 = $_POST['q271']; if ($answer271 == '�' || $answer271 == '�') echo "background: #8fff80"; else if($answer271 != '') echo "background: #ff6969"?>' class='field271' type='text' name='q271' value='<?php if(isset($_POST['q271'])) echo $_POST['q271']; ?>'><input maxlength='1' style='<?php $answer272 = $_POST['q272']; if ($answer272 == '�' || $answer272 == '�') echo "background: #8fff80"; else if($answer272 != '') echo "background: #ff6969"?>' class='field272' type='text' name='q272' value='<?php if(isset($_POST['q272'])) echo $_POST['q272']; ?>'><input maxlength='1' style='<?php $answer273 = $_POST['q273']; if ($answer273 == '�' || $answer273 == '�') echo "background: #8fff80"; else if($answer273 != '') echo "background: #ff6969"?>' class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input maxlength='1' style='<?php $answer274 = $_POST['q274']; if ($answer274 == '�' || $answer274 == '�') echo "background: #8fff80"; else if($answer274 != '') echo "background: #ff6969"?>' class='field274' type='text' name='q274' value='<?php if(isset($_POST['q274'])) echo $_POST['q274']; ?>'><input maxlength='1' style='<?php $answer275 = $_POST['q275']; if ($answer275 == '�' || $answer275 == '�') echo "background: #8fff80"; else if($answer275 != '') echo "background: #ff6969"?>' class='field275' type='text' name='q275' value='<?php if(isset($_POST['q275'])) echo $_POST['q275']; ?>'><input maxlength='1' style='<?php $answer279 = $_POST['q279']; if ($answer279 == '�' || $answer279 == '�') echo "background: #8fff80"; else if($answer279 != '') echo "background: #ff6969"?>' class='field279' type='text' name='q279' value='<?php if(isset($_POST['q279'])) echo $_POST['q279']; ?>'><input maxlength='1' style='<?php $answer290 = $_POST['q290']; if ($answer290 == '�' || $answer290 == '�') echo "background: #8fff80"; else if($answer290 != '') echo "background: #ff6969"?>' class='field290' type='text' name='q290' value='<?php if(isset($_POST['q290'])) echo $_POST['q290']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>���������</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer5 = $_POST['q5'];
if ($answer5 == '�' || $answer5 == '�') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == '�' || $answer6 == '�') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == '�' || $answer7 == '�') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == '�' || $answer8 == '�') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == '�' || $answer9 == '�') { $totalCorrect++; }
$answer28 = $_POST['q28'];
if ($answer28 == '�' || $answer28 == '�') { $totalCorrect++; }
$answer32 = $_POST['q32'];
if ($answer32 == '�' || $answer32 == '�') { $totalCorrect++; }
$answer33 = $_POST['q33'];
if ($answer33 == '�' || $answer33 == '�') { $totalCorrect++; }
$answer34 = $_POST['q34'];
if ($answer34 == '�' || $answer34 == '�') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == '�' || $answer35 == '�') { $totalCorrect++; }
$answer36 = $_POST['q36'];
if ($answer36 == '�' || $answer36 == '�') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == '�' || $answer37 == '�') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == '�' || $answer38 == '�') { $totalCorrect++; }
$answer47 = $_POST['q47'];
if ($answer47 == '�' || $answer47 == '�') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == '�' || $answer51 == '�') { $totalCorrect++; }
$answer65 = $_POST['q65'];
if ($answer65 == '�' || $answer65 == '�') { $totalCorrect++; }
$answer66 = $_POST['q66'];
if ($answer66 == '�' || $answer66 == '�') { $totalCorrect++; }
$answer67 = $_POST['q67'];
if ($answer67 == '�' || $answer67 == '�') { $totalCorrect++; }
$answer68 = $_POST['q68'];
if ($answer68 == '�' || $answer68 == '�') { $totalCorrect++; }
$answer69 = $_POST['q69'];
if ($answer69 == '�' || $answer69 == '�') { $totalCorrect++; }
$answer70 = $_POST['q70'];
if ($answer70 == '�' || $answer70 == '�') { $totalCorrect++; }
$answer71 = $_POST['q71'];
if ($answer71 == '�' || $answer71 == '�') { $totalCorrect++; }
$answer72 = $_POST['q72'];
if ($answer72 == '�' || $answer72 == '�') { $totalCorrect++; }
$answer73 = $_POST['q73'];
if ($answer73 == '�' || $answer73 == '�') { $totalCorrect++; }
$answer84 = $_POST['q84'];
if ($answer84 == '�' || $answer84 == '�') { $totalCorrect++; }
$answer89 = $_POST['q89'];
if ($answer89 == '�' || $answer89 == '�') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == '�' || $answer103 == '�') { $totalCorrect++; }
$answer106 = $_POST['q106'];
if ($answer106 == '�' || $answer106 == '�') { $totalCorrect++; }
$answer107 = $_POST['q107'];
if ($answer107 == '�' || $answer107 == '�') { $totalCorrect++; }
$answer108 = $_POST['q108'];
if ($answer108 == '�' || $answer108 == '�') { $totalCorrect++; }
$answer109 = $_POST['q109'];
if ($answer109 == '�' || $answer109 == '�') { $totalCorrect++; }
$answer110 = $_POST['q110'];
if ($answer110 == '�' || $answer110 == '�') { $totalCorrect++; }
$answer111 = $_POST['q111'];
if ($answer111 == '�' || $answer111 == '�') { $totalCorrect++; }
$answer112 = $_POST['q112'];
if ($answer112 == '�' || $answer112 == '�') { $totalCorrect++; }
$answer122 = $_POST['q122'];
if ($answer122 == '�' || $answer122 == '�') { $totalCorrect++; }
$answer127 = $_POST['q127'];
if ($answer127 == '�' || $answer127 == '�') { $totalCorrect++; }
$answer129 = $_POST['q129'];
if ($answer129 == '�' || $answer129 == '�') { $totalCorrect++; }
$answer138 = $_POST['q138'];
if ($answer138 == '�' || $answer138 == '�') { $totalCorrect++; }
$answer141 = $_POST['q141'];
if ($answer141 == '�' || $answer141 == '�') { $totalCorrect++; }
$answer148 = $_POST['q148'];
if ($answer148 == '�' || $answer148 == '�') { $totalCorrect++; }
$answer157 = $_POST['q157'];
if ($answer157 == '�' || $answer157 == '�') { $totalCorrect++; }
$answer158 = $_POST['q158'];
if ($answer158 == '�' || $answer158 == '�') { $totalCorrect++; }
$answer159 = $_POST['q159'];
if ($answer159 == '�' || $answer159 == '�') { $totalCorrect++; }
$answer160 = $_POST['q160'];
if ($answer160 == '�' || $answer160 == '�') { $totalCorrect++; }
$answer161 = $_POST['q161'];
if ($answer161 == '�' || $answer161 == '�') { $totalCorrect++; }
$answer162 = $_POST['q162'];
if ($answer162 == '�' || $answer162 == '�') { $totalCorrect++; }
$answer163 = $_POST['q163'];
if ($answer163 == '�' || $answer163 == '�') { $totalCorrect++; }
$answer167 = $_POST['q167'];
if ($answer167 == '�' || $answer167 == '�') { $totalCorrect++; }
$answer176 = $_POST['q176'];
if ($answer176 == '�' || $answer176 == '�') { $totalCorrect++; }
$answer179 = $_POST['q179'];
if ($answer179 == '�' || $answer179 == '�') { $totalCorrect++; }
$answer182 = $_POST['q182'];
if ($answer182 == '�' || $answer182 == '�') { $totalCorrect++; }
$answer195 = $_POST['q195'];
if ($answer195 == '�' || $answer195 == '�') { $totalCorrect++; }
$answer198 = $_POST['q198'];
if ($answer198 == '�' || $answer198 == '�') { $totalCorrect++; }
$answer201 = $_POST['q201'];
if ($answer201 == '�' || $answer201 == '�') { $totalCorrect++; }
$answer214 = $_POST['q214'];
if ($answer214 == '�' || $answer214 == '�') { $totalCorrect++; }
$answer217 = $_POST['q217'];
if ($answer217 == '�' || $answer217 == '�') { $totalCorrect++; }
$answer220 = $_POST['q220'];
if ($answer220 == '�' || $answer220 == '�') { $totalCorrect++; }
$answer222 = $_POST['q222'];
if ($answer222 == '�' || $answer222 == '�') { $totalCorrect++; }
$answer233 = $_POST['q233'];
if ($answer233 == '�' || $answer233 == '�') { $totalCorrect++; }
$answer236 = $_POST['q236'];
if ($answer236 == '�' || $answer236 == '�') { $totalCorrect++; }
$answer238 = $_POST['q238'];
if ($answer238 == '�' || $answer238 == '�') { $totalCorrect++; }
$answer239 = $_POST['q239'];
if ($answer239 == '�' || $answer239 == '�') { $totalCorrect++; }
$answer240 = $_POST['q240'];
if ($answer240 == '�' || $answer240 == '�') { $totalCorrect++; }
$answer241 = $_POST['q241'];
if ($answer241 == '�' || $answer241 == '�') { $totalCorrect++; }
$answer242 = $_POST['q242'];
if ($answer242 == '�' || $answer242 == '�') { $totalCorrect++; }
$answer252 = $_POST['q252'];
if ($answer252 == '�' || $answer252 == '�') { $totalCorrect++; }
$answer258 = $_POST['q258'];
if ($answer258 == '�' || $answer258 == '�') { $totalCorrect++; }
$answer260 = $_POST['q260'];
if ($answer260 == '�' || $answer260 == '�') { $totalCorrect++; }
$answer267 = $_POST['q267'];
if ($answer267 == '�' || $answer267 == '�') { $totalCorrect++; }
$answer268 = $_POST['q268'];
if ($answer268 == '�' || $answer268 == '�') { $totalCorrect++; }
$answer269 = $_POST['q269'];
if ($answer269 == '�' || $answer269 == '�') { $totalCorrect++; }
$answer270 = $_POST['q270'];
if ($answer270 == '�' || $answer270 == '�') { $totalCorrect++; }
$answer271 = $_POST['q271'];
if ($answer271 == '�' || $answer271 == '�') { $totalCorrect++; }
$answer272 = $_POST['q272'];
if ($answer272 == '�' || $answer272 == '�') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == '�' || $answer273 == '�') { $totalCorrect++; }
$answer274 = $_POST['q274'];
if ($answer274 == '�' || $answer274 == '�') { $totalCorrect++; }
$answer275 = $_POST['q275'];
if ($answer275 == '�' || $answer275 == '�') { $totalCorrect++; }
$answer279 = $_POST['q279'];
if ($answer279 == '�' || $answer279 == '�') { $totalCorrect++; }
$answer290 = $_POST['q290'];
if ($answer290 == '�' || $answer290 == '�') { $totalCorrect++; }
echo "<div class='questions'>�������</div><br> ";
echo "<div class='question'>1. ����</div>";
echo "<div class='question'>2. ����</div>";
echo "<div class='question'>3. �������</div>";
echo "<div class='question'>4. ������</div>";
echo "<div class='question'>5. ����</div>";
echo "<div class='question'>6. �����</div>";
echo "<div class='question'>7. ����� ��</div>";
echo "<div class='question'>8. ����� ����������� �������</div>";
echo "<div class='question'>9. ����</div>";
echo "<div class='question'>10. ������ �������</div>";
echo "<div class='question'>11. �����</div>";
echo "<div class='question'>12. �����</div>";
echo "<div class='question'>13. ��������</div>";
echo "<div class='question'>14. ����</div>";
echo "<div class='stats'>����������:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 79 correct</div>";else echo '<div class="nomore"> ���������� ����� ������� �����������! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr �������(-��) ��������<br></div>";}
?>