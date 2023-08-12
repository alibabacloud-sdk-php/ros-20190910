<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackInstanceRequest extends Model
{
    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the stack group. The name must be unique within a region.\
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). It must start with a digit or letter.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The ID of the destination account to which the stack belongs.
     *
     *   If the stack group is granted self-managed permissions, the stack belongs to an Alibaba Cloud account.
     *   If the stack group is granted service-managed permissions, the stack belongs to a member in a resource directory.
     *
     * > For more information about the destination account, see [Overview](~~154578~~).
     * @example 151266687691****
     *
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @description The region ID of the stack.
     *
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
