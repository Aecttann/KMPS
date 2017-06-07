<?php
if($_POST['inp1'] == "Платон") 
	$first = 14.285;
else
	$first = 0;

if( isset( $_POST['option22'] ) )
{
	switch( $_POST['option22'] )
	{
        case 'a1':
			$second = 0;
		break;
		case 'a2':
            $second = 14.285;
		break;
		case 'a3':
            $second = 0;
		break;
	}
}

if( isset( $_POST['option3'] ) )
{
	switch( $_POST['option3'] )
	{
        case 'a4':
			$third = 14.285;
		break;
		case 'a5':
            $third = 0;
		break;
		case 'a6':
            $third = 0;
		break;
	}
}

if( isset( $_POST['option4'] ) )
{
	switch( $_POST['option4'] )
	{
        case 'a7':
			$fourth = 0;
		break;
		case 'a8':
            $fourth = 0;
		break;
		case 'a9':
            $fourth = 14.285;
		break;
	}
}
if( isset( $_POST['option5'] ) )
{
	switch( $_POST['option5'] )
	{
        case 'a10':
			$fifth = 0;
		break;
		case 'a11':
            $fifth = 0;
		break;
		case 'a12':
            $fifth = 14.285;
		break;
		case 'a13':
            $fifth = 0;
		break;
	}
}
if( isset( $_POST['option6'] ) )
{
	switch( $_POST['option6'] )
	{
        case 'a14':
			$sixth = 14.285;
		break;
		case 'a15':
            $sixth = 0;
		break;
		case 'a16':
            $sixth = 0;
		break;
	}
}
if( isset( $_POST['option7'] ) )
{
	switch( $_POST['option7'] )
	{
        case 'a17':
			$seventh = 0;
		break;
		case 'a18':
            $seventh = 0;
		break;
		case 'a19':
            $seventh = 14.285;
		break;
	}
}

$result = $first + $second + $third + $fourth + $fifth + $sixth + $seventh;
if($result >= 80){
	header('Location: lection2.php');
// $query = "UPDATE users SET lecAccess = '1' WHERE login= '". $user ."' ";
/* $query = "INSERT INTO users (FIO, login, password, vk, lecAccess) VALUES ('dfg', 'fio', '123', 'vk', '1')";
 mysql_query($query) or die(mysql_error());
 */
 /*
$login = $_SESSION['login'];
$result2 = mysql_query("UPDATE `users` SET lecAccess = '1' WHERE login = '$login'"); 
	header('Location: lection2.php');
	*/
//	session_start();
//	$login = $_SESSION['login'];
//	echo "UPDATE users SET lecAccess = '1' WHERE login = '$login'";
//	$result2 = mysql_query("UPDATE 'users' SET 'lecAccess' = '1' WHERE 'login' = '$login'"); 
//		$login = $_SESSION['login'];
//			$result2 = mysql_query("UPDATE	users SET lecAccess = '1' WHERE login = '$login'"); 
 /*
                    $result2 = mysql_query("UPDATE `users` SET lecAccess = '1'"); 
if(!$result2) {die("Проблема с обновлением  для логина <b>$login </b>");} 
else {echo "Запись обнволена";}
               */
 }
 
 
if( isset( $_POST['test21'] ) )
{
	switch( $_POST['test21'] )
	{
        case 'a1':
			$first2 = 0;
		break;
		case 'a2':
            $first2 = 0;
		break;
		case 'a3':
            $first2 = 20;
		break;
	}
}

if( isset( $_POST['test22'] ) )
{
	switch( $_POST['test22'] )
	{
        case 'a4':
			$second2 = 20;
		break;
		case 'a5':
            $second2 = 0;
		break;
		case 'a6':
            $second2 = 0;
		break;
	}
}

if(($_POST['inp2'] == "Інтернет") || ($_POST['inp2'] == "інтернет") || ($_POST['inp2'] == "Интернет") || ($_POST['inp2'] == "интернет")) 
	$third2 = 20;
else
	$third2 = 0;

if( isset( $_POST['test23'] ) )
{
	switch( $_POST['test23'] )
	{
        case 'a7':
			$fourth2 = 0;
		break;
		case 'a8':
            $fourth2 = 0;
		break;
		case 'a9':
            $fourth2 = 20;
		break;
	}
}

if( isset( $_POST['test25'] ) )
{
	switch( $_POST['test25'] )
	{
        case 'a10':
			$fifth2 = 20;
		break;
		case 'a11':
            $fifth2 = 0;
		break;
		case 'a12':
            $fifth2 = 0;
		break;
	}
}

$result2 = $first2 + $second2 + $third2 + $fourth2 + $fifth2;
if($result2 >= 80){
	header('Location: lection3.php');
}
 
?>