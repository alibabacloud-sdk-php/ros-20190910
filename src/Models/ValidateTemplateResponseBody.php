<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\outputs;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\resourceTypes;
use AlibabaCloud\Tea\Model;

class ValidateTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypes
     */
    public $resourceTypes;
    protected $_name = [
        'description'   => 'Description',
        'outputs'       => 'Outputs',
        'parameters'    => 'Parameters',
        'requestId'     => 'RequestId',
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = null !== $this->resourceTypes ? $this->resourceTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = resourceTypes::fromMap($map['ResourceTypes']);
        }

        return $model;
    }
}
