<?php get_header(); ?>
<main class="editor-page botanical-bg" id="conteudo"><div class="container"><div class="editor-top"><?php olympic_school_logo(); ?><a class="text-link" href="<?php echo esc_url(home_url('/')); ?>">← Página inicial</a></div><?php while (have_posts()) : the_post(); ?><article <?php post_class('glass-card editor-content'); ?>><h1><?php the_title(); ?></h1><?php the_content(); ?></article><?php endwhile; ?></div></main>
<?php get_footer(); ?>
