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
		return $this->_model->find($id);
	}
	
    public function selectAllRows(){
		return $this->_model->all();
	}
    
    public function selectRowsByConditions($param = array()){
		
	}
    
    public function insertRow($sql_param){
    	$classModel = get_class($this->_model);
    	$row = new $classModel;
    	foreach($sql_param as $key => $value){
			$row->{$key} = $value;
		}
		return $row->save();
	}
    
    public function insertRows($sql_params){
		foreach($sql_params as $row){
			$this->insertRow($row);
		}
		return TRUE;
	}
    
    public function updateRowById($id, $sql_param){
		$row = $this->_model->find($id);
		foreach($sql_param as $key => $value){
			$row->{$key} = $value;
		}
		return $row->save();
	}
    
    public function updateRowsByConditions($sql_param, $where_param){
		
	}
    
    public function deleteRowById($id){
		$row = $this->_model->find($id);
		return $row->delete();
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