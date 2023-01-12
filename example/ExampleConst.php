<?php
namespace example;


class ExampleConst
{
    public static function TOKEN() {
        return file_get_contents("token.txt");
    }
}