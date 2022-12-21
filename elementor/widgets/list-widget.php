<?php
//namespace Elementor\Includes\Elements;

use Elementor\Controls_Manager;
use Elementor\Core\Breakpoints\Manager as Breakpoints_Manager;
use Elementor\Element_Base;
use Elementor\Embed;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Flex_Container;
use Elementor\Group_Control_Flex_Item;
use Elementor\Plugin;
use Elementor\Shapes;
use Elementor\Utils;

//use Elementor\Modules\DynamicTags\Module as TagsModule;

if ( ! defined( 'ABSPATH' ) ) {
	die('111');
	exit; // Exit if accessed directly.
}
/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_List_Widget extends \Elementor\Widget_Base {


	/**
	 * Get widget name.
	 *
	 * Retrieve list widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'list';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve list widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'List', 'elementor-list-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve list widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-bullet-list';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'list', 'lists', 'ordered', 'unordered','embed' ];
		//return [ 'video', 'player', 'embed', 'youtube', 'vimeo', 'dailymotion' ];
	}

	/**
	 * Register list widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'List Content', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		/* Start repeater */

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'text',
			[
				'label' => esc_html__( 'Text', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'List Item', 'elementor-list-widget' ),
				'default' => esc_html__( 'List Item', 'elementor-list-widget' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'video_url',
			[
				'label' => esc_html__( 'video_url', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		/* End repeater */

		$this->add_control(
			'list_items',
			[
				'label' => esc_html__( 'List Items', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),           /* Use our repeater */
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'elementor-list-widget' ),
						'link' => '',
						'video_url' => 'https://www.youtube.com/watch?v=UPae12EVPxU',
					],
					[
						'text' => esc_html__( 'List Item #2', 'elementor-list-widget' ),
						'link' => '',
						'video_url' => 'https://www.youtube.com/watch?v=UPae12EVPxU',
					],
					[
						'text' => esc_html__( 'List Item #3', 'elementor-list-widget' ),
						'link' => '',
						'video_url' => 'https://www.youtube.com/watch?v=UPae12EVPxU',
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'marker_section',
			[
				'label' => esc_html__( 'List Marker', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'marker_type',
			[
				'label' => esc_html__( 'Marker Type', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'ordered' => [
						'title' => esc_html__( 'Ordered List', 'elementor-list-widget' ),
						'icon' => 'eicon-editor-list-ol',
					],
					'unordered' => [
						'title' => esc_html__( 'Unordered List', 'elementor-list-widget' ),
						'icon' => 'eicon-editor-list-ul',
					],
					'other' => [
						'title' => esc_html__( 'Custom List', 'elementor-list-widget' ),
						'icon' => 'eicon-edit',
					],
				],
				'default' => 'ordered',
				'toggle' => false,
			]
		);

		$this->add_control(
			'marker_content',
			[
				'label' => esc_html__( 'Custom Marker', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter custom marker', 'elementor-list-widget' ),
				'default' => '🧡',
				'condition' => [
					'marker_type[value]' => 'other',
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text::marker' => 'content: "{{VALUE}}";',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_content_section',
			[
				'label' => esc_html__( 'List Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text' => 'color: {{VALUE}};',
					'{{WRAPPER}} .elementor-list-widget-text > a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'icon_typography',
				'selector' => '{{WRAPPER}} .elementor-list-widget-text, {{WRAPPER}} .elementor-list-widget-text > a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .elementor-list-widget-text',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_marker_section',
			[
				'label' => esc_html__( 'Marker Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'marker_color',
			[
				'label' => esc_html__( 'Color', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text::marker' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'marker_spacing',
			[
				'label' => esc_html__( 'Spacing', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'em' => [
						'min' => 0,
						'max' => 10,
					],
					'rem' => [
						'min' => 0,
						'max' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 40,
				],
				'selectors' => [
					// '{{WRAPPER}} .elementor-list-widget' => 'padding-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .elementor-list-widget' => 'padding-inline-start: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// $this->add_control(
		// 	'lazy_load',
		// 	[
		// 		'label' => esc_html__( 'Lazy Load', 'elementor' ),
		// 		'type' => Controls_Manager::SWITCHER,
		// 		'conditions' => [
		// 			'relation' => 'or',
		// 			'terms' => [
		// 				[
		// 					'name' => 'video_type',
		// 					'operator' => '===',
		// 					'value' => 'youtube',
		// 				],
		// 				[
		// 					'relation' => 'and',
		// 					'terms' => [
		// 						[
		// 							'name' => 'show_image_overlay',
		// 							'operator' => '===',
		// 							'value' => 'yes',
		// 						],
		// 						[
		// 							'name' => 'video_type',
		// 							'operator' => '!==',
		// 							'value' => 'hosted',
		// 						],
		// 					],
		// 				],
		// 			],
		// 		],
		// 		'frontend_available' => true,
		// 	]
		// );


		$this->end_controls_section();

	}

	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$html_tag = [
			'ordered' => 'ol',
			'unordered' => 'ul',
			'other' => 'ul',
		];
		$this->add_render_attribute( 'list', 'class', 'elementor-list-widget' );
		?>
		<<?php echo $html_tag[ $settings['marker_type'] ]; ?> <?php $this->print_render_attribute_string( 'list' ); ?>>
			<?php
			foreach ( $settings['list_items'] as $index => $item ) {
				$repeater_setting_key = $this->get_repeater_setting_key( 'text', 'list_items', $index );
				$this->add_render_attribute( $repeater_setting_key, 'class', 'elementor-list-widget-text' );
				$this->add_inline_editing_attributes( $repeater_setting_key );
				?>
				<li <?php $this->print_render_attribute_string( $repeater_setting_key ); ?>>
					<?php
					$title = $settings['list_items'][$index]['text'];

					if ( ! empty( $item['link']['url'] ) ) {
						$this->add_link_attributes( "link_{$index}", $item['link'] );
						$linked_title = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( "link_{$index}" ), $title );
						echo $linked_title;
					} else {
						echo $title;
					}
					$video_url= $item['video_url']['url'];
					if ( ! empty( $item['video_url']['url'] ) ) {
						$this->add_link_attributes( "link_{$index}", $item['video_url'] );
						// $linked_title = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( "link_{$index}" ), $title );

						//echo  '<video class="img-fluid" autoplay loop muted> <source src="'.$video_url.'" type="video/mp4" /></video>';

						//echo $this->get_render_attribute_string('[embed]'.$video_url.'[/embed]');


						$video_html = Embed::get_embed_html( $video_url, array(), array('lazy_load' => false) );
						//$video_html = wp_oembed_get($video_url);

						echo $video_html;

					} else {
						echo $video_url;
					}

					?>
				</li>
				<?php
			}
			?>
		</<?php echo $html_tag[ $settings['marker_type'] ]; ?>>
		<?php
	}
	protected function render1() {
		$settings = $this->get_settings_for_display();

		$video_url = $settings[ $settings['video_type'] . '_url' ];

		if ( 'hosted' === $settings['video_type'] ) {
			$video_url = $this->get_hosted_video_url();
		} else {
			$embed_params = $this->get_embed_params();
			$embed_options = $this->get_embed_options();
		}

		if ( empty( $video_url ) ) {
			return;
		}

		if ( 'youtube' === $settings['video_type'] ) {
			$video_html = '<div class="elementor-video"></div>';
		}

		if ( 'hosted' === $settings['video_type'] ) {
			$this->add_render_attribute( 'video-wrapper', 'class', 'e-hosted-video' );

			ob_start();

			$this->render_hosted_video();

			$video_html = ob_get_clean();
		} else {
			$is_static_render_mode = Plugin::$instance->frontend->is_static_render_mode();
			$post_id = get_queried_object_id();

			if ( $is_static_render_mode ) {
				$video_html = Embed::get_embed_thumbnail_html( $video_url, $post_id );
				// YouTube API requires a different markup which was set above.
			} else if ( 'youtube' !== $settings['video_type'] ) {
				$video_html = Embed::get_embed_html( $video_url, $embed_params, $embed_options );
			}
		}

		if ( empty( $video_html ) ) {
			echo esc_url( $video_url );

			return;
		}

		$this->add_render_attribute( 'video-wrapper', 'class', 'elementor-wrapper' );

		if ( ! $settings['lightbox'] ) {
			$this->add_render_attribute( 'video-wrapper', 'class', 'elementor-fit-aspect-ratio' );
		}

		$this->add_render_attribute( 'video-wrapper', 'class', 'elementor-open-' . ( $settings['lightbox'] ? 'lightbox' : 'inline' ) );
		?>
		<div <?php $this->print_render_attribute_string( 'video-wrapper' ); ?>>
			<?php
			if ( ! $settings['lightbox'] ) {
				Utils::print_unescaped_internal_string( $video_html ); // XSS ok.
			}

			if ( $this->has_image_overlay() ) {
				$this->add_render_attribute( 'image-overlay', 'class', 'elementor-custom-embed-image-overlay' );

				if ( $settings['lightbox'] ) {
					if ( 'hosted' === $settings['video_type'] ) {
						$lightbox_url = $video_url;
					} else {
						$lightbox_url = Embed::get_embed_url( $video_url, $embed_params, $embed_options );
					}

					$lightbox_options = [
						'type' => 'video',
						'videoType' => $settings['video_type'],
						'url' => $lightbox_url,
						'modalOptions' => [
							'id' => 'elementor-lightbox-' . $this->get_id(),
							'entranceAnimation' => $settings['lightbox_content_animation'],
							'entranceAnimation_tablet' => $settings['lightbox_content_animation_tablet'],
							'entranceAnimation_mobile' => $settings['lightbox_content_animation_mobile'],
							'videoAspectRatio' => $settings['aspect_ratio'],
						],
					];

					if ( 'hosted' === $settings['video_type'] ) {
						$lightbox_options['videoParams'] = $this->get_hosted_params();
					}

					$this->add_render_attribute( 'image-overlay', [
						'data-elementor-open-lightbox' => 'yes',
						'data-elementor-lightbox' => wp_json_encode( $lightbox_options ),
						'e-action-hash' => Plugin::instance()->frontend->create_action_hash( 'lightbox', $lightbox_options ),
					] );

					if ( Plugin::$instance->editor->is_edit_mode() ) {
						$this->add_render_attribute( 'image-overlay', [
							'class' => 'elementor-clickable',
						] );
					}
				} else {
					// When there is an image URL but no ID, it means the overlay image is the placeholder. In this case, get the placeholder URL.
					if ( empty( $settings['image_overlay']['id'] && ! empty( $settings['image_overlay']['url'] ) ) ) {
						$image_url = $settings['image_overlay']['url'];
					} else {
						$image_url = Group_Control_Image_Size::get_attachment_image_src( $settings['image_overlay']['id'], 'image_overlay', $settings );
					}

					$this->add_render_attribute( 'image-overlay', 'style', 'background-image: url(' . $image_url . ');' );
				}
				?>
				<div <?php $this->print_render_attribute_string( 'image-overlay' ); ?>>
					<?php if ( $settings['lightbox'] ) : ?>
						<?php Group_Control_Image_Size::print_attachment_image_html( $settings, 'image_overlay' ); ?>
					<?php endif; ?>
					<?php if ( 'yes' === $settings['show_play_icon'] ) : ?>
						<div class="elementor-custom-embed-play" role="button" aria-label="<?php $this->print_a11y_text( $settings['image_overlay'] ); ?>" tabindex="0">
							<?php
							if ( empty( $settings['play_icon']['value'] ) ) {
								$settings['play_icon'] = [
									'library' => 'eicons',
									'value' => 'eicon-play',
								];
							}
							Icons_Manager::render_icon( $settings['play_icon'], [ 'aria-hidden' => 'true' ] );
							?>
							<span class="elementor-screen-only"><?php $this->print_a11y_text( $settings['image_overlay'] ); ?></span>
						</div>
					<?php endif; ?>
				</div>
			<?php } ?>
		</div>
		<?php
	}

	/**
	 * Render list widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<#
		html_tag = {
			'ordered': 'ol',
			'unordered': 'ul',
			'other': 'ul',
		};
		view.addRenderAttribute( 'list', 'class', 'elementor-list-widget' );
		#>
		<{{{ html_tag[ settings.marker_type ] }}} {{{ view.getRenderAttributeString( 'list' ) }}}>
			<# _.each( settings.list_items, function( item, index ) {
				var repeater_setting_key = view.getRepeaterSettingKey( 'text', 'list_items', index );
				view.addRenderAttribute( repeater_setting_key, 'class', 'elementor-list-widget-text' );
				view.addInlineEditingAttributes( repeater_setting_key );
				console.log('item:', item);
				#>
				<li {{{ view.getRenderAttributeString( repeater_setting_key ) }}}>
					<# var title = item.text; #>
					<#
					console.log(item);
					if( item.video_url) { #>
						<iframe width="420" height="315" src= "{{ item.video_url.url }}"></iframe>
					<# } else { #>
						{{{title}}}
					<# } #>
				</li>
			<# } ); #>
		</{{{ html_tag[ settings.marker_type ] }}}>
		<?php
	}

}

 // if ( item.link ) { #>
// 						<# view.addRenderAttribute( `link_${index}`, item.link ); #>
// 						<a 111 href="{{ item.link.url }}" {{{ view.getRenderAttributeString( `link_${index}` ) }}}>
// 							{{{title}}}
// 						</a>
// 					<# }