<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Shevina, Shevina Shiasi, Web Design, Web Development, Developer, Copywriter">
<meta name="author" content="Shevina Shiasi">

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('assets/css/bulma.min.css'); ?>
<?php echo Theme::css('assets/css/bulma-rtl.min.css'); ?>
<?php echo Theme::css('assets/css/style.css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<link rel="icon" href="<?php echo $site->logo(); ?>" type="image/png">

<!-- Load plugins with the hook siteHead -->
<?php Theme::plugins('siteHead') ?>