<?php namespace AzahariZaman\Dosys\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Doctor Back-end Controller
 */
class Doctor extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('AzahariZaman.Dosys', 'order', 'doctors');
    }
}