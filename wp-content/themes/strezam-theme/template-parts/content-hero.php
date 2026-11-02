<section class="hero-section">
    <?php
    // Отримання шляху до папки завантажень (за умови, що файли завантажені у поточному місяці)
    // Якщо зображення завантажені раніше, краще використовувати їхні прямі ID або налаштувати через ACF/Кастомайзер
    $upload_dir = wp_get_upload_dir();
    $bg_image_url = $upload_dir['baseurl'] . '/' . date('Y/m') . '/main-photo.png';
    $product_image_url = $upload_dir['baseurl'] . '/' . date('Y/m') . '/hero-second.png';
    ?>
    
    <!-- Задній фон -->
    <div class="hero-background" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="purple-text">Тривога має більше<br>ніж один механізм дії</span><br>
                <span class="orange-text">Стрезам діє подвійно</span>
            </h1>
            <p class="hero-description">
                Рівномірна, контрольована дія на тривогу: без седації, без звикання, без когнітивних порушень
            </p>
            <div class="hero-buttons">
                <a href="#learn-more" class="btn btn-primary">Дізнатися більше &darr;</a>
                <a href="#instruction" class="btn btn-outline">Інструкція</a>
            </div>
        </div>
        
        <!-- Зображення препарату -->
        <div class="hero-product-img">
            <img src="<?php echo esc_url( $product_image_url ); ?>" alt="Препарат Стрезам">
        </div>
    </div>
</section>