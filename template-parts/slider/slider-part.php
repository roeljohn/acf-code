<?php if( have_rows('slider', 'option') ): ?>

<ul>

<?php while( have_rows('slider', 'option') ) : the_row(); ?>

    <li><?php the_sub_field('slider_title'); ?></li>

<?php endwhile; ?>

</ul>

<?php endif; ?>