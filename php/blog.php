    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- CONTENT -->
    <main class="container content">
        <section class="section mt-6">
            <h1 class="title"><?php echo $site->slogan() ?></h1>
            <p class="subtitle"><?php echo $site->description() ?></p>
        </section>

        <section class="section">

            <!-- Left pic style -->
            <?php foreach ($content as $page) : ?>
                <article class="box">
                    <div class="columns">
                        <?php if (!$page->coverImage()) : ?>
                            <div class="column is-3 blog-pic has-background-<?php $coloring = array("primary", "danger", "link", "info", "success", "warning");
                                                                            echo $coloring[rand(0, count($coloring) - 1)] ?>"></div>
                        <?php else : ?>
                            <div class="column is-3 blog-pic" style="background-image: url(<?php echo $page->coverImage(); ?>);">
                            </div>
                        <?php endif ?>
                        <!-- Title -->
                        <div class="column">
                            <a href="<?php echo $page->permalink(); ?>">
                                <h2 class="has-text-link"><?php echo $page->title(); ?></h2>
                            </a>
                            <!-- Info -->
                            <div class="is-size-7 level">
                                <p class="level-left"> <span class="tag is-primary m-1"><?php echo $page->user('firstName') . '  ' . $page->user('lastName'); ?></span> <span class="tag is-link mx-1"><?php echo $page->date() ?></span></p>
                                <p class="level-right">
                                    <?php
                                    $returnsArray = true;

                                    $items = $page->tags($returnsArray);

                                    foreach ($items as $tagKey => $tagName) {
                                        echo '<span class="tag m-1">' . $tagName . '</span>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="block">

                                <?php
                                // Remove any html tags from text to avoid confilict with adding text and tags afterward
                                $contentExerpt = strip_tags($page->content());

                                // Show only Certain Number Of characters - To avoid long post in loop
                                echo substr($contentExerpt, 0, 256) . ' ...';
                                ?>
                            </div>
                            <!-- "Read more" button -->
                            <a href="<?php echo $page->permalink(); ?>" class="button is-success"><?php echo $L->get('Read more'); ?></a>

                        </div>
                    </div>
                </article>
            <?php endforeach ?>
        </section>
        <!-- Include PAGINATION -->
        <?php include(THEME_DIR_PHP . 'pagination.php'); ?>
    </main>