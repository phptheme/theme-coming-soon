<?php

use PhpTheme\Helpers\Html;

?>
<!DOCTYPE html>
<html lang="<?= $lang;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Title Page-->
<?php

if ($title)
{
    echo Html::tag('title', Html::escape($title));
}

?>
<!-- Bootstrap core CSS -->
<link href="<?= $this->baseUrl;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="<?= $this->baseUrl;?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="<?= $this->baseUrl;?>/css/coming-soon.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= $this->baseUrl;?>/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= $this->baseUrl;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= $this->baseUrl;?>/js/pjax2/jquery.pjax.js"></script>
<?= $head;?>
</head>
<style type="text/css">
@media (min-width: 768px)
{
    .masthead {
        width: <?= $width;?>;
    }
}
</style>
<body>
<?= $beginBody;?>
<div class="overlay"></div>
<?php if($background):?>
	<img style="min-width: 100%; min-height: 100%; position: fixed; left: 0; top: 0;" src="<?= $background;?>">
<?php else:?>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?= $this->baseUrl;?>/mp4/bg.mp4" type="video/mp4"></video>
<?php endif;?>
<div class="masthead">
	<div class="masthead-bg"></div>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 my-auto">
				<div class="masthead-content text-white py-5 py-md-0">
                    <?php

                    echo $content;

                    if ($subscribeForm)
                    {
                        if (is_array($subscribeForm))
                        {
                            echo $this->subscribeForm($subscribeForm);
                        }
                        else
                        {
                            echo $subscribeForm; // pre-rendered form...
                        }
                    }

                    ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

if ($footer)
{
    echo $this->footer($footer);
}

?>
<!-- Custom scripts for this template -->
<script src="<?= $this->baseUrl;?>/js/coming-soon.min.js"></script>
<?= $endBody;?>
</body>
</html>