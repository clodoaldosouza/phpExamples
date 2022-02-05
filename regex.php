<?php
$pattern = '/(?<HEADER>#)(?<ACCOUNT>\d{4})(?<PASS>\w{8})(?<PARAM>(?:A|B|C|D).(\w{2}))(?<CRC>.{2})(?<DATE>.{10})(?<TAIL>#)/m';
$message = "#50003E0B28F2C3DB4A1644034395#";
preg_match($pattern, $message, $matches);
echo "Account = $matches[ACCOUNT] ,Pass = $matches[PASS] ,CRC = $matches[CRC] , DATE = $matches[DATE]" . PHP_EOL;

