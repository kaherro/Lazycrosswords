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
     <h1 class="name"><?php echo $_SESSION['user_name']; ?></h1>
     <a href="logout.php">Logout</a><br>
</body>
</html>

<?php 
}else{
     header("Location: login_.php");
     exit();
}
 ?>


<?php 
    $file = fopen("last_id.txt", 'a');
    
    $value = file_get_contents('last_id.txt') + 1;
    echo $value;
    file_put_contents("last_id.txt", "");
    fwrite($file, $value);

    if (!file_exists("data/$value")) {
        mkdir("data/$value", 0777, true);
    }

    $user = $_SESSION['user_name']; 
    $file = fopen("users/$user.txt", "a");
    fwrite($file, $value . "\n");

    //$file = fopen("all_crosswords.txt", "a");
    //fwrite($file, $value . "\n");

    $file = fopen("author.txt", 'a');
    file_put_contents("author.txt", "");
    fwrite($file, $_SESSION['user_name']);
    
    $value = (string)$value;

    copy("author.txt", "data/$value/author.txt");
    copy("index.php", "data/$value/index.php");
    copy("main.php", "data/$value/main.php");
    copy("last_id.txt", "data/$value/id.txt");
    copy("style.css", "data/$value/style.css");
    //copy("ansi_grid.exe", "data/$value/ansi_grid.exe");
    //copy("ansi_grid_keys.exe", "data/$value/ansi_grid_keys.exe");
    copy("users.json", "data/$value/users.json");
    //copy("_bz2.pyd", "data/$value/_bz2.pyd");
    //copy("_decimal.pyd", "data/$value/_decimal.pyd");
    //copy("_hashlib.pyd", "data/$value/_hashlib.pyd");
    //copy("_lzma.pyd", "data/$value/_lzma.pyd");
    //copy("_socket.pyd", "data/$value/_socket.pyd");
    //copy("_ssl.pyd", "data/$value/_ssl.pyd");
    //copy("ansi_grid_keys.exe", "data/$value/ansi_grid_keys.exe");
    //copy("base_library.zip", "data/$value/base_library.zip");
    //copy("libcrypto-1_1.dll", "data/$value/libcrypto-1_1.dll");
    //copy("libssl-1_1.dll", "data/$value/libssl-1_1.dll");
    //copy("python39.dll", "data/$value/python39.dll");
    //copy("select.pyd", "data/$value/select.pyd");
    //copy("unicodedata.pyd", "data/$value/unicodedata.pyd");
    //copy("VCRUNTIME140.dll", "data/$value/VCRUNTIME140.dll");
    

	header("Location: data/$value/main.php");
    
?>
