<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListResourceTypesRequest extends Model
{
    /**
     * @description The entity type. Valid values:
     *
     *   All: all resource types.
     *   Resource: resources other than DataSource resources. For more information, see [Resources](~~28863~~).
     *   DataSource: DataSource resources.
     *
     * @example Resource
     *
     * @var string
     */
    public $entityType;
    protected $_name = [
        'entityType' => 'EntityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        return $model;
    }
}
