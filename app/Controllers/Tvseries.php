<?php

namespace App\Controllers;

class Tvseries extends BaseController {
    public function Tvseries() {
        
        $data['websiteTitle'] = 'Anitium';
        $data['websiteUrl'] = '';
        $data['websiteLogo'] = '/files/images/logo.png?v=2';
        $data['contactEmail'] = 'x@x.com';
        $data['version'] = '0.0';
        $data['donate'] = '#';
        $data['telegram'] = '"#";';
        $data['discord'] = '"#";';
        $data['redit'] = '"#";';
        $data['twitter'] = '"#";';
        $data['disqus'] = 'https://x.disqus.co';
        $data['api'] = 'http://anikatsu.shashanktiwar11.repl.co';
        $data['banner'] = '/files/images/banner.png';
		echo view('frontend/type/tv-series', $data);
    }
}