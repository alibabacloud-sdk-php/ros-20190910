<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusResponseBody extends Model
{
    /**
     * @description The ID of the drift detection operation.
     *
     * @example a7044f0d-6f2e-4128-a307-4524ef88****
     *
     * @var string
     */
    public $driftDetectionId;

    /**
     * @description The drift detection status. Valid values:
     *
     *   DETECTION_COMPLETE: The drift detection operation has been completed for all resources that support drift detection in the stack.
     *   DETECTION_FAILED: The stack drift detection operation has failed for at least one resource in the stack.
     *   DETECTION_IN_PROGRESS: The stack drift detection operation is in progress.
     *
     * @example DETECTION_COMPLETE
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @description The reason why the stack drift detection operation has its current status.
     *
     * @example Detect stack drift successfully
     *
     * @var string
     */
    public $driftDetectionStatusReason;

    /**
     * @description The time when the stack drift detection operation was initiated.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The total number of stack resources that have drifted.
     *
     * @example 1
     *
     * @var int
     */
    public $driftedStackResourceCount;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The drift status of the stack. Valid values:
     *
     *   DRIFTED: The actual configuration of the stack differs, or has drifted, from its expected template configuration. A stack is considered to have drifted if one or more of its resources have drifted.
     *   NOT_CHECKED: Resource Orchestration Service (ROS) has not checked whether the actual configuration of the resource differs from its expected template configuration.
     *   IN_SYNC: The current configuration of each supported resource matches its expected template configuration. A stack with no resources that support drift detection also has a status of IN_SYNC.
     *
     * @example DRIFTED
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'driftDetectionId'           => 'DriftDetectionId',
        'driftDetectionStatus'       => 'DriftDetectionStatus',
        'driftDetectionStatusReason' => 'DriftDetectionStatusReason',
        'driftDetectionTime'         => 'DriftDetectionTime',
        'driftedStackResourceCount'  => 'DriftedStackResourceCount',
        'requestId'                  => 'RequestId',
        'stackDriftStatus'           => 'StackDriftStatus',
        'stackId'                    => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->driftDetectionStatusReason) {
            $res['DriftDetectionStatusReason'] = $this->driftDetectionStatusReason;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->driftedStackResourceCount) {
            $res['DriftedStackResourceCount'] = $this->driftedStackResourceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackDriftDetectionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['DriftDetectionStatusReason'])) {
            $model->driftDetectionStatusReason = $map['DriftDetectionStatusReason'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['DriftedStackResourceCount'])) {
            $model->driftedStackResourceCount = $map['DriftedStackResourceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
