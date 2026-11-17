<?php
/** Template Name: Olympic School — Estudos */
get_header();
$areas = olympic_school_study_areas();
$area = isset($_GET['area']) ? sanitize_key(wp_unslash($_GET['area'])) : 'visao-geral';
if (!isset($areas[$area])) {
    $area = 'visao-geral';
}
?>
<div class="app-shell botanical-bg">
    <?php olympic_school_study_sidebar($area); ?>
    <div class="app-main">
        <?php olympic_school_app_topbar(); ?>
        <main class="app-content" id="conteudo">
            <?php if ($area === 'visao-geral') : ?>
                <p class="eyebrow">Visão geral</p><h1>Olá, estudante.</h1><p class="app-intro">Aqui você acompanha o diagnóstico, suas prioridades e o estado do plano de estudos.</p>
                <div class="cards-grid three-col app-cards">
                    <article class="glass-card"><span class="card-icon">◎</span><h2>Diagnóstico inicial</h2><p>Descubra suas áreas fortes e os conteúdos que merecem mais atenção.</p><a class="text-link" href="<?php echo esc_url(olympic_school_studies_url('diagnostico')); ?>">Ver design do diagnóstico ↗</a></article>
                    <article class="glass-card"><span class="card-icon">◉</span><h2>Prioridade atual</h2><p>A análise por área e habilidade orientará sua próxima atividade.</p></article>
                    <article class="glass-card"><span class="card-icon">▦</span><h2>Plano de estudos</h2><p>Organize sua preparação em uma trilha pessoal.</p><a class="text-link" href="<?php echo esc_url(olympic_school_studies_url('plano')); ?>">Ver organização ↗</a></article>
                </div>
            <?php elseif ($area === 'diagnostico') : ?>
                <div class="question-meta"><span>Biologia celular</span><span>Questão 1 de 15</span></div>
                <div class="question-subhead"><h1>Biologia celular</h1><span>Questão 1 de 15</span></div>
                <section class="glass-card question-card" aria-labelledby="question-title"><h2 id="question-title">Qual organela é diretamente responsável pela maior parte da produção de ATP aeróbio?</h2>
                    <div class="answer-list" role="group" aria-label="Alternativas de demonstração">
                        <?php foreach (array('Complexo golgiense', 'Mitocôndria', 'Lisossomo', 'Centríolo') as $i => $answer) : ?><button class="answer-option" type="button" aria-pressed="false"><span><?php echo esc_html(chr(65 + $i)); ?></span><?php echo esc_html($answer); ?></button><?php endforeach; ?>
                    </div><p class="demo-label">Demonstração visual · respostas não são salvas</p>
                </section>
            <?php elseif ($area === 'treino') : ?>
                <p class="eyebrow">Treino adaptativo</p><h1>Pratique com direção.</h1><p class="app-intro">Uma sequência de atividades orientada por dificuldades, tempo de resposta e prioridades do plano.</p>
                <div class="cards-grid two-col app-cards"><article class="glass-card"><span class="card-icon">◉</span><h2>Próxima atividade</h2><p>Questões direcionadas ao conteúdo que pede revisão.</p><span class="pill">Em desenvolvimento</span></article><article class="glass-card"><span class="card-icon">↗</span><h2>Revisão inteligente</h2><p>Reforce conceitos após cada resposta, com explicações e novas questões.</p><span class="pill">Em desenvolvimento</span></article></div>
            <?php elseif ($area === 'progresso') : ?>
                <p class="eyebrow">Progresso</p><h1>Seu caminho em Biologia.</h1><p class="app-intro">Visualize domínio por área e identifique as próximas prioridades.</p>
                <div class="glass-card content-card"><h2>Domínio por área</h2><?php foreach (array('Biologia celular', 'Genética', 'Ecologia', 'Fisiologia') as $subject) : ?><div class="subject-row"><span><?php echo esc_html($subject); ?></span><span class="subject-bar" aria-hidden="true"><i></i></span><small>Aguardando diagnóstico</small></div><?php endforeach; ?><p class="demo-label">Valores exibidos após uma avaliação funcional.</p></div>
            <?php elseif ($area === 'plano') : ?>
                <p class="eyebrow">Plano de estudos</p><h1>Sua preparação em um só lugar.</h1><p class="app-intro">O plano será definido a partir dos resultados do diagnóstico e da metodologia de acompanhamento da escola.</p>
                <div class="cards-grid two-col app-cards"><article class="glass-card"><span class="card-icon">◎</span><h2>Primeiro passo: diagnóstico</h2><p>Identifique pontos fortes e lacunas que poderão orientar seu plano.</p><a class="text-link" href="<?php echo esc_url(olympic_school_studies_url('diagnostico')); ?>">Ver diagnóstico ↗</a></article><article class="glass-card"><span class="card-icon">◉</span><h2>Treino adaptativo</h2><p>Uma futura etapa da sua trilha de estudos.</p><span class="pill">Em preparação</span></article></div>
            <?php elseif ($area === 'notebooks') : ?>
                <p class="eyebrow">Notebooks</p><h1>Materiais para aprofundar.</h1><p class="app-intro">Uma biblioteca de links para notebooks selecionados pela equipe.</p>
                <div class="cards-grid three-col app-cards"><?php foreach (array('Genética', 'Ecologia', 'Biologia celular') as $subject) : ?><article class="glass-card"><span class="card-icon">▤</span><h2><?php echo esc_html($subject); ?></h2><p>Materiais externos organizados por assunto.</p><span class="pill">Cadastro pela equipe</span></article><?php endforeach; ?></div>
            <?php elseif ($area === 'artefatos') : ?>
                <p class="eyebrow">Artefatos</p><h1>Seu material de revisão.</h1><p class="app-intro">Resumos, mapas mentais, flashcards e outros materiais em um só lugar.</p>
                <div class="cards-grid three-col app-cards"><?php foreach (array('Resumos', 'Mapas mentais', 'Flashcards') as $subject) : ?><article class="glass-card"><span class="card-icon">✧</span><h2><?php echo esc_html($subject); ?></h2><p>Conteúdo de estudo produzido durante sua jornada.</p><span class="pill">Em desenvolvimento</span></article><?php endforeach; ?></div>
            <?php else : ?>
                <p class="eyebrow">Área do professor</p><h1>Organize o conteúdo da escola.</h1><p class="app-intro">Design para gestão de questões, notebooks e instruções do assistente.</p>
                <div class="cards-grid three-col app-cards"><?php foreach (array('Banco de questões', 'Notebooks', 'Prompts da IA') as $subject) : ?><article class="glass-card"><span class="card-icon">▤</span><h2><?php echo esc_html($subject); ?></h2><p>Ferramentas de curadoria de materiais para a plataforma.</p><span class="pill">Acesso docente</span></article><?php endforeach; ?></div>
            <?php endif; ?>
            <div class="app-disclaimer">Este tema apresenta o design WordPress. Dados, autenticação de estudantes, diagnóstico e IA exigem integração funcional.</div>
        </main>
    </div>
</div>
<?php get_footer(); ?>
