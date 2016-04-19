<?php
/* Основные настройки */
$DB_HOST="localhost";
$DB_LOGIN="root";
$DB_PASSWORD="12345";
$DB_NAME="gbook";
$link=mysqli_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD,$DB_NAME);

/* Основные настройки */



/* Сохранение записи в БД */

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = trim(strip_tags($_POST['name']));
$email = trim(strip_tags($_POST['email']));
$msg = trim(strip_tags($_POST['msg']));

    if($name != '' || $email != '' || $msg != '')
    {$query="INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";

$res=mysqli_query($link,$query);}
   header("Location:{$_SERVER['REQUEST_URI']}"); 
//header("Location:index.php?id=gbook ".$_SERVER['REQUEST_URI']);
}
/* Сохранение записи в БД */

/* Удаление записи из БД */
if(isset($_GET["del"])){
	$del = (int)$_GET["del"];
	mysqli_query($link,"DELETE FROM msgs WHERE id=$del");	
}

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!"/>

</form>
<?php
/* Вывод записей из БД */
$sql="SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
     $res1=mysqli_query($link,$sql);
    echo "<hr>";
      while($row = mysqli_fetch_array($res1)){  
     echo "<p> <a href=".$row['email'].">".$row['name']."</a> ".date("m.d.y",$row['dt'])." написал<br />".$row['msg']." </p> <p align='right'> <a href='/index.php?id=gbook&del={$row["id"]}'>Удалить</a></p>";
    echo "<hr>";}

mysqli_close($link);
/* Вывод записей из БД */
?>