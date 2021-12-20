<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetTemplatePermissionRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetTemplatePermissionResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchShrinkRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ROS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ros', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CancelUpdateStackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['CancelType'] = $request->cancelType;
        $query['RegionId']   = $request->regionId;
        $query['StackId']    = $request->stackId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelUpdateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelUpdateStackRequest $request
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpdateStackWithOptions($request, $runtime);
    }

    /**
     * @param ContinueCreateStackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['DryRun']              = $request->dryRun;
        $query['Mode']                = $request->mode;
        $query['Parallelism']         = $request->parallelism;
        $query['Parameters']          = $request->parameters;
        $query['RamRoleName']         = $request->ramRoleName;
        $query['RecreatingResources'] = $request->recreatingResources;
        $query['RegionId']            = $request->regionId;
        $query['StackId']             = $request->stackId;
        $query['TemplateBody']        = $request->templateBody;
        $query['TemplateId']          = $request->templateId;
        $query['TemplateURL']         = $request->templateURL;
        $query['TemplateVersion']     = $request->templateVersion;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueCreateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinueCreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContinueCreateStackRequest $request
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueCreateStackWithOptions($request, $runtime);
    }

    /**
     * @param CreateChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['ChangeSetName']               = $request->changeSetName;
        $query['ChangeSetType']               = $request->changeSetType;
        $query['ClientToken']                 = $request->clientToken;
        $query['Description']                 = $request->description;
        $query['DisableRollback']             = $request->disableRollback;
        $query['NotificationURLs']            = $request->notificationURLs;
        $query['Parallelism']                 = $request->parallelism;
        $query['Parameters']                  = $request->parameters;
        $query['RamRoleName']                 = $request->ramRoleName;
        $query['RegionId']                    = $request->regionId;
        $query['ReplacementOption']           = $request->replacementOption;
        $query['ResourcesToImport']           = $request->resourcesToImport;
        $query['StackId']                     = $request->stackId;
        $query['StackName']                   = $request->stackName;
        $query['StackPolicyBody']             = $request->stackPolicyBody;
        $query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        $query['StackPolicyDuringUpdateURL']  = $request->stackPolicyDuringUpdateURL;
        $query['StackPolicyURL']              = $request->stackPolicyURL;
        $query['TemplateBody']                = $request->templateBody;
        $query['TemplateId']                  = $request->templateId;
        $query['TemplateScratchId']           = $request->templateScratchId;
        $query['TemplateURL']                 = $request->templateURL;
        $query['TemplateVersion']             = $request->templateVersion;
        $query['TimeoutInMinutes']            = $request->timeoutInMinutes;
        $query['UsePreviousParameters']       = $request->usePreviousParameters;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChangeSetRequest $request
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStackResponse
     */
    public function createStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['CreateOption']            = $request->createOption;
        $query['DeletionProtection']      = $request->deletionProtection;
        $query['DisableRollback']         = $request->disableRollback;
        $query['NotificationURLs']        = $request->notificationURLs;
        $query['Parallelism']             = $request->parallelism;
        $query['Parameters']              = $request->parameters;
        $query['RamRoleName']             = $request->ramRoleName;
        $query['RegionId']                = $request->regionId;
        $query['ResourceGroupId']         = $request->resourceGroupId;
        $query['StackName']               = $request->stackName;
        $query['StackPolicyBody']         = $request->stackPolicyBody;
        $query['StackPolicyURL']          = $request->stackPolicyURL;
        $query['Tags']                    = $request->tags;
        $query['TemplateBody']            = $request->templateBody;
        $query['TemplateId']              = $request->templateId;
        $query['TemplateScratchId']       = $request->templateScratchId;
        $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        $query['TemplateURL']             = $request->templateURL;
        $query['TemplateVersion']         = $request->templateVersion;
        $query['TimeoutInMinutes']        = $request->timeoutInMinutes;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStackRequest $request
     *
     * @return CreateStackResponse
     */
    public function createStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackWithOptions($request, $runtime);
    }

    /**
     * @param CreateStackGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStackGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->autoDeployment)) {
            $request->autoDeploymentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->autoDeployment), 'AutoDeployment', 'json');
        }
        $query                           = [];
        $query['AdministrationRoleName'] = $request->administrationRoleName;
        $query['AutoDeployment']         = $request->autoDeploymentShrink;
        $query['ClientToken']            = $request->clientToken;
        $query['Description']            = $request->description;
        $query['ExecutionRoleName']      = $request->executionRoleName;
        $query['Parameters']             = $request->parameters;
        $query['PermissionModel']        = $request->permissionModel;
        $query['RegionId']               = $request->regionId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['StackGroupName']         = $request->stackGroupName;
        $query['TemplateBody']           = $request->templateBody;
        $query['TemplateId']             = $request->templateId;
        $query['TemplateURL']            = $request->templateURL;
        $query['TemplateVersion']        = $request->templateVersion;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStackGroupRequest $request
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deploymentTargets), 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query                         = [];
        $query['AccountIds']           = $request->accountIdsShrink;
        $query['ClientToken']          = $request->clientToken;
        $query['DeploymentTargets']    = $request->deploymentTargetsShrink;
        $query['DisableRollback']      = $request->disableRollback;
        $query['OperationDescription'] = $request->operationDescription;
        $query['OperationPreferences'] = $request->operationPreferencesShrink;
        $query['ParameterOverrides']   = $request->parameterOverrides;
        $query['RegionId']             = $request->regionId;
        $query['RegionIds']            = $request->regionIdsShrink;
        $query['StackGroupName']       = $request->stackGroupName;
        $query['TimeoutInMinutes']     = $request->timeoutInMinutes;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStackInstancesRequest $request
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Description']     = $request->description;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['TemplateBody']    = $request->templateBody;
        $query['TemplateName']    = $request->templateName;
        $query['TemplateURL']     = $request->templateURL;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateScratchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTemplateScratchResponse
     */
    public function createTemplateScratchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTemplateScratchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->preferenceParameters)) {
            $request->preferenceParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResourceGroup)) {
            $request->sourceResourceGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sourceResourceGroup), 'SourceResourceGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResources)) {
            $request->sourceResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceTag)) {
            $request->sourceTagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sourceTag), 'SourceTag', 'json');
        }
        $query                         = [];
        $query['ClientToken']          = $request->clientToken;
        $query['Description']          = $request->description;
        $query['ExecutionMode']        = $request->executionMode;
        $query['LogicalIdStrategy']    = $request->logicalIdStrategy;
        $query['PreferenceParameters'] = $request->preferenceParametersShrink;
        $query['RegionId']             = $request->regionId;
        $query['SourceResourceGroup']  = $request->sourceResourceGroupShrink;
        $query['SourceResources']      = $request->sourceResourcesShrink;
        $query['SourceTag']            = $request->sourceTagShrink;
        $query['TemplateScratchType']  = $request->templateScratchType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTemplateScratchRequest $request
     *
     * @return CreateTemplateScratchResponse
     */
    public function createTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ChangeSetId'] = $request->changeSetId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChangeSetRequest $request
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStackResponse
     */
    public function deleteStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['RamRoleName']        = $request->ramRoleName;
        $query['RegionId']           = $request->regionId;
        $query['RetainAllResources'] = $request->retainAllResources;
        $query['RetainResources']    = $request->retainResources;
        $query['StackId']            = $request->stackId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStackRequest $request
     *
     * @return DeleteStackResponse
     */
    public function deleteStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['RegionId']       = $request->regionId;
        $query['StackGroupName'] = $request->stackGroupName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStackGroupRequest $request
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deploymentTargets), 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query                         = [];
        $query['AccountIds']           = $request->accountIdsShrink;
        $query['ClientToken']          = $request->clientToken;
        $query['DeploymentTargets']    = $request->deploymentTargetsShrink;
        $query['OperationDescription'] = $request->operationDescription;
        $query['OperationPreferences'] = $request->operationPreferencesShrink;
        $query['RegionId']             = $request->regionId;
        $query['RegionIds']            = $request->regionIdsShrink;
        $query['RetainStacks']         = $request->retainStacks;
        $query['StackGroupName']       = $request->stackGroupName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStackInstancesRequest $request
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateScratchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['RegionId']          = $request->regionId;
        $query['TemplateScratchId'] = $request->templateScratchId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTemplateScratchRequest $request
     *
     * @return DeleteTemplateScratchResponse
     */
    public function deleteTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AcceptLanguage'] = $request->acceptLanguage;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackDriftRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClientToken']       = $request->clientToken;
        $query['LogicalResourceId'] = $request->logicalResourceId;
        $query['RegionId']          = $request->regionId;
        $query['StackId']           = $request->stackId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectStackDriftRequest $request
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackDriftWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackGroupDriftRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDriftWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectStackGroupDriftShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        $query                         = [];
        $query['ClientToken']          = $request->clientToken;
        $query['OperationPreferences'] = $request->operationPreferencesShrink;
        $query['RegionId']             = $request->regionId;
        $query['StackGroupName']       = $request->stackGroupName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackGroupDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackGroupDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectStackGroupDriftRequest $request
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackGroupDriftWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackResourceDriftRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClientToken']       = $request->clientToken;
        $query['LogicalResourceId'] = $request->logicalResourceId;
        $query['RegionId']          = $request->regionId;
        $query['StackId']           = $request->stackId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectStackResourceDrift',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectStackResourceDriftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectStackResourceDriftRequest $request
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackResourceDriftWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteChangeSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ChangeSetId'] = $request->changeSetId;
        $query['ClientToken'] = $request->clientToken;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteChangeSetRequest $request
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param GenerateTemplateByScratchRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ProvisionRegionId'] = $request->provisionRegionId;
        $query['RegionId']          = $request->regionId;
        $query['TemplateScratchId'] = $request->templateScratchId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateTemplateByScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateTemplateByScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateTemplateByScratchRequest $request
     *
     * @return GenerateTemplateByScratchResponse
     */
    public function generateTemplateByScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplateByScratchWithOptions($request, $runtime);
    }

    /**
     * @param GenerateTemplatePolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['TemplateBody']    = $request->templateBody;
        $query['TemplateId']      = $request->templateId;
        $query['TemplateURL']     = $request->templateURL;
        $query['TemplateVersion'] = $request->templateVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateTemplatePolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateTemplatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateTemplatePolicyRequest $request
     *
     * @return GenerateTemplatePolicyResponse
     */
    public function generateTemplatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateTemplatePolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetChangeSetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ChangeSetId']  = $request->changeSetId;
        $query['RegionId']     = $request->regionId;
        $query['ShowTemplate'] = $request->showTemplate;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChangeSet',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChangeSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetChangeSetRequest $request
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param GetFeatureDetailsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFeatureDetailsResponse
     */
    public function getFeatureDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Feature']  = $request->feature;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFeatureDetails',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFeatureDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFeatureDetailsRequest $request
     *
     * @return GetFeatureDetailsResponse
     */
    public function getFeatureDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeatureDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceType',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceTypeRequest $request
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceTypeTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceTypeTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceTypeTemplateRequest $request
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceProvisionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Parameters']      = $request->parameters;
        $query['RegionId']        = $request->regionId;
        $query['Services']        = $request->services;
        $query['TemplateBody']    = $request->templateBody;
        $query['TemplateId']      = $request->templateId;
        $query['TemplateURL']     = $request->templateURL;
        $query['TemplateVersion'] = $request->templateVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceProvisions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceProvisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceProvisionsRequest $request
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceProvisionsWithOptions($request, $runtime);
    }

    /**
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['ClientToken']          = $request->clientToken;
        $query['OutputOption']         = $request->outputOption;
        $query['RegionId']             = $request->regionId;
        $query['ShowResourceProgress'] = $request->showResourceProgress;
        $query['StackId']              = $request->stackId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @param GetStackDriftDetectionStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['DriftDetectionId'] = $request->driftDetectionId;
        $query['RegionId']         = $request->regionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackDriftDetectionStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackDriftDetectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackDriftDetectionStatusRequest $request
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackDriftDetectionStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetStackGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['RegionId']       = $request->regionId;
        $query['StackGroupId']   = $request->stackGroupId;
        $query['StackGroupName'] = $request->stackGroupName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackGroupRequest $request
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetStackGroupOperationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['OperationId'] = $request->operationId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackGroupOperation',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackGroupOperationRequest $request
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @param GetStackInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['RegionId']               = $request->regionId;
        $query['StackGroupName']         = $request->stackGroupName;
        $query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        $query['StackInstanceRegionId']  = $request->stackInstanceRegionId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackInstance',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackInstanceRequest $request
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['StackId']  = $request->stackId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackPolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackPolicyRequest $request
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetStackResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackResourceResponse
     */
    public function getStackResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['ClientToken']            = $request->clientToken;
        $query['LogicalResourceId']      = $request->logicalResourceId;
        $query['RegionId']               = $request->regionId;
        $query['ShowResourceAttributes'] = $request->showResourceAttributes;
        $query['StackId']                = $request->stackId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStackResource',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackResourceRequest $request
     *
     * @return GetStackResourceResponse
     */
    public function getStackResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ChangeSetId']       = $request->changeSetId;
        $query['IncludePermission'] = $request->includePermission;
        $query['RegionId']          = $request->regionId;
        $query['StackGroupName']    = $request->stackGroupName;
        $query['StackId']           = $request->stackId;
        $query['TemplateId']        = $request->templateId;
        $query['TemplateStage']     = $request->templateStage;
        $query['TemplateVersion']   = $request->templateVersion;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateEstimateCostRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['Parameters']              = $request->parameters;
        $query['RegionId']                = $request->regionId;
        $query['TemplateBody']            = $request->templateBody;
        $query['TemplateId']              = $request->templateId;
        $query['TemplateScratchId']       = $request->templateScratchId;
        $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        $query['TemplateURL']             = $request->templateURL;
        $query['TemplateVersion']         = $request->templateVersion;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateEstimateCost',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateEstimateCostRequest $request
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateParameterConstraintsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraintsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTemplateParameterConstraintsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parametersKeyFilter)) {
            $request->parametersKeyFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parametersKeyFilter, 'ParametersKeyFilter', 'json');
        }
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['Parameters']          = $request->parameters;
        $query['ParametersKeyFilter'] = $request->parametersKeyFilterShrink;
        $query['RegionId']            = $request->regionId;
        $query['TemplateBody']        = $request->templateBody;
        $query['TemplateId']          = $request->templateId;
        $query['TemplateURL']         = $request->templateURL;
        $query['TemplateVersion']     = $request->templateVersion;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateParameterConstraints',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateParameterConstraintsRequest $request
     *
     * @return GetTemplateParameterConstraintsResponse
     */
    public function getTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateScratchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTemplateScratchResponse
     */
    public function getTemplateScratchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['RegionId']          = $request->regionId;
        $query['ShowDataOption']    = $request->showDataOption;
        $query['TemplateScratchId'] = $request->templateScratchId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateScratchRequest $request
     *
     * @return GetTemplateScratchResponse
     */
    public function getTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ChangeSetId']     = $request->changeSetId;
        $query['RegionId']        = $request->regionId;
        $query['StackGroupName']  = $request->stackGroupName;
        $query['StackId']         = $request->stackId;
        $query['TemplateBody']    = $request->templateBody;
        $query['TemplateId']      = $request->templateId;
        $query['TemplateURL']     = $request->templateURL;
        $query['TemplateVersion'] = $request->templateVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateSummary',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateSummaryRequest $request
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateSummaryWithOptions($request, $runtime);
    }

    /**
     * @param ListChangeSetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ChangeSetId']     = $request->changeSetId;
        $query['ChangeSetName']   = $request->changeSetName;
        $query['ExecutionStatus'] = $request->executionStatus;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['StackId']         = $request->stackId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChangeSets',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChangeSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChangeSetsRequest $request
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChangeSetsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListResourceTypes',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($runtime);
    }

    /**
     * @param ListStackEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackEventsResponse
     */
    public function listStackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['LogicalResourceId'] = $request->logicalResourceId;
        $query['PageNumber']        = $request->pageNumber;
        $query['PageSize']          = $request->pageSize;
        $query['RegionId']          = $request->regionId;
        $query['ResourceType']      = $request->resourceType;
        $query['StackId']           = $request->stackId;
        $query['Status']            = $request->status;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackEvents',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackEventsRequest $request
     *
     * @return ListStackEventsResponse
     */
    public function listStackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupOperationResultsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['OperationId'] = $request->operationId;
        $query['PageNumber']  = $request->pageNumber;
        $query['PageSize']    = $request->pageSize;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroupOperationResults',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupOperationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackGroupOperationResultsRequest $request
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupOperationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['RegionId']       = $request->regionId;
        $query['StackGroupName'] = $request->stackGroupName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroupOperations',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackGroupOperationsRequest $request
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackGroups',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackGroupsRequest $request
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['PageNumber']             = $request->pageNumber;
        $query['PageSize']               = $request->pageSize;
        $query['RegionId']               = $request->regionId;
        $query['StackGroupName']         = $request->stackGroupName;
        $query['StackInstanceAccountId'] = $request->stackInstanceAccountId;
        $query['StackInstanceRegionId']  = $request->stackInstanceRegionId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackInstancesRequest $request
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListStackOperationRisksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['ClientToken']        = $request->clientToken;
        $query['OperationType']      = $request->operationType;
        $query['RamRoleName']        = $request->ramRoleName;
        $query['RegionId']           = $request->regionId;
        $query['RetainAllResources'] = $request->retainAllResources;
        $query['RetainResources']    = $request->retainResources;
        $query['StackId']            = $request->stackId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackOperationRisks',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackOperationRisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackOperationRisksRequest $request
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackOperationRisksWithOptions($request, $runtime);
    }

    /**
     * @param ListStackResourceDriftsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDriftsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['RegionId']            = $request->regionId;
        $query['ResourceDriftStatus'] = $request->resourceDriftStatus;
        $query['StackId']             = $request->stackId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackResourceDrifts',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackResourceDriftsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackResourceDriftsRequest $request
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDrifts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourceDriftsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['StackId']  = $request->stackId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStackResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStackResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackResourcesRequest $request
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListStacksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListStacksResponse
     */
    public function listStacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ParentStackId']   = $request->parentStackId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ShowNestedStack'] = $request->showNestedStack;
        $query['StackId']         = $request->stackId;
        $query['StackIds']        = $request->stackIds;
        $query['StackName']       = $request->stackName;
        $query['Status']          = $request->status;
        $query['Tag']             = $request->tag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStacks',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStacksRequest $request
     *
     * @return ListStacksResponse
     */
    public function listStacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStacksWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['NextToken']    = $request->nextToken;
        $query['RegionId']     = $request->regionId;
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['NextToken']    = $request->nextToken;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Key']          = $request->key;
        $query['NextToken']    = $request->nextToken;
        $query['RegionId']     = $request->regionId;
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplateScratchesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTemplateScratchesResponse
     */
    public function listTemplateScratchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['PageNumber']          = $request->pageNumber;
        $query['PageSize']            = $request->pageSize;
        $query['RegionId']            = $request->regionId;
        $query['Status']              = $request->status;
        $query['TemplateScratchId']   = $request->templateScratchId;
        $query['TemplateScratchType'] = $request->templateScratchType;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateScratches',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplateScratchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplateScratchesRequest $request
     *
     * @return ListTemplateScratchesResponse
     */
    public function listTemplateScratches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateScratchesWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplateVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateVersions',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplateVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplateVersionsRequest $request
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ShareType']       = $request->shareType;
        $query['Tag']             = $request->tag;
        $query['TemplateName']    = $request->templateName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['NewResourceGroupId'] = $request->newResourceGroupId;
        $query['RegionId']           = $request->regionId;
        $query['ResourceId']         = $request->resourceId;
        $query['ResourceType']       = $request->resourceType;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param PreviewStackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewStackResponse
     */
    public function previewStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['DisableRollback']         = $request->disableRollback;
        $query['Parallelism']             = $request->parallelism;
        $query['Parameters']              = $request->parameters;
        $query['RegionId']                = $request->regionId;
        $query['StackName']               = $request->stackName;
        $query['StackPolicyBody']         = $request->stackPolicyBody;
        $query['StackPolicyURL']          = $request->stackPolicyURL;
        $query['TemplateBody']            = $request->templateBody;
        $query['TemplateId']              = $request->templateId;
        $query['TemplateScratchId']       = $request->templateScratchId;
        $query['TemplateScratchRegionId'] = $request->templateScratchRegionId;
        $query['TemplateURL']             = $request->templateURL;
        $query['TemplateVersion']         = $request->templateVersion;
        $query['TimeoutInMinutes']        = $request->timeoutInMinutes;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreviewStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreviewStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreviewStackRequest $request
     *
     * @return PreviewStackResponse
     */
    public function previewStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * @param SetDeletionProtectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['DeletionProtection'] = $request->deletionProtection;
        $query['RegionId']           = $request->regionId;
        $query['StackId']            = $request->stackId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeletionProtection',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDeletionProtectionRequest $request
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param SetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['StackId']         = $request->stackId;
        $query['StackPolicyBody'] = $request->stackPolicyBody;
        $query['StackPolicyURL']  = $request->stackPolicyURL;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetStackPolicy',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetStackPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetStackPolicyRequest $request
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetTemplatePermissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetTemplatePermissionResponse
     */
    public function setTemplatePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AccountIds']      = $request->accountIds;
        $query['ShareOption']     = $request->shareOption;
        $query['TemplateId']      = $request->templateId;
        $query['TemplateVersion'] = $request->templateVersion;
        $query['VersionOption']   = $request->versionOption;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTemplatePermission',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTemplatePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetTemplatePermissionRequest $request
     *
     * @return SetTemplatePermissionResponse
     */
    public function setTemplatePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTemplatePermissionWithOptions($request, $runtime);
    }

    /**
     * @param SignalResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SignalResourceResponse
     */
    public function signalResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClientToken']       = $request->clientToken;
        $query['LogicalResourceId'] = $request->logicalResourceId;
        $query['RegionId']          = $request->regionId;
        $query['StackId']           = $request->stackId;
        $query['Status']            = $request->status;
        $query['UniqueId']          = $request->uniqueId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SignalResource',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignalResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SignalResourceRequest $request
     *
     * @return SignalResourceResponse
     */
    public function signalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalResourceWithOptions($request, $runtime);
    }

    /**
     * @param StopStackGroupOperationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['OperationId'] = $request->operationId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopStackGroupOperation',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopStackGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopStackGroupOperationRequest $request
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['All']          = $request->all;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStackResponse
     */
    public function updateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['ClientToken']                 = $request->clientToken;
        $query['DisableRollback']             = $request->disableRollback;
        $query['Parallelism']                 = $request->parallelism;
        $query['Parameters']                  = $request->parameters;
        $query['RamRoleName']                 = $request->ramRoleName;
        $query['RegionId']                    = $request->regionId;
        $query['ReplacementOption']           = $request->replacementOption;
        $query['StackId']                     = $request->stackId;
        $query['StackPolicyBody']             = $request->stackPolicyBody;
        $query['StackPolicyDuringUpdateBody'] = $request->stackPolicyDuringUpdateBody;
        $query['StackPolicyDuringUpdateURL']  = $request->stackPolicyDuringUpdateURL;
        $query['StackPolicyURL']              = $request->stackPolicyURL;
        $query['Tags']                        = $request->tags;
        $query['TemplateBody']                = $request->templateBody;
        $query['TemplateId']                  = $request->templateId;
        $query['TemplateURL']                 = $request->templateURL;
        $query['TemplateVersion']             = $request->templateVersion;
        $query['TimeoutInMinutes']            = $request->timeoutInMinutes;
        $query['UsePreviousParameters']       = $request->usePreviousParameters;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStack',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStackRequest $request
     *
     * @return UpdateStackResponse
     */
    public function updateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStackGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->autoDeployment)) {
            $request->autoDeploymentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->autoDeployment), 'AutoDeployment', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deploymentTargets), 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query                           = [];
        $query['AccountIds']             = $request->accountIdsShrink;
        $query['AdministrationRoleName'] = $request->administrationRoleName;
        $query['AutoDeployment']         = $request->autoDeploymentShrink;
        $query['ClientToken']            = $request->clientToken;
        $query['DeploymentTargets']      = $request->deploymentTargetsShrink;
        $query['Description']            = $request->description;
        $query['ExecutionRoleName']      = $request->executionRoleName;
        $query['OperationDescription']   = $request->operationDescription;
        $query['OperationPreferences']   = $request->operationPreferencesShrink;
        $query['Parameters']             = $request->parameters;
        $query['PermissionModel']        = $request->permissionModel;
        $query['RegionId']               = $request->regionId;
        $query['RegionIds']              = $request->regionIdsShrink;
        $query['StackGroupName']         = $request->stackGroupName;
        $query['TemplateBody']           = $request->templateBody;
        $query['TemplateId']             = $request->templateId;
        $query['TemplateURL']            = $request->templateURL;
        $query['TemplateVersion']        = $request->templateVersion;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStackGroupRequest $request
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStackInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentTargets)) {
            $request->deploymentTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deploymentTargets), 'DeploymentTargets', 'json');
        }
        if (!Utils::isUnset($tmpReq->operationPreferences)) {
            $request->operationPreferencesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationPreferences, 'OperationPreferences', 'json');
        }
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $query                         = [];
        $query['AccountIds']           = $request->accountIdsShrink;
        $query['ClientToken']          = $request->clientToken;
        $query['DeploymentTargets']    = $request->deploymentTargetsShrink;
        $query['OperationDescription'] = $request->operationDescription;
        $query['OperationPreferences'] = $request->operationPreferencesShrink;
        $query['ParameterOverrides']   = $request->parameterOverrides;
        $query['RegionId']             = $request->regionId;
        $query['RegionIds']            = $request->regionIdsShrink;
        $query['StackGroupName']       = $request->stackGroupName;
        $query['TimeoutInMinutes']     = $request->timeoutInMinutes;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackInstances',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStackInstancesRequest $request
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackTemplateByResourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClientToken']       = $request->clientToken;
        $query['DryRun']            = $request->dryRun;
        $query['LogicalResourceId'] = $request->logicalResourceId;
        $query['RegionId']          = $request->regionId;
        $query['StackId']           = $request->stackId;
        $query['TemplateFormat']    = $request->templateFormat;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateStackTemplateByResources',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStackTemplateByResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStackTemplateByResourcesRequest $request
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackTemplateByResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Description']  = $request->description;
        $query['TemplateBody'] = $request->templateBody;
        $query['TemplateId']   = $request->templateId;
        $query['TemplateName'] = $request->templateName;
        $query['TemplateURL']  = $request->templateURL;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateScratchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateTemplateScratchResponse
     */
    public function updateTemplateScratchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTemplateScratchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->preferenceParameters)) {
            $request->preferenceParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->preferenceParameters, 'PreferenceParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResourceGroup)) {
            $request->sourceResourceGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sourceResourceGroup), 'SourceResourceGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceResources)) {
            $request->sourceResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceResources, 'SourceResources', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceTag)) {
            $request->sourceTagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sourceTag), 'SourceTag', 'json');
        }
        $query                         = [];
        $query['ClientToken']          = $request->clientToken;
        $query['Description']          = $request->description;
        $query['ExecutionMode']        = $request->executionMode;
        $query['LogicalIdStrategy']    = $request->logicalIdStrategy;
        $query['PreferenceParameters'] = $request->preferenceParametersShrink;
        $query['RegionId']             = $request->regionId;
        $query['SourceResourceGroup']  = $request->sourceResourceGroupShrink;
        $query['SourceResources']      = $request->sourceResourcesShrink;
        $query['SourceTag']            = $request->sourceTagShrink;
        $query['TemplateScratchId']    = $request->templateScratchId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplateScratch',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateScratchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTemplateScratchRequest $request
     *
     * @return UpdateTemplateScratchResponse
     */
    public function updateTemplateScratch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateScratchWithOptions($request, $runtime);
    }

    /**
     * @param ValidateTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ClientToken']      = $request->clientToken;
        $query['RegionId']         = $request->regionId;
        $query['TemplateBody']     = $request->templateBody;
        $query['TemplateURL']      = $request->templateURL;
        $query['ValidationOption'] = $request->validationOption;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateTemplate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateTemplateRequest $request
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateWithOptions($request, $runtime);
    }
}
