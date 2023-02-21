<?php

$value = "Alkesh S Rohit";

$value = preg_replace('/(\b[a-z])/i','<span style="color:yellow; font-size: 26px;">\1</span>', $value);

echo $value;
?>