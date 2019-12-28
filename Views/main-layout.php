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

<style type="text/css">

    a {
        text-decoration: underline;
        color: #ffffff;
    }

</style>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <?= $content;?>
                    <div style="position: fixed; bottom: 0px; left: 0px; padding-left: 3rem;">
                        <div style="padding: 15px;">
                            <small>Copyright © 2018-2019 <?= $copyright;?>, design by <a target="_blank" href="https://startbootstrap.com">Start Bootstrap</a></small>
                            <?php if($poweredBy):?><br><small><?= $poweredBy;?></small><?php endif;?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $socialMenu;?>
<?php $this->theme->endLayout();?>