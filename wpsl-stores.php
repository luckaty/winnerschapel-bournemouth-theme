<?php if ( $cell_minister = get_post_meta( get_the_ID(), 'cell_minister', true ) ) : ?>
    <p><strong>District Pastor:</strong> <?php echo esc_html( $cell_minister ); ?></p>
<?php endif; ?>
