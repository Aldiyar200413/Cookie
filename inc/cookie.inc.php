<?
$visitCounter=1;
if(isset($_COOKIE['visitCounter'])){
	$visitCounter=$_COOKIE['visitCounter'];
}
$visitCounter++;
setcookie("visitCounter", $visitCounter);

setcookie("lastVisit", "", time()+7200);

date_default_timezone_set('Asia/Almaty');
$lastVisit = $_COOKIE['lastVisit'];
$lastVisit = date('d-m-Y h:i:s a');
if($_COOKIE["visitCounter"]<=1){
    echo "<blockquote>Спасибо что зашли на огонёк!</blockquote>";
      }
else{
    echo "<blockquote>Вы зашли к нам {$_COOKIE['visitCounter']} раз.<br> Последний вход ".$lastVisit."</blockquote>";
    }
?>