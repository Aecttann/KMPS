<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['FIO'])) { $FIO=$_POST['FIO']; if ($FIO =='') { unset($FIO);} }
    if (isset($_POST['vk'])) { $vk=$_POST['vk']; if ($vk =='') { unset($vk);} }
    //������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
 if (empty($login) or empty($password) or empty($FIO) or empty($vk)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    //���� ����� � ������ �������, �� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
    $password = stripslashes($password);
	$password = htmlspecialchars($password);
	$FIO = stripslashes($FIO);
	$FIO = htmlspecialchars($FIO);
	$vk = stripslashes($vk);
    $vk = htmlspecialchars($vk);
 //������� ������ �������
    $login = trim($login);
    $password = trim($password);
    $FIO = trim($FIO);
    $vk = trim($vk);
 // ������������ � ����
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
	 mysql_query("SET NAMES 'utf8';");
 // �������� �� ������������� ������������ � ����� �� �������
    $result = mysql_query("SELECT id FROM users WHERE login='$login'")or die(mysql_error());
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("��������, �������� ���� ����� ��� ���������������. ������� ������ �����.");
    }
 // ���� ������ ���, �� ��������� ������

    $result2 = mysql_query ("INSERT INTO users (FIO,login,password,vk, lecAccess) VALUES('$FIO','$login','$password','$vk', '')");
	
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo "�� ������� ����������������! ������ �� ������ ����� �� ����. <a href='index.php'>������� ��������</a>";
    }
 else {
    echo "������! �� �� ����������������.";
    }
    ?>