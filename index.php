<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <?php
       $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
       $url = array_filter(explode('/', $url));
       $file = $url[0] . '.php';
       if(is_file($file)){
           include $file;
       }else{
           include '404.php';
       }
    ?>
</body>
</html>