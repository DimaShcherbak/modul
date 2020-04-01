<?php

namespace Exam\QuickOrder\Model\ResourceModel\QuickOrder;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Exam\QuickOrder\Model\QuickOrder as Model;
use Exam\QuickOrder\Model\ResourceModel\QuickOrder as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
