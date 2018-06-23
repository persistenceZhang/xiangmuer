<?php
function is_login(){
    if(isset($_SESSION["stu_id"])){
return TRUE;
}else{
return FALSE;
}
}
?>