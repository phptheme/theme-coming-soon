<?php

namespace PhpTheme\ComingSoonTheme;

class SocialMenu extends \PhpTheme\Core\ThemeWidget
{

    public $items = [];

    public function toString() : string
    {
        return $this->render('social-menu', [
            'items' => $this->items
        ]);
    }

}