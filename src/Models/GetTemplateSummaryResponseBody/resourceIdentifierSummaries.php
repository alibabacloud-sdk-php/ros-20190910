<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceIdentifierSummaries extends Model
{
    /**
     * @var string[]
     */
    public $logicalResourceIds;

    /**
     * @var string[]
     */
    public $resourceIdentifiers;

    /**
     * @example ALIYUN::ECS::VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'logicalResourceIds'  => 'LogicalResourceIds',
        'resourceIdentifiers' => 'ResourceIdentifiers',
        'resourceType'        => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalResourceIds) {
            $res['LogicalResourceIds'] = $this->logicalResourceIds;
        }
        if (null !== $this->resourceIdentifiers) {
            $res['ResourceIdentifiers'] = $this->resourceIdentifiers;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceIdentifierSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalResourceIds'])) {
            if (!empty($map['LogicalResourceIds'])) {
                $model->logicalResourceIds = $map['LogicalResourceIds'];
            }
        }
        if (isset($map['ResourceIdentifiers'])) {
            if (!empty($map['ResourceIdentifiers'])) {
                $model->resourceIdentifiers = $map['ResourceIdentifiers'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
