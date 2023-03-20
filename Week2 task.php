<?php
$age=18;
$pvc_check=true;
$ward=020;
if ($age<18){
echo "Not eligible to vote";
}
else if (pvc_check!==true){
echo "Not eligible to vote";
}
else if(ward!==020){
echo "Not eligible to vote";
}
else{
echo "Eligible to vote";
}
?>