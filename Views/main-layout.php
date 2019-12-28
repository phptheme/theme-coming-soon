<?php $this->theme->beginLayout($layout);?>

<div class="overlay"></div>

<?php if($background):?>

<img style="min-width: 100%; min-height: 100%; position: fixed; left: 0; top: 0;" src="<?= $background;?>">

<?php else:?>

<video 
    playsinline="playsinline" 
    autoplay="autoplay" 
    muted="muted" 
    loop="loop"><source src="<?= $this->theme->baseUrl;?>/mp4/bg.mp4" type="video/mp4">
</video>

<?php endif;?>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <?= $content;?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $socialMenu;?>

<?php $this->theme->endLayout();?>