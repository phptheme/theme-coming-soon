<?php

namespace PhpTheme\Themes\ComingSoon;

class SocialMenuItem extends \PhpTheme\Core\Widget
{

    public $label;

    public $url;

    public $icon; // twitter facebook-f instagram

    public $options = [];

    public function toString() : string
    {
        $options = $this->options;

        $options['href'] = $this->url;

        return $this->render('social-menu-item', [
            'label' => $this->label,
            'url' => $this->url,
            'icon' => $this->icon,
            'options' => $options
        ]);
    }

}