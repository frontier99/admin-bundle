<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminBundle\spec\fixtures\Doctrine;

use FSi\Bundle\AdminBundle\Doctrine\Admin\ListElement;
use FSi\Component\DataGrid\DataGridFactoryInterface;
use FSi\Component\DataSource\DataSourceFactoryInterface;

class MyListElement extends ListElement
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
        return 'my_entity';
    }

    protected function initDataGrid(DataGridFactoryInterface $factory)
    {
    }

    protected function initDataSource(DataSourceFactoryInterface $factory)
    {
    }
}
