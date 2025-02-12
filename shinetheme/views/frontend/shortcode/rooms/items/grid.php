<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 02/07/2018
 * Time: 10:35 SA
 */
$service_room = new WB_Service(get_the_ID());
$grid = '4';
if($col=='2'){
    $grid = '6';
}
if($col=='3'){
    $grid = '4';
}
if($col == '4'){
    $grid = '3';
}
if($col == '6'){
    $grid = '2';
}
$gallery = get_post_meta(get_the_ID(),'gallery_room',true);
wp_enqueue_script('wpbooking-bootstrap');

?>
<div class="wbooking-room-item col-xs-12 col-sm-6 col-md-<?php echo esc_attr($grid); ?>">
    <div class="content-item">
        <div class="thumbnail service-thumbnail">
            <?php
            $feature_image_id=$service_room->get_featured_image_room('feature_image_id');
            echo wp_get_attachment_image($feature_image_id,array(340,240));
            if(!empty($gallery)){
            ?>
            <div class="show_gallery"> <button class="room-image" data-toggle="modal" data-target="#myModal<?php echo get_the_ID(); ?>"> <i class="fa fa-image"></i> </button></div>
            <?php } ?>
        </div>
        <div class="room-content">
            <h3 class="service-title" itemprop="name">
                <strong><?php the_title() ?></strong>
            </h3>
            <div class="desc">
                <div class="info">
                    <?php
                    $max_guests = get_post_meta(get_the_ID(),'max_guests',true);
                    if(!empty($max_guests)){ ?>
                        <span> <?php echo esc_attr($max_guests); ?> <?php echo esc_html__("GUESTS - ","wp-booking-management-system") ?> </span>
                    <?php } ?>
                    <div class="room_size">
                        <?php
                        $hotel_id = wp_get_post_parent_id(get_the_ID());
                        $room_size = get_post_meta($hotel_id,'room_size',true);
                        if(!empty($room_size)) {
                            echo esc_attr($room_size);
                            $room_measunit = get_post_meta( $hotel_id , 'room_measunit' , true );
                            echo '<span>';
                            if($room_measunit == 'feet')
                                echo ' ft<sup>2</sup>';
                            else echo ' m<sup>2</sup>';
                            echo '</span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="price">
                    <?php $price = get_post_meta(get_the_ID(),'base_price',true);echo WPBooking_Currency::format_money($price); ?><span class="small"><?php echo esc_html__("/night",'wpbooking') ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal<?php echo get_the_ID(); ?>" role="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                    <?php if ( !empty( $gallery ) and is_array( $gallery ) ) {
                        foreach ( $gallery as $k => $v ) {
                            echo wp_get_attachment_image( $v, 'full' );
                        }
                    } else {
                        $featured = $service_room->get_featured_image_room( 'thumb300' );
                        echo do_shortcode( $featured );
                    } ?>
                </div>
                <div class="room_type">
                    <div class="item"><b><?php echo esc_html__( "Bath rooms", "wp-booking-management-system" ) ?>
                            : </b><?php echo esc_attr( get_post_meta( get_the_ID(), 'bath_rooms', true ) ) ?> <?php echo esc_html__( 'room(s)', 'wp-booking-management-system' ) ?>
                    </div>
                    <div class="item"><b><?php echo esc_html__( "Living rooms", "wp-booking-management-system" ) ?>
                            : </b><?php echo esc_attr( get_post_meta( get_the_ID(), 'living_rooms', true ) ) ?> <?php echo esc_html__( 'room(s)', 'wp-booking-management-system' ) ?>
                    </div>
                    <div class="item"><b><?php echo esc_html__( "Bed rooms", "wp-booking-management-system" ) ?>
                            : </b><?php echo esc_attr( get_post_meta( get_the_ID(), 'bed_rooms', true ) ) ?> <?php echo esc_html__( 'room(s)', 'wp-booking-management-system' ) ?>
                    </div>
                </div>
                <div class="facilities">
                    <?php $facilities = get_post_meta(get_the_ID(),'taxonomy_room',true); ?>
                    <?php  if(!empty($facilities)){ ?>
                        <div class="title"><?php echo esc_html__('Room Facilities','wp-booking-management-system'); ?></div>
                        <?php
                        foreach($facilities as $taxonomy=>$term_ids){
                            $rental_features = get_taxonomy( $taxonomy );
                            if(!empty($term_ids) and !empty($rental_features->labels->name)){
                                $i=0;
                                foreach($term_ids as $key=>$value){
                                    $term = get_term($value,$taxonomy);
                                    if(!is_wp_error($term) and !empty($term->name)){
                                        if($i == 4){
                                            continue;
                                        }
                                        $i++;
                                        ?>
                                        <span class="icon-item">
                                                <?php $icon = get_tax_meta($term->term_id, 'wpbooking_icon'); ?>
                                            <i class="<?php echo wpbooking_handle_icon($icon); ?>"></i>
                                            <?php echo esc_html($term->name); ?>
                                            </span>
                                        <?php
                                    }
                                }
                            }
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
