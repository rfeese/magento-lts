<?php
/**
 * OpenMage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Dataflow
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (http://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Dataflow Batch export model
 *
 * @category   Mage
 * @package    Mage_Dataflow
 * @author     Magento Core Team <core@magentocommerce.com>
 *
 * @method Mage_Dataflow_Model_Resource_Batch_Export _getResource()
 * @method Mage_Dataflow_Model_Resource_Batch_Export getResource()
 * @method int getBatchId()
 * @method Mage_Dataflow_Model_Batch_Export setBatchId(int $value)
 * @method int getStatus()
 * @method Mage_Dataflow_Model_Batch_Export setStatus(int $value)
 */
class Mage_Dataflow_Model_Batch_Export extends Mage_Dataflow_Model_Batch_Abstract
{
    protected function _construct()
    {
        $this->_init('dataflow/batch_export');
    }
}
