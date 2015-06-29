<?php namespace AzahariZaman\Dosys\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use AzahariZaman\Dosys\Models\Order;

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
    
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $orderId) {
                if ((!$order = Order::find($orderId)) || !$order->canEdit($this->user))
                    continue;

                $order->delete();
            }

            Flash::success('Successfully deleted those Orders.');
        }

        return $this->listRefresh();
    }
}