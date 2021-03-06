<?php

namespace Solid\Html;

class TagsTests extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Tags;
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Tags;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }

    /*public function testCriarTagAComClassEId()
    {
        $html = new Html;

        $a = $html->a('http://www.example.com.br', 'Meu site');
        $a->attribute([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">Meu site</a>', $a);
    }*/
}