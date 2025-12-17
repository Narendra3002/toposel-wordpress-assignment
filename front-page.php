<?php get_header(); ?>

<?php
$front_page_id = get_option('page_on_front');
?>

<!-- Announcement Bar -->
<div class="announcement">
    <?php echo esc_html(get_field('announcement_text', $front_page_id)); ?>
</div>

<!-- Hero Section -->
<section class="hero">
    <h1><?php echo esc_html(get_field('hero_heading', $front_page_id)); ?></h1>
    <p><?php echo esc_html(get_field('hero_subheading', $front_page_id)); ?></p>

    <?php if ($img = get_field('hero_image', $front_page_id)): ?>
        <img src="<?php echo esc_url($img); ?>" alt="Hero Image">
    <?php endif; ?>

    <br>

    <a href="<?php echo esc_url(get_field('hero_button_link', $front_page_id)); ?>">
        <?php echo esc_html(get_field('hero_button_text', $front_page_id)); ?>
    </a>
</section>

<!-- Brand Logos -->
<div class="brands">
    <?php if ($logo = get_field('brand_logo_1', $front_page_id)): ?>
        <img src="<?php echo esc_url($logo); ?>">
    <?php endif; ?>

    <?php if ($logo = get_field('brand_logo_2', $front_page_id)): ?>
        <img src="<?php echo esc_url($logo); ?>">
    <?php endif; ?>

    <?php if ($logo = get_field('brand_logo_3', $front_page_id)): ?>
        <img src="<?php echo esc_url($logo); ?>">
    <?php endif; ?>
</div>

<!-- New Arrivals -->
<h2 style="text-align:center;">New Arrivals</h2>

<div class="products">
    <div>
        <img src="<?php echo esc_url(get_field('product_1_image', $front_page_id)); ?>">
        <p><?php echo esc_html(get_field('product_1_name', $front_page_id)); ?></p>
        <p><?php echo esc_html(get_field('product_1_price', $front_page_id)); ?></p>
    </div>

    <div>
        <img src="<?php echo esc_url(get_field('product_2_image', $front_page_id)); ?>">
        <p><?php echo esc_html(get_field('product_2_name', $front_page_id)); ?></p>
        <p><?php echo esc_html(get_field('product_2_price', $front_page_id)); ?></p>
    </div>
</div>

<?php get_footer(); ?>
