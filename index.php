<?php
$username = "Hans Meiser";

$template = file_get_contents('./templates/index.html');
$template = str_replace('###username###', $username, $template);

echo $template;
