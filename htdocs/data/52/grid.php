<?php session_start();if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?><!DOCTYPE html><html><head></title>	<link rel='stylesheet' type='text/css' href='style.css'></head><body>     <a class='logout' href='../../logout.php'>выйти</a></body></html><?php }else{     header('Location: ../../login_.php');     exit();} ?>
<!DOCTYPE html><html><head><link rel='stylesheet' type='text/css' href='style.css'></head><html>
<form action='' method='post'>
<input class='field12' type='text' name='q12' value='<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>'><a class='num1'>1</a><input class='field37' type='text' name='q37' value='<?php if(isset($_POST['q37'])) echo $_POST['q37']; ?>'><a class='num2'>2</a><input class='field38' type='text' name='q38' value='<?php if(isset($_POST['q38'])) echo $_POST['q38']; ?>'><input class='field39' type='text' name='q39' value='<?php if(isset($_POST['q39'])) echo $_POST['q39']; ?>'><input class='field40' type='text' name='q40' value='<?php if(isset($_POST['q40'])) echo $_POST['q40']; ?>'><input class='field41' type='text' name='q41' value='<?php if(isset($_POST['q41'])) echo $_POST['q41']; ?>'><input class='field68' type='text' name='q68' value='<?php if(isset($_POST['q68'])) echo $_POST['q68']; ?>'><input class='field91' type='text' name='q91' value='<?php if(isset($_POST['q91'])) echo $_POST['q91']; ?>'><a class='num3'>3</a><input class='field96' type='text' name='q96' value='<?php if(isset($_POST['q96'])) echo $_POST['q96']; ?>'><input class='field118' type='text' name='q118' value='<?php if(isset($_POST['q118'])) echo $_POST['q118']; ?>'><a class='num4'>4</a><input class='field119' type='text' name='q119' value='<?php if(isset($_POST['q119'])) echo $_POST['q119']; ?>'><input class='field120' type='text' name='q120' value='<?php if(isset($_POST['q120'])) echo $_POST['q120']; ?>'><input class='field121' type='text' name='q121' value='<?php if(isset($_POST['q121'])) echo $_POST['q121']; ?>'><input class='field122' type='text' name='q122' value='<?php if(isset($_POST['q122'])) echo $_POST['q122']; ?>'><a class='num5'>5</a><input class='field123' type='text' name='q123' value='<?php if(isset($_POST['q123'])) echo $_POST['q123']; ?>'><input class='field124' type='text' name='q124' value='<?php if(isset($_POST['q124'])) echo $_POST['q124']; ?>'><input class='field125' type='text' name='q125' value='<?php if(isset($_POST['q125'])) echo $_POST['q125']; ?>'><input class='field126' type='text' name='q126' value='<?php if(isset($_POST['q126'])) echo $_POST['q126']; ?>'><input class='field147' type='text' name='q147' value='<?php if(isset($_POST['q147'])) echo $_POST['q147']; ?>'><input class='field150' type='text' name='q150' value='<?php if(isset($_POST['q150'])) echo $_POST['q150']; ?>'><input class='field152' type='text' name='q152' value='<?php if(isset($_POST['q152'])) echo $_POST['q152']; ?>'><input class='field175' type='text' name='q175' value='<?php if(isset($_POST['q175'])) echo $_POST['q175']; ?>'><input class='field178' type='text' name='q178' value='<?php if(isset($_POST['q178'])) echo $_POST['q178']; ?>'><input class='field180' type='text' name='q180' value='<?php if(isset($_POST['q180'])) echo $_POST['q180']; ?>'><input class='field203' type='text' name='q203' value='<?php if(isset($_POST['q203'])) echo $_POST['q203']; ?>'><input class='field206' type='text' name='q206' value='<?php if(isset($_POST['q206'])) echo $_POST['q206']; ?>'><input class='field229' type='text' name='q229' value='<?php if(isset($_POST['q229'])) echo $_POST['q229']; ?>'><a class='num6'>6</a><a class='num7'>7</a><input class='field230' type='text' name='q230' value='<?php if(isset($_POST['q230'])) echo $_POST['q230']; ?>'><input class='field231' type='text' name='q231' value='<?php if(isset($_POST['q231'])) echo $_POST['q231']; ?>'><input class='field232' type='text' name='q232' value='<?php if(isset($_POST['q232'])) echo $_POST['q232']; ?>'><input class='field234' type='text' name='q234' value='<?php if(isset($_POST['q234'])) echo $_POST['q234']; ?>'><input class='field257' type='text' name='q257' value='<?php if(isset($_POST['q257'])) echo $_POST['q257']; ?>'><input class='field282' type='text' name='q282' value='<?php if(isset($_POST['q282'])) echo $_POST['q282']; ?>'><a class='num8'>8</a><input class='field283' type='text' name='q283' value='<?php if(isset($_POST['q283'])) echo $_POST['q283']; ?>'><input class='field284' type='text' name='q284' value='<?php if(isset($_POST['q284'])) echo $_POST['q284']; ?>'><input class='field285' type='text' name='q285' value='<?php if(isset($_POST['q285'])) echo $_POST['q285']; ?>'><input class='field286' type='text' name='q286' value='<?php if(isset($_POST['q286'])) echo $_POST['q286']; ?>'><input class='field287' type='text' name='q287' value='<?php if(isset($_POST['q287'])) echo $_POST['q287']; ?>'><input class='field288' type='text' name='q288' value='<?php if(isset($_POST['q288'])) echo $_POST['q288']; ?>'><input class='field289' type='text' name='q289' value='<?php if(isset($_POST['q289'])) echo $_POST['q289']; ?>'><input class='field290' type='text' name='q290' value='<?php if(isset($_POST['q290'])) echo $_POST['q290']; ?>'><input class='field309' type='text' name='q309' value='<?php if(isset($_POST['q309'])) echo $_POST['q309']; ?>'><a class='num9'>9</a><input class='field313' type='text' name='q313' value='<?php if(isset($_POST['q313'])) echo $_POST['q313']; ?>'><input class='field337' type='text' name='q337' value='<?php if(isset($_POST['q337'])) echo $_POST['q337']; ?>'><a class='num10'>10</a><input class='field338' type='text' name='q338' value='<?php if(isset($_POST['q338'])) echo $_POST['q338']; ?>'><input class='field339' type='text' name='q339' value='<?php if(isset($_POST['q339'])) echo $_POST['q339']; ?>'><input class='field340' type='text' name='q340' value='<?php if(isset($_POST['q340'])) echo $_POST['q340']; ?>'><input class='field341' type='text' name='q341' value='<?php if(isset($_POST['q341'])) echo $_POST['q341']; ?>'><input class='field342' type='text' name='q342' value='<?php if(isset($_POST['q342'])) echo $_POST['q342']; ?>'><input class='field343' type='text' name='q343' value='<?php if(isset($_POST['q343'])) echo $_POST['q343']; ?>'><input class='field348' type='text' name='q348' value='<?php if(isset($_POST['q348'])) echo $_POST['q348']; ?>'><a class='num11'>11</a><input class='field365' type='text' name='q365' value='<?php if(isset($_POST['q365'])) echo $_POST['q365']; ?>'><input class='field372' type='text' name='q372' value='<?php if(isset($_POST['q372'])) echo $_POST['q372']; ?>'><a class='num12'>12</a><a class='num13'>13</a><input class='field373' type='text' name='q373' value='<?php if(isset($_POST['q373'])) echo $_POST['q373']; ?>'><input class='field374' type='text' name='q374' value='<?php if(isset($_POST['q374'])) echo $_POST['q374']; ?>'><input class='field375' type='text' name='q375' value='<?php if(isset($_POST['q375'])) echo $_POST['q375']; ?>'><input class='field376' type='text' name='q376' value='<?php if(isset($_POST['q376'])) echo $_POST['q376']; ?>'><input class='field377' type='text' name='q377' value='<?php if(isset($_POST['q377'])) echo $_POST['q377']; ?>'><input class='field393' type='text' name='q393' value='<?php if(isset($_POST['q393'])) echo $_POST['q393']; ?>'><input class='field397' type='text' name='q397' value='<?php if(isset($_POST['q397'])) echo $_POST['q397']; ?>'><a class='num14'>14</a><input class='field400' type='text' name='q400' value='<?php if(isset($_POST['q400'])) echo $_POST['q400']; ?>'><input class='field404' type='text' name='q404' value='<?php if(isset($_POST['q404'])) echo $_POST['q404']; ?>'><input class='field421' type='text' name='q421' value='<?php if(isset($_POST['q421'])) echo $_POST['q421']; ?>'><a class='num15'>15</a><input class='field422' type='text' name='q422' value='<?php if(isset($_POST['q422'])) echo $_POST['q422']; ?>'><input class='field423' type='text' name='q423' value='<?php if(isset($_POST['q423'])) echo $_POST['q423']; ?>'><a class='num16'>16</a><input class='field424' type='text' name='q424' value='<?php if(isset($_POST['q424'])) echo $_POST['q424']; ?>'><input class='field425' type='text' name='q425' value='<?php if(isset($_POST['q425'])) echo $_POST['q425']; ?>'><input class='field426' type='text' name='q426' value='<?php if(isset($_POST['q426'])) echo $_POST['q426']; ?>'><input class='field427' type='text' name='q427' value='<?php if(isset($_POST['q427'])) echo $_POST['q427']; ?>'><input class='field428' type='text' name='q428' value='<?php if(isset($_POST['q428'])) echo $_POST['q428']; ?>'><input class='field429' type='text' name='q429' value='<?php if(isset($_POST['q429'])) echo $_POST['q429']; ?>'><input class='field432' type='text' name='q432' value='<?php if(isset($_POST['q432'])) echo $_POST['q432']; ?>'><input class='field449' type='text' name='q449' value='<?php if(isset($_POST['q449'])) echo $_POST['q449']; ?>'><input class='field451' type='text' name='q451' value='<?php if(isset($_POST['q451'])) echo $_POST['q451']; ?>'><input class='field453' type='text' name='q453' value='<?php if(isset($_POST['q453'])) echo $_POST['q453']; ?>'><input class='field456' type='text' name='q456' value='<?php if(isset($_POST['q456'])) echo $_POST['q456']; ?>'><input class='field460' type='text' name='q460' value='<?php if(isset($_POST['q460'])) echo $_POST['q460']; ?>'><input class='field477' type='text' name='q477' value='<?php if(isset($_POST['q477'])) echo $_POST['q477']; ?>'><input class='field479' type='text' name='q479' value='<?php if(isset($_POST['q479'])) echo $_POST['q479']; ?>'><input class='field481' type='text' name='q481' value='<?php if(isset($_POST['q481'])) echo $_POST['q481']; ?>'><input class='field484' type='text' name='q484' value='<?php if(isset($_POST['q484'])) echo $_POST['q484']; ?>'><input class='field507' type='text' name='q507' value='<?php if(isset($_POST['q507'])) echo $_POST['q507']; ?>'><input class='field509' type='text' name='q509' value='<?php if(isset($_POST['q509'])) echo $_POST['q509']; ?>'><input class='field512' type='text' name='q512' value='<?php if(isset($_POST['q512'])) echo $_POST['q512']; ?>'><input class='field517' type='text' name='q517' value='<?php if(isset($_POST['q517'])) echo $_POST['q517']; ?>'><a class='num17'>17</a><input class='field535' type='text' name='q535' value='<?php if(isset($_POST['q535'])) echo $_POST['q535']; ?>'><input class='field537' type='text' name='q537' value='<?php if(isset($_POST['q537'])) echo $_POST['q537']; ?>'><input class='field539' type='text' name='q539' value='<?php if(isset($_POST['q539'])) echo $_POST['q539']; ?>'><a class='num18'>18</a><input class='field540' type='text' name='q540' value='<?php if(isset($_POST['q540'])) echo $_POST['q540']; ?>'><input class='field541' type='text' name='q541' value='<?php if(isset($_POST['q541'])) echo $_POST['q541']; ?>'><input class='field542' type='text' name='q542' value='<?php if(isset($_POST['q542'])) echo $_POST['q542']; ?>'><input class='field543' type='text' name='q543' value='<?php if(isset($_POST['q543'])) echo $_POST['q543']; ?>'><input class='field544' type='text' name='q544' value='<?php if(isset($_POST['q544'])) echo $_POST['q544']; ?>'><input class='field545' type='text' name='q545' value='<?php if(isset($_POST['q545'])) echo $_POST['q545']; ?>'><input class='field546' type='text' name='q546' value='<?php if(isset($_POST['q546'])) echo $_POST['q546']; ?>'><input class='field563' type='text' name='q563' value='<?php if(isset($_POST['q563'])) echo $_POST['q563']; ?>'><input class='field565' type='text' name='q565' value='<?php if(isset($_POST['q565'])) echo $_POST['q565']; ?>'><input class='field568' type='text' name='q568' value='<?php if(isset($_POST['q568'])) echo $_POST['q568']; ?>'><input class='field573' type='text' name='q573' value='<?php if(isset($_POST['q573'])) echo $_POST['q573']; ?>'><input class='field591' type='text' name='q591' value='<?php if(isset($_POST['q591'])) echo $_POST['q591']; ?>'><input class='field596' type='text' name='q596' value='<?php if(isset($_POST['q596'])) echo $_POST['q596']; ?>'><input class='field601' type='text' name='q601' value='<?php if(isset($_POST['q601'])) echo $_POST['q601']; ?>'><input class='field619' type='text' name='q619' value='<?php if(isset($_POST['q619'])) echo $_POST['q619']; ?>'><input class='field623' type='text' name='q623' value='<?php if(isset($_POST['q623'])) echo $_POST['q623']; ?>'><a class='num19'>19</a><input class='field624' type='text' name='q624' value='<?php if(isset($_POST['q624'])) echo $_POST['q624']; ?>'><input class='field625' type='text' name='q625' value='<?php if(isset($_POST['q625'])) echo $_POST['q625']; ?>'><input class='field626' type='text' name='q626' value='<?php if(isset($_POST['q626'])) echo $_POST['q626']; ?>'><input class='field627' type='text' name='q627' value='<?php if(isset($_POST['q627'])) echo $_POST['q627']; ?>'><input class='field628' type='text' name='q628' value='<?php if(isset($_POST['q628'])) echo $_POST['q628']; ?>'><input class='field629' type='text' name='q629' value='<?php if(isset($_POST['q629'])) echo $_POST['q629']; ?>'><input class='field630' type='text' name='q630' value='<?php if(isset($_POST['q630'])) echo $_POST['q630']; ?>'><input class='field631' type='text' name='q631' value='<?php if(isset($_POST['q631'])) echo $_POST['q631']; ?>'><input class='field632' type='text' name='q632' value='<?php if(isset($_POST['q632'])) echo $_POST['q632']; ?>'><input class='field633' type='text' name='q633' value='<?php if(isset($_POST['q633'])) echo $_POST['q633']; ?>'><a class='num20'>20</a><input class='field635' type='text' name='q635' value='<?php if(isset($_POST['q635'])) echo $_POST['q635']; ?>'><a class='num21'>21</a><input class='field647' type='text' name='q647' value='<?php if(isset($_POST['q647'])) echo $_POST['q647']; ?>'><input class='field661' type='text' name='q661' value='<?php if(isset($_POST['q661'])) echo $_POST['q661']; ?>'><input class='field663' type='text' name='q663' value='<?php if(isset($_POST['q663'])) echo $_POST['q663']; ?>'><input class='field684' type='text' name='q684' value='<?php if(isset($_POST['q684'])) echo $_POST['q684']; ?>'><a class='num22'>22</a><input class='field685' type='text' name='q685' value='<?php if(isset($_POST['q685'])) echo $_POST['q685']; ?>'><input class='field686' type='text' name='q686' value='<?php if(isset($_POST['q686'])) echo $_POST['q686']; ?>'><input class='field687' type='text' name='q687' value='<?php if(isset($_POST['q687'])) echo $_POST['q687']; ?>'><input class='field688' type='text' name='q688' value='<?php if(isset($_POST['q688'])) echo $_POST['q688']; ?>'><input class='field689' type='text' name='q689' value='<?php if(isset($_POST['q689'])) echo $_POST['q689']; ?>'><input class='field690' type='text' name='q690' value='<?php if(isset($_POST['q690'])) echo $_POST['q690']; ?>'><input class='field691' type='text' name='q691' value='<?php if(isset($_POST['q691'])) echo $_POST['q691']; ?>'><input class='field692' type='text' name='q692' value='<?php if(isset($_POST['q692'])) echo $_POST['q692']; ?>'><input class='field693' type='text' name='q693' value='<?php if(isset($_POST['q693'])) echo $_POST['q693']; ?>'><input class='field717' type='text' name='q717' value='<?php if(isset($_POST['q717'])) echo $_POST['q717']; ?>'><input class='field719' type='text' name='q719' value='<?php if(isset($_POST['q719'])) echo $_POST['q719']; ?>'><input class='field747' type='text' name='q747' value='<?php if(isset($_POST['q747'])) echo $_POST['q747']; ?>'><input class='field775' type='text' name='q775' value='<?php if(isset($_POST['q775'])) echo $_POST['q775']; ?>'><input class='field784' type='text' name='q784' value='<?php if(isset($_POST['q784'])) echo $_POST['q784']; ?>'><a class='num23'>23</a><input class='field803' type='text' name='q803' value='<?php if(isset($_POST['q803'])) echo $_POST['q803']; ?>'><input class='field806' type='text' name='q806' value='<?php if(isset($_POST['q806'])) echo $_POST['q806']; ?>'><a class='num24'>24</a><input class='field812' type='text' name='q812' value='<?php if(isset($_POST['q812'])) echo $_POST['q812']; ?>'><input class='field829' type='text' name='q829' value='<?php if(isset($_POST['q829'])) echo $_POST['q829']; ?>'><a class='num25'>25</a><input class='field830' type='text' name='q830' value='<?php if(isset($_POST['q830'])) echo $_POST['q830']; ?>'><input class='field831' type='text' name='q831' value='<?php if(isset($_POST['q831'])) echo $_POST['q831']; ?>'><input class='field832' type='text' name='q832' value='<?php if(isset($_POST['q832'])) echo $_POST['q832']; ?>'><input class='field833' type='text' name='q833' value='<?php if(isset($_POST['q833'])) echo $_POST['q833']; ?>'><input class='field834' type='text' name='q834' value='<?php if(isset($_POST['q834'])) echo $_POST['q834']; ?>'><input class='field835' type='text' name='q835' value='<?php if(isset($_POST['q835'])) echo $_POST['q835']; ?>'><input class='field836' type='text' name='q836' value='<?php if(isset($_POST['q836'])) echo $_POST['q836']; ?>'><input class='field837' type='text' name='q837' value='<?php if(isset($_POST['q837'])) echo $_POST['q837']; ?>'><input class='field838' type='text' name='q838' value='<?php if(isset($_POST['q838'])) echo $_POST['q838']; ?>'><input class='field839' type='text' name='q839' value='<?php if(isset($_POST['q839'])) echo $_POST['q839']; ?>'><input class='field840' type='text' name='q840' value='<?php if(isset($_POST['q840'])) echo $_POST['q840']; ?>'><input class='field862' type='text' name='q862' value='<?php if(isset($_POST['q862'])) echo $_POST['q862']; ?>'><input class='field868' type='text' name='q868' value='<?php if(isset($_POST['q868'])) echo $_POST['q868']; ?>'><input class='field890' type='text' name='q890' value='<?php if(isset($_POST['q890'])) echo $_POST['q890']; ?>'><input class='field896' type='text' name='q896' value='<?php if(isset($_POST['q896'])) echo $_POST['q896']; ?>'><input class='field918' type='text' name='q918' value='<?php if(isset($_POST['q918'])) echo $_POST['q918']; ?>'><input class='field924' type='text' name='q924' value='<?php if(isset($_POST['q924'])) echo $_POST['q924']; ?>'><input class='field946' type='text' name='q946' value='<?php if(isset($_POST['q946'])) echo $_POST['q946']; ?>'><input class='field952' type='text' name='q952' value='<?php if(isset($_POST['q952'])) echo $_POST['q952']; ?>'><input class='field974' type='text' name='q974' value='<?php if(isset($_POST['q974'])) echo $_POST['q974']; ?>'><input class='field1002' type='text' name='q1002' value='<?php if(isset($_POST['q1002'])) echo $_POST['q1002']; ?>'><input class='field1030' type='text' name='q1030' value='<?php if(isset($_POST['q1030'])) echo $_POST['q1030']; ?>'><input class='field1058' type='text' name='q1058' value='<?php if(isset($_POST['q1058'])) echo $_POST['q1058']; ?>'><br><button type='submit' value='Submit' class='submitbtn'>Проверить</button>
</form><p><a href='../../start_page.php'><img src='../../3.gif' class='picture' a></p>
<?php
error_reporting(0);
$name=file_get_contents('name.txt'); echo "<a class='namee'>$name</a>";$totalCorrect = 0;
$answer12 = $_POST['q12'];
if ($answer12 == 'h' || $answer12 == 'H') { $totalCorrect++; }
$answer37 = $_POST['q37'];
if ($answer37 == 't' || $answer37 == 'T') { $totalCorrect++; }
$answer38 = $_POST['q38'];
if ($answer38 == 'r' || $answer38 == 'R') { $totalCorrect++; }
$answer39 = $_POST['q39'];
if ($answer39 == 'i' || $answer39 == 'I') { $totalCorrect++; }
$answer40 = $_POST['q40'];
if ($answer40 == 'a' || $answer40 == 'A') { $totalCorrect++; }
$answer41 = $_POST['q41'];
if ($answer41 == 'l' || $answer41 == 'L') { $totalCorrect++; }
$answer68 = $_POST['q68'];
if ($answer68 == 'c' || $answer68 == 'C') { $totalCorrect++; }
$answer91 = $_POST['q91'];
if ($answer91 == 'l' || $answer91 == 'L') { $totalCorrect++; }
$answer96 = $_POST['q96'];
if ($answer96 == 'k' || $answer96 == 'K') { $totalCorrect++; }
$answer118 = $_POST['q118'];
if ($answer118 == 'v' || $answer118 == 'V') { $totalCorrect++; }
$answer119 = $_POST['q119'];
if ($answer119 == 'a' || $answer119 == 'A') { $totalCorrect++; }
$answer120 = $_POST['q120'];
if ($answer120 == 'n' || $answer120 == 'N') { $totalCorrect++; }
$answer121 = $_POST['q121'];
if ($answer121 == 'd' || $answer121 == 'D') { $totalCorrect++; }
$answer122 = $_POST['q122'];
if ($answer122 == 'a' || $answer122 == 'A') { $totalCorrect++; }
$answer123 = $_POST['q123'];
if ($answer123 == 'l' || $answer123 == 'L') { $totalCorrect++; }
$answer124 = $_POST['q124'];
if ($answer124 == 'i' || $answer124 == 'I') { $totalCorrect++; }
$answer125 = $_POST['q125'];
if ($answer125 == 's' || $answer125 == 'S') { $totalCorrect++; }
$answer126 = $_POST['q126'];
if ($answer126 == 'm' || $answer126 == 'M') { $totalCorrect++; }
$answer147 = $_POST['q147'];
if ($answer147 == 'w' || $answer147 == 'W') { $totalCorrect++; }
$answer150 = $_POST['q150'];
if ($answer150 == 'r' || $answer150 == 'R') { $totalCorrect++; }
$answer152 = $_POST['q152'];
if ($answer152 == 'n' || $answer152 == 'N') { $totalCorrect++; }
$answer175 = $_POST['q175'];
if ($answer175 == 'y' || $answer175 == 'Y') { $totalCorrect++; }
$answer178 = $_POST['q178'];
if ($answer178 == 's' || $answer178 == 'S') { $totalCorrect++; }
$answer180 = $_POST['q180'];
if ($answer180 == 'g' || $answer180 == 'G') { $totalCorrect++; }
$answer203 = $_POST['q203'];
if ($answer203 == 'e' || $answer203 == 'E') { $totalCorrect++; }
$answer206 = $_POST['q206'];
if ($answer206 == 'o' || $answer206 == 'O') { $totalCorrect++; }
$answer229 = $_POST['q229'];
if ($answer229 == 'j' || $answer229 == 'J') { $totalCorrect++; }
$answer230 = $_POST['q230'];
if ($answer230 == 'u' || $answer230 == 'U') { $totalCorrect++; }
$answer231 = $_POST['q231'];
if ($answer231 == 'r' || $answer231 == 'R') { $totalCorrect++; }
$answer232 = $_POST['q232'];
if ($answer232 == 'i' || $answer232 == 'I') { $totalCorrect++; }
$answer234 = $_POST['q234'];
if ($answer234 == 'n' || $answer234 == 'N') { $totalCorrect++; }
$answer257 = $_POST['q257'];
if ($answer257 == 'u' || $answer257 == 'U') { $totalCorrect++; }
$answer282 = $_POST['q282'];
if ($answer282 == 'h' || $answer282 == 'H') { $totalCorrect++; }
$answer283 = $_POST['q283'];
if ($answer283 == 'a' || $answer283 == 'A') { $totalCorrect++; }
$answer284 = $_POST['q284'];
if ($answer284 == 'n' || $answer284 == 'N') { $totalCorrect++; }
$answer285 = $_POST['q285'];
if ($answer285 == 'd' || $answer285 == 'D') { $totalCorrect++; }
$answer286 = $_POST['q286'];
if ($answer286 == 'c' || $answer286 == 'C') { $totalCorrect++; }
$answer287 = $_POST['q287'];
if ($answer287 == 'u' || $answer287 == 'U') { $totalCorrect++; }
$answer288 = $_POST['q288'];
if ($answer288 == 'f' || $answer288 == 'F') { $totalCorrect++; }
$answer289 = $_POST['q289'];
if ($answer289 == 'f' || $answer289 == 'F') { $totalCorrect++; }
$answer290 = $_POST['q290'];
if ($answer290 == 's' || $answer290 == 'S') { $totalCorrect++; }
$answer309 = $_POST['q309'];
if ($answer309 == 't' || $answer309 == 'T') { $totalCorrect++; }
$answer313 = $_POST['q313'];
if ($answer313 == 'g' || $answer313 == 'G') { $totalCorrect++; }
$answer337 = $_POST['q337'];
if ($answer337 == 'r' || $answer337 == 'R') { $totalCorrect++; }
$answer338 = $_POST['q338'];
if ($answer338 == 'o' || $answer338 == 'O') { $totalCorrect++; }
$answer339 = $_POST['q339'];
if ($answer339 == 'b' || $answer339 == 'B') { $totalCorrect++; }
$answer340 = $_POST['q340'];
if ($answer340 == 'b' || $answer340 == 'B') { $totalCorrect++; }
$answer341 = $_POST['q341'];
if ($answer341 == 'e' || $answer341 == 'E') { $totalCorrect++; }
$answer342 = $_POST['q342'];
if ($answer342 == 'r' || $answer342 == 'R') { $totalCorrect++; }
$answer343 = $_POST['q343'];
if ($answer343 == 'y' || $answer343 == 'Y') { $totalCorrect++; }
$answer348 = $_POST['q348'];
if ($answer348 == 'c' || $answer348 == 'C') { $totalCorrect++; }
$answer365 = $_POST['q365'];
if ($answer365 == 'e' || $answer365 == 'E') { $totalCorrect++; }
$answer372 = $_POST['q372'];
if ($answer372 == 'p' || $answer372 == 'P') { $totalCorrect++; }
$answer373 = $_POST['q373'];
if ($answer373 == 'r' || $answer373 == 'R') { $totalCorrect++; }
$answer374 = $_POST['q374'];
if ($answer374 == 'i' || $answer374 == 'I') { $totalCorrect++; }
$answer375 = $_POST['q375'];
if ($answer375 == 's' || $answer375 == 'S') { $totalCorrect++; }
$answer376 = $_POST['q376'];
if ($answer376 == 'o' || $answer376 == 'O') { $totalCorrect++; }
$answer377 = $_POST['q377'];
if ($answer377 == 'n' || $answer377 == 'N') { $totalCorrect++; }
$answer393 = $_POST['q393'];
if ($answer393 == 'a' || $answer393 == 'A') { $totalCorrect++; }
$answer397 = $_POST['q397'];
if ($answer397 == 'w' || $answer397 == 'W') { $totalCorrect++; }
$answer400 = $_POST['q400'];
if ($answer400 == 'r' || $answer400 == 'R') { $totalCorrect++; }
$answer404 = $_POST['q404'];
if ($answer404 == 'u' || $answer404 == 'U') { $totalCorrect++; }
$answer421 = $_POST['q421'];
if ($answer421 == 's' || $answer421 == 'S') { $totalCorrect++; }
$answer422 = $_POST['q422'];
if ($answer422 == 'u' || $answer422 == 'U') { $totalCorrect++; }
$answer423 = $_POST['q423'];
if ($answer423 == 's' || $answer423 == 'S') { $totalCorrect++; }
$answer424 = $_POST['q424'];
if ($answer424 == 'p' || $answer424 == 'P') { $totalCorrect++; }
$answer425 = $_POST['q425'];
if ($answer425 == 'i' || $answer425 == 'I') { $totalCorrect++; }
$answer426 = $_POST['q426'];
if ($answer426 == 'c' || $answer426 == 'C') { $totalCorrect++; }
$answer427 = $_POST['q427'];
if ($answer427 == 'i' || $answer427 == 'I') { $totalCorrect++; }
$answer428 = $_POST['q428'];
if ($answer428 == 'o' || $answer428 == 'O') { $totalCorrect++; }
$answer429 = $_POST['q429'];
if ($answer429 == 'n' || $answer429 == 'N') { $totalCorrect++; }
$answer432 = $_POST['q432'];
if ($answer432 == 'r' || $answer432 == 'R') { $totalCorrect++; }
$answer449 = $_POST['q449'];
if ($answer449 == 'o' || $answer449 == 'O') { $totalCorrect++; }
$answer451 = $_POST['q451'];
if ($answer451 == 'm' || $answer451 == 'M') { $totalCorrect++; }
$answer453 = $_POST['q453'];
if ($answer453 == 't' || $answer453 == 'T') { $totalCorrect++; }
$answer456 = $_POST['q456'];
if ($answer456 == 's' || $answer456 == 'S') { $totalCorrect++; }
$answer460 = $_POST['q460'];
if ($answer460 == 't' || $answer460 == 'T') { $totalCorrect++; }
$answer477 = $_POST['q477'];
if ($answer477 == 'n' || $answer477 == 'N') { $totalCorrect++; }
$answer479 = $_POST['q479'];
if ($answer479 == 'u' || $answer479 == 'U') { $totalCorrect++; }
$answer481 = $_POST['q481'];
if ($answer481 == 'n' || $answer481 == 'N') { $totalCorrect++; }
$answer484 = $_POST['q484'];
if ($answer484 == 'e' || $answer484 == 'E') { $totalCorrect++; }
$answer507 = $_POST['q507'];
if ($answer507 == 'g' || $answer507 == 'G') { $totalCorrect++; }
$answer509 = $_POST['q509'];
if ($answer509 == 'e' || $answer509 == 'E') { $totalCorrect++; }
$answer512 = $_POST['q512'];
if ($answer512 == 'c' || $answer512 == 'C') { $totalCorrect++; }
$answer517 = $_POST['q517'];
if ($answer517 == 'b' || $answer517 == 'B') { $totalCorrect++; }
$answer535 = $_POST['q535'];
if ($answer535 == 'g' || $answer535 == 'G') { $totalCorrect++; }
$answer537 = $_POST['q537'];
if ($answer537 == 's' || $answer537 == 'S') { $totalCorrect++; }
$answer539 = $_POST['q539'];
if ($answer539 == 'b' || $answer539 == 'B') { $totalCorrect++; }
$answer540 = $_POST['q540'];
if ($answer540 == 'u' || $answer540 == 'U') { $totalCorrect++; }
$answer541 = $_POST['q541'];
if ($answer541 == 'r' || $answer541 == 'R') { $totalCorrect++; }
$answer542 = $_POST['q542'];
if ($answer542 == 'g' || $answer542 == 'G') { $totalCorrect++; }
$answer543 = $_POST['q543'];
if ($answer543 == 'l' || $answer543 == 'L') { $totalCorrect++; }
$answer544 = $_POST['q544'];
if ($answer544 == 'a' || $answer544 == 'A') { $totalCorrect++; }
$answer545 = $_POST['q545'];
if ($answer545 == 'r' || $answer545 == 'R') { $totalCorrect++; }
$answer546 = $_POST['q546'];
if ($answer546 == 'y' || $answer546 == 'Y') { $totalCorrect++; }
$answer563 = $_POST['q563'];
if ($answer563 == 'l' || $answer563 == 'L') { $totalCorrect++; }
$answer565 = $_POST['q565'];
if ($answer565 == 's' || $answer565 == 'S') { $totalCorrect++; }
$answer568 = $_POST['q568'];
if ($answer568 == 't' || $answer568 == 'T') { $totalCorrect++; }
$answer573 = $_POST['q573'];
if ($answer573 == 'i' || $answer573 == 'I') { $totalCorrect++; }
$answer591 = $_POST['q591'];
if ($answer591 == 'i' || $answer591 == 'I') { $totalCorrect++; }
$answer596 = $_POST['q596'];
if ($answer596 == 'o' || $answer596 == 'O') { $totalCorrect++; }
$answer601 = $_POST['q601'];
if ($answer601 == 'b' || $answer601 == 'B') { $totalCorrect++; }
$answer619 = $_POST['q619'];
if ($answer619 == 'n' || $answer619 == 'N') { $totalCorrect++; }
$answer623 = $_POST['q623'];
if ($answer623 == 'd' || $answer623 == 'D') { $totalCorrect++; }
$answer624 = $_POST['q624'];
if ($answer624 == 'r' || $answer624 == 'R') { $totalCorrect++; }
$answer625 = $_POST['q625'];
if ($answer625 == 'u' || $answer625 == 'U') { $totalCorrect++; }
$answer626 = $_POST['q626'];
if ($answer626 == 'g' || $answer626 == 'G') { $totalCorrect++; }
$answer627 = $_POST['q627'];
if ($answer627 == ' ' || $answer627 == ' ') { $totalCorrect++; }
$answer628 = $_POST['q628'];
if ($answer628 == 'd' || $answer628 == 'D') { $totalCorrect++; }
$answer629 = $_POST['q629'];
if ($answer629 == 'e' || $answer629 == 'E') { $totalCorrect++; }
$answer630 = $_POST['q630'];
if ($answer630 == 'a' || $answer630 == 'A') { $totalCorrect++; }
$answer631 = $_POST['q631'];
if ($answer631 == 'l' || $answer631 == 'L') { $totalCorrect++; }
$answer632 = $_POST['q632'];
if ($answer632 == 'e' || $answer632 == 'E') { $totalCorrect++; }
$answer633 = $_POST['q633'];
if ($answer633 == 'r' || $answer633 == 'R') { $totalCorrect++; }
$answer635 = $_POST['q635'];
if ($answer635 == 'e' || $answer635 == 'E') { $totalCorrect++; }
$answer647 = $_POST['q647'];
if ($answer647 == 'g' || $answer647 == 'G') { $totalCorrect++; }
$answer661 = $_POST['q661'];
if ($answer661 == 'a' || $answer661 == 'A') { $totalCorrect++; }
$answer663 = $_POST['q663'];
if ($answer663 == 'v' || $answer663 == 'V') { $totalCorrect++; }
$answer684 = $_POST['q684'];
if ($answer684 == 'k' || $answer684 == 'K') { $totalCorrect++; }
$answer685 = $_POST['q685'];
if ($answer685 == 'i' || $answer685 == 'I') { $totalCorrect++; }
$answer686 = $_POST['q686'];
if ($answer686 == 'd' || $answer686 == 'D') { $totalCorrect++; }
$answer687 = $_POST['q687'];
if ($answer687 == 'n' || $answer687 == 'N') { $totalCorrect++; }
$answer688 = $_POST['q688'];
if ($answer688 == 'a' || $answer688 == 'A') { $totalCorrect++; }
$answer689 = $_POST['q689'];
if ($answer689 == 'p' || $answer689 == 'P') { $totalCorrect++; }
$answer690 = $_POST['q690'];
if ($answer690 == 'p' || $answer690 == 'P') { $totalCorrect++; }
$answer691 = $_POST['q691'];
if ($answer691 == 'i' || $answer691 == 'I') { $totalCorrect++; }
$answer692 = $_POST['q692'];
if ($answer692 == 'n' || $answer692 == 'N') { $totalCorrect++; }
$answer693 = $_POST['q693'];
if ($answer693 == 'g' || $answer693 == 'G') { $totalCorrect++; }
$answer717 = $_POST['q717'];
if ($answer717 == 'e' || $answer717 == 'E') { $totalCorrect++; }
$answer719 = $_POST['q719'];
if ($answer719 == 'c' || $answer719 == 'C') { $totalCorrect++; }
$answer747 = $_POST['q747'];
if ($answer747 == 't' || $answer747 == 'T') { $totalCorrect++; }
$answer775 = $_POST['q775'];
if ($answer775 == 'i' || $answer775 == 'I') { $totalCorrect++; }
$answer784 = $_POST['q784'];
if ($answer784 == 'f' || $answer784 == 'F') { $totalCorrect++; }
$answer803 = $_POST['q803'];
if ($answer803 == 'o' || $answer803 == 'O') { $totalCorrect++; }
$answer806 = $_POST['q806'];
if ($answer806 == 'b' || $answer806 == 'B') { $totalCorrect++; }
$answer812 = $_POST['q812'];
if ($answer812 == 'o' || $answer812 == 'O') { $totalCorrect++; }
$answer829 = $_POST['q829'];
if ($answer829 == 'm' || $answer829 == 'M') { $totalCorrect++; }
$answer830 = $_POST['q830'];
if ($answer830 == 'a' || $answer830 == 'A') { $totalCorrect++; }
$answer831 = $_POST['q831'];
if ($answer831 == 'n' || $answer831 == 'N') { $totalCorrect++; }
$answer832 = $_POST['q832'];
if ($answer832 == 's' || $answer832 == 'S') { $totalCorrect++; }
$answer833 = $_POST['q833'];
if ($answer833 == 'l' || $answer833 == 'L') { $totalCorrect++; }
$answer834 = $_POST['q834'];
if ($answer834 == 'a' || $answer834 == 'A') { $totalCorrect++; }
$answer835 = $_POST['q835'];
if ($answer835 == 'u' || $answer835 == 'U') { $totalCorrect++; }
$answer836 = $_POST['q836'];
if ($answer836 == 'g' || $answer836 == 'G') { $totalCorrect++; }
$answer837 = $_POST['q837'];
if ($answer837 == 'h' || $answer837 == 'H') { $totalCorrect++; }
$answer838 = $_POST['q838'];
if ($answer838 == 't' || $answer838 == 'T') { $totalCorrect++; }
$answer839 = $_POST['q839'];
if ($answer839 == 'e' || $answer839 == 'E') { $totalCorrect++; }
$answer840 = $_POST['q840'];
if ($answer840 == 'r' || $answer840 == 'R') { $totalCorrect++; }
$answer862 = $_POST['q862'];
if ($answer862 == 'n' || $answer862 == 'N') { $totalCorrect++; }
$answer868 = $_POST['q868'];
if ($answer868 == 'g' || $answer868 == 'G') { $totalCorrect++; }
$answer890 = $_POST['q890'];
if ($answer890 == 'i' || $answer890 == 'I') { $totalCorrect++; }
$answer896 = $_POST['q896'];
if ($answer896 == 'e' || $answer896 == 'E') { $totalCorrect++; }
$answer918 = $_POST['q918'];
if ($answer918 == 's' || $answer918 == 'S') { $totalCorrect++; }
$answer924 = $_POST['q924'];
if ($answer924 == 'r' || $answer924 == 'R') { $totalCorrect++; }
$answer946 = $_POST['q946'];
if ($answer946 == 'h' || $answer946 == 'H') { $totalCorrect++; }
$answer952 = $_POST['q952'];
if ($answer952 == 'y' || $answer952 == 'Y') { $totalCorrect++; }
$answer974 = $_POST['q974'];
if ($answer974 == 'm' || $answer974 == 'M') { $totalCorrect++; }
$answer1002 = $_POST['q1002'];
if ($answer1002 == 'e' || $answer1002 == 'E') { $totalCorrect++; }
$answer1030 = $_POST['q1030'];
if ($answer1030 == 'n' || $answer1030 == 'N') { $totalCorrect++; }
$answer1058 = $_POST['q1058'];
if ($answer1058 == 't' || $answer1058 == 'T') { $totalCorrect++; }
echo "<div class='questions'>Вопросы</div><br> ";
echo "<div class='question'>1. attacks on your computer</div>";
echo "<div class='question'>2. court proceedings</div>";
echo "<div class='question'>3. the one who defends the rights of the accused in court</div>";
echo "<div class='question'>4. deliberate damage of art and culture objects</div>";
echo "<div class='question'>5. who did this causing your house to burn down</div>";
echo "<div class='question'>6. people who do not have a legal education. They decide in court whether the accused is guilty or not.</div>";
echo "<div class='question'>7. the one who makes a decision on the case in court </div>";
echo "<div class='question'>8. this is put on the criminal when arrested</div>";
echo "<div class='question'>9. a crime against one's state</div>";
echo "<div class='question'>10. an attempt to take other people's things by force</div>";
echo "<div class='question'>11. The place where you are judged.</div>";
echo "<div class='question'>12. place of detention of criminals</div>";
echo "<div class='question'>13. in court, he presents arguments against the accused</div>";
echo "<div class='question'>14. the man who saw the crime</div>";
echo "<div class='question'>15. an assumption about who might be the culprit</div>";
echo "<div class='question'>16. illegal movement of goods across the state border</div>";
echo "<div class='question'>17. you give it to a policeman if he stopped your car</div>";
echo "<div class='question'>18. breaking and entering</div>";
echo "<div class='question'>19. The man who sells drugs.</div>";
echo "<div class='question'>20. sexual harassment</div>";
echo "<div class='question'>21. deprivation of property</div>";
echo "<div class='question'>22. stealing people for ransom</div>";
echo "<div class='question'>23. fake copy of money or documents</div>";
echo "<div class='question'>24. forced departure from the country</div>";
echo "<div class='question'>25. Action if you accidentally killed a person</div>";
echo "<div class='stats'>Статистика:</div> ";$res = file_get_contents('users.json');$data = json_decode($res, true); $trys = file_get_contents('trys.txt'); $j = -1;$qq;for($i = 0; $i < count($data); $i++) {    if($data[$i]['name'] == $_SESSION['user_name']) {   $qq = $i;      if($data[$i]['trys'] >= 1) $j = $i;         else $j = -2;     }}if($j >= 0) {    $data[$j]['trys'] = $data[$j]['trys'] - 1;     if($data[$j]['resault'] < $totalCorrect) $data[$j]['resault'] = $totalCorrect;}else if($j == -1) {   $a = $data[0];    $a['name'] = $_SESSION['user_name'];    $a['trys'] = $trys;    $a['resault'] = $totalCorrect;    $data[] = $a; $qq = count($data) - 1;}$jsonData = json_encode($data); file_put_contents('users.json', $jsonData);if($j >= -1) echo "<div class='curres'> $totalCorrect / 160 correct</div>";else echo '<div class="nomore"> Количество ваших попыток закончилось! </div>';echo '<br>';for($i = 1; $i < count($data); $i++) {    $user=$data[$i]['name']; $res=$data[$i]['resault']; echo "<div class='resaults'>$user: $res<br></div>";$trys_curr = $data[$qq]['trys']; echo "<div class='trys-left'>$trys_curr попытки(-ок) осталось<br></div>";}
?>