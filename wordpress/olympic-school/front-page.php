<?php get_header(); ?>
<header class="site-header" id="inicio">
    <div class="container header-inner">
        <?php olympic_school_logo(); ?>
        <button class="menu-toggle" type="button" aria-controls="primary-nav" aria-expanded="false">☰ <span class="screen-reader-text">Abrir navegação</span></button>
        <nav class="primary-nav" id="primary-nav" aria-label="Principal">
            <a href="#inicio">Início</a><a href="#problema">Problema</a><a href="#solucao">Solução</a><a href="#recursos">Recursos</a>
        </nav>
        <a class="button button-lime header-cta" href="<?php echo esc_url(olympic_school_page_url('entrar')); ?>">Entrar <span aria-hidden="true">↗</span></a>
    </div>
</header>
<main id="conteudo">
    <section class="hero-section botanical-bg">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">Olympic School <span>•</span> Biologia + IA</p>
                <h1><span>Estude para a Olimpíada<br>de Biologia com</span> <strong>inteligência<br>artificial</strong></h1>
                <p class="hero-lead">A Olympic School está sendo construída para ajudar estudantes da OBB e de outras olimpíadas a organizar os estudos, entender o que priorizar e evoluir com materiais apoiados por IA.</p>
                <a class="button button-dark hero-button" href="<?php echo esc_url(olympic_school_page_url('entrar')); ?>">Entrar na Olympic School <span aria-hidden="true">↗</span></a>
                <p class="small-note">Acesso com Google · cadastro automático no primeiro login</p>
            </div>
            <div class="hero-art" aria-hidden="true"><span class="art-orbit orbit-one"></span><span class="art-orbit orbit-two"></span><span class="dna-line dna-left"></span><span class="dna-line dna-right"></span><span class="dna-rung rung-one"></span><span class="dna-rung rung-two"></span><span class="dna-rung rung-three"></span><span class="dna-rung rung-four"></span><span class="dna-rung rung-five"></span><span class="art-label">OBB</span></div>
        </div>
    </section>
    <section class="section section-problem botanical-bg" id="problema">
        <div class="container">
            <p class="eyebrow">O desafio real</p>
            <h2 class="section-heading problem-heading">Não basta <span>estudar mais</span><br>É preciso saber <em>o que estudar</em></h2>
            <p class="section-lead">Estudantes que desejam se destacar em Olimpíadas de Biologia enfrentam obstáculos diários de organização, tempo e direcionamento.</p>
            <div class="cards-grid two-col">
                <?php
                $problems = array(
                    array('Conteúdos dispersos', 'A matéria de olimpíadas está espalhada em apostilas antigas, sites variados e livros universitários extensos e sem direcionamento.', '⌕'),
                    array('Falta de direcionamento', 'Dificuldade para identificar quais tópicos de Botânica, Genética, Ecologia e Fisiologia têm maior incidência nas provas.', '◎'),
                    array('Ausência de trilha organizada', 'Sem um roteiro estruturado passo a passo, o estudo torna-se caótico e desmotiva o estudante logo nas primeiras semanas.', '▤'),
                    array('Pouco acompanhamento da evolução', 'Sem métricas claras do desempenho em questões anteriores, é difícil mapear os pontos fracos para direcionar revisões.', '↗'),
                );
                foreach ($problems as $item) : ?>
                    <article class="glass-card problem-card"><span class="card-icon" aria-hidden="true"><?php echo esc_html($item[2]); ?></span><h3><?php echo esc_html($item[0]); ?></h3><p><?php echo esc_html($item[1]); ?></p></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section section-solution botanical-bg" id="solucao">
        <div class="container">
            <p class="eyebrow">A solução</p>
            <h2 class="section-heading solution-heading">A visão que estamos<br><strong>construindo</strong></h2>
            <p class="section-lead">Estes três pilares fazem parte da visão do projeto Olympic School. Ainda estão em desenvolvimento e serão liberados por etapas.</p>
            <div class="cards-grid three-col">
                <?php
                $solutions = array(
                    array('Trilhas organizadas', 'Um caminho claro por tema e nível, do básico ao avançado, seguindo a lógica das provas olímpicas.'),
                    array('Materiais apoiados por IA', 'Resumos, mapas mentais e questões gerados e revisados com apoio de inteligência artificial.'),
                    array('Evolução personalizada', 'Acompanhamento do desempenho para indicar o próximo passo certo para cada estudante.'),
                );
                foreach ($solutions as $item) : ?>
                    <article class="glass-card solution-card"><h3><?php echo esc_html($item[0]); ?></h3><p><?php echo esc_html($item[1]); ?></p><small>Parte da visão do projeto</small></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section section-resources botanical-bg" id="recursos">
        <div class="container">
            <p class="eyebrow center">Estrutura futura</p>
            <h2 class="section-heading center">O que estamos <span>construindo?</span></h2>
            <p class="section-lead center">Conheça os recursos educacionais planejados para os próximos lançamentos da plataforma Olympic School.</p>
            <div class="cards-grid three-col">
                <?php
                $resources = array(
                    array('Resumos personalizados', 'Sínteses inteligentes focadas em artigos científicos e no banco de questões históricas das Olimpíadas.'),
                    array('Mapas mentais visuais', 'Diagramas estruturados para organizar reações metabólicas, sistemática e teias ecológicas.'),
                    array('PDFs e slides de conteúdo', 'Material sintetizado e formatado para leitura rápida no celular ou revisão presencial.'),
                    array('Questões de Biologia comentadas', 'Exercícios das edições passadas da OBB, OBBS e TNBIO com resolução passo a passo.'),
                    array('Trilhas de estudo por fase', 'Cronograma estratégico ajustado de acordo com a data de cada prova olímpica.'),
                    array('Análise de desempenho individual', 'Relatórios demonstrando a taxa de acerto por grande área da Biologia.'),
                );
                foreach ($resources as $item) : ?>
                    <article class="glass-card resource-card"><h3><?php echo esc_html($item[0]); ?></h3><p><?php echo esc_html($item[1]); ?></p></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="final-cta"><div class="container cta-inner"><div><p class="eyebrow">Próximo passo</p><h2>Faça parte do início da <span>Olympic School.</span></h2><p>Entre agora e acompanhe as próximas etapas do projeto.</p></div><a class="button button-lime" href="<?php echo esc_url(olympic_school_page_url('entrar')); ?>">Entrar na Olympic School <span aria-hidden="true">↗</span></a></div></section>
</main>
<footer class="site-footer"><div class="container footer-inner"><?php olympic_school_logo(); ?><p>Projeto educacional em desenvolvimento para estudantes de Olimpíadas Científicas de Biologia.</p><nav aria-label="Rodapé"><a href="#inicio">Início</a><a href="#problema">Problema</a><a href="#solucao">Solução</a><a href="#recursos">Recursos</a></nav><small>© <?php echo esc_html(date_i18n('Y')); ?> Olympic School</small></div></footer>
<?php get_footer(); ?>
