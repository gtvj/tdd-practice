<?php

require 'URLDeconstructor.php';

$url = new URLDeconstructor('http://www.totallymadeupdomain.com/totally/made/up/path');

printf('<p>%s : %s</p>', 'The protocol is', $url->getProtocol());
printf('<p>%s : %s</p>', 'The domain is', $url->getDomain());
printf('<p>%s : %s</p>', 'The path is', $url->getPath());
