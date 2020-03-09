<?php

namespace PhpTheme\Themes\ComingSoon;

class Page extends \PhpTheme\Core\Widget
{

    public $content;

    public $title;

    public function toString() : string
    {
        return $this->render('page', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}