<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponseBody;

use AlibabaCloud\Tea\Model;

class dryRunResult extends Model
{
    /**
     * @description The parameters that can be modified.
     *
     * @var string[]
     */
    public $parametersAllowedToBeModified;

    /**
     * @description The parameters that can be modified under specific conditions.
     *
     * @var string[]
     */
    public $parametersConditionallyAllowedToBeModified;

    /**
     * @description The parameters that cannot be modified.
     *
     * @var string[]
     */
    public $parametersNotAllowedToBeModified;
    protected $_name = [
        'parametersAllowedToBeModified'              => 'ParametersAllowedToBeModified',
        'parametersConditionallyAllowedToBeModified' => 'ParametersConditionallyAllowedToBeModified',
        'parametersNotAllowedToBeModified'           => 'ParametersNotAllowedToBeModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parametersAllowedToBeModified) {
            $res['ParametersAllowedToBeModified'] = $this->parametersAllowedToBeModified;
        }
        if (null !== $this->parametersConditionallyAllowedToBeModified) {
            $res['ParametersConditionallyAllowedToBeModified'] = $this->parametersConditionallyAllowedToBeModified;
        }
        if (null !== $this->parametersNotAllowedToBeModified) {
            $res['ParametersNotAllowedToBeModified'] = $this->parametersNotAllowedToBeModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dryRunResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParametersAllowedToBeModified'])) {
            if (!empty($map['ParametersAllowedToBeModified'])) {
                $model->parametersAllowedToBeModified = $map['ParametersAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersConditionallyAllowedToBeModified'])) {
            if (!empty($map['ParametersConditionallyAllowedToBeModified'])) {
                $model->parametersConditionallyAllowedToBeModified = $map['ParametersConditionallyAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersNotAllowedToBeModified'])) {
            if (!empty($map['ParametersNotAllowedToBeModified'])) {
                $model->parametersNotAllowedToBeModified = $map['ParametersNotAllowedToBeModified'];
            }
        }

        return $model;
    }
}
