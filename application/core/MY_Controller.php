<?php

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('triuneModelMain');
    }






    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE GET RECORDS--------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------
    function _getRecords($tables, $fieldName, $where, $join, $joinType, $sortBy, $sortOrder, $limit, $fieldNameLike, $like, $whereSpecial) {
        $rows = $this->triuneModelMain->getRecords($tables, $fieldName, $where, $join, $joinType, $sortBy, $sortOrder, $limit, $fieldNameLike, $like, $whereSpecial);
        return $rows;
    }
    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE GET RECORDS--------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------



    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE GET RECORDS--------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------
    function _getRecordsData($data, $tables, $fieldName, $where, $join, $joinType, $sortBy, $sortOrder, $limit, $fieldNameLike, $like, $whereSpecial, $groupBy) {
        $rows = $this->triuneModelMain->getRecordsData($data, $tables, $fieldName, $where, $join, $joinType, $sortBy, $sortOrder, $limit, $fieldNameLike, $like, $whereSpecial, $groupBy);
        return $rows;
    }
    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE GET RECORDS--------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------



    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE UPDATE RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------
    function _updateRecords($tableName, $fieldName, $where, $data) {
        $rows = $this->triuneModelMain->updateRecords($tableName, $fieldName, $where, $data);
        return $rows;
    }
    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE UPDATE RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------


    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE INSERT RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------
    function _insertRecords($tableName, $data) {
        $rows = $this->triuneModelMain->insertRecords($tableName, $data);
        return $rows;
    }
    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE UPDATE RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------


    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE UPDATE RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------
    function _deleteRecords($tableName, $fieldName, $where) {
        $rows = $this->triuneModelMain->deleteRecords($tableName, $fieldName, $where);
        return $rows;
    }
    //--------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------TRIUNE UPDATE RECORDS-----------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------





}

