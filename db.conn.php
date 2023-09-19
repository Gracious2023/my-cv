<?php
                                //  username        password           database name
$conn = new mysqli("localhost", "resumeuser", "resume2023", "resumedb");
if(mysqli_connect_errno()){printf("connect failed: %s\n", mysqli_connect_error());
    exit();}
?>