<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Adminhtml
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml product attribute edit page tabs
 *
 * @category   Magento
 * @package    Magento_Catalog
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{

    protected function _construct()
    {
        parent::_construct();
        $this->setId('product_attribute_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Attribute Information'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab(
            'main',
            array(
                'label'     => __('Properties'),
                'title'     => __('Properties'),
                'content'   => $this->getChildHtml('main'),
                'active'    => true
            )
        );
        $this->addTab(
            'labels',
            array(
                'label' => __('Manage Labels'),
                'title' => __('Manage Labels'),
                'content' => $this->getChildHtml('labels'),
            )
        );
        $this->addTab(
            'front',
            array(
                'label' => __('Frontend Properties'),
                'title' => __('Frontend Properties'),
                'content' => $this->getChildHtml('front'),
            )
        );

        return parent::_beforeToHtml();
    }

}
