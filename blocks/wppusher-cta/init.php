<?php
/**
 * Register WP Pusher CTA block
 */
add_action('init', 'wp-pusher-cta-block_init_wppusher_cta' );
function wp-pusher-cta-block_init_wppusher_cta () {
    $handle = 'wppusher-cta';
    wp_register_script(
        $handle,
        plugins_url("index.js", __FILE__),
        [
            'wp-element',
            'wp-blocks',
            'wp-components',
            'wp-block-editor',
            'wp-server-side-render'
        ]
    );
    register_block_type( 'wp-pusher-cta-block/wppusher-cta', [
        'editor_script' => $handle,
        'render_callback' => 'wp-pusher-cta-block_render_wppusher_cta',
        'attributes' => [
            'message' => [
                'type' => 'string'
            ]
        ]
    ]);
}

/**
 * Render WP Pusher CTA block
 */
function wp-pusher-cta-block_render_wppusher_cta($attrs){
    $message = isset($atts['message']) && ! empty($atts['message']) ? $atts['message'] : 'Hi Roy';

    ob_start();
    ?>
        <p>
            <?php echo esc_html( $message ); ?>
        </p>
    <?php
    return ob_get_clean();
}
