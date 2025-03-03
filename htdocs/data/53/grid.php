<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field7' type='text' name='q7' value='<?php if(isset($_POST['q7'])) echo $_POST['q7']; ?>'><a class='num1'>1</a><input class='field26' type='text' name='q26' value='<?php if(isset($_POST['q26'])) echo $_POST['q26']; ?>'><a class='num2'>2</a><input class='field29' type='text' name='q29' value='<?php if(isset($_POST['q29'])) echo $_POST['q29']; ?>'><a class='num3'>3</a><input class='field31' type='text' name='q31' value='<?php if(isset($_POST['q31'])) echo $_POST['q31']; ?>'><input class='field49' type='text' name='q49' value='<?php if(isset($_POST['q49'])) echo $_POST['q49']; ?>'><a class='num4'>4</a><input class='field50' type='text' name='q50' value='<?php if(isset($_POST['q50'])) echo $_POST['q50']; ?>'><input class='field51' type='text' name='q51' value='<?php if(isset($_POST['q51'])) echo $_POST['q51']; ?>'><input class='field52' type='text' name='q52' value='<?php if(isset($_POST['q52'])) echo $_POST['q52']; ?>'><input class='field53' type='text' name='q53' value='<?php if(isset($_POST['q53'])) echo $_POST['q53']; ?>'><input class='field54' type='text' name='q54' value='<?php if(isset($_POST['q54'])) echo $_POST['q54']; ?>'><input class='field55' type='text' name='q55' value='<?php if(isset($_POST['q55'])) echo $_POST['q55']; ?>'><input class='field56' type='text' name='q56' value='<?php if(isset($_POST['q56'])) echo $_POST['q56']; ?>'><input class='field57' type='text' name='q57' value='<?php if(isset($_POST['q57'])) echo $_POST['q57']; ?>'><input class='field74' type='text' name='q74' value='<?php if(isset($_POST['q74'])) echo $_POST['q74']; ?>'><input class='field77' type='text' name='q77' value='<?php if(isset($_POST['q77'])) echo $_POST['q77']; ?>'><input class='field79' type='text' name='q79' value='<?php if(isset($_POST['q79'])) echo $_POST['q79']; ?>'><input class='field98' type='text' name='q98' value='<?php if(isset($_POST['q98'])) echo $_POST['q98']; ?>'><input class='field101' type='text' name='q101' value='<?php if(isset($_POST['q101'])) echo $_POST['q101']; ?>'><input class='field103' type='text' name='q103' value='<?php if(isset($_POST['q103'])) echo $_POST['q103']; ?>'><input class='field122' type='text' name='q122' value='<?php if(isset($_POST['q122'])) echo $_POST['q122']; ?>'><input class='field124' type='text' name='q124' value='<?php if(isset($_POST['q124'])) echo $_POST['q124']; ?>'><a class='num5'>5</a><input class='field134' type='text' name='q134' value='<?php if(isset($_POST['q134'])) echo $_POST['q134']; ?>'><a class='num6'>6</a><input class='field146' type='text' name='q146' value='<?php if(isset($_POST['q146'])) echo $_POST['q146']; ?>'><input class='field148' type='text' name='q148' value='<?php if(isset($_POST['q148'])) echo $_POST['q148']; ?>'><input class='field151' type='text' name='q151' value='<?php if(isset($_POST['q151'])) echo $_POST['q151']; ?>'><a class='num7'>7</a><input class='field157' type='text' name='q157' value='<?php if(isset($_POST['q157'])) echo $_POST['q157']; ?>'><a class='num8'>8</a><input class='field158' type='text' name='q158' value='<?php if(isset($_POST['q158'])) echo $_POST['q158']; ?>'><input class='field159' type='text' name='q159' value='<?php if(isset($_POST['q159'])) echo $_POST['q159']; ?>'><input class='field160' type='text' name='q160' value='<?php if(isset($_POST['q160'])) echo $_POST['q160']; ?>'><input class='field161' type='text' name='q161' value='<?php if(isset($_POST['q161'])) echo $_POST['q161']; ?>'><input class='field162' type='text' name='q162' value='<?php if(isset($_POST['q162'])) echo $_POST['q162']; ?>'><input class='field163' type='text' name='q163' value='<?php if(isset($_POST['q163'])) echo $_POST['q163']; ?>'><input class='field170' type='text' name='q170' value='<?php if(isset($_POST['q170'])) echo $_POST['q170']; ?>'><a class='num9'>9</a><input class='field171' type='text' name='q171' value='<?php if(isset($_POST['q171'])) echo $_POST['q171']; ?>'><input class='field172' type='text' name='q172' value='<?php if(isset($_POST['q172'])) echo $_POST['q172']; ?>'><input class='field173' type='text' name='q173' value='<?php if(isset($_POST['q173'])) echo $_POST['q173']; ?>'><input class='field174' type='text' name='q174' value='<?php if(isset($_POST['q174'])) echo $_POST['q174']; ?>'><input class='field175' type='text' name='q175' value='<?php if(isset($_POST['q175'])) echo $_POST['q175']; ?>'><input class='field176' type='text' name='q176' value='<?php if(isset($_POST['q176'])) echo $_POST['q176']; ?>'><input class='field182' type='text' name='q182' value='<?php if(isset($_POST['q182'])) echo $_POST['q182']; ?>'><input class='field194' type='text' name='q194' value='<?php if(isset($_POST['q194'])) echo $_POST['q194']; ?>'><input class='field196' type='text' name='q196' value='<?php if(isset($_POST['q196'])) echo $_POST['q196']; ?>'><input class='field199' type='text' name='q199' value='<?php if(isset($_POST['q199'])) echo $_POST['q199']; ?>'><input class='field206' type='text' name='q206' value='<?php if(isset($_POST['q206'])) echo $_POST['q206']; ?>'><input class='field218' type='text' name='q218' value='<?php if(isset($_POST['q218'])) echo $_POST['q218']; ?>'><input class='field223' type='text' name='q223' value='<?php if(isset($_POST['q223'])) echo $_POST['q223']; ?>'><input class='field230' type='text' name='q230' value='<?php if(isset($_POST['q230'])) echo $_POST['q230']; ?>'><a class='num10'>10</a><input class='field231' type='text' name='q231' value='<?php if(isset($_POST['q231'])) echo $_POST['q231']; ?>'><input class='field232' type='text' name='q232' value='<?php if(isset($_POST['q232'])) echo $_POST['q232']; ?>'><input class='field233' type='text' name='q233' value='<?php if(isset($_POST['q233'])) echo $_POST['q233']; ?>'><input class='field234' type='text' name='q234' value='<?php if(isset($_POST['q234'])) echo $_POST['q234']; ?>'><input class='field247' type='text' name='q247' value='<?php if(isset($_POST['q247'])) echo $_POST['q247']; ?>'><input class='field254' type='text' name='q254' value='<?php if(isset($_POST['q254'])) echo $_POST['q254']; ?>'><input class='field269' type='text' name='q269' value='<?php if(isset($_POST['q269'])) echo $_POST['q269']; ?>'><a class='num11'>11</a><input class='field270' type='text' name='q270' value='<?php if(isset($_POST['q270'])) echo $_POST['q270']; ?>'><input class='field271' type='text' name='q271' value='<?php if(isset($_POST['q271'])) echo $_POST['q271']; ?>'><input class='field272' type='text' name='q272' value='<?php if(isset($_POST['q272'])) echo $_POST['q272']; ?>'><input class='field273' type='text' name='q273' value='<?php if(isset($_POST['q273'])) echo $_POST['q273']; ?>'><input class='field278' type='text' name='q278' value='<?php if(isset($_POST['q278'])) echo $_POST['q278']; ?>'><input class='field295' type='text' name='q295' value='<?php if(isset($_POST['q295'])) echo $_POST['q295']; ?>'><input class='field302' type='text' name='q302' value='<?php if(isset($_POST['q302'])) echo $_POST['q302']; ?>'><input class='field318' type='text' name='q318' value='<?php if(isset($_POST['q318'])) echo $_POST['q318']; ?>'><a class='num12'>12</a><input class='field319' type='text' name='q319' value='<?php if(isset($_POST['q319'])) echo $_POST['q319']; ?>'><input class='field320' type='text' name='q320' value='<?php if(isset($_POST['q320'])) echo $_POST['q320']; ?>'><input class='field321' type='text' name='q321' value='<?php if(isset($_POST['q321'])) echo $_POST['q321']; ?>'><input class='field322' type='text' name='q322' value='<?php if(isset($_POST['q322'])) echo $_POST['q322']; ?>'><input class='field323' type='text' name='q323' value='<?php if(isset($_POST['q323'])) echo $_POST['q323']; ?>'><input class='field324' type='text' name='q324' value='<?php if(isset($_POST['q324'])) echo $_POST['q324']; ?>'><input class='field325' type='text' name='q325' value='<?php if(isset($_POST['q325'])) echo $_POST['q325']; ?>'><input class='field326' type='text' name='q326' value='<?php if(isset($_POST['q326'])) echo $_POST['q326']; ?>'><input class='field327' type='text' name='q327' value='<?php if(isset($_POST['q327'])) echo $_POST['q327']; ?>'><input class='field343' type='text' name='q343' value='<?php if(isset($_POST['q343'])) echo $_POST['q343']; ?>'><input class='field350' type='text' name='q350' value='<?php if(isset($_POST['q350'])) echo $_POST['q350']; ?>'><input class='field367' type='text' name='q367' value='<?php if(isset($_POST['q367'])) echo $_POST['q367']; ?>'><input class='field390' type='text' name='q390' value='<?php if(isset($_POST['q390'])) echo $_POST['q390']; ?>'><a class='num13'>13</a><input class='field391' type='text' name='q391' value='<?php if(isset($_POST['q391'])) echo $_POST['q391']; ?>'><input class='field392' type='text' name='q392' value='<?php if(isset($_POST['q392'])) echo $_POST['q392']; ?>'><input class='field393' type='text' name='q393' value='<?php if(isset($_POST['q393'])) echo $_POST['q393']; ?>'><a class='num14'>14</a><input class='field394' type='text' name='q394' value='<?php if(isset($_POST['q394'])) echo $_POST['q394']; ?>'><input class='field395' type='text' name='q395' value='<?php if(isset($_POST['q395'])) echo $_POST['q395']; ?>'><input class='field396' type='text' name='q396' value='<?php if(isset($_POST['q396'])) echo $_POST['q396']; ?>'><input class='field397' type='text' name='q397' value='<?php if(isset($_POST['q397'])) echo $_POST['q397']; ?>'><a class='num15'>15</a><input class='field398' type='text' name='q398' value='<?php if(isset($_POST['q398'])) echo $_POST['q398']; ?>'><input class='field399' type='text' name='q399' value='<?php if(isset($_POST['q399'])) echo $_POST['q399']; ?>'><input class='field417' type='text' name='q417' value='<?php if(isset($_POST['q417'])) echo $_POST['q417']; ?>'><input class='field421' type='text' name='q421' value='<?php if(isset($_POST['q421'])) echo $_POST['q421']; ?>'><input class='field441' type='text' name='q441' value='<?php if(isset($_POST['q441'])) echo $_POST['q441']; ?>'><input class='field445' type='text' name='q445' value='<?php if(isset($_POST['q445'])) echo $_POST['q445']; ?>'><input class='field449' type='text' name='q449' value='<?php if(isset($_POST['q449'])) echo $_POST['q449']; ?>'><a class='num16'>16</a><a class='num17'>17</a><input class='field450' type='text' name='q450' value='<?php if(isset($_POST['q450'])) echo $_POST['q450']; ?>'><input class='field451' type='text' name='q451' value='<?php if(isset($_POST['q451'])) echo $_POST['q451']; ?>'><input class='field452' type='text' name='q452' value='<?php if(isset($_POST['q452'])) echo $_POST['q452']; ?>'><input class='field453' type='text' name='q453' value='<?php if(isset($_POST['q453'])) echo $_POST['q453']; ?>'><input class='field454' type='text' name='q454' value='<?php if(isset($_POST['q454'])) echo $_POST['q454']; ?>'><input class='field455' type='text' name='q455' value='<?php if(isset($_POST['q455'])) echo $_POST['q455']; ?>'><input class='field456' type='text' name='q456' value='<?php if(isset($_POST['q456'])) echo $_POST['q456']; ?>'><input class='field461' type='text' name='q461' value='<?php if(isset($_POST['q461'])) echo $_POST['q461']; ?>'><a class='num18'>18</a><input class='field465' type='text' name='q465' value='<?php if(isset($_POST['q465'])) echo $_POST['q465']; ?>'><input class='field468' type='text' name='q468' value='<?php if(isset($_POST['q468'])) echo $_POST['q468']; ?>'><a class='num19'>19</a><input class='field469' type='text' name='q469' value='<?php if(isset($_POST['q469'])) echo $_POST['q469']; ?>'><input class='field470' type='text' name='q470' value='<?php if(isset($_POST['q470'])) echo $_POST['q470']; ?>'><input class='field471' type='text' name='q471' value='<?php if(isset($_POST['q471'])) echo $_POST['q471']; ?>'><input class='field472' type='text' name='q472' value='<?php if(isset($_POST['q472'])) echo $_POST['q472']; ?>'><input class='field473' type='text' name='q473' value='<?php if(isset($_POST['q473'])) echo $_POST['q473']; ?>'><input class='field485' type='text' name='q485' value='<?php if(isset($_POST['q485'])) echo $_POST['q485']; ?>'><input class='field489' type='text' name='q489' value='<?php if(isset($_POST['q489'])) echo $_POST['q489']; ?>'><input class='field493' type='text' name='q493' value='<?php if(isset($_POST['q493'])) echo $_POST['q493']; ?>'><input class='field497' type='text' name='q497' value='<?php if(isset($_POST['q497'])) echo $_POST['q497']; ?>'><input class='field509' type='text' name='q509' value='<?php if(isset($_POST['q509'])) echo $_POST['q509']; ?>'><input class='field513' type='text' name='q513' value='<?php if(isset($_POST['q513'])) echo $_POST['q513']; ?>'><input class='field517' type='text' name='q517' value='<?php if(isset($_POST['q517'])) echo $_POST['q517']; ?>'><input class='field521' type='text' name='q521' value='<?php if(isset($_POST['q521'])) echo $_POST['q521']; ?>'><input class='field533' type='text' name='q533' value='<?php if(isset($_POST['q533'])) echo $_POST['q533']; ?>'><a class='num20'>20</a><input class='field534' type='text' name='q534' value='<?php if(isset($_POST['q534'])) echo $_POST['q534']; ?>'><input class='field535' type='text' name='q535' value='<?php if(isset($_POST['q535'])) echo $_POST['q535']; ?>'><input class='field536' type='text' name='q536' value='<?php if(isset($_POST['q536'])) echo $_POST['q536']; ?>'><input class='field537' type='text' name='q537' value='<?php if(isset($_POST['q537'])) echo $_POST['q537']; ?>'><input class='field538' type='text' name='q538' value='<?php if(isset($_POST['q538'])) echo $_POST['q538']; ?>'><input class='field539' type='text' name='q539' value='<?php if(isset($_POST['q539'])) echo $_POST['q539']; ?>'><input class='field540' type='text' name='q540' value='<?php if(isset($_POST['q540'])) echo $_POST['q540']; ?>'><input class='field541' type='text' name='q541' value='<?php if(isset($_POST['q541'])) echo $_POST['q541']; ?>'><input class='field545' type='text' name='q545' value='<?php if(isset($_POST['q545'])) echo $_POST['q545']; ?>'><a class='num21'>21</a><input class='field546' type='text' name='q546' value='<?php if(isset($_POST['q546'])) echo $_POST['q546']; ?>'><input class='field547' type='text' name='q547' value='<?php if(isset($_POST['q547'])) echo $_POST['q547']; ?>'><input class='field548' type='text' name='q548' value='<?php if(isset($_POST['q548'])) echo $_POST['q548']; ?>'><a class='num22'>22</a><input class='field549' type='text' name='q549' value='<?php if(isset($_POST['q549'])) echo $_POST['q549']; ?>'><input class='field550' type='text' name='q550' value='<?php if(isset($_POST['q550'])) echo $_POST['q550']; ?>'><input class='field551' type='text' name='q551' value='<?php if(isset($_POST['q551'])) echo $_POST['q551']; ?>'><input class='field552' type='text' name='q552' value='<?php if(isset($_POST['q552'])) echo $_POST['q552']; ?>'><input class='field557' type='text' name='q557' value='<?php if(isset($_POST['q557'])) echo $_POST['q557']; ?>'><input class='field561' type='text' name='q561' value='<?php if(isset($_POST['q561'])) echo $_POST['q561']; ?>'><input class='field572' type='text' name='q572' value='<?php if(isset($_POST['q572'])) echo $_POST['q572']; ?>'><input class='field581' type='text' name='q581' value='<?php if(isset($_POST['q581'])) echo $_POST['q581']; ?>'><input class='field585' type='text' name='q585' value='<?php if(isset($_POST['q585'])) echo $_POST['q585']; ?>'><input class='field596' type='text' name='q596' value='<?php if(isset($_POST['q596'])) echo $_POST['q596']; ?>'><input class='field605' type='text' name='q605' value='<?php if(isset($_POST['q605'])) echo $_POST['q605']; ?>'><input class='field619' type='text' name='q619' value='<?php if(isset($_POST['q619'])) echo $_POST['q619']; ?>'><a class='num23'>23</a><input class='field620' type='text' name='q620' value='<?php if(isset($_POST['q620'])) echo $_POST['q620']; ?>'><input class='field621' type='text' name='q621' value='<?php if(isset($_POST['q621'])) echo $_POST['q621']; ?>'><input class='field622' type='text' name='q622' value='<?php if(isset($_POST['q622'])) echo $_POST['q622']; ?>'><input class='field623' type='text' name='q623' value='<?php if(isset($_POST['q623'])) echo $_POST['q623']; ?>'><input class='field624' type='text' name='q624' value='<?php if(isset($_POST['q624'])) echo $_POST['q624']; ?>'><input class='field629' type='text' name='q629' value='<?php if(isset($_POST['q629'])) echo $_POST['q629']; ?>'><input class='field644' type='text' name='q644' value='<?php if(isset($_POST['q644'])) echo $_POST['q644']; ?>'><input class='field653' type='text' name='q653' value='<?php if(isset($_POST['q653'])) echo $_POST['q653']; ?>'><a class='num24'>24</a><input class='field654' type='text' name='q654' value='<?php if(isset($_POST['q654'])) echo $_POST['q654']; ?>'><input class='field655' type='text' name='q655' value='<?php if(isset($_POST['q655'])) echo $_POST['q655']; ?>'><input class='field656' type='text' name='q656' value='<?php if(isset($_POST['q656'])) echo $_POST['q656']; ?>'><input class='field657' type='text' name='q657' value='<?php if(isset($_POST['q657'])) echo $_POST['q657']; ?>'><input class='field658' type='text' name='q658' value='<?php if(isset($_POST['q658'])) echo $_POST['q658']; ?>'><input class='field659' type='text' name='q659' value='<?php if(isset($_POST['q659'])) echo $_POST['q659']; ?>'><input class='field677' type='text' name='q677' value='<?php if(isset($_POST['q677'])) echo $_POST['q677']; ?>'><input class='field701' type='text' name='q701' value='<?php if(isset($_POST['q701'])) echo $_POST['q701']; ?>'><input class='field725' type='text' name='q725' value='<?php if(isset($_POST['q725'])) echo $_POST['q725']; ?>'><a class='num25'>25</a><input class='field726' type='text' name='q726' value='<?php if(isset($_POST['q726'])) echo $_POST['q726']; ?>'><input class='field727' type='text' name='q727' value='<?php if(isset($_POST['q727'])) echo $_POST['q727']; ?>'><input class='field728' type='text' name='q728' value='<?php if(isset($_POST['q728'])) echo $_POST['q728']; ?>'><input class='field729' type='text' name='q729' value='<?php if(isset($_POST['q729'])) echo $_POST['q729']; ?>'><input class='field730' type='text' name='q730' value='<?php if(isset($_POST['q730'])) echo $_POST['q730']; ?>'><input class='field731' type='text' name='q731' value='<?php if(isset($_POST['q731'])) echo $_POST['q731']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer7 = $_POST['q7'];
if ($answer7 == 't' || $answer7 == 'T') { $totalCorrect++; }
$answer26 = $_POST['q26'];
if ($answer26 == 'h' || $answer26 == 'H') { $totalCorrect++; }
$answer29 = $_POST['q29'];
if ($answer29 == 'r' || $answer29 == 'R') { $totalCorrect++; }
$answer31 = $_POST['q31'];
if ($answer31 == 'r' || $answer31 == 'R') { $totalCorrect++; }
$answer49 = $_POST['q49'];
if ($answer49 == 'v' || $answer49 == 'V') { $totalCorrect++; }
$answer50 = $_POST['q50'];
if ($answer50 == 'a' || $answer50 == 'A') { $totalCorrect++; }
$answer51 = $_POST['q51'];
if ($answer51 == 'n' || $answer51 == 'N') { $totalCorrect++; }
$answer52 = $_POST['q52'];
if ($answer52 == 'd' || $answer52 == 'D') { $totalCorrect++; }
$answer53 = $_POST['q53'];
if ($answer53 == 'a' || $answer53 == 'A') { $totalCorrect++; }
$answer54 = $_POST['q54'];
if ($answer54 == 'l' || $answer54 == 'L') { $totalCorrect++; }
$answer55 = $_POST['q55'];
if ($answer55 == 'i' || $answer55 == 'I') { $totalCorrect++; }
$answer56 = $_POST['q56'];
if ($answer56 == 's' || $answer56 == 'S') { $totalCorrect++; }
$answer57 = $_POST['q57'];
if ($answer57 == 'm' || $answer57 == 'M') { $totalCorrect++; }
$answer74 = $_POST['q74'];
if ($answer74 == 'n' || $answer74 == 'N') { $totalCorrect++; }
$answer77 = $_POST['q77'];
if ($answer77 == 'p' || $answer77 == 'P') { $totalCorrect++; }
$answer79 = $_POST['q79'];
if ($answer79 == 'a' || $answer79 == 'A') { $totalCorrect++; }
$answer98 = $_POST['q98'];
if ($answer98 == 'd' || $answer98 == 'D') { $totalCorrect++; }
$answer101 = $_POST['q101'];
if ($answer101 == 'e' || $answer101 == 'E') { $totalCorrect++; }
$answer103 = $_POST['q103'];
if ($answer103 == 'l' || $answer103 == 'L') { $totalCorrect++; }
$answer122 = $_POST['q122'];
if ($answer122 == 'c' || $answer122 == 'C') { $totalCorrect++; }
$answer124 = $_POST['q124'];
if ($answer124 == 'j' || $answer124 == 'J') { $totalCorrect++; }
$answer134 = $_POST['q134'];
if ($answer134 == 'k' || $answer134 == 'K') { $totalCorrect++; }
$answer146 = $_POST['q146'];
if ($answer146 == 'u' || $answer146 == 'U') { $totalCorrect++; }
$answer148 = $_POST['q148'];
if ($answer148 == 'u' || $answer148 == 'U') { $totalCorrect++; }
$answer151 = $_POST['q151'];
if ($answer151 == 'd' || $answer151 == 'D') { $totalCorrect++; }
$answer157 = $_POST['q157'];
if ($answer157 == 'w' || $answer157 == 'W') { $totalCorrect++; }
$answer158 = $_POST['q158'];
if ($answer158 == 'i' || $answer158 == 'I') { $totalCorrect++; }
$answer159 = $_POST['q159'];
if ($answer159 == 't' || $answer159 == 'T') { $totalCorrect++; }
$answer160 = $_POST['q160'];
if ($answer160 == 'n' || $answer160 == 'N') { $totalCorrect++; }
$answer161 = $_POST['q161'];
if ($answer161 == 'e' || $answer161 == 'E') { $totalCorrect++; }
$answer162 = $_POST['q162'];
if ($answer162 == 's' || $answer162 == 'S') { $totalCorrect++; }
$answer163 = $_POST['q163'];
if ($answer163 == 's' || $answer163 == 'S') { $totalCorrect++; }
$answer170 = $_POST['q170'];
if ($answer170 == 'f' || $answer170 == 'F') { $totalCorrect++; }
$answer171 = $_POST['q171'];
if ($answer171 == 'o' || $answer171 == 'O') { $totalCorrect++; }
$answer172 = $_POST['q172'];
if ($answer172 == 'r' || $answer172 == 'R') { $totalCorrect++; }
$answer173 = $_POST['q173'];
if ($answer173 == 'g' || $answer173 == 'G') { $totalCorrect++; }
$answer174 = $_POST['q174'];
if ($answer174 == 'e' || $answer174 == 'E') { $totalCorrect++; }
$answer175 = $_POST['q175'];
if ($answer175 == 'r' || $answer175 == 'R') { $totalCorrect++; }
$answer176 = $_POST['q176'];
if ($answer176 == 'y' || $answer176 == 'Y') { $totalCorrect++; }
$answer182 = $_POST['q182'];
if ($answer182 == 'd' || $answer182 == 'D') { $totalCorrect++; }
$answer194 = $_POST['q194'];
if ($answer194 == 'f' || $answer194 == 'F') { $totalCorrect++; }
$answer196 = $_POST['q196'];
if ($answer196 == 'i' || $answer196 == 'I') { $totalCorrect++; }
$answer199 = $_POST['q199'];
if ($answer199 == 'u' || $answer199 == 'U') { $totalCorrect++; }
$answer206 = $_POST['q206'];
if ($answer206 == 'n' || $answer206 == 'N') { $totalCorrect++; }
$answer218 = $_POST['q218'];
if ($answer218 == 's' || $answer218 == 'S') { $totalCorrect++; }
$answer223 = $_POST['q223'];
if ($answer223 == 'g' || $answer223 == 'G') { $totalCorrect++; }
$answer230 = $_POST['q230'];
if ($answer230 == 'a' || $answer230 == 'A') { $totalCorrect++; }
$answer231 = $_POST['q231'];
if ($answer231 == 'r' || $answer231 == 'R') { $totalCorrect++; }
$answer232 = $_POST['q232'];
if ($answer232 == 's' || $answer232 == 'S') { $totalCorrect++; }
$answer233 = $_POST['q233'];
if ($answer233 == 'o' || $answer233 == 'O') { $totalCorrect++; }
$answer234 = $_POST['q234'];
if ($answer234 == 'n' || $answer234 == 'N') { $totalCorrect++; }
$answer247 = $_POST['q247'];
if ($answer247 == ' ' || $answer247 == ' ') { $totalCorrect++; }
$answer254 = $_POST['q254'];
if ($answer254 == 'p' || $answer254 == 'P') { $totalCorrect++; }
$answer269 = $_POST['q269'];
if ($answer269 == 'j' || $answer269 == 'J') { $totalCorrect++; }
$answer270 = $_POST['q270'];
if ($answer270 == 'u' || $answer270 == 'U') { $totalCorrect++; }
$answer271 = $_POST['q271'];
if ($answer271 == 'd' || $answer271 == 'D') { $totalCorrect++; }
$answer272 = $_POST['q272'];
if ($answer272 == 'g' || $answer272 == 'G') { $totalCorrect++; }
$answer273 = $_POST['q273'];
if ($answer273 == 'e' || $answer273 == 'E') { $totalCorrect++; }
$answer278 = $_POST['q278'];
if ($answer278 == 'p' || $answer278 == 'P') { $totalCorrect++; }
$answer295 = $_POST['q295'];
if ($answer295 == 'e' || $answer295 == 'E') { $totalCorrect++; }
$answer302 = $_POST['q302'];
if ($answer302 == 'i' || $answer302 == 'I') { $totalCorrect++; }
$answer318 = $_POST['q318'];
if ($answer318 == 'b' || $answer318 == 'B') { $totalCorrect++; }
$answer319 = $_POST['q319'];
if ($answer319 == 'a' || $answer319 == 'A') { $totalCorrect++; }
$answer320 = $_POST['q320'];
if ($answer320 == 'n' || $answer320 == 'N') { $totalCorrect++; }
$answer321 = $_POST['q321'];
if ($answer321 == 'i' || $answer321 == 'I') { $totalCorrect++; }
$answer322 = $_POST['q322'];
if ($answer322 == 's' || $answer322 == 'S') { $totalCorrect++; }
$answer323 = $_POST['q323'];
if ($answer323 == 'h' || $answer323 == 'H') { $totalCorrect++; }
$answer324 = $_POST['q324'];
if ($answer324 == 'm' || $answer324 == 'M') { $totalCorrect++; }
$answer325 = $_POST['q325'];
if ($answer325 == 'e' || $answer325 == 'E') { $totalCorrect++; }
$answer326 = $_POST['q326'];
if ($answer326 == 'n' || $answer326 == 'N') { $totalCorrect++; }
$answer327 = $_POST['q327'];
if ($answer327 == 't' || $answer327 == 'T') { $totalCorrect++; }
$answer343 = $_POST['q343'];
if ($answer343 == 'l' || $answer343 == 'L') { $totalCorrect++; }
$answer350 = $_POST['q350'];
if ($answer350 == 'g' || $answer350 == 'G') { $totalCorrect++; }
$answer367 = $_POST['q367'];
if ($answer367 == 'e' || $answer367 == 'E') { $totalCorrect++; }
$answer390 = $_POST['q390'];
if ($answer390 == 'p' || $answer390 == 'P') { $totalCorrect++; }
$answer391 = $_POST['q391'];
if ($answer391 == 'r' || $answer391 == 'R') { $totalCorrect++; }
$answer392 = $_POST['q392'];
if ($answer392 == 'o' || $answer392 == 'O') { $totalCorrect++; }
$answer393 = $_POST['q393'];
if ($answer393 == 's' || $answer393 == 'S') { $totalCorrect++; }
$answer394 = $_POST['q394'];
if ($answer394 == 'e' || $answer394 == 'E') { $totalCorrect++; }
$answer395 = $_POST['q395'];
if ($answer395 == 'c' || $answer395 == 'C') { $totalCorrect++; }
$answer396 = $_POST['q396'];
if ($answer396 == 'u' || $answer396 == 'U') { $totalCorrect++; }
$answer397 = $_POST['q397'];
if ($answer397 == 't' || $answer397 == 'T') { $totalCorrect++; }
$answer398 = $_POST['q398'];
if ($answer398 == 'o' || $answer398 == 'O') { $totalCorrect++; }
$answer399 = $_POST['q399'];
if ($answer399 == 'r' || $answer399 == 'R') { $totalCorrect++; }
$answer417 = $_POST['q417'];
if ($answer417 == 'm' || $answer417 == 'M') { $totalCorrect++; }
$answer421 = $_POST['q421'];
if ($answer421 == 'r' || $answer421 == 'R') { $totalCorrect++; }
$answer441 = $_POST['q441'];
if ($answer441 == 'u' || $answer441 == 'U') { $totalCorrect++; }
$answer445 = $_POST['q445'];
if ($answer445 == 'e' || $answer445 == 'E') { $totalCorrect++; }
$answer449 = $_POST['q449'];
if ($answer449 == 'b' || $answer449 == 'B') { $totalCorrect++; }
$answer450 = $_POST['q450'];
if ($answer450 == 'u' || $answer450 == 'U') { $totalCorrect++; }
$answer451 = $_POST['q451'];
if ($answer451 == 'r' || $answer451 == 'R') { $totalCorrect++; }
$answer452 = $_POST['q452'];
if ($answer452 == 'g' || $answer452 == 'G') { $totalCorrect++; }
$answer453 = $_POST['q453'];
if ($answer453 == 'l' || $answer453 == 'L') { $totalCorrect++; }
$answer454 = $_POST['q454'];
if ($answer454 == 'a' || $answer454 == 'A') { $totalCorrect++; }
$answer455 = $_POST['q455'];
if ($answer455 == 'r' || $answer455 == 'R') { $totalCorrect++; }
$answer456 = $_POST['q456'];
if ($answer456 == 'y' || $answer456 == 'Y') { $totalCorrect++; }
$answer461 = $_POST['q461'];
if ($answer461 == 'm' || $answer461 == 'M') { $totalCorrect++; }
$answer465 = $_POST['q465'];
if ($answer465 == 'g' || $answer465 == 'G') { $totalCorrect++; }
$answer468 = $_POST['q468'];
if ($answer468 == 'l' || $answer468 == 'L') { $totalCorrect++; }
$answer469 = $_POST['q469'];
if ($answer469 == 'a' || $answer469 == 'A') { $totalCorrect++; }
$answer470 = $_POST['q470'];
if ($answer470 == 'w' || $answer470 == 'W') { $totalCorrect++; }
$answer471 = $_POST['q471'];
if ($answer471 == 'y' || $answer471 == 'Y') { $totalCorrect++; }
$answer472 = $_POST['q472'];
if ($answer472 == 'e' || $answer472 == 'E') { $totalCorrect++; }
$answer473 = $_POST['q473'];
if ($answer473 == 'r' || $answer473 == 'R') { $totalCorrect++; }
$answer485 = $_POST['q485'];
if ($answer485 == 'a' || $answer485 == 'A') { $totalCorrect++; }
$answer489 = $_POST['q489'];
if ($answer489 == 'g' || $answer489 == 'G') { $totalCorrect++; }
$answer493 = $_POST['q493'];
if ($answer493 == 's' || $answer493 == 'S') { $totalCorrect++; }
$answer497 = $_POST['q497'];
if ($answer497 == 'i' || $answer497 == 'I') { $totalCorrect++; }
$answer509 = $_POST['q509'];
if ($answer509 == 'n' || $answer509 == 'N') { $totalCorrect++; }
$answer513 = $_POST['q513'];
if ($answer513 == 'l' || $answer513 == 'L') { $totalCorrect++; }
$answer517 = $_POST['q517'];
if ($answer517 == 'o' || $answer517 == 'O') { $totalCorrect++; }
$answer521 = $_POST['q521'];
if ($answer521 == 'b' || $answer521 == 'B') { $totalCorrect++; }
$answer533 = $_POST['q533'];
if ($answer533 == 's' || $answer533 == 'S') { $totalCorrect++; }
$answer534 = $_POST['q534'];
if ($answer534 == 'u' || $answer534 == 'U') { $totalCorrect++; }
$answer535 = $_POST['q535'];
if ($answer535 == 's' || $answer535 == 'S') { $totalCorrect++; }
$answer536 = $_POST['q536'];
if ($answer536 == 'p' || $answer536 == 'P') { $totalCorrect++; }
$answer537 = $_POST['q537'];
if ($answer537 == 'i' || $answer537 == 'I') { $totalCorrect++; }
$answer538 = $_POST['q538'];
if ($answer538 == 'c' || $answer538 == 'C') { $totalCorrect++; }
$answer539 = $_POST['q539'];
if ($answer539 == 'i' || $answer539 == 'I') { $totalCorrect++; }
$answer540 = $_POST['q540'];
if ($answer540 == 'o' || $answer540 == 'O') { $totalCorrect++; }
$answer541 = $_POST['q541'];
if ($answer541 == 'n' || $answer541 == 'N') { $totalCorrect++; }
$answer545 = $_POST['q545'];
if ($answer545 == 'e' || $answer545 == 'E') { $totalCorrect++; }
$answer546 = $_POST['q546'];
if ($answer546 == 'v' || $answer546 == 'V') { $totalCorrect++; }
$answer547 = $_POST['q547'];
if ($answer547 == 'i' || $answer547 == 'I') { $totalCorrect++; }
$answer548 = $_POST['q548'];
if ($answer548 == 'c' || $answer548 == 'C') { $totalCorrect++; }
$answer549 = $_POST['q549'];
if ($answer549 == 't' || $answer549 == 'T') { $totalCorrect++; }
$answer550 = $_POST['q550'];
if ($answer550 == 'i' || $answer550 == 'I') { $totalCorrect++; }
$answer551 = $_POST['q551'];
if ($answer551 == 'o' || $answer551 == 'O') { $totalCorrect++; }
$answer552 = $_POST['q552'];
if ($answer552 == 'n' || $answer552 == 'N') { $totalCorrect++; }
$answer557 = $_POST['q557'];
if ($answer557 == 'l' || $answer557 == 'L') { $totalCorrect++; }
$answer561 = $_POST['q561'];
if ($answer561 == 'n' || $answer561 == 'N') { $totalCorrect++; }
$answer572 = $_POST['q572'];
if ($answer572 == 'o' || $answer572 == 'O') { $totalCorrect++; }
$answer581 = $_POST['q581'];
if ($answer581 == 'a' || $answer581 == 'A') { $totalCorrect++; }
$answer585 = $_POST['q585'];
if ($answer585 == 'g' || $answer585 == 'G') { $totalCorrect++; }
$answer596 = $_POST['q596'];
if ($answer596 == 'u' || $answer596 == 'U') { $totalCorrect++; }
$answer605 = $_POST['q605'];
if ($answer605 == 'u' || $answer605 == 'U') { $totalCorrect++; }
$answer619 = $_POST['q619'];
if ($answer619 == 'p' || $answer619 == 'P') { $totalCorrect++; }
$answer620 = $_POST['q620'];
if ($answer620 == 'r' || $answer620 == 'R') { $totalCorrect++; }
$answer621 = $_POST['q621'];
if ($answer621 == 'i' || $answer621 == 'I') { $totalCorrect++; }
$answer622 = $_POST['q622'];
if ($answer622 == 's' || $answer622 == 'S') { $totalCorrect++; }
$answer623 = $_POST['q623'];
if ($answer623 == 'o' || $answer623 == 'O') { $totalCorrect++; }
$answer624 = $_POST['q624'];
if ($answer624 == 'n' || $answer624 == 'N') { $totalCorrect++; }
$answer629 = $_POST['q629'];
if ($answer629 == 'g' || $answer629 == 'G') { $totalCorrect++; }
$answer644 = $_POST['q644'];
if ($answer644 == 't' || $answer644 == 'T') { $totalCorrect++; }
$answer653 = $_POST['q653'];
if ($answer653 == 'h' || $answer653 == 'H') { $totalCorrect++; }
$answer654 = $_POST['q654'];
if ($answer654 == 'a' || $answer654 == 'A') { $totalCorrect++; }
$answer655 = $_POST['q655'];
if ($answer655 == 'c' || $answer655 == 'C') { $totalCorrect++; }
$answer656 = $_POST['q656'];
if ($answer656 == 'k' || $answer656 == 'K') { $totalCorrect++; }
$answer657 = $_POST['q657'];
if ($answer657 == 'i' || $answer657 == 'I') { $totalCorrect++; }
$answer658 = $_POST['q658'];
if ($answer658 == 'n' || $answer658 == 'N') { $totalCorrect++; }
$answer659 = $_POST['q659'];
if ($answer659 == 'g' || $answer659 == 'G') { $totalCorrect++; }
$answer677 = $_POST['q677'];
if ($answer677 == 't' || $answer677 == 'T') { $totalCorrect++; }
$answer701 = $_POST['q701'];
if ($answer701 == 'e' || $answer701 == 'E') { $totalCorrect++; }
$answer725 = $_POST['q725'];
if ($answer725 == 'r' || $answer725 == 'R') { $totalCorrect++; }
$answer726 = $_POST['q726'];
if ($answer726 == 'o' || $answer726 == 'O') { $totalCorrect++; }
$answer727 = $_POST['q727'];
if ($answer727 == 'b' || $answer727 == 'B') { $totalCorrect++; }
$answer728 = $_POST['q728'];
if ($answer728 == 'b' || $answer728 == 'B') { $totalCorrect++; }
$answer729 = $_POST['q729'];
if ($answer729 == 'e' || $answer729 == 'E') { $totalCorrect++; }
$answer730 = $_POST['q730'];
if ($answer730 == 'r' || $answer730 == 'R') { $totalCorrect++; }
$answer731 = $_POST['q731'];
if ($answer731 == 'y' || $answer731 == 'Y') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. court proceedings</div>";
echo "<div class='question'>2. this is put on the criminal when arrested</div>";
echo "<div class='question'>3. sexual harassment</div>";
echo "<div class='question'>4. deliberate damage of art and culture objects</div>";
echo "<div class='question'>5. people who do not have a legal education. They decide in court whether the accused is guilty or not.</div>";
echo "<div class='question'>6. stealing people for ransom</div>";
echo "<div class='question'>7. The man who sells drugs.</div>";
echo "<div class='question'>8. the man who saw the crime</div>";
echo "<div class='question'>9. fake copy of money or documents</div>";
echo "<div class='question'>10. who did this causing your house to burn down</div>";
echo "<div class='question'>11. the one who makes a decision on the case in court </div>";
echo "<div class='question'>12. forced departure from the country</div>";
echo "<div class='question'>13. in court, he presents arguments against the accused</div>";
echo "<div class='question'>14. illegal movement of goods across the state border</div>";
echo "<div class='question'>15. a crime against one's state</div>";
echo "<div class='question'>16. breaking and entering</div>";
echo "<div class='question'>17. you give it to a policeman if he stopped your car</div>";
echo "<div class='question'>18. Action if you accidentally killed a person</div>";
echo "<div class='question'>19. the one who defends the rights of the accused in court</div>";
echo "<div class='question'>20. an assumption about who might be the culprit</div>";
echo "<div class='question'>21. deprivation of property</div>";
echo "<div class='question'>22. The place where you are judged.</div>";
echo "<div class='question'>23. place of detention of criminals</div>";
echo "<div class='question'>24. attacks on your computer</div>";
echo "<div class='question'>25. an attempt to take other people's things by force</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 160 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>