<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints;

use AlibabaCloud\Tea\Model;

class originalConstraints extends Model
{
    /**
     * @var mixed[]
     */
    public $allowedValues;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'propertyName'  => 'PropertyName',
        'resourceName'  => 'ResourceName',
        'resourceType'  => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedValues) {
            $res['AllowedValues'] = $this->allowedValues;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originalConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedValues'])) {
            if (!empty($map['AllowedValues'])) {
                $model->allowedValues = $map['AllowedValues'];
            }
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
