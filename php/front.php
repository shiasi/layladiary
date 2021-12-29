    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- CONTENT -->
    <div class="hero is-fullheight">

        <main class="container hero-body">
            <div class="content has-text-centered ">
                <figure class="image is-128x128 is-inline-block ">
                    <?php
                    if (!$page->custom('frontPageImageUrl') == '') {
                        $frontPageImage = $page->custom('frontPageImageUrl');
                    } else {
                        $frontPageImage = $page->coverImage();
                    }
                    echo '<img class="is-rounded" src="' . $frontPageImage . '">';
                    ?>
                </figure>

                <div class="title"><?php echo $site->title() ?></div>
                <div class="subtitle"><?php echo $site->slogan() ?></div>
                <p><?php echo $site->description() ?></p>
                <div class="social-icons">
                    <?php
                    if ($site->twitter()) {
                        echo '<span class="icon is-large"><a href="' . $site->twitter() . '" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></span>';
                    }
                    if ($site->facebook()) {
                        echo '<span class="icon is-large"><a href="' . $site->facebook() . '" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a></span>';
                    }
                    if ($site->instagram()) {
                        echo '<span class="icon is-large"><a href="' . $site->instagram() . '" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></span>';
                    }
                    if ($site->linkedin()) {
                        echo '<span class="icon is-large"><a href="' . $site->linkedin() . '" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></span>';
                    }
                    if ($site->github()) {
                        echo '<span class="icon is-large"><a href="' . $site->github() . '" target="_blank"><i class="fa fa-github fa-2x"></i></a></span>';
                    }
                    ?>
                </div>
                <!-- Full content -->
                <div class="mt-2">
                    <?php echo $page->content(); ?>
                </div>
                <div class="mt-6">
                    <?php if ($page->custom('frontPagePrimaryButtonText')) : ?>
                        <a href="<?php echo $page->custom('frontPagePrimaryButtonUrl'); ?>" class="button is-primary m-2"><?php echo $page->custom('frontPagePrimaryButtonText'); ?></a>
                    <?php endif ?>
                    <?php if ($page->custom('frontPageSecondaryButtonText')) : ?>
                        <a href="<?php echo $page->custom('frontPageSecondaryButtonUrl'); ?>" class="button m-2"><?php echo $page->custom('frontPageSecondaryButtonText'); ?></a>
                    <?php endif ?>

                </div>
            </div>
        </main>