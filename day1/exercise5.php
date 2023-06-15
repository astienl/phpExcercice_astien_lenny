?php
$str = "abcdefghijklmnopqrstuvwxyz";

$i = 0;


while( $i < $str )
{
  echo $str [$i +=1] ;
  $i++;
}
?

<?php
$str = "abcdefghijklmnopqrstuvwxyz";

$i = 0;


while( $i < strlen($str) ){
  if($i % 2){
    echo $str [$i] 
  }
  ;
  $i++;
}
?>

