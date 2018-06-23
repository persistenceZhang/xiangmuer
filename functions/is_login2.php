<?php
function is_login2(){
    if(isset($_SESSION["tea_id"])){
return TRUE;
}else{
return FALSE;
}
}
?>