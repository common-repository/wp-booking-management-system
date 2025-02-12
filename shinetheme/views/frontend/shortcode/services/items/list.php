<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 26/06/2018
 * Time: 11:24 SA
 */
$service = new WB_Service();
$url = get_permalink(get_the_ID());
?>
<li <?php post_class( 'loop-item' ) ?> itemprop="itemListElement" itemscope itemtype="http://schema.org/ItemList">
    <div class="content-item">
        <?php
        $thumb_bg = WPBooking_Assets::build_css_class( 'background: url(' . $service->get_featured_image( 'thumb_url' ) . ') ; background-size: cover; background-position: center' );
        ?>
        <?php
        if ( wpbooking_get_layout_archive() == 'grid' ) {
            ?>
            <div class="service-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo esc_url( $url ) ?>" itemprop="url">
                    <?php
                    echo do_shortcode( $service->get_featured_image( 'thumb' ) );
                    ?>
                </a>
            </div>
            <?php
        } else {
            ?>
            <a href="<?php echo esc_url( $url ) ?>">
                <div class="service-thumbnail <?php echo esc_attr( $thumb_bg ); ?>"></div>
            </a>
            <?php
        }
        ?>

        <div class="service-content">
            <div class="service-content-inner">
                <h3 class="service-title" itemprop="name"><a itemprop="url"
                                                             href="<?php echo esc_url( $url ) ?>"><strong><?php the_title() ?></strong></a>
                </h3>

                <div class="service-address-rate">
                    <div class="wb-hotel-star">
                        <?php
                        $service->get_star_rating_html();
                        ?>
                    </div>
                    <?php $address = $service->get_address();
                    if ( $address ) {
                        ?>
                        <div class="service-address">
                            <i class="fa fa-map-marker"></i> <span><?php echo esc_html( $address ) ?></span>
                        </div>
                    <?php } ?>
                </div>
                <?php do_action( 'wpbooking_after_service_address', get_the_ID(), $service->get_type(), $service ) ?>
            </div>
            <div class="service-price-book-now">
                <div class="service-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <?php
                    $service->get_price_html();
                    ?>
                </div>
                <div class="service-book-now">
                    <a class="wb-btn wb-btn-default wb-btn-sm"
                       href="<?php echo esc_url( $url ) ?>"><?php echo esc_html__( 'Book Now', 'wp-booking-management-system' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</li>