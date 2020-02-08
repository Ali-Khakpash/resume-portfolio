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
            $sub_title          = esc_textarea( $instance['sub_title'] );
            $duration          = esc_textarea( $instance['duration'] );
            $some_content       = esc_textarea( $instance['some_content'] );
            $featured_image     = esc_url( $instance[ 'featured_image' ] );
            $button_one_text    = esc_attr( $instance[ 'button_one_text' ] );
            $button_one_url     = esc_url( $instance[ 'button_one_url' ] );
            $button_two_text    = esc_attr( $instance[ 'button_two_text' ] );
            $button_two_url     = esc_url( $instance[ 'button_two_url' ] );

            //fields for reapeter fields for testing
	        $id = esc_attr( $instance[ 'id' ] );
	        $name = esc_attr( $instance[ 'name' ] );

	        $id_2 = esc_attr( $instance[ 'id_2' ] );
	        $name_2 = esc_attr( $instance[ 'name_2' ] );

	        $test = $instance['test'] = 2;
	        $ass ='ass';

            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'unique_id' ); ?>"><?php esc_html_e( 'Section ID', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'unique_id' ); ?>" name="<?php echo $this->get_field_name( 'unique_id' ); ?>" type="text" value="<?php echo $unique_id; ?>" />
                <br />
                <small><?php esc_html_e('Enter a Unique Section ID. You can use this ID in Menu item for enabling One Page Menu.','portfolio-web')?></small>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Project Title', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'sub_title' ); ?>"><?php _e( 'Short Description', 'portfolio-web' ); ?>:</label>
                <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id( 'sub_title' ); ?>" name="<?php echo $this->get_field_name( 'sub_title' ); ?>"><?php echo $sub_title; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'duration' ); ?>"><?php esc_html_e( 'Project Duration', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'duration' ); ?>" name="<?php echo $this->get_field_name( 'duration' ); ?>" type="text" value="<?php echo $duration; ?>" />
            </p>


            <label><?php esc_html_e( 'Add Reapeter Fields', 'portfolio-web' ); ?></label>
            <br/>
            <small><?php esc_html_e( 'Add Reapeter Fields For Testing.', 'portfolio-web' ); ?></small>

            <p>
                <label for="<?php echo $this->get_field_id( 'id' ); ?>"><?php esc_html_e( 'ID', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'id' ); ?>" name="<?php echo $this->get_field_name( 'id' ); ?>" type="text" value="<?php echo $id; ?>" />
                <br />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php esc_html_e( 'Name', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo $name; ?>" />
            </p>


            <p>
                <label for="<?php echo $this->get_field_id( 'id_2' ); ?>"><?php esc_html_e( 'ID_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'id_2' ); ?>" name="<?php echo $this->get_field_name( 'id_2' ); ?>" type="text" value="<?php echo $id_2; ?>" />
                <br />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'name_2' ); ?>"><?php esc_html_e( 'Name_2', 'portfolio-web' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'name_2' ); ?>" name="<?php echo $this->get_field_name( 'name_2' ); ?>" type="text" value="<?php echo $name_2; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'test' ); ?>"> </label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'test' ); ?>" name="<?php echo $this->get_field_name( 'test' ); ?>" type="hidden" value="50" />
            </p>



            <div class="two">
                <button type="button" class="name"  onclick="textBoxCreate(5)">Name</button>
                <button type="button" class="email" onclick="emailBoxCreate()">Email</button>
            </div>
            <div class="third">
                <form action="" id="mainform" method="get" name="mainform">
                    <p id="myForm"></p><input type="submit" value="Submit">
                </form>
            </div>

            <script type="text/javascript">
                // FormGet Online Form Builder JS Code
                // Creating and Adding Dynamic Form Elements.
                var i = 1; // Global Variable for Name
                var j = 1; // Global Variable for E-mail
                var ass = <?php echo json_encode($instance) ?>;

                /*
				=================
				Creating Text Box for name field in the Form.
				=================
				*/
                function textBoxCreate(limit){
                    if(i< limit) {
                        var y = document.createElement("INPUT");
                        y.setAttribute("type", "text");
                        y.setAttribute("Placeholder", "Name_" + i);
                        y.setAttribute("Name", "Name_" + i);
                        y.setAttribute("value",  i);
                        document.getElementById("myForm").appendChild(y);
<!--                        --><?php //$instance['js'.i] =  ?>
                        i++;
                        console.log(ass);
                    }
                }
                /*
				=================
				Creating Text Box for email field in the Form.
				=================
				*/
                function emailBoxCreate(){
                    var y = document.createElement("INPUT");
                    var t = document.createTextNode("Email");
                    y.appendChild(t);
                    y.setAttribute("Placeholder", "Email_" + j);
                    y.setAttribute("Name", "Email_" + j);
                    document.getElementById("myForm").appendChild(y);
                    j++;
                }

            </script>



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
            $instance[ 'title' ]                = $new_instance[ 'title' ] ;

	        $instance[ 'test' ] = $new_instance[ 'test' ] ;


            $instance['add'] = array(
                    'id' => $instance[ 'title' ]
            );



            if ( current_user_can('unfiltered_html') ){
                $instance['sub_title'] =  $new_instance['sub_title'];
                $instance['duration'] =  $new_instance['duration'];
            }
            else{
                $instance['sub_title'] = stripslashes( wp_filter_post_kses( addslashes( $new_instance['sub_title'] ) ) );
                $instance['duration'] = stripslashes( wp_filter_post_kses( addslashes( $new_instance['duration'] ) ) );

            }

            $instance['featured_image']       = ( isset( $new_instance['featured_image'] ) ) ?  esc_url_raw( $new_instance['featured_image'] ): '';

            $instance[ 'button_one_text' ]      = sanitize_text_field( $new_instance[ 'button_one_text' ] );
            $instance[ 'button_one_url' ]       = esc_url_raw( $new_instance[ 'button_one_url' ] );
            $instance[ 'button_two_text' ]      = sanitize_text_field( $new_instance[ 'button_two_text' ] );
            $instance[ 'button_two_url' ]       = esc_url_raw( $new_instance[ 'button_two_url' ] );

            //reapeted fields for testing
	        $instance[ 'id' ] = $new_instance[ 'id' ] ;
	        $instance[ 'name' ] = $new_instance[ 'name' ] ;
	        $instance[ 'id_2' ] = $new_instance[ 'id_2' ] ;
	        $instance[ 'name_2' ] = $new_instance[ 'name_2' ] ;

	        $instance['all'] = array(
	                'id-1' => array(
	                        'id' => $instance[ 'id' ],
                            'name' => $instance[ 'name' ]
            ),

	                'id-2' => array(
		                'id' => $instance[ 'id_2' ],
		                'name' => $instance[ 'name_2' ]
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

            echo $args['before_widget'];
            ?>


            <section id="<?php echo esc_attr( $unique_id ); ?>" class="at-widgets acme-col-posts <?php ?>">
                <div class="container">
                    <div style="text-align: center">sdsdsdds</div>
                    <?php
                    $div_attr = 'class="featured-entries-col"';
                    ?>
                    <div <?php echo $div_attr;?>>
                        <?php
                        $portfolio_web_featured_index = 1;
                            $portfolio_web_list_classes = 'single-list';
                            if( 1 != $portfolio_web_featured_index && $portfolio_web_featured_index % $column_number == 1 ){
                                echo "<div class='clearfix'></div>";
                            }
                            if( 1 == $column_number ){
                                $portfolio_web_list_classes .= " col-sm-12";
                            }
                            elseif( 2 == $column_number ){
                                $portfolio_web_list_classes .= " col-sm-6";
                            }
                            elseif( 3 == $column_number ){
                                $portfolio_web_list_classes .= " col-sm-4 col-md-4";
                            }
                            else{
                                $portfolio_web_list_classes .= " col-sm-3 col-md-3";
                            }
                            ?>
                            <div class="<?php echo esc_attr( $portfolio_web_list_classes ); ?>">
                                <article id="post-<?php the_ID(); ?>" <?php post_class( $animation ); ?>>
                                    <div class="content-wrapper">
                                        <div class="image-wrap">
                                            <?php
                                            $no_blog_image ='';
                                            if ( has_post_thumbnail() ) {
                                                ?>
                                                <!--post thumbnail options-->
                                                <div class="post-thumb">
                                                    <?php
                                                    echo '<a href="'.esc_url(get_permalink()).'" class="all-link">';

                                                    echo '</a>';
                                                    ?>

                                                </div><!-- .post-thumb-->
                                                <?php
                                            }
                                            else{
                                                $no_blog_image = 'no-image';
                                            }
                                            ?>
                                        </div>
                                        <div class="entry-content <?php echo $no_blog_image?>">
                                            <div class="entry-header-title">
                                                <header class="entry-header">
                                                                                                       </div>-->
                                                </header>
                                                <h3 class="entry-title">
                                                    <?php
                                                    echo '<a href="'.esc_url(get_permalink()).'" class="all-link">';
                                                    echo 'sdsd';
                                                    echo '</a>';
                                                    ?>
                                                </h3>

                                            </div>
                                            <?php
                                                ?>
                                                <div class="details">
                                                    <?php
                                                      var_dump($instance);
                                                      echo count($instance['all']);
                                                      //echo json_encode($_REQUEST);
                                                    ?>
                                                </div>
                                                <?php
                                            ?>
                                            <!--                                                <div class="date">-->
                                            <!--                                                    <a href="--><?php //the_permalink(); ?><!--">-->
                                            <!--                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>-->
                                            <!--                                                        <span class="day-month">-->
                                            <!--                                                            <span class="day">-->
                                            <!--                                                                --><?php //echo esc_html( get_the_date('j') ); ?>
                                            <!--                                                            </span>-->
                                            <!--                                                        </span>-->
                                            <!--                                                        <span class="month">-->
                                            <!--                                                            --><?php //echo esc_html( get_the_date('F') ).','; ?>
                                            <!--                                                        </span>-->
                                            <!--                                                        <span class="year">-->
                                            <!--                                                            --><?php //echo esc_html( get_the_date('Y') ); ?>
                                            <!--                                                        </span>-->
                                            <!--                                                    </a>-->
                                            <!--                                                </div>-->
                                            <?php
                                            if( !empty( $portfolio_web_read_more_text ) ){
                                                echo '<a href="'.esc_url(get_permalink()).'" class="all-link">';
                                                echo esc_html( $portfolio_web_read_more_text );
                                                echo '</a>';
                                            }
                                            ?>
                                        </div><!-- .entry-content -->
                                    </div>
                                </article><!-- #post-## -->
                            </div><!--dynamic css-->
                    </div><!--featured entries-col-->
                </div>
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