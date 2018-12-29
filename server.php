<?php
if($_GET['text']){
    file_put_contents("chat.txt", date('[Y-m-d]-[H:i:s] ').$_GET['text']."\n", FILE_APPEND | LOCK_EX);
} else {
    print("Error");
}
?>