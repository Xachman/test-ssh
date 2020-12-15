<?php

use phpseclib\Crypt\RSA;
use phpseclib\Net\SSH2;

require_once './vendor/autoload.php';

$ssh = new SSH2('ubuntu');
$rsa = new RSA();
$rsa->loadKey(file_get_contents('/root/.ssh/id_rsa'));
var_dump($ssh->login('root', $rsa));


echo $ssh->exec('sleep 300; ls -al');