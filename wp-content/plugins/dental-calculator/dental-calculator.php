<?php
/*
Plugin Name: Dental Treatment Calculator
Description: Simple dental treatment price calculator
Version: 1.0
Author: Marlon
*/

function dental_calculator_assets() {

    wp_enqueue_style(
        'dental-calculator-style',
        plugin_dir_url(__FILE__) . 'style.css'
    );

    wp_enqueue_script(
        'dental-calculator-script',
        plugin_dir_url(__FILE__) . 'script.js',
        array(),
        false,
        true
    );

}

add_action('wp_enqueue_scripts', 'dental_calculator_assets');


function dental_calculator_shortcode() {

    ob_start();
    ?>

    <div class="dental-calculator">

        <h3>Calculadora de tratamiento dental</h3>

        <select id="treatment">
            <option value="">Selecciona un tratamiento</option>
            <option value="50">Limpieza dental</option>
            <option value="120">Blanqueamiento</option>
            <option value="500">Implante dental</option>
            <option value="300">Ortodoncia básica</option>
        </select>

        <button onclick="calculateDental()">Calcular</button>

        <p id="result">¡Selecciona un tratamiento <br> y obtén increíbles descuentos!</p>

    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('dental_calculator', 'dental_calculator_shortcode');