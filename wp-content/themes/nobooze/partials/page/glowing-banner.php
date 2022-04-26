<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";

?>

<section class="glowing-banner p-relative">
    <div class="wrapper-large">
        <div class="glowing-banner__wrapper d-flex d-flex-justify-c">
            <div class="glowing-banner__container p-relative">
                <?php if($title): ?>
                    <h2 class="glowing-banner__title f-heading heading-banner c-white u-text-center"><?= $title ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 