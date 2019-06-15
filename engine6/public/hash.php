<?php

$hash = password_hash('123',PASSWORD_DEFAULT);
var_dump($hash);
var_dump(password_verify('123',$hash));