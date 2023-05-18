<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateStackGroupRequest extends Model
{
    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description Specifies whether to retain stacks within a member when you remove the member from the folder.
     *
     * Valid values:
     *
     *   true: retains the stacks.
     *   false: deletes the stacks.
     *
     * >  This parameter is required if the Enabled parameter is set to true.
     * @example {"Enabled": true, "RetainStacksOnAccountRemoval": true}
     *
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @description The name of the RAM role that you specify for the execution account when you create a self-managed stack group. The administrator role AliyunROSStackGroupAdministrationRole assumes the execution role to perform operations. If you do not specify this parameter, the default value AliyunROSStackGroupExecutionRole is used. ROS assumes the execution role to perform operations on the stacks in the stack group.
     *
     * The name must be 1 to 64 characters in length, and can contain letters, digits, and hyphens (-).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Alibaba Cloud Object Storage Service (OSS) bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body must be 1 to 524,288 bytes in length. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example StackGroup Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The version of the template. If you do not specify this parameter, the latest version is used.
     *
     * >  This parameter takes effect only when the TemplateId parameter is specified.
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The value of parameter N.
     *
     * >  The Parameters parameter is optional. If you specify the Parameters parameter, you must specify the Parameters.N.ParameterValue parameter.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The key of tag N that you want to add to the stack group.
     *
     * >  The Tags parameter is optional. If you specify the Tags parameter, you must specify the Tags.N.Key parameter.
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @description The description of the stack group.
     *
     * The description must be 1 to 256 characters in length.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length. If the length of the template body exceeds the upper limit, we recommend that you add parameters to the HTTP POST request body to prevent request failures caused by excessively long URLs.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The value of tag N that you want to add to the stack group.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests.
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The parameters.
     *
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the RAM role that you specify for the administrator account when you create a self-managed stack group. ROS assumes the administrator role to perform operations. If you do not specify this parameter, the default value AliyunROSStackGroupAdministrationRole is used. ROS uses the administrator role to assume the execution role AliyunROSStackGroupExecutionRole to perform operations on the stacks in the stack group.
     *
     * The name must be 1 to 64 characters in length, and can contain letters, digits, and hyphens (-).
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The name of parameter N. If you do not specify the name and value of a parameter, ROS uses the default name and value that are defined in the template.
     *
     * >  The Parameters parameter is optional. If you specify the Parameters parameter, you must specify the Parameters.N.ParameterKey parameter.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'administrationRoleName' => 'AdministrationRoleName',
        'autoDeployment'         => 'AutoDeployment',
        'capabilities'           => 'Capabilities',
        'clientToken'            => 'ClientToken',
        'description'            => 'Description',
        'executionRoleName'      => 'ExecutionRoleName',
        'parameters'             => 'Parameters',
        'permissionModel'        => 'PermissionModel',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'stackGroupName'         => 'StackGroupName',
        'tags'                   => 'Tags',
        'templateBody'           => 'TemplateBody',
        'templateId'             => 'TemplateId',
        'templateURL'            => 'TemplateURL',
        'templateVersion'        => 'TemplateVersion',
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
        if (null !== $this->capabilities) {
            $res['Capabilities'] = $this->capabilities;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackGroupRequest
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
        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = $map['Capabilities'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
