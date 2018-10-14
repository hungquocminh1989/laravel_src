<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\CategoryRepository;

class Category extends Controller
{
    protected $_categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->_categoryRepository = $categoryRepository;
    }
    
    public function index(){
		$data_all = $this->_categoryRepository->selectAllRows();
		dump($data_all);
	}
}
