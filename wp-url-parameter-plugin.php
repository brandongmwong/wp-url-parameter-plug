<?php
/*
Plugin Name: URL Parameter
Description: WP plugin to fix issue with URL parameters being removed server side on Multisite
*/
add_action('init', 'url_params', 1);

/*
*/
function url_params() {
    $params = array('preview_id', 'preview_nonce', 'preview');
    set_url_parameter($params);
}

function set_url_parameter($params) {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parseQuery = parse_url($actual_link);

    if (isset($parseQuery[query])) {
        $queryString = $parseQuery[query];
        parse_str($queryString, $output);

        foreach ($params as $param) {
            if (isset($output[$param])) {
                $_GET[$param] = $output[$param];
            }
        }
    }
}
?>