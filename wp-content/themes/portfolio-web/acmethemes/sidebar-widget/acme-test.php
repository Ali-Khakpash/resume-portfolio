<?php
/**
 * Class for adding Projects Section Widget
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 * @since 1.0.0
 */
if ( ! class_exists( 'Portfolio_Web_Projects' ) ) {

    class Portfolio_Web_Projects extends WP_Widget {

        private function defaults(){
            /*defaults values for fields*/
            $defaults = array(
                'unique_id'         => '',
                'title'             => '',
                'sub_title'         => '',
                'some_content'      => '',
                'featured_image'    => '',
                'button_one_text'   => esc_html__( 'Download Resume', 'portfolio-web' ),
                'button_one_url'    => '',
                'button_two_text'   => esc_html__( 'View Portfolio', 'portfolio-web' ),
                'button_two_url'    => ''
            );
            return $defaults;
        }

        function __construct() {
            parent::__construct(
            /*Base ID of your widget*/
                'portfolio_web_projects',
                /*Widget name will appear in UI*/
                esc_html__( 'AT Projects Section', 'portfolio-web' ),
                /*Widget description*/
                array(
                    'description' => esc_html__( 'Show Projects Section with image and description.', 'portfolio-web' )
                )
            );
        }

        /*Widget Backend*/
        public function form( $instance ) {
            $instance           = wp_parse_args( (array) $instance, $this->defaults() );
            /*default values*/
            $unique_id          = esc_attr( $instance[ 'unique_id' ] );
            $title              = esc_attr( $instance[ 'title' ] );

            //fields for reapeter fields for testing
	        $subject_1 = esc_attr( $instance[ 'subject_1' ] );
            $desc_1    = esc_textarea( $instance['desc_1'] );
            $date_1 = esc_attr( $instance[ 'date_1' ] );
            $url_1     = esc_url( $instance[ 'url_1' ] );
	        $github_url_1     = esc_url( $instance[ 'github_url_1' ] );

            $subject_2 = esc_attr( $instance[ 'subject_2' ] );
            $desc_2    = esc_textarea( $instance['desc_2'] );
            $date_2 = esc_attr( $instance[ 'date_2' ] );
            $url_2    = esc_url( $instance[ 'url_2' ] );
	        $github_url_2     = esc_url( $instance[ 'github_url_2' ] );

            $subject_3 = esc_attr( $instance[ 'subject_3' ] );
            $desc_3    = esc_textarea( $instance['desc_3'] );
            $date_3 = esc_attr( $instance[ 'date_3' ] );
            $url_3    = esc_url( $instance[ 'url_3' ] );
	        $github_url_3     = esc_url( $instance[ 'github_url_3' ] );

            $subject_4 = esc_attr( $instance[ 'subject_4' ] );
            $desc_4    = esc_textarea( $instance['desc_4'] );
            $date_4 = esc_attr( $instance[ 'date_4' ] );
            $url_4    = esc_url( $instance[ 'url_4' ] );
	        $github_url_4     = esc_url( $instance[ 'github_url_4' ] );

            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'unique_id' ); ?>"><?php esc_html_e( 'Section ID', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'unique_id' ); ?>" name="<?php echo $this->get_field_name( 'unique_id' ); ?>" type="text" value="<?php echo $unique_id; ?>" />
                <br />
                <small><?php esc_html_e('Enter a Unique Section ID. You can use this ID in Menu item for enabling One Page Menu.','portfolio-web')?></small>
            </p>
            <br>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $title; ?>"/>
            </p>
            <br>


            <p>
                <label for="<?php echo $this->get_field_id( 'subject_1' ); ?>"><?php esc_html_e( 'Project_1 Subject', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'subject_1' ); ?>" name="<?php echo $this->get_field_name( 'subject_1' ); ?>" type="text" value="<?php echo $subject_1; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'desc_1' ); ?>"><?php _e( 'Short Description_1', 'portfolio-web' ); ?>:</label>
                <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id( 'desc_1' ); ?>" name="<?php echo $this->get_field_name( 'desc_1' ); ?>"><?php echo $desc_1; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'date_1' ); ?>"><?php esc_html_e( 'Project Date_1', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'date_1' ); ?>" name="<?php echo $this->get_field_name( 'date_1' ); ?>" type="text" value="<?php echo $date_1; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'url_1' ); ?>"><?php esc_html_e( 'Button Link Url_1', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'url_1' ); ?>" name="<?php echo $this->get_field_name( 'url_1' ); ?>" type="text" value="<?php echo $url_1; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'github_url_1' ); ?>"><?php esc_html_e( 'Github Link Url_1', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'github_url_1' ); ?>" name="<?php echo $this->get_field_name( 'github_url_1' ); ?>" type="text" value="<?php echo $github_url_1; ?>" />
            </p>

            <br>



            <p>
                <label for="<?php echo $this->get_field_id( 'subject_2' ); ?>"><?php esc_html_e( 'Project Subject_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'subject_2' ); ?>" name="<?php echo $this->get_field_name( 'subject_2' ); ?>" type="text" value="<?php echo $subject_2; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'desc_2' ); ?>"><?php _e( 'Short Description_2', 'portfolio-web' ); ?>:</label>
                <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id( 'desc_2' ); ?>" name="<?php echo $this->get_field_name( 'desc_2' ); ?>"><?php echo $desc_2; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'date_2' ); ?>"><?php esc_html_e( 'Project Date_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'date_2' ); ?>" name="<?php echo $this->get_field_name( 'date_2' ); ?>" type="text" value="<?php echo $date_2; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'url_2' ); ?>"><?php esc_html_e( 'Button Link Url_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'url_2' ); ?>" name="<?php echo $this->get_field_name( 'url_2' ); ?>" type="text" value="<?php echo $url_2; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'github_url_2' ); ?>"><?php esc_html_e( 'Github Link Url_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'github_url_2' ); ?>" name="<?php echo $this->get_field_name( 'github_url_2' ); ?>" type="text" value="<?php echo $github_url_2; ?>" />
            </p>
            <br>



            <p>
                <label for="<?php echo $this->get_field_id( 'subject_3' ); ?>"><?php esc_html_e( 'Project Subject_3', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'subject_3' ); ?>" name="<?php echo $this->get_field_name( 'subject_3' ); ?>" type="text" value="<?php echo $subject_3; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'desc_3' ); ?>"><?php _e( 'Short Description_3', 'portfolio-web' ); ?>:</label>
                <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id( '$desc_3' ); ?>" name="<?php echo $this->get_field_name( 'desc_3' ); ?>"><?php echo $desc_3; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'date_3' ); ?>"><?php esc_html_e( 'Project Date_3', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'date_3' ); ?>" name="<?php echo $this->get_field_name( 'date_3' ); ?>" type="text" value="<?php echo $date_3; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'url_3' ); ?>"><?php esc_html_e( 'Button Link Url_3', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'url_3' ); ?>" name="<?php echo $this->get_field_name( 'url_3' ); ?>" type="text" value="<?php echo $url_3; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'github_url_3' ); ?>"><?php esc_html_e( 'Github Link Url_3', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'github_url_3' ); ?>" name="<?php echo $this->get_field_name( 'github_url_3' ); ?>" type="text" value="<?php echo $github_url_3; ?>" />
            </p>
            <br>


            <p>
                <label for="<?php echo $this->get_field_id( 'subject_4' ); ?>"><?php esc_html_e( 'Project Subject_4', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'subject_4' ); ?>" name="<?php echo $this->get_field_name( 'subject_4' ); ?>" type="text" value="<?php echo $subject_4; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'desc_4' ); ?>"><?php _e( 'Short Description_4', 'portfolio-web' ); ?>:</label>
                <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id( '$desc_4' ); ?>" name="<?php echo $this->get_field_name( 'desc_4' ); ?>"><?php echo $desc_4; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'date_4' ); ?>"><?php esc_html_e( 'Project Date_4', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'date_4' ); ?>" name="<?php echo $this->get_field_name( 'date_4' ); ?>" type="text" value="<?php echo $date_4; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'url_4' ); ?>"><?php esc_html_e( 'Button Link Url_4', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'url_4' ); ?>" name="<?php echo $this->get_field_name( 'url_4' ); ?>" type="text" value="<?php echo $url_4; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'github_url_4' ); ?>"><?php esc_html_e( 'Github Link Url_4', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'github_url_4' ); ?>" name="<?php echo $this->get_field_name( 'github_url_4' ); ?>" type="text" value="<?php echo $github_url_4; ?>" />
            </p>
            <br>


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
            $instance = $old_instance;
            $instance[ 'unique_id' ]            = sanitize_key( $new_instance[ 'unique_id' ] );
	        $instance['title']         = sanitize_text_field( $new_instance['title'] );

            //reapeted fields for testing
	        $instance[ 'subject_1' ] = $new_instance[ 'subject_1' ] ;
            $instance[ 'desc_1' ] = $new_instance[ 'desc_1' ] ;
            $instance[ 'date_1' ] = $new_instance[ 'date_1' ] ;
            $instance[ 'url_1' ] = $new_instance[ 'url_1' ] ;
	        $instance[ 'github_url_1' ] = $new_instance[ 'github_url_1' ] ;

            $instance[ 'subject_2' ] = $new_instance[ 'subject_2' ] ;
            $instance[ 'desc_2' ] = $new_instance[ 'desc_2' ] ;
            $instance[ 'date_2' ] = $new_instance[ 'date_2' ] ;
            $instance[ 'url_2' ] = $new_instance[ 'url_2' ] ;
	        $instance[ 'github_url_2' ] = $new_instance[ 'github_url_2' ] ;

            $instance[ 'subject_3' ] = $new_instance[ 'subject_3' ] ;
            $instance[ 'desc_3' ] = $new_instance[ 'desc_3' ] ;
            $instance[ 'date_3' ] = $new_instance[ 'date_3' ] ;
            $instance[ 'url_3' ] = $new_instance[ 'url_3' ] ;
	        $instance[ 'github_url_3' ] = $new_instance[ 'github_url_3' ] ;

            $instance[ 'subject_4' ] = $new_instance[ 'subject_4' ] ;
            $instance[ 'desc_4' ] = $new_instance[ 'desc_4' ] ;
            $instance[ 'date_4' ] = $new_instance[ 'date_4' ] ;
            $instance[ 'url_4' ] = $new_instance[ 'url_4' ] ;
	        $instance[ 'github_url_4' ] = $new_instance[ 'github_url_4' ] ;


	        $instance['all'] = array(
	                '1' => array(
                            'subject' => $instance[ 'subject_1' ] ,
                            'desc' => $instance['desc_1'],
                            'date' => $instance['date_1'],
                            'url' => $instance['url_1'],
                            'github_url' => $instance['github_url_1']
                     ),

                     '2' => array(
                        'subject' => $instance[ 'subject_2' ] ,
                        'desc' => $instance['desc_2'],
                        'date' => $instance['date_2'],
                        'url' => $instance['url_2'],
                        'github_url' => $instance['github_url_2']
                    ),

                    '3' => array(
                        'subject' => $instance[ 'subject_3' ] ,
                        'desc' => $instance['desc_3'],
                        'date' => $instance['date_3'],
                        'url' => $instance['url_3'],
                        'github_url' => $instance['github_url_3']
                    ),

                    '4' => array(
                        'subject' => $instance[ 'subject_4' ] ,
                        'desc' => $instance['desc_4'],
                        'date' => $instance['date_4'],
                        'url' => $instance['url_4'],
                        'github_url' => $instance['github_url_4']
                    ),

	        );

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
            $instance               = wp_parse_args( (array) $instance, $this->defaults());

            /*default values*/
            $unique_id              = !empty( $instance[ 'unique_id' ] ) ? esc_attr( $instance[ 'unique_id' ] ) : esc_attr( $this->id );
            $title                  = apply_filters( 'widget_title', !empty( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );
            $sub_title              = apply_filters( 'widget_text', !empty( $instance['sub_title'] ) ? $instance['sub_title'] : '' , $instance );
            $duration               = apply_filters( 'widget_text', !empty( $instance['duration'] ) ? $instance['duration'] : '' , $instance );

            $animation = "init-animate zoomIn";
            $instance['new'] = 'new';

	        $div_attr = 'class="row featured-entries-col featured-entries-logo"';
	        $portfolio_web_list_classes = 'single-list col-sm-3 col-md-3';


	        echo $args['before_widget'];
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
				        echo "</div>";
			        }
			        ?>
                    <div <?php echo $div_attr;?>>
				        <?php
                            foreach($instance['all'] as $key => $value) {
	                            ?>

                                <div class="<?php echo esc_attr( $portfolio_web_list_classes ); ?> column"">
                                        <div class="single-item <?php echo esc_attr( $animation ); ?>" style="padding-top:1px !important;"

                                        >
                                            <h3 class="title">
			                                    <?php
			                                    echo '<a href="'.$value['url'].'" class="all-link">';
			                                    echo $value['subject'];
			                                    echo '</a>';
			                                    ?>
                                            </h3>
                                            <div class="content">
                                                <div class="details">
				                                    <?php echo $value['desc']; ?>
                                                </div>
                                            </div>

<!--                                            <div class="project-date" style="margin-top:15%; border-top:solid 0.01mm gray;">-->
<!--                                                <span style="position: relative;top:5px;">Duration: --><?php //echo $value['date'] ?><!--</span>-->
<!---->
<!--                                            </div>-->

                                            <div class="project-date" style="margin-top:15%; border-top:solid 0.01mm gray;">
                                                <a href="<?php echo $value['github_url'] ?>" style="">
                                                    <i style="font-size:25px;" class="fa fa-github"><span style="font-size:15px;position: relative;top:-3px;left:2px">View on Github</span></i>
                                                </a>

                                            </div>
                                        </div>
                                </div>

                            <?php
                            }
                           ?>

                    </div><!--row-->
                </div><!--cointainer-->
            </section>






	        <?php
            echo $args['after_widget'];
        }
    } // Class Portfolio_Web_About ends here
}


add_action( 'widgets_init', 'projects_register_widgets' );

/**
 * Register the new widget.
 *
 * @see 'widgets_init'
 */
function projects_register_widgets() {
    register_widget( 'Portfolio_Web_Projects' );
}