<?php

$redis = new Redis();
$redis->connect("redis", 6379);

$randomNumber = rand(111111,999999);
print "Hello world. Your random number is " . $randomNumber;
print "<br>The last random number was " . $redis->get('lastRandomNumber');

$redis->set('lastRandomNumber', $randomNumber);

