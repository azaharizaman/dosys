<?php namespace AzahariZaman\Dosys;

use Backend;
use System\Classes\PluginBase;

/**
 * Dosys Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Dosys',
            'description' => 'Diagnostic Online Ordering System',
            'author'      => 'AzahariZaman',
            'icon'        => 'icon-heartbeat'
        ];
    }
    
    public function registerNavigation() {
        return  [
            'order' => [
                'label' => 'Order',
                'url' => Backend::url('azaharizaman/dosys/order'),
                'icon' => 'icon-heartbeat',
                'permission' => ['dosys.*'],
                'order' => 500,
                
                'sideMenu' => [
                    'orders' => [
                        'label' => 'Orders',
                        'icon' => 'icon-heartbeat',
                        'url' => Backend::url('azaharizaman/dosys/order'),
                    ]
                ]
            ]
        ];
        
    }

}
