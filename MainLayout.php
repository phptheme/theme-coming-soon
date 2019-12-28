<?php

namespace PhpTheme\ComingSoonTheme;

class MainLayout extends \PhpTheme\Core\ThemeWidget
{

    public $content;

    public $layout = [];

    public $background;

    public $title;

    public $socialMenu = [];

    public $socialMenuOptions = [];

    public $pageTitle;

    public $copyright = 'My Company';

    public $poweredBy;

    public function toString() : string
    {
        $layout = array_merge(
            [
                'title' => $this->title
            ], 
            $this->layout
        );

        $socialMenu = $this->theme->socialMenu(
            array_merge(
                $this->socialMenuOptions, 
                [
                    'items' => $this->socialMenu
                ]
            )
        );

        return $this->render('main-layout', [
            'content' => $this->content,
            'pageTitle' => $this->pageTitle,
            'layout' => $layout,
            'background' => $this->background,
            'socialMenu' => $socialMenu,
            'copyright' => strtr($this->copyright, ['{year}' => date('Y')]),
            'poweredBy' => $this->poweredBy
        ]);
    }

}