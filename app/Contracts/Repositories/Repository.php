<?php
namespace App\Contracts\Repositories;

interface Repository
{
	
	/*public function beginTransaction();
	
	public function rollBack();
	
	public function commit();*/
	
	public function selectRowById($id);
	
    public function selectAllRows();
    
    public function selectRowsByConditions($param = array());
    
    public function insertRow($sql_param);
    
    public function insertRows($sql_params);
    
    public function updateRowById($sql_param, $id);
    
    public function updateRowsByConditions($sql_param, $where_param);
    
    public function deleteRowById($id);
    
    public function deleteRowsByConditions($param);
    
    public function truncateTable();
    
    public function generateSortNo($tablename);
    
    public function updateSortNo($tablename, $arr_sort_list);
    
    public function upsertRow($sql_param, $id = 'null', $table_name = NULL);
    
}