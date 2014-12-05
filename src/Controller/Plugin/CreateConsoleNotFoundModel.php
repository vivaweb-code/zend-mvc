<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Mvc\Controller\Plugin;

use Zend\View\Model\ConsoleModel;
use Zend\Stdlib\ResponseInterface;

/**
 * Create a console view model representing a "not found" action
 */
class CreateConsoleNotFoundModel extends AbstractPlugin
{
    /**
     * Create a console view model representing a "not found" action
     *
     * @param  ResponseInterface $response
     *
     * @return ConsoleModel
     */
    public function __invoke($response)
    {
        $viewModel = new ConsoleModel();

        $viewModel->setErrorLevel(1);
        $viewModel->setResult('Page not found');

        return $viewModel;
    }
}
