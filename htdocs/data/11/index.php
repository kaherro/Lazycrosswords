<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <a class="username"><?php echo $_SESSION['user_name']; ?></a>
     <a href="../../logout.php" class="logout">logout</a>
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

<?php
    header("Content-Type: text/html; charset=ansi");

    extract($_REQUEST);
    error_reporting(0);
/*
    $separator = "\n";

    ob_start();
    echo '<div id="firstDivA"></div>' . $separator;
    echo '<div id="secondDivA"></div>' . $separator;
    $content = ob_get_clean();

    $sections = explode($separator, $content);*/

    function console_log($data){ 
        if(is_array($data) || is_object($data)){
            echo("<script>console.log('".json_encode($data)."');</script>");
        } else {
            echo("<script>console.log('".$data."');</script>");
        }
    }


    //$content = iconv('UTF-8', 'ANSI', $content);
    //file_put_contents('file.php', $content);


    $dir = dirname(__FILE__);
    //$dir = dirname( dirname(__FILE__) );
    
    file_put_contents("input.txt", "");
    
    $file=fopen("input.txt", "a");
    $size=$_POST['size'];
    file_put_contents('size.txt', $size); 
    //echo $message; 
    fwrite($file, $dir ."\n");
    fwrite($file, $size ."\n");
    $inputs=$_POST['input'];
    file_put_contents('inputs.txt', $inputs); 
    fwrite($file, $inputs);
    fclose($file);
    
    copy("input.txt", "../../input.txt");
    copy("id.txt", "../../id.txt");
    
    file_put_contents("trys.txt", "");
    
    $name=$_POST['name']; 
    file_put_contents('name.txt', $name);
    
    $file=fopen("trys.txt", "a");
    $size=$_POST['trys'];
    //echo $message; 
    fwrite($file, $trys);
    fclose($file);


    //exec("test.exe 234");
    chdir("../../"); 
    exec("ansi_input.exe");
    exec("generate.exe");
    //chdir($dir);
    exec("ansi_grid.exe");
    exec("ansi_grid_keys.exe");
    header("Refresh:0; url=main.php");
    //header("Refresh:0");
    //exec("generator.exe");
    //exec("ansi_output.py");
    //exec("grid.exe");
    //exec("../ansi_grid.py");
    //exec("grid_keys.exe");
    //exec("../ansi_grid_keys.py");
/*
    $file = fopen("output.txt","r"); 
    $array = array(); 
    while(!feof($file)) { 
        $line = fgets($file); 
        $tmp = explode(" ", $line);
        array_push($array, $tmp);
        //console_log($tmp); 
    }
    array_pop($array); 


    for ($i = 0; $i < count($array); $i++) {
        //console_log(2);
        //console_log($array[$i]); 
        for ($j = 0; $j < count($array[$i]); $j++) {
          echo($array[$i][$j]);
        }
        //console_log("");
    }
    //console_log($array); 
    /*fclose($file);

    $dir_par = dirname( dirname(__FILE__) );
    
    $dir = (string)$dir;
    $dir_par = (string)$dir_par;
*/
    //$value = (string)$value;
    //rename("index_new.php", "$value/index.php");
    //copy("input.txt", "input_new.txt");
    //$value = (string)$value;
    //rename("index_new.php", "$value/index.php");
    //rename("input.txt", "folder\input.txt");

?>