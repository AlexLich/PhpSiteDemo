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
  setcookie("visitCounter",$visitCounter);
}

function SaveLastVisit($name)
{
  global $lastVisit;
  $lastVisit = time();
  setcookie("lastVisit",$lastVisit);
}
