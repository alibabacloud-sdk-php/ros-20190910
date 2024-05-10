<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example Name
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description Details of the resource.
     *
     * This parameter is required.
     * @example DemoEip
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterKey'   => 'ParameterKey',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
