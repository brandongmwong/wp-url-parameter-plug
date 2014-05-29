# wp-url-parameter-plugin

## description

wp-url-parameter-plugin solves an issue with wordpress where url parameters and/or query vars were being purged from $_GET on the server side, making things such as page/post live preview not work.

## usage

In function url_params() load the param array with any url parameter that needs to be preserved

    function url_params() {
    $params = array('preview_id', 'preview_nonce', 'preview', 'p', 'page_id'); // add any other url parameters here
    set_url_parameter($params);
