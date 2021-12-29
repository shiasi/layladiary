    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- CONTENT -->
    <main class="container content">
        <section class="section mt-6">
            <h1 class="title"><?php echo $page->title() ?></h1>
            <p class="subtitle"><?php echo $page->description() ?></p>
        </section>
        <section class="section content">

            <div class="box">
                <div class="block featured-page-image has-background-<?php $coloring = array("primary", "danger", "link", "info", "success", "warning");
                                                                        echo $coloring[rand(0, count($coloring) - 1)] ?>" style="background-image: url('<?php echo $page->coverImage(); ?>');">
                </div>
                <article>
                    <h2 class=""><?php echo $page->title(); ?></h2>
                    <div class="is-size-7 level">
                        <p class="level-left"> <span class="tag is-primary mx-1"><?php echo $page->user('firstName') . '  ' . $page->user('lastName'); ?></span> <span class="tag is-link mx-1"><?php echo $page->date() ?></span></p>
                        <p class="level-right">
                            <?php
                            $returnsArray = true;

                            $items = $page->tags($returnsArray);

                            foreach ($items as $tagKey => $tagName) {
                                echo '<span class="tag mx-1">' . $tagName . '</span>';
                            }
                            ?>
                        </p>
                    </div>
                    <!-- FULL CONTENT -->
                    <div>
                        <?php echo $page->content(); ?>
                    </div>
            </div>

        </section>
    </main>