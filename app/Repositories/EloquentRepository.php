<?php
namespace App\Repositories;

use App\Contracts\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $_model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }
    
    public function selectRowById($id){
		
	}
	
    public function selectAllRows(){
		return $this->_model->all();
	}
    
    public function selectRowsByConditions($param = array()){
		
	}
    
    public function insertRow($sql_param){
		
	}
    
    public function insertRows($sql_params){
		
	}
    
    public function updateRowById($sql_param, $id){
		
	}
    
    public function updateRowsByConditions($sql_param, $where_param){
		
	}
    
    public function deleteRowById($id){
		
	}
    
    public function deleteRowsByConditions($param){
		
	}
    
    public function truncateTable(){
		
	}
    
    public function generateSortNo($tablename){
		
	}
    
    public function updateSortNo($tablename, $arr_sort_list){
		
	}
    
    public function upsertRow($sql_param, $id = 'null', $table_name = NULL){
		
	}
}