<div class="page-title-banner <?= isset($classes) ? $classes : '' ?>">
    <?php if(isset($video)) { ?>
        <video class="video" autoplay muted loop playsinline>
            <source src="<?= $video ?>" type="video/mp4">
        </video>
    <?php } else { ?>
        <img class="image" src="<?= $image ?>" alt=""  class="img-fluid" loading="lazy">
    <?php } ?>
    <div class="content">
        <div class="container">
            <div class="page-banner-desc">
                <h1><?= $title ?></h1>
                <?php if(isset($tagline)) { ?>
                    <div class="desc"><?= $tagline ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>