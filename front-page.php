<?php get_header(); ?>

<?php
// Get the ID of the page set as Front Page
$front_page_id = get_option('page_on_front');
?>

<!-- ================= Announcement Bar ================= -->
<?php if ($announcement = get_field('announcement_text', $front_page_id)) : ?>
    <div class="announcement">
        <?php echo esc_html($announcement); ?>
    </div>
<?php endif; ?>

<!-- ================= Hero Section ================= -->
<section class="hero">

    <?php if ($heading = get_field('hero_heading', $front_page_id)) : ?>
        <h1><?php echo esc_html($heading); ?></h1>
    <?php endif; ?>

    <?php if ($subheading = get_field('hero_subheading', $front_page_id)) : ?>
        <p><?php echo esc_html($subheading); ?></p>
    <?php endif; ?>

    <?php if ($hero_image = get_field('hero_image', $front_page_id)) : ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Banner">
    <?php endif; ?>

    <?php
    $btn_text = get_field('hero_button_text', $front_page_id);
    $btn_link = get_field('hero_button_link', $front_page_id);
    if ($btn_text && $btn_link) :
    ?>
        <a href="<?php echo esc_url($btn_link); ?>">
            <?php echo esc_html($btn_text); ?>
        </a>
    <?php endif; ?>

</section>

<!-- ================= Brand Logos ================= -->
<div class="brands">

    <?php if ($logo = get_field('brand_logo_1', $front_page_id)) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Brand Logo">
    <?php endif; ?>

    <?php if ($logo = get_field('brand_logo_2', $front_page_id)) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Brand Logo">
    <?php endif; ?>

    <?php if ($logo = get_field('brand_logo_3', $front_page_id)) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Brand Logo">
    <?php endif; ?>

</div>

<!-- ================= New Arrivals ================= -->
<h2 style="text-align:center;">New Arrivals</h2>

<div class="products">

    <!-- Product 1 -->
    <?php if (get_field('product_1_image', $front_page_id)) : ?>
        <div>
            <img src="<?php echo esc_url(get_field('product_1_image', $front_page_id)); ?>" alt="Product 1">
            <p><?php echo esc_html(get_field('product_1_name', $front_page_id)); ?></p>
            <p><?php echo esc_html(get_field('product_1_price', $front_page_id)); ?></p>
        </div>
    <?php endif; ?>

    <!-- Product 2 -->
    <?php if (get_field('product_2_image', $front_page_id)) : ?>
        <div>
            <img src="<?php echo esc_url(get_field('product_2_image', $front_page_id)); ?>" alt="Product 2">
            <p><?php echo esc_html(get_field('product_2_name', $front_page_id)); ?></p>
            <p><?php echo esc_html(get_field('product_2_price', $front_page_id)); ?></p>
        </div>
    <?php endif; ?>

    <!-- Product 3 (Optional) -->
    <?php if (get_field('product_3_image', $front_page_id)) : ?>
        <div>
            <img src="<?php echo esc_url(get_field('product_3_image', $front_page_id)); ?>" alt="Product 3">
            <p><?php echo esc_html(get_field('product_3_name', $front_page_id)); ?></p>
            <p><?php echo esc_html(get_field('product_3_price', $front_page_id)); ?></p>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
