<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminBundle\Controller;

use FSi\Bundle\AdminBundle\Admin\CRUD\ListElement;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class ListController extends ControllerAbstract
{
    /**
     * @ParamConverter("element", class="\FSi\Bundle\AdminBundle\Admin\CRUD\ListElement")
     * @param \FSi\Bundle\AdminBundle\Admin\CRUD\ListElement $element
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(ListElement $element, Request $request)
    {
        return $this->handleRequest($element, $request, 'fsi_admin_list');
    }
}
