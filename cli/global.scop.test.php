#!/usr/bin/php
<?php

$title = 'HOME PAGE'; /* глобальная область видимости */ 

function test()
{ 
    global $title;
    echo $title; /* ссылка на переменную глобальной области видимости */ 
} 

test();

// Использование $GLOBALS вместо global

$title = 'HOME PAGE'; /* глобальная область видимости */ 

function test1()
{ 
    // global $title;
    echo $GLOBALS['title']; /* Использование $GLOBALS вместо global */ 
} 

test1();