<?php

namespace Zend\Module\Listener;

use Zend\Module\ModuleEvent;

class InitTrigger extends AbstractListener
{
    /**
     * @param \Zend\Module\ModuleEvent $e
     * @eturn void
     */
    public function __invoke(ModuleEvent $e)
    {
        $module = $e->getModule();
        if (is_callable(array($module, 'init'))) {
            $module->init($e->getTarget());
        }
    }
}
