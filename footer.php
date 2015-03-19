    <div class="wpbstrap-footer">
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="row wpbstrap-author-credits">
                    <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">wpbstrap <?php _e('created by','wpbstrap') ?> Entersol Technologies</a></p>
                </div>
        <?php endif; ?>

        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

</div>
<!-- end main container -->

<?php wp_footer(); ?>
</body>
</html>