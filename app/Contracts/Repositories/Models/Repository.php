<?php
namespace App\Contracts\Repositories\Models;

interface Repository
{
	
	/*public function beginTransaction();
	
	public function rollBack();
	
	public function commit();*/
	
	/*public function all($cols = ['*']);
	
	public function find($id, $cols = ['*']);
	
	public function create(array $arr_data);
	
	public function update($id, array $arr_data);
	
	public function delete($id);
	
	public function deleteAll();*/
	
	//======================
	
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