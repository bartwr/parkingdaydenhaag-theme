
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(__('(lees meer...)')); ?>

<hr> <?php endwhile; else: ?>

<?php _e('Sorry, no posts matched your criteria.'); ?>

<?php endif; ?>

</div>