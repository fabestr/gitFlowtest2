<?php


namespace App\Entity;


class Hello
{

    public function hello()
    {
        return 'hello';
    }

    public function helloWorld()
    {
        return $this->hello().' world';
    }
}