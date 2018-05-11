<?php
namespace App\Entity\SimpleFlow;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Workflow
 * @author ndziepatrickjoel<joelpatrickndzie@gmail.com>
 */
class Workflow {
    //put your code here

    public STATIC $_VALIDATIONS_TYPE = ['MIXED', 'ROLES_BASED', 'USER_DEFINED'];
    
    private $workflowName;
    
    private $mainTableName;

    private $mainTablePK = "id";

    private $validationTableName;

    private $validationTablePK = "id";
    
    /**
     * this attribut refers to the table that stores 
     * the differents states of the workflow
     * @var type 
     */
    private $stateTableName;

    private $stateTablePK = "id";

    private $workflowLevelTableName;

    private $workflowLevelTablePK = "id";

    private $roleTableName;

    private $roleTablePK = "id";

    private $validationHistoryTableName;

    private $validationHistoryTablePK = "id";
    

    /**
     * The name of the view used to list the 
     * data 
     */
    private $listingViewName;

    /**
     * The type of the validation, one of the 3 types defined in the $_VALIDATIONS_TYPE array
     */
    private $validationType;

    /**
     * When TRUE, the workflow is in DEV mode
     */
    private $isDev = TRUE;

    /**
     * When TRUE, the workflow can be visible
     */
    private $isActive = FALSE;
    
    
    public function __construct() {
        
    }
    
    
    function getMainTableName() {
        return $this->mainTableName;
    }

    function getMainTablePK() {
        return $this->mainTablePK;
    }

    function getValidationTableName() {
        return $this->validationTableName;
    }

    function getValidationTablePK() {
        return $this->validationTablePK;
    }

    function getStateTableName(): type {
        return $this->stateTableName;
    }

    function getStateTablePK() {
        return $this->stateTablePK;
    }

    function getWorkflowLevelTableName() {
        return $this->workflowLevelTableName;
    }

    function getWorkflowLevelTablePK() {
        return $this->workflowLevelTablePK;
    }

    function getRoleTableName() {
        return $this->roleTableName;
    }

    function getRoleTablePK() {
        return $this->roleTablePK;
    }

    function getValidationHistoryTableName() {
        return $this->validationHistoryTableName;
    }

    function getValidationHistoryTablePK() {
        return $this->validationHistoryTablePK;
    }

    function getListingViewName() {
        return $this->listingViewName;
    }

    function getValidationType() {
        return $this->validationType;
    }

    function getIsDev() {
        return $this->isDev;
    }

    function getIsActive() {
        return $this->isActive;
    }

    function setMainTableName($mainTableName) {
        $this->mainTableName = $mainTableName;
    }

    function setMainTablePK($mainTablePK) {
        $this->mainTablePK = $mainTablePK;
    }

    function setValidationTableName($validationTableName) {
        $this->validationTableName = $validationTableName;
    }

    function setValidationTablePK($validationTablePK) {
        $this->validationTablePK = $validationTablePK;
    }

    function setStateTableName(type $stateTableName) {
        $this->stateTableName = $stateTableName;
    }

    function setStateTablePK($stateTablePK) {
        $this->stateTablePK = $stateTablePK;
    }

    function setWorkflowLevelTableName($workflowLevelTableName) {
        $this->workflowLevelTableName = $workflowLevelTableName;
    }

    function setWorkflowLevelTablePK($workflowLevelTablePK) {
        $this->workflowLevelTablePK = $workflowLevelTablePK;
    }

    function setRoleTableName($roleTableName) {
        $this->roleTableName = $roleTableName;
    }

    function setRoleTablePK($roleTablePK) {
        $this->roleTablePK = $roleTablePK;
    }

    function setValidationHistoryTableName($validationHistoryTableName) {
        $this->validationHistoryTableName = $validationHistoryTableName;
    }

    function setValidationHistoryTablePK($validationHistoryTablePK) {
        $this->validationHistoryTablePK = $validationHistoryTablePK;
    }

    function setListingViewName($listingViewName) {
        $this->listingViewName = $listingViewName;
    }

    function setValidationType($validationType) {
        $this->validationType = $validationType;
    }

    function setIsDev($isDev) {
        $this->isDev = $isDev;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }



    
}
