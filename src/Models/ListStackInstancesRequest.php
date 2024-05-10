<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackInstancesRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     *   Pages start from page 1.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     *   Valid values: 1 to 50.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/131035.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the stack group. The name must be unique within a region.\\
     * This parameter is required.
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
     * > For more information about the destination account, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * @example 156552876021****
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
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
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
     * @return ListStackInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
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
