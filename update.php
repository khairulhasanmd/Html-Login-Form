<?php 
echo dirname(__FILE__) ;
echo shell_exec("/usr/bin/git pull 2>&1");
?>
