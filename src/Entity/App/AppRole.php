<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity\App;

/**
 * Description of Roles
 *
 * @author <joelpatrickndzie@gmail.com>
 */
class AppRole {
    //put your code here
    
    private $name;
    
    private $description;
    
    /**
     * when true, this role is assigned to every users by default
     * @var boolean
     */
    private $isDefault;
    
    
}
