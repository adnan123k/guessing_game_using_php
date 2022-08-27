<title>MHD ADNAN AL KHARFAN </title>
<h1>Welcome to my guessing game</h1>
<P>
<?php
if(!array_key_exists('guess',$_GET))
echo 'Missing guess parameter';
elseif(empty($_GET['guess']))
echo 'Your guess is too short';
elseif(is_numeric($_GET['guess'])==false)
echo 'Your guess is not a number';
elseif( $_GET['guess']<76)
echo 'Your guess is too low';
elseif($_GET['guess']>76)
echo 'Your guess is too high';
elseif($_GET['guess']==76)
echo 'Congratulations - You are right';
?></p>
