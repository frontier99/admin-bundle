<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminBundle\spec\fixtures\Doctrine;

use FSi\Bundle\AdminBundle\Doctrine\Admin\FormElement;
use Symfony\Component\Form\FormFactoryInterface;

class MyFormElement extends FormElement
{
    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return 'FSiDemoBundle:Entity';
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'my_entity_form';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'admin.my_entity.name';
    }

    protected function initForm(FormFactoryInterface $factory, $data = null)
    {
    }
}