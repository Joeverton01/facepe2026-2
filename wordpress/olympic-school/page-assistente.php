<?php
/** Template Name: Olympic School — Assistente */
get_header();
?>
<div class="app-shell assistant-shell botanical-bg">
    <aside class="app-sidebar" id="app-sidebar"><div class="sidebar-brand"><?php olympic_school_logo(); ?></div><nav class="app-side-nav" aria-label="Assistente"><a class="side-link is-current" href="#conteudo" aria-current="page">✦ &nbsp;Nova conversa</a><a class="side-link" href="<?php echo esc_url(olympic_school_studies_url('notebooks')); ?>">▤ &nbsp;Meus notebooks</a><span class="side-link" aria-disabled="true">⌕ &nbsp;Pesquisar conversa</span></nav><div class="sidebar-foot"><span class="avatar" aria-hidden="true">A</span><span>Aluno(a)<small>Olympic School</small></span></div></aside>
    <div class="app-main"><?php olympic_school_app_topbar('assistant'); ?>
        <main class="assistant-content" id="conteudo"><div class="assistant-welcome"><p class="eyebrow">Seu espaço de estudo</p><h1>Olá, aluno(a).</h1><p>Como posso ajudar nos seus estudos de Biologia hoje?</p></div>
            <div class="assistant-composer"><label class="screen-reader-text" for="assistant-message">Sua pergunta</label><span aria-hidden="true">✦</span><input id="assistant-message" type="text" placeholder="Faça uma pergunta..." disabled><button type="button" disabled aria-label="Envio disponível após integração da IA">↑</button></div>
            <div class="prompt-pills" aria-label="Sugestões de estudo"><span>Resumo de citologia</span><span>Explicar genética</span><span>Questões comentadas</span><span>Mapa mental</span></div><p class="demo-label center">Interface demonstrativa. A conversa com IA depende da integração funcional.</p>
        </main>
    </div>
</div>
<?php get_footer(); ?>
