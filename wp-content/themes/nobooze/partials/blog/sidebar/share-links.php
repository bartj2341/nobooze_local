<?php
$facebook = get_field("facebook") ? get_field("facebook") : "";
?>

<div class="nm__side">
	<div class="nm__share d-flex d-flex-center f-heading bg-white" data-id="<?php the_ID(); ?>" data-facebook="<?php echo $facebook ?>">
		<div class="nm__total d-flex d-flex-column d-flex-center f-heading-sbold line-normal c-blue text-tiny">
			<span class="js-share-total"></span>
			<span>SHARES</span>
		</div>
		<a class="js-share nm__icon p-relative d-flex d-flex-center" data-title="facebook" href="https://www.facebook.com/sharer.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(single_post_title())); ?>" data-medium="facebook" title="Share on Facebook"><?php include get_icons_directory('icons/facebook.svg') ?><span class="nm__count d-flex d-flex-center text-tiny line-reset"><?= empty($facebook) ? "0" : $facebook ?></span></a> 
	</div>
</div>