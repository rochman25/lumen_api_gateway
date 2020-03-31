<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\BookServices;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;

    public $bookServices;


    public function __construct(BookServices $bookService)
    {
        $this->bookServices = $bookService;        
    }

    public function index(){
        return $this->successResponse($this->bookServices->obtainBooks());
    }
}
