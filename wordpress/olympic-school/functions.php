<?php
/**
 * Olympic School: visual WordPress theme.
 *
 * @package Olympic_School
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo', array('height' => 80, 'width' => 260, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    register_nav_menus(array('primary' => __('Navegação principal', 'olympic-school')));
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('olympic-school-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('olympic-school-style', get_stylesheet_uri(), array('olympic-school-fonts'), wp_get_theme()->get('Version'));
    wp_enqueue_script('olympic-school-ui', get_template_directory_uri() . '/assets/js/ui.js', array(), wp_get_theme()->get('Version'), true);
});

function olympic_school_page_url($slug) {
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}

function olympic_school_studies_url($area = '') {
    $url = olympic_school_page_url('estudos');
    return $area ? add_query_arg('area', $area, $url) : $url;
}

function olympic_school_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
        return;
    }
    echo '<a class="brand" href="' . esc_url(home_url('/')) . '" aria-label="Olympic School, página inicial">';
    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/olympic-school-mark.png') . '" width="42" height="42" alt="">';
    echo '<span>Olympic <em>School</em></span></a>';
}

function olympic_school_study_areas() {
    return array(
        'visao-geral' => array('Visão geral', '✦'),
        'diagnostico' => array('Diagnóstico', '◎'),
        'treino' => array('Treino adaptativo', '◉'),
        'progresso' => array('Progresso', '▥'),
        'plano' => array('Plano de estudos', '▦'),
        'notebooks' => array('Notebooks', '▤'),
        'artefatos' => array('Artefatos', '✧'),
        'professor' => array('Área do professor', '♧'),
    );
}

function olympic_school_study_sidebar($active = 'visao-geral') {
    echo '<aside class="app-sidebar" id="app-sidebar"><div class="sidebar-brand">';
    olympic_school_logo();
    echo '</div><nav aria-label="Área de estudos" class="app-side-nav">';
    foreach (olympic_school_study_areas() as $key => $entry) {
        $class = $key === $active ? ' is-current' : '';
        echo '<a class="side-link' . esc_attr($class) . '" href="' . esc_url(olympic_school_studies_url($key)) . '"' . ($key === $active ? ' aria-current="page"' : '') . '><span aria-hidden="true">' . esc_html($entry[1]) . '</span>' . esc_html($entry[0]) . '</a>';
    }
    echo '</nav><div class="sidebar-foot"><span class="avatar" aria-hidden="true">' . esc_html(is_user_logged_in() ? mb_substr(wp_get_current_user()->display_name, 0, 1) : 'A') . '</span><span>' . esc_html(is_user_logged_in() ? wp_get_current_user()->display_name : 'Aluno(a)') . '<small>Olympic School</small></span></div></aside>';
}

function olympic_school_app_topbar($active = 'studies') {
    echo '<div class="app-topbar"><button class="sidebar-toggle" type="button" aria-controls="app-sidebar" aria-expanded="false">☰ <span class="screen-reader-text">Abrir menu</span></button><nav class="area-switch" aria-label="Seções do aplicativo">';
    echo '<a href="' . esc_url(olympic_school_studies_url()) . '"' . ($active === 'studies' ? ' aria-current="page"' : '') . '>Estudos</a>';
    echo '<a href="' . esc_url(olympic_school_page_url('assistente')) . '"' . ($active === 'assistant' ? ' aria-current="page"' : '') . '>Assistente</a>';
    echo '</nav></div>';
}
