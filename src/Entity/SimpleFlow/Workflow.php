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
        
    /**
     * 
     */

    public STATIC $_VALIDATIONS_TYPE = ['MIXED', 'ROLES_BASED', 'USER_DEFINED'];

    private $mainTableName;

    private $maintTablePK = "id";

    private $validationTableName;

    private $validationTablePK = "id";

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

    
}
