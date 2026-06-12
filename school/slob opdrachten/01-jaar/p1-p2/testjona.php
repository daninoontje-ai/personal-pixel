<?php

$os = php_uname("s");
$system = php_uname();

echo "$os" . PHP_EOL;
echo "$system" . PHP_EOL;

readline("druk op enter voor goegel") . PHP_EOL;
exec("open www.google.com");
readline("druk op enter voor fogel") . PHP_EOL;
exec("open -a Terminal \"curl parrot.live\"");