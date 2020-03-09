<?php

namespace PhpTheme\Themes\ComingSoon;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $layout = [];

    public $backgroundImage;

    public $title;

    public $socialMenu = [];

    public $socialMenuOptions = [];

    public function toString() : string
    {
        $layout = array_merge(['title' => $this->title], $this->layout);

        $socialMenu = $this->theme->socialMenu(array_merge($this->socialMenuOptions, ['items' => $this->socialMenu]));

        return $this->render('main-layout', [
            'content' => $this->content,
            'layout' => $layout,
            'backgroundImage' => $this->backgroundImage,
            'socialMenu' => $socialMenu,
            'copyright' => $this->theme->getCopyright()
        ]);
    }

}