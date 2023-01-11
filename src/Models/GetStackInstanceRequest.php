<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackInstanceRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @example 151266687691****
     *
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $stackInstanceRegionId;
    protected $_name = [
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'stackInstanceAccountId' => 'StackInstanceAccountId',
        'stackInstanceRegionId'  => 'StackInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackInstanceAccountId) {
            $res['StackInstanceAccountId'] = $this->stackInstanceAccountId;
        }
        if (null !== $this->stackInstanceRegionId) {
            $res['StackInstanceRegionId'] = $this->stackInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackInstanceAccountId'])) {
            $model->stackInstanceAccountId = $map['StackInstanceAccountId'];
        }
        if (isset($map['StackInstanceRegionId'])) {
            $model->stackInstanceRegionId = $map['StackInstanceRegionId'];
        }

        return $model;
    }
}
