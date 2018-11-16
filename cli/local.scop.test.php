#!/usr/bin/php
<?php

$title = 'HOME PAGE'; /* глобальная область видимости */

function test()
{
    echo $title; // ссылка на переменную локальной области видимости 
}
test(); // Undefined variable: title in local.scop.test.php on line 8

