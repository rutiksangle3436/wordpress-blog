<?php
/**
 * Posts list block file.
 *
 * @package posts-list-block
 */

/**
 * Class Post_List_Block
 */
class Posts_List_Block {

	/**
	 * Class instance.
	 *
	 * @var Posts_List_Block
	 */
	private static $instance = null;

	/**
	 * A8C_Post_List constructor.
	 */
	private function __construct() {
		add_action( 'init', array( $this, 'register_blocks' ), 100 );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_scripts' ), 100 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_styles' ), 100 );
	}

	/**
	 * Creates instance.
	 *
	 * @return \Posts_List_Block
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Enqueue block editor scripts.
	 */
	public function enqueue_scripts() {
		// phpcs:ignore WordPress
		$script_dependencies = json_decode( file_get_contents(
			plugin_dir_path( __FILE__ ) . 'dist/a8c-posts-list.deps.json'
		), true );
		wp_enqueue_script(
			'a8c-posts-list-script',
			plugins_url( 'dist/a8c-posts-list.js', __FILE__ ),
			is_array( $script_dependencies ) ? $script_dependencies : array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'dist/a8c-posts-list.js' ),
			true
		);
		wp_set_script_translations( 'a8c-posts-list-script', 'posts-list-block' );
	}

	/**
	 * Enqueue block styles.
	 */
	public function enqueue_styles() {
		$style_file = is_rtl()
			? 'a8c-posts-list.rtl.css'
			: 'a8c-posts-list.css';
		wp_enqueue_style(
			'a8c-posts-list-style',
			plugins_url( 'dist/' . $style_file, __FILE__ ),
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'dist/' . $style_file )
		);
	}

	/**
	 * Register block.
	 */
	public function register_blocks() {
		register_block_type( 'a8c/posts-list', array(
			'attributes'      => array(
				'postsPerPage' => array(
					'type'    => 'number',
					'default' => 10,
				),
			),
			'render_callback' => array( $this, 'render_a8c_post_list_block' ),
		) );
	}

	/**
	 * Renders posts list.
	 *
	 * @param array  $attributes Block attributes.
	 * @param string $content    Block content.
	 * @return string
	 */
	public function render_a8c_post_list_block( $attributes, $content ) {
		$posts_list = new WP_Query( array(
			'post_type'        => 'post',
			'posts_per_page'   => $attributes['postsPerPage'],
			'post_status'      => 'publish',
			'suppress_filters' => false,
		) );

		add_filter( 'excerpt_more', array( $this, 'custom_excerpt_read_more' ) );

		$content = a8c_pl_render_template( 'posts-list', array(
			'posts_list' => $posts_list,
		) );

		remove_filter( 'excerpt_more', array( $this, 'custom_excerpt_read_more' ) );

		// Reset the custom query.
		wp_reset_postdata();

		return $content;
	}

	/**
	 * Excerpt more string.
	 *
	 * @return string More string.
	 */
	public function custom_excerpt_read_more() {
		return sprintf(
			'&hellip; <a href="%1$s" title="%2$s" class="a8c-posts-list-item__read-more">%3$s</a>',
			esc_url( get_the_permalink() ),
			sprintf(
				/* translators: %s: Name of current post */
				esc_attr__( 'Continue reading %s', 'posts-list-block' ),
				the_title_attribute( array( 'echo' => false ) )
			),
			esc_html__( 'Read more', 'posts-list-block' )
		);
	}
}
