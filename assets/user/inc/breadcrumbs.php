<section class="page-heading pt-5 pb-4 body-bg-dark">
    <div class="container">
        <div class="page-heading-here d-flex justify-content-between align-items-center">
            <h1 class="heading-font level-1 secondary-color"><?php echo (isset($pagename)) ? $pagename : ''; ?></h1>
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumbs as $crumb) { ?>
                        <li class="breadcrumb-item"><a href="<?= $crumb['url']; ?>" class="inner-color body-color-dark text-decoration-none primary-medium-font level-7"><?= $crumb['label']; ?></a></li>
                        
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
</section>