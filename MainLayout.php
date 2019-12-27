<?php

namespace PhpTheme\ComingSoonTheme;

class MainLayout extends \PhpTheme\Core\ThemeWidget
{

    public $content;

    public $layout = [];

    public $socialMenu = [];

    public $socialMenuOptions = [];

    public $background;

    public $title;

    public $pageTitle;

    public function toString() : string
    {
        $layout = $this->layout;

        $layout['socialMenu'] = $this->socialMenu;

        $layout['socialMenuOptions'] = $this->socialMenuOptions;

        $layout['background'] = $this->background;

        $layout['title'] = $this->title;

        return $this->render('main-layout', [
            'content' => $this->content,
            'pageTitle' => $this->pageTitle,
            'layout' => $layout
        ]);
    }

}