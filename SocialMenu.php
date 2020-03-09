<?php

namespace PhpTheme\Themes\ComingSoon;

class SocialMenu extends \PhpTheme\Core\Widget
{

    public $items = [];

    public function toString() : string
    {
        return $this->render('social-menu', [
            'items' => $this->items
        ]);
    }

}