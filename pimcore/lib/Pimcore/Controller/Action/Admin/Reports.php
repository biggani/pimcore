<?php
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @copyright  Copyright (c) 2009-2014 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */
 
class Pimcore_Controller_Action_Admin_Reports extends Pimcore_Controller_Action_Admin {
    
    public $conf;
    
    public function init () {
        
        parent::init();
    }
    
    public function getConfig () {
        return Pimcore_Config::getReportConfig();
    }
}