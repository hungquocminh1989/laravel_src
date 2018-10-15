<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $_categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->_categoryRepository = $categoryRepository;
    }
    
    public function index(){
    	$this->_categoryRepository->getCategoryCustome();
		//dump($data_all);
	}
}
