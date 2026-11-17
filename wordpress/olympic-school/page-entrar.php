<?php
/** Template Name: Olympic School — Entrar */
get_header();
?>
<main class="login-page botanical-bg" id="conteudo"><div class="login-wrap"><div class="login-brand"><?php olympic_school_logo(); ?></div><section class="glass-card login-card"><p class="eyebrow">Acesso único</p><h1>Entrar na Olympic School</h1><p>Use sua conta para acessar seus estudos. A integração de cadastro estudantil será configurada na etapa funcional do projeto.</p><a class="button button-lime" href="<?php echo esc_url(wp_login_url(olympic_school_studies_url())); ?>">Entrar com WordPress <span aria-hidden="true">↗</span></a><p class="small-note">O acesso com Google do aplicativo original requer integração própria.</p></section><a class="back-link" href="<?php echo esc_url(home_url('/')); ?>">← Voltar à página inicial</a></div></main>
<?php get_footer(); ?>
