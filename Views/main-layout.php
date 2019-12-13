<?php $this->theme->beginLayout([
    'subscribeForm' => $subscribeForm,
    'footer' => $footer,
    'background' => $background,
    'title' => $title,
    'lang' => $lang,
    'head' => $head,
    'beginBody' => $beginBody,
    'endBody' => $endBody
]);?>

<?= $content;?>

<?php $this->theme->endLayout();?>