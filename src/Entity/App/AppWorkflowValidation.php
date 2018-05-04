<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity\App;

/**
 * Description of WorkflowValidation
 *
 * @author ndziepatrickjoel<joelpatrickndzie@gmail.com>
 */
class WorkflowValidation {
    //put your code here
    
    
    
    private $id;
    
    
    /**
     *
     * @var int
     */
    private $instanceId;
    
    /**
     *
     * @var datetime 
     */
    private $validationDate = null;
    
    private $comment;
    
    private $decision;
    
    private $validatorCode;
    
    private $validatorName;
    
    private $validatorEmail;
    
    private $statut;
    
    /**
     * Many Validation have Many Roles
     * @ManyToMany(targetEntity="AppRole")
     * @JoinTable(name="app_workflow_validations_roles",
     *      joinColumns={@JoinColumn(name="app_workflow_validation_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="app_role_id", referencedColumnName="id")}
     *      )
     */
    private $roles;
    
    private $documents;
    
    
}
