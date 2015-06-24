<?php namespace AzahariZaman\Dosys\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Order Back-end Controller
 */
class Order extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    
    //public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('AzahariZaman.Dosys', 'order', 'orders');
    }
}