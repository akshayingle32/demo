<?php 

echo (defined('PHP_VERSION') ? '__DIR__ is defined' :
             '__DIR__ is NOT defined' . PHP_EOL); 


echo (defined('__FILE') ? '__FILE__ is defined' : 
            '__FILE__ is NOT defined' . PHP_EOL); 

echo (defined('PHP_VERSION') ? 'PHP_VERSION is defined' :
             'PHP_VERSION is NOT defined') . PHP_EOL; 

echo 'PHP Version: ' . PHP_VERSION . PHP_EOL; 
?>