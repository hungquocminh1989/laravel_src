<?php
namespace App\Repositories\Models;

use Illuminate\Support\Facades\DB;
use App\Repositories\Models\EloquentRepository;
use App\Contracts\Repositories\Models\CategoryRepository as CategoryRepositoryInterface;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Category::class;
    }

    public function getCategoryCustome()
    {
        $category = $this->_model->with('refProduct')->get();//->toArray();
        /*foreach($category as $ctg){
			foreach($ctg->refProduct as $pro){
				dump($ctg->category_name);
				dump($pro->product_name);
			}
			
		}*/
		
		//dd($category);
		return $category;
        
    }
}