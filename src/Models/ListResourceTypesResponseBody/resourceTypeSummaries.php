<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class resourceTypeSummaries extends Model
{
    /**
     * @description The creation time. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the default version.
     *
     * @example v1
     *
     * @var string
     */
    public $defaultVersionId;

    /**
     * @description The description of the resource type.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description The entity type. Valid values:
     *
     *   Resource: regular resources.
     *   DataSource: DataSource resources.
     *   Module: modules.
     *
     * @example Module
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The ID of the latest version.
     *
     * @example v10
     *
     * @var string
     */
    public $latestVersionId;

    /**
     * @description The provider of the resource type. Valid values:
     *
     *   ROS: The resource type is provided by ROS.
     *   Self: The resource type is provided by you.
     *
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The resource type.
     *
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The number of versions.
     *
     * @example 10
     *
     * @var int
     */
    public $totalVersionCount;

    /**
     * @description The update time. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'defaultVersionId'  => 'DefaultVersionId',
        'description'       => 'Description',
        'entityType'        => 'EntityType',
        'latestVersionId'   => 'LatestVersionId',
        'provider'          => 'Provider',
        'resourceType'      => 'ResourceType',
        'totalVersionCount' => 'TotalVersionCount',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultVersionId) {
            $res['DefaultVersionId'] = $this->defaultVersionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->latestVersionId) {
            $res['LatestVersionId'] = $this->latestVersionId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->totalVersionCount) {
            $res['TotalVersionCount'] = $this->totalVersionCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypeSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultVersionId'])) {
            $model->defaultVersionId = $map['DefaultVersionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['LatestVersionId'])) {
            $model->latestVersionId = $map['LatestVersionId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TotalVersionCount'])) {
            $model->totalVersionCount = $map['TotalVersionCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
