<?php
namespace App\Contracts\Repositories\Models;

interface Repository
{
	
	/*public function beginTransaction();
	
	public function rollBack();
	
	public function commit();*/
	
	public function repoGetAll();
    
    public function repoFind($id);
    
    public function repoFindWithAnd($arrAnd);
    
    public function repoFindWithOr($arrOr);
    
    public function repoCreate($arrData);
	
	public function repoCreateOne($arrData);
    
    public function repoUpdateWithAnd($arrAnd, $arrData);
    
    public function repoUpdateWithOr($arrOr, $arrData);
	
	public function repoUpdateWithId($id, $arrData);
	
	public function repoUpsert($arrSearch, $arrValue);
	
	public function repoDeleteWithAnd($arrAnd);
	
	public function repoDeleteWithOr($arrOr);
	
	public function repoDeleteOne($id);
	
	public function repoRestore();
	
	public function repoRestoreWithAnd($arrAnd);
	
	public function repoRestoreWithOr($arrOr);
	
	public function repoRestoreWithId($id);
    
    public function repoTruncate();
    
    public function repoGenerateSortNo($tablename);
    
    public function repoUpdateSortNo($tablename, $arr_sort_list);
    
    public function repoUpsertRow($sql_param, $id = 'null', $table_name = NULL);
    
}