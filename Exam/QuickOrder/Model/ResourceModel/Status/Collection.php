<?php

namespace Exam\QuickOrder\Model\ResourceModel\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Exam\QuickOrder\Model\ResourceModel\Status as ResourceModel;
use Exam\QuickOrder\Model\Status as Model;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
