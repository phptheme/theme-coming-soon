<?php $this->beginLayout([
    'subscribeForm' => $subscribeForm,
    'footer' => $footer,
    'background' => $background,
    'title' => $title,
    'lang' => $lang,
    'head' => $head,
    'beginBody' => $beginBody,
    'endBody' => $endBody
]);?>

<?php if($title):?><h1 class="mb-3"><?= $title;?></h1><?php endif;?>

<div class="mb-5">

<?= $content;?>

</div>

<?php $this->endLayout();?>