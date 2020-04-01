<?php

namespace Exam\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Exam\QuickOrder\Api\Model\Schema\StatusSchemaInterface;

class Status extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(StatusSchemaInterface::TABLE_NAME, StatusSchemaInterface::STATUS_ID_COL_NAME);
    }
}
