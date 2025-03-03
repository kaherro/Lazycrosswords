<?php 
session_start();
error_reporting(0);

$dir = dirname(__FILE__);

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && ($name == "" || $name ==$_SESSION['user_name']) && $dir != 'C:\xampp\htdocs') {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lazycrosswords</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <a href="../../logout.php" class="logout">выйти</a>
</body>
</html>

<?php 
}else{
     header("Location: ../../login_.php");
     exit();
}
 ?>




<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    
    <!--script src="https://code.jquery.com/jquery-3.6.0.min.js"></script-->
    <group class="group1"></group>
    <div class="form-group">
        <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
        <form method="post" action="index.php" >
            <label class="crossname">Название кроссворда</label>
            <input maxlength='23' type="text" name="name"  class="inputname"  value = '<?php 
                $name = file_get_contents('name.txt'); 
                echo $name;
            ?>' placeholder="" required />
            <br><br>
            <label class="trys">Максимальное количество попыток:</label>
            <input type="number" name="trys" min="1" max="" class="inputtrys" aria-describedby="trys" value = '<?php 
                $trys = file_get_contents('trys.txt'); 
                echo $trys;
            ?>' placeholder="" required />
            <br><br>
            <label class="size">Количество слов:</label>
            <input type="number" name="size" min="1" max="25" class="inputsize" aria-describedby="size" value = '<?php 
                $size = file_get_contents('size.txt'); 
                echo $size;
            ?>' placeholder="" required />
            <br><br>
            <label class="words">Слова:</label>
            <br>
            <textarea class="inputwords" name="input" placeholder="Слова нужно вводить в таком формате:&#10;Москва-столица России&#10;Апельсин-оранжевый цитрусовый фрукт&#10;Мухаммед-самое популярное имя" rows="10" required><?php 
                    $inputs = file_get_contents('inputs.txt'); 
                    echo $inputs;
                ?></textarea>
            <br><br>
            <button type="fs" id="bttn" class="save">Сохранить изменения</button>
            <br><br>
        </form>
        <style>
            .go-to-grid{
                position: absolute;
                left: 100px;
                top: 0px;

                font-style: normal;
                font-weight: 500;
                font-size: 18px;
                line-height: 33px;

                color: #1fa5ff;
            }
            .crossid{
                position: absolute;
                width: 301px;
                height: 32px;
                left: 469px;
                top: 40px;

                font-style: normal;
                font-weight: 500;
                font-size: 18px;
                line-height: 21px;
            }
            .picture{
                position: absolute;
                width: 288px;
                height: 38px;
                right: 0px;
                top: 0px;
            }
            .errors{
                position: absolute;
                width: 719px;
                height: 47px;
                left: 65px;
                top: 970px;

                font-style: normal;
                font-weight: 500;
                font-size: 20px;
                line-height: 33px;

                color: #6b6b6b;
            }
        </style>
        <p><a href="../../start_page.php"><img src="../../3.gif" class='picture' a></p>
        <a class='go-to-grid' href='grid.php'>Нажмите сюда, чтобы перейти на страницу для решающего</a>
        <?php
            $value = file_get_contents('id.txt');
            echo "<a class='crossid'> Crossword ID: $value </a>";
        ?>
        <a class="errors">Если у вас возникли проблемы с сайтом, то нажмите "Ctrl + F5"<a>
    </div>

	<?php 
        //extract($_REQUEST);
        error_reporting(0);
        require "grid_keys.php"; 
        
        //copy("input.txt", "input_new.txt");
        //require "grid.php"; 
    ?>

</body>