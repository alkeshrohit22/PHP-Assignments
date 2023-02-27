<?php

//6. Write a PHP script to extract the user name from the email ID
$emailid  = 'alkeshrohit2201@gmail.com';
$username = strstr($emailid, '@', true);
echo "User name is : ".$username."<br />";

//EOF