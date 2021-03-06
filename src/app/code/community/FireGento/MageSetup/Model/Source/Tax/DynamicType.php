<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_MageSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.2.0
 */
/**
 * CMS Source model for configuration dropdown of CMS pages
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.2.0
 */
class FireGento_MageSetup_Model_Source_Tax_DynamicType
{
    /**
     * Options getter
     *
     * @return array Dynamic types as option array
     */
    public function toOptionArray()
    {
        $helper = Mage::helper('magesetup');
        return array(
            array(
                'value' => 0,
                'label' => $helper->__('No dynamic shipping tax caluclation')
            ),
            array(
                'value' => FireGento_MageSetup_Model_Tax_Config::USE_HIGHTES_TAX_ON_PRODUCTS,
                'label' => $helper->__('Use the highest product tax')
            ),
            array(
                'value' => FireGento_MageSetup_Model_Tax_Config::USE_TAX_DEPENDING_ON_PRODUCT_VALUES,
                'label' => $helper->__('Use the tax rate of products that make up the biggest amount')
            ),
        );
    }
}
