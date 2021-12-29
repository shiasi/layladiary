        <!-- NAVIGATION -->
        <nav class="navbar  is-fixed-top">
            <div class="container">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navigation">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <div id="navigation" class="navbar-menu">
                    <a href="<?php echo $site->url(); ?>" class="navbar-item"><?php echo $site->title() ?></a>
                    <?php foreach ($staticContent as $staticPage) : ?>
                        <?php if ($staticPage->key() == 'blog') : ?>
                            <a href="<?php echo $staticPage->permalink(); ?>" class="navbar-item <?php echo $staticPage->key() === $url->slug() ? 'has-background-danger has-text-white' : ''; ?>"><?php echo $staticPage->title() ?></a>
                        <?php else : ?>
                            <a href="<?php echo $staticPage->permalink(); ?>" class="navbar-item <?php echo $staticPage->key() === $url->slug() ? 'has-background-danger has-text-white' : ''; ?>"><?php echo $staticPage->title() ?></a>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </nav>