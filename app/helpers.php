    <?php

if (!function_exists('api_url')) {

    function api_url()
    {
        return [
            'org' => 'http://organization-dev.nexah.net/api/v1/',
            'sso' => 'http://sso-dev.nexah.net/api/'
        ];
    }
}
