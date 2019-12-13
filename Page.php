<?php

namespace PhpTheme\ComingSoonTheme;

class Page extends \PhpTheme\Core\ThemeWidget
{

    public $text;

    public $title;

    public function toString() : string
    {
        return $this->render('page', [
            'text' => $this->text,
            'title' => $this->title
        ]);
    }

}