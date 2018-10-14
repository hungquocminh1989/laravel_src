<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Contracts\Repositories\CategoryRepository as CategoryRepositoryInterface;

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