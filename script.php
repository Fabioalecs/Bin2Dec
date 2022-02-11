<?php

$binary = $_POST['binary'];

$result = bindec($binary);

echo $result;