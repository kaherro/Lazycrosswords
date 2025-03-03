<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input maxlength='1' style='<?php $answer1 = $_POST['q1']; if ($answer1 == 'ч' || $answer1 == 'Ч') echo "background: #8fff80"; else if($answer1 != '') echo "background: #ff6969"?>' class='field1' type='text' name='q1' value='<?php if(isset($_POST['q1'])) echo $_POST['q1']; ?>'><a class='num1'>1</a><input maxlength='1' style='<?php $answer2 = $_POST['q2']; if ($answer2 == 'н' || $answer2 == 'Н') echo "background: #8fff80"; else if($answer2 != '') echo "background: #ff6969"?>' class='field2' type='text' name='q2' value='<?php if(isset($_POST['q2'])) echo $_POST['q2']; ?>'><input maxlength='1' style='<?php $answer3 = $_POST['q3']; if ($answer3 == 'о' || $answer3 == 'О') echo "background: #8fff80"; else if($answer3 != '') echo "background: #ff6969"?>' class='field3' type='text' name='q3' value='<?php if(isset($_POST['q3'])) echo $_POST['q3']; ?>'><a class='num2'>2</a><input maxlength='1' style='<?php $answer4 = $_POST['q4']; if ($answer4 == 'с' || $answer4 == 'С') echo "background: #8fff80"; else if($answer4 != '') echo "background: #ff6969"?>' class='field4' type='text' name='q4' value='<?php if(isset($_POST['q4'])) echo $_POST['q4']; ?>'><input maxlength='1' style='<?php $answer5 = $_POST['q5']; if ($answer5 == 'г' || $answer5 == 'Г') echo "background: #8fff80"; else if($answer5 != '') echo "background: #ff6969"?>' class='field5' type='text' name='q5' value='<?php if(isset($_POST['q5'])) echo $_POST['q5']; ?>'><a class='num3'>3</a><input maxlength='1' style='<?php $answer6 = $_POST['q6']; if ($answer6 == 'м' || $answer6 == 'М') echo "background: #8fff80"; else if($answer6 != '') echo "background: #ff6969"?>' class='field6' type='text' name='q6' value='<?php if(isset($_POST['q6'])) echo $_POST['q6']; ?>'><input maxlength='1' style='<?php $answer7 = $_POST['q7']; if ($answer7 == 'л' || $answer7 == 'Л') echo "background: #8fff80"; else if($answer7 != '') echo "background: #ff6969"?>' class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><input maxlength='1' style='<?php $answer8 = $_POST['q8']; if ($answer8 == 'п' || $answer8 == 'П') echo "background: #8fff80"; else if($answer8 != '') echo "background: #ff6969"?>' class='field8' type='text' name='q8' value='<?php if(isset($_POST['q8'])) echo $_POST['q8']; ?>'><input maxlength='1' style='<?php $answer9 = $_POST['q9']; if ($answer9 == 'ь' || $answer9 == 'Ь') echo "background: #8fff80"; else if($answer9 != '') echo "background: #ff6969"?>' class='field9' type='text' name='q9' value='<?php if(isset($_POST['q9'])) echo $_POST['q9']; ?>'><input maxlength='1' style='<?php $answer10 = $_POST['q10']; if ($answer10 == 'м' || $answer10 == 'М') echo "background: #8fff80"; else if($answer10 != '') echo "background: #ff6969"?>' class='field10' type='text' name='q10' value='<?php if(isset($_POST['q10'])) echo $_POST['q10']; ?>'><input maxlength='1' style='<?php $answer11 = $_POST['q11']; if ($answer11 == 'б' || $answer11 == 'Б') echo "background: #8fff80"; else if($answer11 != '') echo "background: #ff6969"?>' class='field11' type='text' name='q11' value='<?php if(isset($_POST['q11'])) echo $_POST['q11']; ?>'><input maxlength='1' style='<?php $answer12 = $_POST['q12']; if ($answer12 == 'и' || $answer12 == 'И') echo "background: #8fff80"; else if($answer12 != '') echo "background: #ff6969"?>' class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><input maxlength='1' style='<?php $answer13 = $_POST['q13']; if ($answer13 == 'и' || $answer13 == 'И') echo "background: #8fff80"; else if($answer13 != '') echo "background: #ff6969"?>' class='field13' type='text' name='q13' value='<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>'><input maxlength='1' style='<?php $answer14 = $_POST['q14']; if ($answer14 == 'л' || $answer14 == 'Л') echo "background: #8fff80"; else if($answer14 != '') echo "background: #ff6969"?>' class='field14' type='text' name='q14' value='<?php if(isset($_POST['q14'])) echo $_POST['q14']; ?>'><input maxlength='1' style='<?php $answer15 = $_POST['q15']; if ($answer15 == 'и' || $answer15 == 'И') echo "background: #8fff80"; else if($answer15 != '') echo "background: #ff6969"?>' class='field15' type='text' name='q15' value='<?php if(isset($_POST['q15'])) echo $_POST['q15']; ?>'><input maxlength='1' style='<?php $answer16 = $_POST['q16']; if ($answer16 == 'л' || $answer16 == 'Л') echo "background: #8fff80"; else if($answer16 != '') echo "background: #ff6969"?>' class='field16' type='text' name='q16' value='<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>'><a class='num4'>4</a><input maxlength='1' style='<?php $answer17 = $_POST['q17']; if ($answer17 == 'м' || $answer17 == 'М') echo "background: #8fff80"; else if($answer17 != '') echo "background: #ff6969"?>' class='field17' type='text' name='q17' value='<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>'><input maxlength='1' style='<?php $answer33 = $_POST['q33']; if ($answer33 == 'а' || $answer33 == 'А') echo "background: #8fff80"; else if($answer33 != '') echo "background: #ff6969"?>' class='field33' type='text' name='q33' value='<?php if(isset($_POST['q33'])) echo $_POST['q33']; ?>'><input maxlength='1' style='<?php $answer35 = $_POST['q35']; if ($answer35 == 'п' || $answer35 == 'П') echo "background: #8fff80"; else if($answer35 != '') echo "background: #ff6969"?>' class='field35' type='text' name='q35' value='<?php if(isset($_POST['q35'])) echo $_POST['q35']; ?>'><input maxlength='1' style='<?php $answer46 = $_POST['q46']; if ($answer46 == 'п' || $answer46 == 'П') echo "background: #8fff80"; else if($answer46 != '') echo "background: #ff6969"?>' class='field46' type='text' name='q46' value='<?php if(isset($_POST['q46'])) echo $_POST['q46']; ?>'><input maxlength='1' style='<?php $answer63 = $_POST['q63']; if ($answer63 == 'о' || $answer63 == 'О') echo "background: #8fff80"; else if($answer63 != '') echo "background: #ff6969"?>' class='field63' type='text' name='q63' value='<?php if(isset($_POST['q63'])) echo $_POST['q63']; ?>'><input maxlength='1' style='<?php $answer65 = $_POST['q65']; if ($answer65 == 'ш' || $answer65 == 'Ш') echo "background: #8fff80"; else if($answer65 != '') echo "background: #ff6969"?>' class='field65' type='text' name='q65' value='<?php if(isset($_POST['q65'])) echo $_POST['q65']; ?>'><input maxlength='1' style='<?php $answer76 = $_POST['q76']; if ($answer76 == 'л' || $answer76 == 'Л') echo "background: #8fff80"; else if($answer76 != '') echo "background: #ff6969"?>' class='field76' type='text' name='q76' value='<?php if(isset($_POST['q76'])) echo $_POST['q76']; ?>'><input maxlength='1' style='<?php $answer93 = $_POST['q93']; if ($answer93 == 'а' || $answer93 == 'А') echo "background: #8fff80"; else if($answer93 != '') echo "background: #ff6969"?>' class='field93' type='text' name='q93' value='<?php if(isset($_POST['q93'])) echo $_POST['q93']; ?>'><input maxlength='1' style='<?php $answer95 = $_POST['q95']; if ($answer95 == 'п' || $answer95 == 'П') echo "background: #8fff80"; else if($answer95 != '') echo "background: #ff6969"?>' class='field95' type='text' name='q95' value='<?php if(isset($_POST['q95'])) echo $_POST['q95']; ?>'><input maxlength='1' style='<?php $answer106 = $_POST['q106']; if ($answer106 == 'п' || $answer106 == 'П') echo "background: #8fff80"; else if($answer106 != '') echo "background: #ff6969"?>' class='field106' type='text' name='q106' value='<?php if(isset($_POST['q106'])) echo $_POST['q106']; ?>'><input maxlength='1' style='<?php $answer123 = $_POST['q123']; if ($answer123 == 'л' || $answer123 == 'Л') echo "background: #8fff80"; else if($answer123 != '') echo "background: #ff6969"?>' class='field123' type='text' name='q123' value='<?php if(isset($_POST['q123'])) echo $_POST['q123']; ?>'><input maxlength='1' style='<?php $answer125 = $_POST['q125']; if ($answer125 == 'л' || $answer125 == 'Л') echo "background: #8fff80"; else if($answer125 != '') echo "background: #ff6969"?>' class='field125' type='text' name='q125' value='<?php if(isset($_POST['q125'])) echo $_POST['q125']; ?>'><input maxlength='1' style='<?php $answer136 = $_POST['q136']; if ($answer136 == 'л' || $answer136 == 'Л') echo "background: #8fff80"; else if($answer136 != '') echo "background: #ff6969"?>' class='field136' type='text' name='q136' value='<?php if(isset($_POST['q136'])) echo $_POST['q136']; ?>'><input maxlength='1' style='<?php $answer153 = $_POST['q153']; if ($answer153 == 'а' || $answer153 == 'А') echo "background: #8fff80"; else if($answer153 != '') echo "background: #ff6969"?>' class='field153' type='text' name='q153' value='<?php if(isset($_POST['q153'])) echo $_POST['q153']; ?>'><input maxlength='1' style='<?php $answer155 = $_POST['q155']; if ($answer155 == 'п' || $answer155 == 'П') echo "background: #8fff80"; else if($answer155 != '') echo "background: #ff6969"?>' class='field155' type='text' name='q155' value='<?php if(isset($_POST['q155'])) echo $_POST['q155']; ?>'><input maxlength='1' style='<?php $answer166 = $_POST['q166']; if ($answer166 == 'п' || $answer166 == 'П') echo "background: #8fff80"; else if($answer166 != '') echo "background: #ff6969"?>' class='field166' type='text' name='q166' value='<?php if(isset($_POST['q166'])) echo $_POST['q166']; ?>'><input maxlength='1' style='<?php $answer183 = $_POST['q183']; if ($answer183 == 'л' || $answer183 == 'Л') echo "background: #8fff80"; else if($answer183 != '') echo "background: #ff6969"?>' class='field183' type='text' name='q183' value='<?php if(isset($_POST['q183'])) echo $_POST['q183']; ?>'><input maxlength='1' style='<?php $answer185 = $_POST['q185']; if ($answer185 == 'л' || $answer185 == 'Л') echo "background: #8fff80"; else if($answer185 != '') echo "background: #ff6969"?>' class='field185' type='text' name='q185' value='<?php if(isset($_POST['q185'])) echo $_POST['q185']; ?>'><input maxlength='1' style='<?php $answer196 = $_POST['q196']; if ($answer196 == 'л' || $answer196 == 'Л') echo "background: #8fff80"; else if($answer196 != '') echo "background: #ff6969"?>' class='field196' type='text' name='q196' value='<?php if(isset($_POST['q196'])) echo $_POST['q196']; ?>'><input maxlength='1' style='<?php $answer213 = $_POST['q213']; if ($answer213 == 'п' || $answer213 == 'П') echo "background: #8fff80"; else if($answer213 != '') echo "background: #ff6969"?>' class='field213' type='text' name='q213' value='<?php if(isset($_POST['q213'])) echo $_POST['q213']; ?>'><input maxlength='1' style='<?php $answer215 = $_POST['q215']; if ($answer215 == 'м' || $answer215 == 'М') echo "background: #8fff80"; else if($answer215 != '') echo "background: #ff6969"?>' class='field215' type='text' name='q215' value='<?php if(isset($_POST['q215'])) echo $_POST['q215']; ?>'><input maxlength='1' style='<?php $answer226 = $_POST['q226']; if ($answer226 == 'п' || $answer226 == 'П') echo "background: #8fff80"; else if($answer226 != '') echo "background: #ff6969"?>' class='field226' type='text' name='q226' value='<?php if(isset($_POST['q226'])) echo $_POST['q226']; ?>'><input maxlength='1' style='<?php $answer243 = $_POST['q243']; if ($answer243 == 'л' || $answer243 == 'Л') echo "background: #8fff80"; else if($answer243 != '') echo "background: #ff6969"?>' class='field243' type='text' name='q243' value='<?php if(isset($_POST['q243'])) echo $_POST['q243']; ?>'><input maxlength='1' style='<?php $answer245 = $_POST['q245']; if ($answer245 == 'м' || $answer245 == 'М') echo "background: #8fff80"; else if($answer245 != '') echo "background: #ff6969"?>' class='field245' type='text' name='q245' value='<?php if(isset($_POST['q245'])) echo $_POST['q245']; ?>'><input maxlength='1' style='<?php $answer256 = $_POST['q256']; if ($answer256 == 'д' || $answer256 == 'Д') echo "background: #8fff80"; else if($answer256 != '') echo "background: #ff6969"?>' class='field256' type='text' name='q256' value='<?php if(isset($_POST['q256'])) echo $_POST['q256']; ?>'><input maxlength='1' style='<?php $answer273 = $_POST['q273']; if ($answer273 == 'п' || $answer273 == 'П') echo "background: #8fff80"; else if($answer273 != '') echo "background: #ff6969"?>' class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input maxlength='1' style='<?php $answer275 = $_POST['q275']; if ($answer275 == 'л' || $answer275 == 'Л') echo "background: #8fff80"; else if($answer275 != '') echo "background: #ff6969"?>' class='field275' type='text' name='q275' value='<?php if(isset($_POST['q275'])) echo $_POST['q275']; ?>'><input maxlength='1' style='<?php $answer286 = $_POST['q286']; if ($answer286 == 'п' || $answer286 == 'П') echo "background: #8fff80"; else if($answer286 != '') echo "background: #ff6969"?>' class='field286' type='text' name='q286' value='<?php if(isset($_POST['q286'])) echo $_POST['q286']; ?>'><input maxlength='1' style='<?php $answer303 = $_POST['q303']; if ($answer303 == 'п' || $answer303 == 'П') echo "background: #8fff80"; else if($answer303 != '') echo "background: #ff6969"?>' class='field303' type='text' name='q303' value='<?php if(isset($_POST['q303'])) echo $_POST['q303']; ?>'><input maxlength='1' style='<?php $answer305 = $_POST['q305']; if ($answer305 == 'м' || $answer305 == 'М') echo "background: #8fff80"; else if($answer305 != '') echo "background: #ff6969"?>' class='field305' type='text' name='q305' value='<?php if(isset($_POST['q305'])) echo $_POST['q305']; ?>'><input maxlength='1' style='<?php $answer316 = $_POST['q316']; if ($answer316 == 'д' || $answer316 == 'Д') echo "background: #8fff80"; else if($answer316 != '') echo "background: #ff6969"?>' class='field316' type='text' name='q316' value='<?php if(isset($_POST['q316'])) echo $_POST['q316']; ?>'><input maxlength='1' style='<?php $answer333 = $_POST['q333']; if ($answer333 == 'д' || $answer333 == 'Д') echo "background: #8fff80"; else if($answer333 != '') echo "background: #ff6969"?>' class='field333' type='text' name='q333' value='<?php if(isset($_POST['q333'])) echo $_POST['q333']; ?>'><input maxlength='1' style='<?php $answer335 = $_POST['q335']; if ($answer335 == 'д' || $answer335 == 'Д') echo "background: #8fff80"; else if($answer335 != '') echo "background: #ff6969"?>' class='field335' type='text' name='q335' value='<?php if(isset($_POST['q335'])) echo $_POST['q335']; ?>'><a class='num5'>5</a><input maxlength='1' style='<?php $answer336 = $_POST['q336']; if ($answer336 == 'п' || $answer336 == 'П') echo "background: #8fff80"; else if($answer336 != '') echo "background: #ff6969"?>' class='field336' type='text' name='q336' value='<?php if(isset($_POST['q336'])) echo $_POST['q336']; ?>'><input maxlength='1' style='<?php $answer337 = $_POST['q337']; if ($answer337 == 'л' || $answer337 == 'Л') echo "background: #8fff80"; else if($answer337 != '') echo "background: #ff6969"?>' class='field337' type='text' name='q337' value='<?php if(isset($_POST['q337'])) echo $_POST['q337']; ?>'><input maxlength='1' style='<?php $answer338 = $_POST['q338']; if ($answer338 == 'п' || $answer338 == 'П') echo "background: #8fff80"; else if($answer338 != '') echo "background: #ff6969"?>' class='field338' type='text' name='q338' value='<?php if(isset($_POST['q338'])) echo $_POST['q338']; ?>'><input maxlength='1' style='<?php $answer339 = $_POST['q339']; if ($answer339 == 'о' || $answer339 == 'О') echo "background: #8fff80"; else if($answer339 != '') echo "background: #ff6969"?>' class='field339' type='text' name='q339' value='<?php if(isset($_POST['q339'])) echo $_POST['q339']; ?>'><input maxlength='1' style='<?php $answer340 = $_POST['q340']; if ($answer340 == 'а' || $answer340 == 'А') echo "background: #8fff80"; else if($answer340 != '') echo "background: #ff6969"?>' class='field340' type='text' name='q340' value='<?php if(isset($_POST['q340'])) echo $_POST['q340']; ?>'><input maxlength='1' style='<?php $answer341 = $_POST['q341']; if ($answer341 == 'л' || $answer341 == 'Л') echo "background: #8fff80"; else if($answer341 != '') echo "background: #ff6969"?>' class='field341' type='text' name='q341' value='<?php if(isset($_POST['q341'])) echo $_POST['q341']; ?>'><input maxlength='1' style='<?php $answer342 = $_POST['q342']; if ($answer342 == 'п' || $answer342 == 'П') echo "background: #8fff80"; else if($answer342 != '') echo "background: #ff6969"?>' class='field342' type='text' name='q342' value='<?php if(isset($_POST['q342'])) echo $_POST['q342']; ?>'><input maxlength='1' style='<?php $answer343 = $_POST['q343']; if ($answer343 == 'л' || $answer343 == 'Л') echo "background: #8fff80"; else if($answer343 != '') echo "background: #ff6969"?>' class='field343' type='text' name='q343' value='<?php if(isset($_POST['q343'])) echo $_POST['q343']; ?>'><input maxlength='1' style='<?php $answer344 = $_POST['q344']; if ($answer344 == 'п' || $answer344 == 'П') echo "background: #8fff80"; else if($answer344 != '') echo "background: #ff6969"?>' class='field344' type='text' name='q344' value='<?php if(isset($_POST['q344'])) echo $_POST['q344']; ?>'><input maxlength='1' style='<?php $answer345 = $_POST['q345']; if ($answer345 == 'д' || $answer345 == 'Д') echo "background: #8fff80"; else if($answer345 != '') echo "background: #ff6969"?>' class='field345' type='text' name='q345' value='<?php if(isset($_POST['q345'])) echo $_POST['q345']; ?>'><input maxlength='1' style='<?php $answer346 = $_POST['q346']; if ($answer346 == 'р' || $answer346 == 'Р') echo "background: #8fff80"; else if($answer346 != '') echo "background: #ff6969"?>' class='field346' type='text' name='q346' value='<?php if(isset($_POST['q346'])) echo $_POST['q346']; ?>'><input maxlength='1' style='<?php $answer347 = $_POST['q347']; if ($answer347 == 'д' || $answer347 == 'Д') echo "background: #8fff80"; else if($answer347 != '') echo "background: #ff6969"?>' class='field347' type='text' name='q347' value='<?php if(isset($_POST['q347'])) echo $_POST['q347']; ?>'><input maxlength='1' style='<?php $answer348 = $_POST['q348']; if ($answer348 == 'р' || $answer348 == 'Р') echo "background: #8fff80"; else if($answer348 != '') echo "background: #ff6969"?>' class='field348' type='text' name='q348' value='<?php if(isset($_POST['q348'])) echo $_POST['q348']; ?>'><input maxlength='1' style='<?php $answer349 = $_POST['q349']; if ($answer349 == 'д' || $answer349 == 'Д') echo "background: #8fff80"; else if($answer349 != '') echo "background: #ff6969"?>' class='field349' type='text' name='q349' value='<?php if(isset($_POST['q349'])) echo $_POST['q349']; ?>'><input maxlength='1' style='<?php $answer350 = $_POST['q350']; if ($answer350 == 'р' || $answer350 == 'Р') echo "background: #8fff80"; else if($answer350 != '') echo "background: #ff6969"?>' class='field350' type='text' name='q350' value='<?php if(isset($_POST['q350'])) echo $_POST['q350']; ?>'><input maxlength='1' style='<?php $answer351 = $_POST['q351']; if ($answer351 == 'д' || $answer351 == 'Д') echo "background: #8fff80"; else if($answer351 != '') echo "background: #ff6969"?>' class='field351' type='text' name='q351' value='<?php if(isset($_POST['q351'])) echo $_POST['q351']; ?>'><input maxlength='1' style='<?php $answer352 = $_POST['q352']; if ($answer352 == 'п' || $answer352 == 'П') echo "background: #8fff80"; else if($answer352 != '') echo "background: #ff6969"?>' class='field352' type='text' name='q352' value='<?php if(isset($_POST['q352'])) echo $_POST['q352']; ?>'><input maxlength='1' style='<?php $answer353 = $_POST['q353']; if ($answer353 == 'д' || $answer353 == 'Д') echo "background: #8fff80"; else if($answer353 != '') echo "background: #ff6969"?>' class='field353' type='text' name='q353' value='<?php if(isset($_POST['q353'])) echo $_POST['q353']; ?>'><input maxlength='1' style='<?php $answer354 = $_POST['q354']; if ($answer354 == 'п' || $answer354 == 'П') echo "background: #8fff80"; else if($answer354 != '') echo "background: #ff6969"?>' class='field354' type='text' name='q354' value='<?php if(isset($_POST['q354'])) echo $_POST['q354']; ?>'><input maxlength='1' style='<?php $answer355 = $_POST['q355']; if ($answer355 == 'л' || $answer355 == 'Л') echo "background: #8fff80"; else if($answer355 != '') echo "background: #ff6969"?>' class='field355' type='text' name='q355' value='<?php if(isset($_POST['q355'])) echo $_POST['q355']; ?>'><input maxlength='1' style='<?php $answer356 = $_POST['q356']; if ($answer356 == 'п' || $answer356 == 'П') echo "background: #8fff80"; else if($answer356 != '') echo "background: #ff6969"?>' class='field356' type='text' name='q356' value='<?php if(isset($_POST['q356'])) echo $_POST['q356']; ?>'><input maxlength='1' style='<?php $answer357 = $_POST['q357']; if ($answer357 == 'д' || $answer357 == 'Д') echo "background: #8fff80"; else if($answer357 != '') echo "background: #ff6969"?>' class='field357' type='text' name='q357' value='<?php if(isset($_POST['q357'])) echo $_POST['q357']; ?>'><input maxlength='1' style='<?php $answer358 = $_POST['q358']; if ($answer358 == 'п' || $answer358 == 'П') echo "background: #8fff80"; else if($answer358 != '') echo "background: #ff6969"?>' class='field358' type='text' name='q358' value='<?php if(isset($_POST['q358'])) echo $_POST['q358']; ?>'><input maxlength='1' style='<?php $answer359 = $_POST['q359']; if ($answer359 == 'д' || $answer359 == 'Д') echo "background: #8fff80"; else if($answer359 != '') echo "background: #ff6969"?>' class='field359' type='text' name='q359' value='<?php if(isset($_POST['q359'])) echo $_POST['q359']; ?>'><input maxlength='1' style='<?php $answer360 = $_POST['q360']; if ($answer360 == 'р' || $answer360 == 'Р') echo "background: #8fff80"; else if($answer360 != '') echo "background: #ff6969"?>' class='field360' type='text' name='q360' value='<?php if(isset($_POST['q360'])) echo $_POST['q360']; ?>'><input maxlength='1' style='<?php $answer363 = $_POST['q363']; if ($answer363 == 'д' || $answer363 == 'Д') echo "background: #8fff80"; else if($answer363 != '') echo "background: #ff6969"?>' class='field363' type='text' name='q363' value='<?php if(isset($_POST['q363'])) echo $_POST['q363']; ?>'><input maxlength='1' style='<?php $answer365 = $_POST['q365']; if ($answer365 == 'м' || $answer365 == 'М') echo "background: #8fff80"; else if($answer365 != '') echo "background: #ff6969"?>' class='field365' type='text' name='q365' value='<?php if(isset($_POST['q365'])) echo $_POST['q365']; ?>'><input maxlength='1' style='<?php $answer376 = $_POST['q376']; if ($answer376 == 'д' || $answer376 == 'Д') echo "background: #8fff80"; else if($answer376 != '') echo "background: #ff6969"?>' class='field376' type='text' name='q376' value='<?php if(isset($_POST['q376'])) echo $_POST['q376']; ?>'><input maxlength='1' style='<?php $answer393 = $_POST['q393']; if ($answer393 == 'п' || $answer393 == 'П') echo "background: #8fff80"; else if($answer393 != '') echo "background: #ff6969"?>' class='field393' type='text' name='q393' value='<?php if(isset($_POST['q393'])) echo $_POST['q393']; ?>'><input maxlength='1' style='<?php $answer395 = $_POST['q395']; if ($answer395 == 'д' || $answer395 == 'Д') echo "background: #8fff80"; else if($answer395 != '') echo "background: #ff6969"?>' class='field395' type='text' name='q395' value='<?php if(isset($_POST['q395'])) echo $_POST['q395']; ?>'><input maxlength='1' style='<?php $answer406 = $_POST['q406']; if ($answer406 == 'и' || $answer406 == 'И') echo "background: #8fff80"; else if($answer406 != '') echo "background: #ff6969"?>' class='field406' type='text' name='q406' value='<?php if(isset($_POST['q406'])) echo $_POST['q406']; ?>'><input maxlength='1' style='<?php $answer423 = $_POST['q423']; if ($answer423 == 'д' || $answer423 == 'Д') echo "background: #8fff80"; else if($answer423 != '') echo "background: #ff6969"?>' class='field423' type='text' name='q423' value='<?php if(isset($_POST['q423'])) echo $_POST['q423']; ?>'><input maxlength='1' style='<?php $answer425 = $_POST['q425']; if ($answer425 == 'м' || $answer425 == 'М') echo "background: #8fff80"; else if($answer425 != '') echo "background: #ff6969"?>' class='field425' type='text' name='q425' value='<?php if(isset($_POST['q425'])) echo $_POST['q425']; ?>'><input maxlength='1' style='<?php $answer436 = $_POST['q436']; if ($answer436 == 'д' || $answer436 == 'Д') echo "background: #8fff80"; else if($answer436 != '') echo "background: #ff6969"?>' class='field436' type='text' name='q436' value='<?php if(isset($_POST['q436'])) echo $_POST['q436']; ?>'><input maxlength='1' style='<?php $answer453 = $_POST['q453']; if ($answer453 == 'п' || $answer453 == 'П') echo "background: #8fff80"; else if($answer453 != '') echo "background: #ff6969"?>' class='field453' type='text' name='q453' value='<?php if(isset($_POST['q453'])) echo $_POST['q453']; ?>'><input maxlength='1' style='<?php $answer455 = $_POST['q455']; if ($answer455 == 'м' || $answer455 == 'М') echo "background: #8fff80"; else if($answer455 != '') echo "background: #ff6969"?>' class='field455' type='text' name='q455' value='<?php if(isset($_POST['q455'])) echo $_POST['q455']; ?>'><input maxlength='1' style='<?php $answer466 = $_POST['q466']; if ($answer466 == 'и' || $answer466 == 'И') echo "background: #8fff80"; else if($answer466 != '') echo "background: #ff6969"?>' class='field466' type='text' name='q466' value='<?php if(isset($_POST['q466'])) echo $_POST['q466']; ?>'><input maxlength='1' style='<?php $answer483 = $_POST['q483']; if ($answer483 == 'д' || $answer483 == 'Д') echo "background: #8fff80"; else if($answer483 != '') echo "background: #ff6969"?>' class='field483' type='text' name='q483' value='<?php if(isset($_POST['q483'])) echo $_POST['q483']; ?>'><input maxlength='1' style='<?php $answer485 = $_POST['q485']; if ($answer485 == 'д' || $answer485 == 'Д') echo "background: #8fff80"; else if($answer485 != '') echo "background: #ff6969"?>' class='field485' type='text' name='q485' value='<?php if(isset($_POST['q485'])) echo $_POST['q485']; ?>'><input maxlength='1' style='<?php $answer496 = $_POST['q496']; if ($answer496 == 'д' || $answer496 == 'Д') echo "background: #8fff80"; else if($answer496 != '') echo "background: #ff6969"?>' class='field496' type='text' name='q496' value='<?php if(isset($_POST['q496'])) echo $_POST['q496']; ?>'><input maxlength='1' style='<?php $answer513 = $_POST['q513']; if ($answer513 == 'п' || $answer513 == 'П') echo "background: #8fff80"; else if($answer513 != '') echo "background: #ff6969"?>' class='field513' type='text' name='q513' value='<?php if(isset($_POST['q513'])) echo $_POST['q513']; ?>'><input maxlength='1' style='<?php $answer515 = $_POST['q515']; if ($answer515 == 'и' || $answer515 == 'И') echo "background: #8fff80"; else if($answer515 != '') echo "background: #ff6969"?>' class='field515' type='text' name='q515' value='<?php if(isset($_POST['q515'])) echo $_POST['q515']; ?>'><input maxlength='1' style='<?php $answer526 = $_POST['q526']; if ($answer526 == 'р' || $answer526 == 'Р') echo "background: #8fff80"; else if($answer526 != '') echo "background: #ff6969"?>' class='field526' type='text' name='q526' value='<?php if(isset($_POST['q526'])) echo $_POST['q526']; ?>'><input maxlength='1' style='<?php $answer543 = $_POST['q543']; if ($answer543 == 'р' || $answer543 == 'Р') echo "background: #8fff80"; else if($answer543 != '') echo "background: #ff6969"?>' class='field543' type='text' name='q543' value='<?php if(isset($_POST['q543'])) echo $_POST['q543']; ?>'><input maxlength='1' style='<?php $answer556 = $_POST['q556']; if ($answer556 == 'д' || $answer556 == 'Д') echo "background: #8fff80"; else if($answer556 != '') echo "background: #ff6969"?>' class='field556' type='text' name='q556' value='<?php if(isset($_POST['q556'])) echo $_POST['q556']; ?>'><input maxlength='1' style='<?php $answer573 = $_POST['q573']; if ($answer573 == 'д' || $answer573 == 'Д') echo "background: #8fff80"; else if($answer573 != '') echo "background: #ff6969"?>' class='field573' type='text' name='q573' value='<?php if(isset($_POST['q573'])) echo $_POST['q573']; ?>'><input maxlength='1' style='<?php $answer586 = $_POST['q586']; if ($answer586 == 'р' || $answer586 == 'Р') echo "background: #8fff80"; else if($answer586 != '') echo "background: #ff6969"?>' class='field586' type='text' name='q586' value='<?php if(isset($_POST['q586'])) echo $_POST['q586']; ?>'><input maxlength='1' style='<?php $answer603 = $_POST['q603']; if ($answer603 == 'д' || $answer603 == 'Д') echo "background: #8fff80"; else if($answer603 != '') echo "background: #ff6969"?>' class='field603' type='text' name='q603' value='<?php if(isset($_POST['q603'])) echo $_POST['q603']; ?>'><input maxlength='1' style='<?php $answer616 = $_POST['q616']; if ($answer616 == 'д' || $answer616 == 'Д') echo "background: #8fff80"; else if($answer616 != '') echo "background: #ff6969"?>' class='field616' type='text' name='q616' value='<?php if(isset($_POST['q616'])) echo $_POST['q616']; ?>'><input maxlength='1' style='<?php $answer633 = $_POST['q633']; if ($answer633 == 'р' || $answer633 == 'Р') echo "background: #8fff80"; else if($answer633 != '') echo "background: #ff6969"?>' class='field633' type='text' name='q633' value='<?php if(isset($_POST['q633'])) echo $_POST['q633']; ?>'><input maxlength='1' style='<?php $answer646 = $_POST['q646']; if ($answer646 == 'р' || $answer646 == 'Р') echo "background: #8fff80"; else if($answer646 != '') echo "background: #ff6969"?>' class='field646' type='text' name='q646' value='<?php if(isset($_POST['q646'])) echo $_POST['q646']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer1 = $_POST['q1'];
if ($answer1 == 'ч' || $answer1 == 'Ч') { $totalCorrect++; }
$answer2 = $_POST['q2'];
if ($answer2 == 'н' || $answer2 == 'Н') { $totalCorrect++; }
$answer3 = $_POST['q3'];
if ($answer3 == 'о' || $answer3 == 'О') { $totalCorrect++; }
$answer4 = $_POST['q4'];
if ($answer4 == 'с' || $answer4 == 'С') { $totalCorrect++; }
$answer5 = $_POST['q5'];
if ($answer5 == 'г' || $answer5 == 'Г') { $totalCorrect++; }
$answer6 = $_POST['q6'];
if ($answer6 == 'м' || $answer6 == 'М') { $totalCorrect++; }
$answer7 = $_POST['q7'];
if ($answer7 == 'л' || $answer7 == 'Л') { $totalCorrect++; }
$answer8 = $_POST['q8'];
if ($answer8 == 'п' || $answer8 == 'П') { $totalCorrect++; }
$answer9 = $_POST['q9'];
if ($answer9 == 'ь' || $answer9 == 'Ь') { $totalCorrect++; }
$answer10 = $_POST['q10'];
if ($answer10 == 'м' || $answer10 == 'М') { $totalCorrect++; }
$answer11 = $_POST['q11'];
if ($answer11 == 'б' || $answer11 == 'Б') { $totalCorrect++; }
$answer12 = $_POST['q12'];
if ($answer12 == 'и' || $answer12 == 'И') { $totalCorrect++; }
$answer13 = $_POST['q13'];
if ($answer13 == 'и' || $answer13 == 'И') { $totalCorrect++; }
$answer14 = $_POST['q14'];
if ($answer14 == 'л' || $answer14 == 'Л') { $totalCorrect++; }
$answer15 = $_POST['q15'];
if ($answer15 == 'и' || $answer15 == 'И') { $totalCorrect++; }
$answer16 = $_POST['q16'];
if ($answer16 == 'л' || $answer16 == 'Л') { $totalCorrect++; }
$answer17 = $_POST['q17'];
if ($answer17 == 'м' || $answer17 == 'М') { $totalCorrect++; }
$answer33 = $_POST['q33'];
if ($answer33 == 'а' || $answer33 == 'А') { $totalCorrect++; }
$answer35 = $_POST['q35'];
if ($answer35 == 'п' || $answer35 == 'П') { $totalCorrect++; }
$answer46 = $_POST['q46'];
if ($answer46 == 'п' || $answer46 == 'П') { $totalCorrect++; }
$answer63 = $_POST['q63'];
if ($answer63 == 'о' || $answer63 == 'О') { $totalCorrect++; }
$answer65 = $_POST['q65'];
if ($answer65 == 'ш' || $answer65 == 'Ш') { $totalCorrect++; }
$answer76 = $_POST['q76'];
if ($answer76 == 'л' || $answer76 == 'Л') { $totalCorrect++; }
$answer93 = $_POST['q93'];
if ($answer93 == 'а' || $answer93 == 'А') { $totalCorrect++; }
$answer95 = $_POST['q95'];
if ($answer95 == 'п' || $answer95 == 'П') { $totalCorrect++; }
$answer106 = $_POST['q106'];
if ($answer106 == 'п' || $answer106 == 'П') { $totalCorrect++; }
$answer123 = $_POST['q123'];
if ($answer123 == 'л' || $answer123 == 'Л') { $totalCorrect++; }
$answer125 = $_POST['q125'];
if ($answer125 == 'л' || $answer125 == 'Л') { $totalCorrect++; }
$answer136 = $_POST['q136'];
if ($answer136 == 'л' || $answer136 == 'Л') { $totalCorrect++; }
$answer153 = $_POST['q153'];
if ($answer153 == 'а' || $answer153 == 'А') { $totalCorrect++; }
$answer155 = $_POST['q155'];
if ($answer155 == 'п' || $answer155 == 'П') { $totalCorrect++; }
$answer166 = $_POST['q166'];
if ($answer166 == 'п' || $answer166 == 'П') { $totalCorrect++; }
$answer183 = $_POST['q183'];
if ($answer183 == 'л' || $answer183 == 'Л') { $totalCorrect++; }
$answer185 = $_POST['q185'];
if ($answer185 == 'л' || $answer185 == 'Л') { $totalCorrect++; }
$answer196 = $_POST['q196'];
if ($answer196 == 'л' || $answer196 == 'Л') { $totalCorrect++; }
$answer213 = $_POST['q213'];
if ($answer213 == 'п' || $answer213 == 'П') { $totalCorrect++; }
$answer215 = $_POST['q215'];
if ($answer215 == 'м' || $answer215 == 'М') { $totalCorrect++; }
$answer226 = $_POST['q226'];
if ($answer226 == 'п' || $answer226 == 'П') { $totalCorrect++; }
$answer243 = $_POST['q243'];
if ($answer243 == 'л' || $answer243 == 'Л') { $totalCorrect++; }
$answer245 = $_POST['q245'];
if ($answer245 == 'м' || $answer245 == 'М') { $totalCorrect++; }
$answer256 = $_POST['q256'];
if ($answer256 == 'д' || $answer256 == 'Д') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == 'п' || $answer273 == 'П') { $totalCorrect++; }
$answer275 = $_POST['q275'];
if ($answer275 == 'л' || $answer275 == 'Л') { $totalCorrect++; }
$answer286 = $_POST['q286'];
if ($answer286 == 'п' || $answer286 == 'П') { $totalCorrect++; }
$answer303 = $_POST['q303'];
if ($answer303 == 'п' || $answer303 == 'П') { $totalCorrect++; }
$answer305 = $_POST['q305'];
if ($answer305 == 'м' || $answer305 == 'М') { $totalCorrect++; }
$answer316 = $_POST['q316'];
if ($answer316 == 'д' || $answer316 == 'Д') { $totalCorrect++; }
$answer333 = $_POST['q333'];
if ($answer333 == 'д' || $answer333 == 'Д') { $totalCorrect++; }
$answer335 = $_POST['q335'];
if ($answer335 == 'д' || $answer335 == 'Д') { $totalCorrect++; }
$answer336 = $_POST['q336'];
if ($answer336 == 'п' || $answer336 == 'П') { $totalCorrect++; }
$answer337 = $_POST['q337'];
if ($answer337 == 'л' || $answer337 == 'Л') { $totalCorrect++; }
$answer338 = $_POST['q338'];
if ($answer338 == 'п' || $answer338 == 'П') { $totalCorrect++; }
$answer339 = $_POST['q339'];
if ($answer339 == 'о' || $answer339 == 'О') { $totalCorrect++; }
$answer340 = $_POST['q340'];
if ($answer340 == 'а' || $answer340 == 'А') { $totalCorrect++; }
$answer341 = $_POST['q341'];
if ($answer341 == 'л' || $answer341 == 'Л') { $totalCorrect++; }
$answer342 = $_POST['q342'];
if ($answer342 == 'п' || $answer342 == 'П') { $totalCorrect++; }
$answer343 = $_POST['q343'];
if ($answer343 == 'л' || $answer343 == 'Л') { $totalCorrect++; }
$answer344 = $_POST['q344'];
if ($answer344 == 'п' || $answer344 == 'П') { $totalCorrect++; }
$answer345 = $_POST['q345'];
if ($answer345 == 'д' || $answer345 == 'Д') { $totalCorrect++; }
$answer346 = $_POST['q346'];
if ($answer346 == 'р' || $answer346 == 'Р') { $totalCorrect++; }
$answer347 = $_POST['q347'];
if ($answer347 == 'д' || $answer347 == 'Д') { $totalCorrect++; }
$answer348 = $_POST['q348'];
if ($answer348 == 'р' || $answer348 == 'Р') { $totalCorrect++; }
$answer349 = $_POST['q349'];
if ($answer349 == 'д' || $answer349 == 'Д') { $totalCorrect++; }
$answer350 = $_POST['q350'];
if ($answer350 == 'р' || $answer350 == 'Р') { $totalCorrect++; }
$answer351 = $_POST['q351'];
if ($answer351 == 'д' || $answer351 == 'Д') { $totalCorrect++; }
$answer352 = $_POST['q352'];
if ($answer352 == 'п' || $answer352 == 'П') { $totalCorrect++; }
$answer353 = $_POST['q353'];
if ($answer353 == 'д' || $answer353 == 'Д') { $totalCorrect++; }
$answer354 = $_POST['q354'];
if ($answer354 == 'п' || $answer354 == 'П') { $totalCorrect++; }
$answer355 = $_POST['q355'];
if ($answer355 == 'л' || $answer355 == 'Л') { $totalCorrect++; }
$answer356 = $_POST['q356'];
if ($answer356 == 'п' || $answer356 == 'П') { $totalCorrect++; }
$answer357 = $_POST['q357'];
if ($answer357 == 'д' || $answer357 == 'Д') { $totalCorrect++; }
$answer358 = $_POST['q358'];
if ($answer358 == 'п' || $answer358 == 'П') { $totalCorrect++; }
$answer359 = $_POST['q359'];
if ($answer359 == 'д' || $answer359 == 'Д') { $totalCorrect++; }
$answer360 = $_POST['q360'];
if ($answer360 == 'р' || $answer360 == 'Р') { $totalCorrect++; }
$answer363 = $_POST['q363'];
if ($answer363 == 'д' || $answer363 == 'Д') { $totalCorrect++; }
$answer365 = $_POST['q365'];
if ($answer365 == 'м' || $answer365 == 'М') { $totalCorrect++; }
$answer376 = $_POST['q376'];
if ($answer376 == 'д' || $answer376 == 'Д') { $totalCorrect++; }
$answer393 = $_POST['q393'];
if ($answer393 == 'п' || $answer393 == 'П') { $totalCorrect++; }
$answer395 = $_POST['q395'];
if ($answer395 == 'д' || $answer395 == 'Д') { $totalCorrect++; }
$answer406 = $_POST['q406'];
if ($answer406 == 'и' || $answer406 == 'И') { $totalCorrect++; }
$answer423 = $_POST['q423'];
if ($answer423 == 'д' || $answer423 == 'Д') { $totalCorrect++; }
$answer425 = $_POST['q425'];
if ($answer425 == 'м' || $answer425 == 'М') { $totalCorrect++; }
$answer436 = $_POST['q436'];
if ($answer436 == 'д' || $answer436 == 'Д') { $totalCorrect++; }
$answer453 = $_POST['q453'];
if ($answer453 == 'п' || $answer453 == 'П') { $totalCorrect++; }
$answer455 = $_POST['q455'];
if ($answer455 == 'м' || $answer455 == 'М') { $totalCorrect++; }
$answer466 = $_POST['q466'];
if ($answer466 == 'и' || $answer466 == 'И') { $totalCorrect++; }
$answer483 = $_POST['q483'];
if ($answer483 == 'д' || $answer483 == 'Д') { $totalCorrect++; }
$answer485 = $_POST['q485'];
if ($answer485 == 'д' || $answer485 == 'Д') { $totalCorrect++; }
$answer496 = $_POST['q496'];
if ($answer496 == 'д' || $answer496 == 'Д') { $totalCorrect++; }
$answer513 = $_POST['q513'];
if ($answer513 == 'п' || $answer513 == 'П') { $totalCorrect++; }
$answer515 = $_POST['q515'];
if ($answer515 == 'и' || $answer515 == 'И') { $totalCorrect++; }
$answer526 = $_POST['q526'];
if ($answer526 == 'р' || $answer526 == 'Р') { $totalCorrect++; }
$answer543 = $_POST['q543'];
if ($answer543 == 'р' || $answer543 == 'Р') { $totalCorrect++; }
$answer556 = $_POST['q556'];
if ($answer556 == 'д' || $answer556 == 'Д') { $totalCorrect++; }
$answer573 = $_POST['q573'];
if ($answer573 == 'д' || $answer573 == 'Д') { $totalCorrect++; }
$answer586 = $_POST['q586'];
if ($answer586 == 'р' || $answer586 == 'Р') { $totalCorrect++; }
$answer603 = $_POST['q603'];
if ($answer603 == 'д' || $answer603 == 'Д') { $totalCorrect++; }
$answer616 = $_POST['q616'];
if ($answer616 == 'д' || $answer616 == 'Д') { $totalCorrect++; }
$answer633 = $_POST['q633'];
if ($answer633 == 'р' || $answer633 == 'Р') { $totalCorrect++; }
$answer646 = $_POST['q646'];
if ($answer646 == 'р' || $answer646 == 'Р') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. </div>";
echo "<div class='question'>2. </div>";
echo "<div class='question'>3. </div>";
echo "<div class='question'>4. </div>";
echo "<div class='question'>5. </div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 100 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>