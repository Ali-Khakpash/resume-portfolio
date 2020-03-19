<?php
/**
 * Class for adding Projects Section Widget
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 * @since 1.0.0
 */
if ( ! class_exists( 'Portfolio_Web_My_Projects' ) ) {

	class Portfolio_Web_My_Projects extends WP_Widget {

		/*defaults values for fields*/
		private $defaults = array(
			'unique_id'                     => '',
			'title'                         => '',
			'at_all_timeline_items'        => '',
			'content_from'                  => 'excerpt',
			'content_number'                => -1,
			'background_options'            => 'default'
		);

		function __construct() {
			parent::__construct(
			/*Base ID of your widget*/
				'portfolio_web_my_projects',
				/*Widget name will appear in UI*/
				esc_html__( 'AT My Projects Section', 'portfolio-web' ),
				/*Widget description*/
				array(
					'description' => esc_html__( 'Show Projects Section with image and description.', 'portfolio-web' )
				)
			);
		}

		/*Widget Backend*/
		public function form( $instance ) {
			$instance =                 wp_parse_args( (array) $instance, $this->defaults );
			/*default values*/
			$unique_id                  = esc_attr( $instance['unique_id'] );
			$title                      = esc_attr( $instance['title'] );
			$at_all_timeline_items     = $instance['at_all_timeline_items'];
			$content_from               = esc_attr( $instance['content_from'] );
			$content_number             = intval( $instance['content_number'] );
			$background_options         = esc_attr( $instance['background_options'] );
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'unique_id' ) ); ?>"><?php esc_html_e( 'Section ID', 'portfolio-web' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'unique_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'unique_id' ) ); ?>" type="text" value="<?php echo $unique_id; ?>"/>
				<br/>
				<small><?php esc_html_e( 'Enter a Unique Section ID. You can use this ID in Menu item for enabling One Page Menu.', 'portfolio-web' ) ?></small>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'portfolio-web' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $title; ?>"/>
			</p>
			<!--updated code-->
			<label><?php esc_html_e( 'Add Timeline Options', 'portfolio-web' ); ?></label>
			<br/>
			<small><?php esc_html_e( 'Add Timeline, Reorder and Remove.', 'portfolio-web' ); ?></small>
			<div class="at-repeater">
				<?php
				$total_repeater = 0;
				if  ( is_array( $at_all_timeline_items ) && count( $at_all_timeline_items ) > 0 ){
					foreach ( $at_all_timeline_items as $timeline_detail ){

						$repeater_timeline_page_id  = $this->get_field_id( 'at_all_timeline_items') .$total_repeater.'page_id';
						$repeater_timeline_page_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$total_repeater.']['.'page_id'.']';

						$repeater_timeline_title_id  = $this->get_field_id( 'at_all_timeline_items') .$total_repeater.'timeline_title';
						$repeater_timeline_title_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$total_repeater.']['.'timeline_title'.']';

						$repeater_timeline_desc_id  = $this->get_field_id( 'at_all_timeline_items') .$total_repeater.'desc';
						$repeater_timeline_desc_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$total_repeater.']['.'desc'.']';

						$repeater_timeline_github_id  = $this->get_field_id( 'at_all_timeline_items') .$total_repeater.'github';
						$repeater_timeline_github_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$total_repeater.']['.'github'.']';
						?>
						<div class="repeater-table">
							<div class="at-repeater-top">
								<div class="at-repeater-title-action">
									<button type="button" class="at-repeater-action">
										<span class="at-toggle-indicator" aria-hidden="true"></span>
									</button>
								</div>
								<div class="at-repeater-title">
									<h3><?php esc_html_e( 'Timeline', 'portfolio-web' )?><span class="in-at-repeater-title"></span></h3>
								</div>
							</div>
							<div class='at-repeater-inside hidden'>

								<?php
								/* see more here https://codex.wordpress.org/Function_Reference/wp_dropdown_pages*/
								$args = array(
									'selected'          => $timeline_detail['page_id'],
									'name'              => $repeater_timeline_page_name,
									'id'                => $repeater_timeline_page_id,
									'class'             => 'widefat at-select',
									'show_option_none'  => esc_html__( 'Select Page', 'portfolio-web'),
									'option_none_value' => 0 // string
								);
								wp_dropdown_pages( $args );
								?>
								<div class="at-repeater-control-actions">
									<?php
									if( get_edit_post_link( $timeline_detail['page_id'] ) ){
										?>
										<a class="button button-link at-postid alignright" target="_blank" href="<?php echo esc_url( get_edit_post_link( $timeline_detail['page_id'] ) ); ?>">
											<?php esc_html_e('Full Edit','portfolio-web');?>
										</a>
										<?php
									}
									?>
								</div>

								<p>
									<label><?php esc_html_e( 'Enter Timeline Title', 'portfolio-web' ); ?></label>
									<input type="text" class="widefat" name="<?php echo esc_attr( $repeater_timeline_title_name ); ?>" id="<?php echo esc_attr( $repeater_timeline_title_id ); ?>" value="<?php echo esc_attr( $timeline_detail['timeline_title'] ); ?>" />
								</p>
								<p>
									<label><?php esc_html_e( 'Enter Timeline Project Desc', 'portfolio-web' ); ?></label>
									<input type="text" class="widefat" name="<?php echo esc_attr( $repeater_timeline_desc_name); ?>" id="<?php echo esc_attr( $repeater_timeline_desc_id ); ?>" value="<?php echo esc_attr( $timeline_detail['desc'] ); ?>" />
								</p>

								<p>
									<label><?php esc_html_e( 'Enter Timeline Project Github', 'portfolio-web' ); ?></label>
									<input type="url" class="widefat" name="<?php echo esc_attr( $repeater_timeline_github_name ); ?>" id="<?php echo esc_attr( $repeater_timeline_github_id ); ?>" value="<?php echo esc_url( $timeline_detail['github'] ); ?>" />
								</p>

								<div class="at-repeater-control-actions">
									<button type="button" class="button-link button-link-delete at-repeater-remove"><?php esc_html_e('Remove','portfolio-web');?></button> |
									<button type="button" class="button-link at-repeater-close"><?php esc_html_e('Close','portfolio-web');?></button>
								</div>
							</div>
						</div>
						<?php
						$total_repeater = $total_repeater + 1;
					}
				}
				$coder_repeater_depth = 'coderRepeaterDepth_'.'0';

				$repeater_timeline_page_id  = $this->get_field_id( 'at_all_timeline_items') .$coder_repeater_depth.'page_id';
				$repeater_timeline_page_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$coder_repeater_depth.']['.'page_id'.']';

				$repeater_timeline_desc_id = $this->get_field_id( 'at_all_timeline_items') .$coder_repeater_depth.'desc';
				$repeater_timeline_desc_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$coder_repeater_depth.']['.'desc'.']';

				$repeater_timeline_title_id  = $this->get_field_id( 'at_all_timeline_items') .$coder_repeater_depth.'timeline_title';
				$repeater_timeline_title_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$coder_repeater_depth.']['.'timeline_title'.']';

				$repeater_timeline_github_id  = $this->get_field_id( 'at_all_timeline_items') .$coder_repeater_depth.'github';
				$repeater_timeline_github_name  = $this->get_field_name( 'at_all_timeline_items' ).'['.$coder_repeater_depth.']['.'github'.']';


				?>
				<script type="text/html" class="at-code-for-repeater">
					<div class="repeater-table">
						<div class="at-repeater-top">
							<div class="at-repeater-title-action">
								<button type="button" class="at-repeater-action">
									<span class="at-toggle-indicator" aria-hidden="true"></span>
								</button>
							</div>
							<div class="at-repeater-title">
								<h3><?php esc_html_e( 'Timeline', 'portfolio-web' )?><span class="in-at-repeater-title"></span></h3>
							</div>
						</div>
						<div class='at-repeater-inside hidden'>

							<?php
							/* see more here https://codex.wordpress.org/Function_Reference/wp_dropdown_pages*/
							$args = array(
								'selected'          => '',
								'name'              => $repeater_timeline_page_name,
								'id'                => $repeater_timeline_page_id,
								'class'             => 'widefat at-select',
								'show_option_none'  => esc_html__( 'Select Page', 'portfolio-web'),
								'option_none_value' => 0 // string
							);
							wp_dropdown_pages( $args );
							?>
							<p>
								<label><?php esc_html_e( 'Enter Timeline Title', 'portfolio-web' ); ?></label>
								<input type="text" class="widefat" name="<?php echo esc_attr( $repeater_timeline_title_name ); ?>" id="<?php echo esc_attr( $repeater_timeline_title_id ); ?>" />
							</p>
							<p>
								<label><?php esc_html_e( 'Enter Timeline Project Desc', 'portfolio-web' ); ?></label>
								<input type="text" class="widefat" name="<?php echo esc_attr( $repeater_timeline_desc_name ); ?>" id="<?php echo esc_attr( $repeater_timeline_desc_id ); ?>" />
							</p>
							<p>
								<label><?php esc_html_e( 'Enter Timeline Github', 'portfolio-web' ); ?></label>
								<input type="url" class="widefat" name="<?php echo esc_attr( $repeater_timeline_github_name ); ?>" id="<?php echo esc_attr( $repeater_timeline_github_id ); ?>" />
							</p>

							<div class="at-repeater-control-actions">
								<button type="button" class="button-link button-link-delete at-repeater-remove"><?php esc_html_e('Remove','portfolio-web');?></button> |
								<button type="button" class="button-link at-repeater-close"><?php esc_html_e('Close','portfolio-web');?></button>
							</div>
						</div>
					</div>

				</script>
				<?php
				/*most imp for repeater*/
				echo '<input class="at-total-repeater" type="hidden" value="'.esc_attr( $total_repeater ).'">';
				$add_field = esc_html__('Add Item', 'portfolio-web');
				echo '<span class="button-primary at-add-repeater" id="'.esc_attr( $coder_repeater_depth ).'">'.$add_field.'</span><br/>';
				?>
			</div>
			<!--updated code-->
			<p>
				<label for="<?php echo $this->get_field_id( 'content_from' ); ?>"><?php _e( 'Content From', 'portfolio-web' ); ?>:</label>
				<select class="widefat" id="<?php echo $this->get_field_id( 'content_from' ); ?>" name="<?php echo $this->get_field_name( 'content_from' ); ?>">
					<?php
					$portfolio_web_about_content_from = portfolio_web_content_from();
					foreach ( $portfolio_web_about_content_from as $key => $value ) {
						?>
						<option value="<?php echo esc_attr( $key ) ?>" <?php selected( $key, $content_from ); ?>><?php echo esc_attr( $value ); ?></option>
						<?php
					}
					?>
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'content_number' ); ?>"><?php _e( 'Number of words in content', 'portfolio-web' ); ?>:</label>
				<br/>
				<small>
					<?php esc_html_e('Please enter -1 to show full content or 0 to show none','portfolio-web'); ?>
				</small>
				<input class="widefat" id="<?php echo $this->get_field_id( 'content_number' ); ?>" name="<?php echo $this->get_field_name( 'content_number' ); ?>" type="number" value="<?php echo $content_number; ?>" />
			</p>
			<hr /><!--view all link separate-->

			<hr />
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'background_options' ) ); ?>"><?php esc_html_e( 'Background Options', 'portfolio-web' ); ?></label>
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'background_options' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'background_options' ) ); ?>">
					<?php
					$portfolio_web_background_options = portfolio_web_background_options();
					foreach ( $portfolio_web_background_options as $key => $value ) {
						?>
						<option value="<?php echo esc_attr( $key ) ?>" <?php selected( $key, $background_options ); ?>><?php echo esc_attr( $value ); ?></option>
						<?php
					}
					?>
				</select>
			</p>
			<?php
		}



		/**
		 * Function to Updating widget replacing old instances with new
		 *
		 * @access public
		 * @since 1.0
		 *
		 * @param array $new_instance new arrays value
		 * @param array $old_instance old arrays value
		 *
		 * @return array
		 *
		 */

		public function update( $new_instance, $old_instance ) {
			$instance                               = $old_instance;
			$instance['unique_id']                  = sanitize_key( $new_instance['unique_id'] );
			$instance[ 'title' ]                    = ( isset( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
			/*updated code*/
			$at_all_timeline_items_data = array();
			if( isset($new_instance['at_all_timeline_items'] )){
				$at_all_timeline_items               = $new_instance['at_all_timeline_items'];

				if  ( is_array($at_all_timeline_items) && count($at_all_timeline_items) > 0 ){
					foreach ( $at_all_timeline_items as $boxes => $box ){
						foreach ( $box as $key => $value ){
							$at_all_timeline_items_data[$boxes][$key] = wp_kses_post( $value );
						}
					}
				}
			}
			$instance[ 'at_all_timeline_items' ]     = $at_all_timeline_items_data;

			$portfolio_web_about_content_from   = portfolio_web_content_from();
			$instance['content_from']           = portfolio_web_sanitize_choice_options( $new_instance['content_from'], $portfolio_web_about_content_from, 'excerpt' );
			$instance['content_number']   = intval( $new_instance['content_number'] );

			$portfolio_web_widget_background_options    = portfolio_web_background_options();
			$instance[ 'background_options' ]           = portfolio_web_sanitize_choice_options( $new_instance[ 'background_options' ], $portfolio_web_widget_background_options, 'default' );

			return $instance;
		}

		/**
		 * Function to Creating widget front-end. This is where the action happens
		 *
		 * @access public
		 * @since 1.0
		 *
		 * @param array $args widget setting
		 * @param array $instance saved values
		 *
		 * @return void
		 *
		 */
		public function widget( $args, $instance ) {
			$instance                   = wp_parse_args( (array) $instance, $this->defaults );
			/*default values*/
			$unique_id                  = ! empty( $instance['unique_id'] ) ? esc_attr( $instance['unique_id'] ) : esc_attr( $this->id );
			$title                      = !empty( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
			$title                      = apply_filters( 'widget_title', $title, $instance, $this->id_base );
			$at_all_timeline_items      = $instance['at_all_timeline_items'];
			$content_from               = esc_attr( $instance['content_from'] );
			$content_number             = intval( $instance['content_number'] );
			$background_options         = esc_attr( $instance['background_options'] );
			$bg_gray_class              = $background_options == 'gray'?'at-gray-bg':'';
			$portfolio_web_list_classes = 'single-list col-sm-3 col-md-3';

			echo $args['before_widget'];

			$animation = "init-animate zoomIn";
			?>
			<section id="<?php echo esc_attr( $unique_id ); ?>" class="at-widgets acme-services"
                     style="background-image: url(http://localhost/resume-portfolio/wp-content/uploads/2020/01/officewallpaper.jpg);
                            background-repeat: no-repeat;background-size: cover;background-position: center;">
				<div class="container">
					<?php
					if( ! empty( $title ) ){
						echo "<div class='at-widget-title-wrapper ".$animation."'>";
						if ( ! empty( $title ) ) {
							echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
						}
						echo "</div>";/*.at-widget-title*/
					}
					?>



					<?php
					foreach($at_all_timeline_items as $key => $value) {
					?>

					<div style="margin-bottom: 20px;" class="<?php echo esc_attr( $portfolio_web_list_classes ); ?> column"">
					<div class="single-item <?php echo esc_attr( $animation ); ?>" style="padding-top:1px !important;"

					>
						<h3 class="title">
							<?php
							echo '<a href="'.get_permalink($value['page_id']).'" class="all-link">';
							echo $value['timeline_title'];
							echo '</a>';
							?>
						</h3>
						<div class="content">
							<div class="details" style="text-justify: auto">
								<?php
                                    echo $this->limit_string_lines($value['desc']);
                                ?>
							</div>
						</div>

						<div class="project-date" style="margin-top:15%; border-top:solid 0.01mm gray;">
							<a href="<?php echo $value['github'] ?>" style="">
								<i style="font-size:25px;" class="fa fa-github"><span style="font-size:15px;position: relative;top:-3px;left:2px">View on Github</span></i>
							</a>

						</div>
					</div>

				</div>

				<?php
				}
					?>




					<?php
					    //dumping important variables
						//var_dump($at_all_timeline_items);
						echo '</br>';
						echo '</br>';
						//var_dump($at_all_timeline_items);
					?>
			</section><!--.at-timelime-->
			<?php

			echo $args['after_widget'];
		}


		public function limit_string_lines($str)
        {
	        $limitedStr = wordwrap($str,30,"<br>\n",false);
	        $arr = explode("\n", $limitedStr);
	        $newStr = "";
	        if(count($arr) > 4) {
		        $arr = array_splice( $arr, 0, 4 );
		        foreach($arr as $line) { $newStr .= $line; }
		        return $newStr;
	        }
	        else
            {
                return $newStr=$str;
            }
        }




	} // Class Portfolio_Web_About ends here
}


add_action( 'widgets_init', 'register_my_projects_widgets' );

/**
 * Register the new widget.
 *
 * @see 'widgets_init'
 */
function register_my_projects_widgets() {
	register_widget( 'Portfolio_Web_My_Projects' );
}