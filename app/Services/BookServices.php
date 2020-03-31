<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookServices
{
    use ConsumeExternalService;

    public $baseUri;

    public $secret;

    public function __construct()
    {
        $this->baseUri = config('service.books.base_uri');
        $this->secret = config('service.books.secret');
    }

    public function obtainBooks()
    {
        try{
            $this->performRequest('GET', '/book');
        }catch(\Exception $e){
            return $e;
        }
        // return $this->performRequest('GET', '/book');
    }
}
