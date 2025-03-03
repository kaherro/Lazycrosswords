<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<head>
	<title>Lazycrosswords</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
     <style>
          .logout{
               right: 0px;
               top: 0px;
          }
     </style>
     <a class="logout" href="logout.php">выйти</a><br>
<?php 
}else{
     header("Location: login_.php");
     exit();
}
 ?>

<img class="picture4" src="3.gif" width: 10px>

<form method="POST" action="redirect.php" target="dummyframe">
     <a class="find-by-id">Найти кроссоворд по Crossword ID</a>
     <input class="find-input" type="text" name="find">
     <button class="find" type="fs" id="bttn" class="bttn"><strong>Найти</strong></button>
     
</form>


<form method="GET" action="new_crossword.php" target="dummyframe">
    
     <button class="make-new" type="fs" id="bttn" class="bttn"><strong>Создать новый кроссворд</strong></button>
     
</form>


<group class="group22">
     <div class="mycrosswords2">Публичные кроссворды</div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <?php
          error_reporting(0);
          $name = $_SESSION['user_name']; 
          $data = file("all_crosswords.txt", FILE_IGNORE_NEW_LINES);
          //$data = array_reverse($data, true); 
          for($i = count($data) - 1; $i >= 0; $i--) {
               $dir = 'data/'.$data[$i].'/name.txt';
               $cross_name=file_get_contents($dir);
               echo "<a class='mycrossid' href='data/$data[$i]/grid.php'> $data[$i]: $cross_name</a><br>";
               //echo "<div class='mycrossid'>$data[$i]</div>";
          }
          
     ?>
     
     <br>
     <br>
     <br>
</group>

<group class="group11">
     <div class="mycrosswords">Мои кроссворды</div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <?php
          error_reporting(0);
          $name = $_SESSION['user_name']; 
          $data = file("users/$name.txt", FILE_IGNORE_NEW_LINES);
          //$data = array_reverse($data, true); 
          for($i = count($data) - 1; $i >= 0; $i--) {
               $dir = 'data/'.$data[$i].'/name.txt';
               $cross_name=file_get_contents($dir);
               echo "<a class='mycrossid' href='data/$data[$i]/main.php'> $data[$i]: $cross_name</a><br>";
               //echo "<div class='mycrossid'>$data[$i]</div>";
          }
          
     ?>
     
     <br>
     <br>
     <br>
</group>