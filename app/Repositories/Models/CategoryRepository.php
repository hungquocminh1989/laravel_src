<?php
namespace App\Repositories\Models;

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
        /*$result = $this
            ->_model
            ->where('m_category_id', 52)
            ->first();

        return $result;*/
        
    }
}