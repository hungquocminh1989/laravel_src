<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\Models\CategoryRepository;

class CategoryController extends Controller
{
    protected $_categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->_categoryRepository = $categoryRepository;
    }
    
    public function index(){
    	/*$this->_categoryRepository->updateRowById(1,
    		[
    			'category_name'=>'hahaaha111'
    		]
    	);*/
    	///$a = $this->_categoryRepository->selectRowById([1,2]);
    	//$b = $this->_categoryRepository->selectRowById(2);
    	//$a->fill(['category_name'=>666]);
    	//$a->category_name = 333;
    	//$a->save();
		//dump($this->_categoryRepository->selectAllRows()[0]->toArray()['m_category_id']);
		//dump($a->orderBy11('category_name'));
		//$b= $a->selectRowById([1,2]);
		//dump($b);
		$this->_categoryRepository->create(
			[
				0 => [
					'category_name' => 'taomoi ne',
					'sort_no' => 3
				]
			]
		);
	}
}
