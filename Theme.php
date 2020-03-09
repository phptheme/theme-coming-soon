<?php

namespace PhpTheme\Themes\ComingSoon;

class Theme extends \PhpTheme\Core\Theme
{
    
    const LAYOUT = Layout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const SOCIAL_MENU = SocialMenu::class;

    const SOCIAL_MENU_ITEM = SocialMenuItem::class;

    const SUBSCRIBE_FORM = SubscribeForm::class;

    const PAGE = Page::class;

    protected $_layout;

    public $baseUrl;

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, $params);
    }

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, $params);
    }

    public function subscribeForm(array $params = [])
    {
        return $this->widget(static::SUBSCRIBE_FORM, $params);
    }

    public function socialMenuItem(array $params = [])
    {
        return $this->widget(static::SOCIAL_MENU_ITEM, $params);
    }

    public function socialMenu(array $params = [])
    {
        return $this->widget(static::SOCIAL_MENU, $params);
    }

    public function page(array $params = [])
    {
        return $this->widget(static::PAGE, $params);
    }    

}