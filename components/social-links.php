<div class="container social-links" id="social-links">
    <div class="row">
        <div data-aos-duration="1500" data-aos="fade-down" class="col-12 text-center">
            <h1>Acesse nossas redes</h1>
        </div>
    </div>
    <div data-aos-duration="1500" data-aos="fade-up" class="row">
        <?php foreach ($args as $item) : ?>
            <a href="<?php echo $item['link'] ?>" target="_blank" class="col-6 col-lg-3 card-social">
                <i class="<?php echo $item['icon'] ?> fa-7x"></i>
                <span>
                    <?php echo $item['name'] ?>
                </span>
            </a>
        <?php endforeach ?>
    </div>
</div>
</div>