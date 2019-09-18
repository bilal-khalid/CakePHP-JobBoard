<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;

/**
 * CheckDemo component
 */
class CheckDemoComponent extends Component
{
    /**
     * Other Components this component uses.
     *
     * @var array
     */
    public $components = ['Flash'];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function check()
    {
        if (Configure::read('isDemo')) {
            return true;
        }
        return false;
    }

    public function redirect()
    {
        if ($this->check()) {
            $this->Flash->error(__('Modifying data is disabled in this demo!'));
            $this->_registry->getController()->redirect(['controller' => 'Jobs', 'action' => 'index']);
            return true;
        }
        return false;
    }
}
