<?php
if (!defined('FW')) {
    die('Forbidden');
}
//debug($data['slides']);
?>
<?php if (!empty($data['slides'])): ?>
    <div class="owl-carousel owl-carousel-fullwidth">
        <?php foreach ($data['slides'] as $slide): ?>
        <div class="item">
            <div class="testimony-slide active text-center">
                <figure>
                    <img src="
                        <?php if (!empty($slide['src'])) {
    echo $slide['src'];
} ?>" alt="user">
                </figure>
                <span>
                    <?php if (!empty($slide['title'])) {
    echo $slide['title'];
} ?>, via 
<a href="<?php if (!empty($slide['extra']['link'])) {
    echo $slide['extra']['link'];
} ?>" class="twitter">
                <?php if (!empty($slide['extra']['link_title'])) {
    echo $slide['extra']['link_title'];
} ?>
              </a>
                </span>
                <blockquote>
                    <p>&ldquo;<?php if (!empty($slide['desc'])) {
    echo $slide['desc'];
} ?>&rdquo;</p>
                </blockquote>
            </div>
        </div>
        <?php endforeach; ?>                
    </div>
<?php endif; ?>