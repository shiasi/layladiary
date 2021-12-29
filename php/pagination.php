    <!-- PAGINATION -->
    <?php
    function pagination($totalPages)
    {
        // group pages in #
        $pageGroup = 5;
        // set left and right threshold values
        $sideLeft = (Paginator::currentPage() - floor($pageGroup / 2));
        $sideRight = (Paginator::currentPage() + floor($pageGroup / 2));

        if ($sideLeft < 1) {
            $sideLeft = 1;
            $sideRight = $pageGroup;
        }

        if ($sideRight > $totalPages) {
            $sideLeft = $totalPages - ($pageGroup - 1);

            $sideRight = $totalPages;

            if ($sideLeft < 1) {
                $sideLeft = 1;
            }
        }

        $paginationArray = array($sideLeft, $sideRight);

        return $paginationArray;
    }
    ?>

    <?php if (Paginator::numberOfPages() > 1) : ?>
        <div class="pagination is-centered">
            <!-- First Button -->
            <?php if (Paginator::firstPage()) : ?>
            <?php endif; ?>
            <a class="pagination-previous" href="<?php echo Paginator::firstPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('First'); ?></a>

            <!-- Last button -->
            <?php if (true) : ?>

            <?php endif; ?>
            <a class="pagination-next" href="<?php echo Paginator::lastPageUrl() ?>"><?php echo $L->get('Last'); ?> &#9658;</a>

            <ul class="pagination-list">

                <!-- LINKS -->
                <?php $pager = pagination(Paginator::numberOfPages()); ?>
                <?php for ($i = $pager[0]; $i <= $pager[1]; $i++) : ?>
                    <li>
                        <a class="pagination-link <?php if (Paginator::currentPage() == $i) echo 'is-current' ?> " href="<?php echo Paginator::numberUrl($i) ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor ?>
            </ul>
        </div>
    <?php endif ?>