<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponse\policy;

use AlibabaCloud\Tea\Model;

class statement extends Model
{
    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string[]
     */
    public $action;
    protected $_name = [
        'resource' => 'Resource',
        'effect'   => 'Effect',
        'action'   => 'Action',
    ];

    public function validate()
    {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('effect', $this->effect, true);
        Model::validateRequired('action', $this->action, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = $map['Action'];
            }
        }

        return $model;
    }
}
