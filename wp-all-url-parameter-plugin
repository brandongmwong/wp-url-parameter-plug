/*
* ######## START URL Parameter functions plugin ########
* URL Parameter Fix to fix the issue with Multisite purging any url parameters.
*/
add_action('init', 'set_url_parameter', 1);

function set_url_parameter() {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parseQuery = parse_url($actual_link);

    if (isset($parseQuery[query])) {
        $queryString = $parseQuery[query];
        parse_str($queryString, $output);

        foreach (array_keys($output) as $key) {
            if (!isset($_GET[$key])) {
                $_GET[$key] = $output[$key];
            }
        }
    }
}
/*
* ######## END URL Parameter functions plugin ########
*/
