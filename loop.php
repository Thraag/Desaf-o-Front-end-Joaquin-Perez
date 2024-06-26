<?php
// Verifica si los campos están definidos
if( function_exists('get_field') ) {
    // Intentamos acceder directamente a los campos
    $nombre_proyecto = get_field('nombre_del_proyecto');
    $descripcion_proyecto = get_field('descripcion_del_proyecto');
    $imagen_proyecto = get_field('imagen_del_proyecto');
}

// go con el loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="proyecto row d-flex align-items-center">
            <?php if ($nombre_proyecto && $descripcion_proyecto && $imagen_proyecto): ?>
                <div class="col-md-7 d-flex flex-column justify-content-center p-md-0">
                    <h1 class="text-white titulo"><?php echo esc_html($nombre_proyecto); ?></h1>
                    <p class="text-white textobanner"><?php echo wp_kses_post($descripcion_proyecto); ?></p>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <button class="btn btn-secondary">Registrate</button>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center my-5">
                    <div class="imagen">
                        <?php 
                        // Si la imagen es un array (lo cual es común con ACF)
                        if (is_array($imagen_proyecto)): ?>
                            <img src="<?php echo esc_url($imagen_proyecto['url']); ?>" alt="<?php echo esc_attr($nombre_proyecto); ?>" class="img-fluid sd">
                        <?php 
                        // Si la imagen es una URL
                        elseif (is_string($imagen_proyecto)): ?>
                            <img src="<?php echo esc_url($imagen_proyecto); ?>" alt="<?php echo esc_attr($nombre_proyecto); ?>" class="img-fluid sd">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div> 
    </div> 
                            
    <?php endwhile;
endif;
?>
    

