<?php
if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
        print "Lengkapi form";
    }else{
        $username=$_POST['username'];
        $tanggal=date("h:i:s");
        $buka=fopen("hasil.html",'a');
        fwrite($buka,"username : ${username} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fclose($buka);
    }
}
