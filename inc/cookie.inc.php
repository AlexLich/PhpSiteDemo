<?
$lastVisit = '';
$visitCounter = 0;

if(isset($_COOKIE["visitCounter"])) {
  $visitCounter = $_COOKIE["visitCounter"];
}

IncrementCounter();

SaveLastVisit('Abys');

function IncrementCounter()
{
  global $visitCounter;
  $visitCounter++;
  SaveCookie("visitCounter",$visitCounter);
}

function SaveLastVisit($name)
{
  global $lastVisit;
  $lastVisit = time();
  SaveCookie("lastVisit",$lastVisit);
}

function SaveCookie($prop, $value) {
  setcookie($prop,$value);
}
