

<?php

include("data_class.php");
$login_email=$_GET['login_email'];
$login_password=$_GET["login_password"];

if($login_email==null||$login_password==null){
    header("Location:index.php");
}
elseif($login_email!==null&&$login_password!==null)
{
    $obj=new data();
    $obj->setconnection();
    $obj->adminLogin($login_email,$login_password);

}