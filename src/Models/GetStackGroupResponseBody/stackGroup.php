<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroup extends Model
{
    /**
     * @description The key of the parameter.
     *
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description Indicates whether stacks in the member account are retained when the member account is deleted from the folder.
     *
     * Valid values:
     *
     *   true: The stacks are retained.
     *   false: The stacks are deleted.
     *
     * >  This parameter is returned only when the Enabled parameter is set to true.
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @description The name of the RAM role that is specified for the execution account when you create the self-managed stack group. The administrator role AliyunROSStackGroupAdministrationRole assumes the execution role. If this parameter is not specified, the default value AliyunROSStackGroupExecutionRole is returned.
     *
     * @example StackGroup Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the last drift detection that was performed on the stack group.
     *
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The value of the parameter.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description Indicates whether automatic deployment is enabled.
     *
     * Valid values:
     *
     *   true: Automatic deployment is enabled. If a member account is added to the folder to which the stack group belongs after automatic deployment is enabled, the stack group deploys its stack instances in the specified region where the added account is deployed. If the account is deleted from the folder, the stack instances in the specified region are deleted from the stack group.
     *   false: Automatic deployment is disabled. After automatic deployment is disabled, the stack instances remain unchanged when the member account in the folder is changed.
     *
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @var string[]
     */
    public $rdFolderIds;

    /**
     * @description The information about automatic deployment settings.
     *
     * >  This parameter is returned only when the PermissionModel parameter is set to SERVICE_MANAGED.
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of stack instances.
     *
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @description The name of the RAM role that is specified for the administrator account in Resource Orchestration Service (ROS) when you create the self-managed stack group. If this parameter is not specified, the default value AliyunROSStackGroupAdministrationRole is returned.
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The template body.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The parameters of the stack group.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when drift detection was performed on the stack group.
     *
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @example {
     * }
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'administrationRoleName'         => 'AdministrationRoleName',
        'autoDeployment'                 => 'AutoDeployment',
        'description'                    => 'Description',
        'executionRoleName'              => 'ExecutionRoleName',
        'parameters'                     => 'Parameters',
        'permissionModel'                => 'PermissionModel',
        'rdFolderIds'                    => 'RdFolderIds',
        'resourceGroupId'                => 'ResourceGroupId',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'stackGroupId'                   => 'StackGroupId',
        'stackGroupName'                 => 'StackGroupName',
        'status'                         => 'Status',
        'templateBody'                   => 'TemplateBody',
        'templateContent'                => 'TemplateContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }
        if (null !== $this->rdFolderIds) {
            $res['RdFolderIds'] = $this->rdFolderIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }
        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = $map['RdFolderIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
