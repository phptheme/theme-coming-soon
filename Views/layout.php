<!DOCTYPE html>
<html lang="<?= $this->theme->lang;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Title Page-->
<?php if($title):?><title><?= $title;?></title><?php endif;?>
<!-- Bootstrap core CSS -->
<link href="<?= $this->theme->baseUrl;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="<?= $this->theme->baseUrl;?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="<?= $this->theme->baseUrl;?>/css/coming-soon.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= $this->theme->baseUrl;?>/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= $this->theme->baseUrl;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= $this->theme->baseUrl;?>/js/pjax2/jquery.pjax.js"></script>
<?= $this->theme->head;?>
</head>
<body>
<?= $this->theme->beginBody;?>
<?= $content;?>
<!-- Custom scripts for this template -->
<script src="<?= $this->theme->baseUrl;?>/js/coming-soon.min.js"></script>
<?= $this->theme->endBody;?>
</body>
</html>