<?php

function acf_setup(){


       load_theme_textdomain('acf');
       register_nav_menus(array(
              'main-menu'=> __('Main menu', 'acf')
       ));
       
}
add_action( 'after_setup_theme', 'acf_setup');
add_theme_support( 'post-thumbnails');
function acf_scripts() {
      
wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_style('font-awsome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all');
wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
wp_enqueue_style('flation', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all');
wp_enqueue_style('monserrat', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap', array(), '1.0.0', 'all');

wp_enqueue_style( 'org', get_stylesheet_uri() );

wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('animate', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('waypoint', get_template_directory_uri() .'/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'acf_scripts');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Acf Options','acf',
		'menu_title'	=> 'Acf Options','acf',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Header Settings','acf',
		'menu_title'	=> 'Header','acf',
		'parent_slug'	=> 'acf-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Home Settings','acf',
		'menu_title'	=> 'Home Page','acf',
		'parent_slug'	=> 'acf-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Services Settings','acf',
		'menu_title'	=> 'Service Page','acf',
		'parent_slug'	=> 'acf-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Blog Settings','acf',
		'menu_title'	=> 'Blog Page','acf',
		'parent_slug'	=> 'acf-options',
	));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Contact Settings','acf',
		'menu_title'	=> 'Contact Page','acf',
		'parent_slug'	=> 'acf-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Acf Footer Settings','acf',
		'menu_title'	=> 'Footer','acf',
		'parent_slug'	=> 'acf-options',
	));
	
	
	
}
function acf_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'acf' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<div class="sidebar-box ftco-animate">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'acf' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<div id="%1$s" class="widget sidebar-box ftco-animate">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Tag Sidebar', 'acf' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<div class="sidebar-box ftco-animate">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
       register_sidebar( array(
           'name'          => __( 'Footer 1', 'acf' ),
           'id'            => 'footer-1',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
           'before_widget' => '<ul class="list-unstyled">',
           'after_widget'  => '</ul>',
           'before_title'  => '<h2 class="footer-heading">',
           'after_title'   => '</h2>',
       ) ); 
        register_sidebar( array(
           'name'          => __( 'Footer 1', 'acf' ),
           'id'            => 'footer-1',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
           'before_widget' => '<ul class="list-unstyled">',
           'after_widget'  => '</ul>',
           'before_title'  => '<h2 class="footer-heading">',
           'after_title'   => '</h2>',
       ) ); 
       register_sidebar( array(
           'name'          => __( 'Footer 1', 'acf' ),
           'id'            => 'footer-1',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
           'before_widget' => '<ul class="list-unstyled">',
           'after_widget'  => '</ul>',
           'before_title'  => '<h2 class="footer-heading">',
           'after_title'   => '</h2>',
       ) ); 
	
	register_sidebar( array(
           'name'          => __( 'Footer 2', 'acf' ),
           'id'            => 'footer-2',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
           'before_widget' => '<ul class="list-unstyled">',
           'after_widget'  => '</ul>',
           'before_title'  => '<h2 class="footer-heading">',
           'after_title'   => '</h2>',
       ) ); 
	register_sidebar( array(
           'name'          => __( 'Footer 3', 'acf' ),
           'id'            => 'footer-3',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
           'before_widget' => '<ul class="list-unstyled">',
           'after_widget'  => '</ul>',
           'before_title'  => '<h2 class="footer-heading">',
           'after_title'   => '</h2>',
       ) ); 
}
 add_action( 'widgets_init', 'acf_widgets_init');


// comments-function---//
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
             ?>
        </div><?php 
        ?>
         
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
            printf( __( '<h3 class="fn">%s</h3>' ), get_comment_author_link() );
                /* translators: 1: date, 2: time */
               
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>
 
        <?php comment_text(); ?>
 
        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );



function tu_comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}
add_filter( 'comment_form_default_fields', 'tu_comment_form_hide_cookies_consent' );

//-----widgets-function----//
class Category_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'category_widget',  
            'Category Widget'  
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Category_Widget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        ?>

<div class="categories">
<?php

$categories = get_categories();
foreach($categories as $cat){
?>
<li><a href="<?php echo $cat->category_link;?>"><?php echo $cat->name;?><span class="fa fa-chevron-right"></span></a></li>
<?php
}
?>
</div>
<?php
echo $args['after_widget'];

    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'acf' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'acf' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
       
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
 
}
$category_widget = new  Category_Widget();

//-----recent-post-function----//
class Recent_Blog_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'recent_blog_widget',  
            'Recent Blog Widget' 
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Recent_Blog_Widget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];

        $post = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );
        $query = new WP_Query($post);
        while($query -> have_posts()){
            $query ->the_post();
        ?>
        <div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></a>
<div class="text">
    <h3 class="heading"><a href="#"><?php the_title();?></a></h3>
    <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span><?php the_time( 'd M Y');?></a></div>
        <div><a href="#"><span class="icon-person"></span><?php the_author(); ?></a></div>
        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
</div>
</div>
        <?php
        }
        }
    ?>
<?php
echo $args['after_widget'];

}
public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'acf' );
       
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'acf' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
       
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
 
}
$recent_blog_widget = new  Recent_Blog_Widget();

//-----Creating the widget----////
class tag_cloud_widget extends WP_Widget {
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'tag_cloud_widget', 
      
    // Widget name will appear in UI
    __('Tag Cloud Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'acf' ), ) 
    );
    }
      
// Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    ?>

<div class="tagcloud">
<?php
$tags = get_the_tags();
foreach($tags as $tag){
?>
<a href="#" class="tag-cloud-link"><?php echo $tag->name;?></a>
<?php
}
?>
</div>
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Tag Cloud', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
    // Register and load the widget
    function tag_cloud_widget() {
        register_widget( 'tag_cloud_widget' );
    }
    add_action( 'widgets_init', 'tag_cloud_widget');

// ----dummy-text-widget-function----//
class dumy_text_widget extends WP_Widget {
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'dumy_text_widget', 
      
    // Widget name will appear in UI
    __('Dumy Text Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'acf' ), ) 
    );
    }
      
// Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    ?>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Tag Cloud', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
    // Register and load the widget
    function dumy_text_widget() {
        register_widget( 'dumy_text_widget' );
    }
    add_action( 'widgets_init', 'dumy_text_widget');


//-------classic-widgets-function----///  
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );