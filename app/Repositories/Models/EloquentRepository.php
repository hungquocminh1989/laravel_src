<?php
namespace App\Repositories\Models;

use App\Contracts\Repositories\Models\Repository;
use Illuminate\Support\Facades\DB;

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
    
    public function repoGetAll()
    {
        return $this->_model->all();
    }
    
    public function repoFind($id)
    {
        return $this->_model->find($id);
    }
    
    public function repoFindWithAnd($arrAnd)
    {
        return $this->_model->where($arrAnd)->get();
    }
    
    public function repoFindWithOr($arrOr)
    {
        return $this->_model->orWhere($arrOr)->get();
    }
    
    public function repoCreate($arrData){
		foreach($arrData as $row){
			$this->repoCreateOne($row);
		}
		return TRUE;
	}
	
	public function repoCreateOne($arrData){
		return $this->_model->create($arrData);
	}
    
    public function repoUpdateWithAnd($arrAnd, $arrData){
		$rows = $this->_model->where($arrAnd)->get();
		foreach($rows as $row){
			$row->fill($arrData);
			$row->save();
		}
		return TRUE;
	}
	
	public function repoUpdateWithOr($arrOr, $arrData){
		$rows = $this->_model->orWhere($arrOr)->get();
		foreach($rows as $row){
			$row->fill($arrData);
			$row->save();
		}
		return TRUE;
	}
	
	public function repoUpdateWithId($id, $arrData){
		$rows = $this->_model->find($id);
		if($rows != NULL){
			if($rows->count() > 1){
				foreach($rows as $row){
					$row->fill($arrData);
					$row->save();
				}
			}
			else{
				$rows->fill($arrData);
				$rows->save();
			}
		}
		
		return TRUE;
	}
	
	public function repoUpsert($arrSearch, $arrValue){
		return $this->_model->updateOrCreate($arrSearch, $arrValue);
	}
	
	public function repoDeleteWithAnd($arrAnd){
		$rows = $this->_model->where($arrAnd)->get();
		foreach($rows as $row){
			$row->delete();
		}
		return TRUE;
	}
	
	public function repoDeleteWithOr($arrOr){
		$rows = $this->_model->orWhere($arrOr)->get();
		foreach($rows as $row){
			$row->delete();
		}
		return TRUE;
	}
	
	public function repoDeleteOne($id){
		return $this->_model->destroy($id);
	}
	
	public function repoRestore(){
		return $this->_model->withTrashed()->restore();
	}
	
	public function repoRestoreWithAnd($arrAnd){
		return $this->_model->withTrashed()->where($arrAnd)->restore();
	}
	
	public function repoRestoreWithOr($arrOr){
		return $this->_model->withTrashed()->orWhere($arrOr)->restore();
	}
	
	public function repoRestoreWithId($id){
		$rows = $this->_model->withTrashed()->find($id);
		foreach($rows as $row){
			$row->restore();
		}
		return TRUE;
	}
    
    public function repoTruncate(){
    	$tableName = $this->_model->getTable();
		DB::statement("
			TRUNCATE $tableName RESTART IDENTITY;
		");
	}
    
    public function repoGenerateSortNo($tablename){
		
	}
    
    public function repoUpdateSortNo($tablename, $arr_sort_list){
		
	}
    
    public function repoUpsertRow($sql_param, $id = 'null', $table_name = NULL){
		
	}
}