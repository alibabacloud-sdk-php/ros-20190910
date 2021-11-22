<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupShrinkRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @var string
     */
    public $administrationRoleName;

    /**
     * @var string
     */
    public $autoDeploymentShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deploymentTargetsShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'accountIdsShrink'           => 'AccountIds',
        'administrationRoleName'     => 'AdministrationRoleName',
        'autoDeploymentShrink'       => 'AutoDeployment',
        'clientToken'                => 'ClientToken',
        'deploymentTargetsShrink'    => 'DeploymentTargets',
        'description'                => 'Description',
        'executionRoleName'          => 'ExecutionRoleName',
        'operationDescription'       => 'OperationDescription',
        'operationPreferencesShrink' => 'OperationPreferences',
        'parameters'                 => 'Parameters',
        'permissionModel'            => 'PermissionModel',
        'regionId'                   => 'RegionId',
        'regionIdsShrink'            => 'RegionIds',
        'stackGroupName'             => 'StackGroupName',
        'templateBody'               => 'TemplateBody',
        'templateId'                 => 'TemplateId',
        'templateURL'                => 'TemplateURL',
        'templateVersion'            => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->autoDeploymentShrink) {
            $res['AutoDeployment'] = $this->autoDeploymentShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentTargetsShrink) {
            $res['DeploymentTargets'] = $this->deploymentTargetsShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
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
        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
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
     * @return UpdateStackGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeploymentShrink = $map['AutoDeployment'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargetsShrink = $map['DeploymentTargets'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferencesShrink = $map['OperationPreferences'];
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
        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
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
