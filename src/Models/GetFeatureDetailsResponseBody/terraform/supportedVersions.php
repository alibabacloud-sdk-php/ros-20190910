<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions\providerVersions;
use AlibabaCloud\Tea\Model;

class supportedVersions extends Model
{
    /**
     * @description The resource types that support the price inquiry feature.
     *
     * @var providerVersions[]
     */
    public $providerVersions;

    /**
     * @description The resource type that support the risk check feature.
     *
     * @example 1.0.11
     *
     * @var string
     */
    public $terraformVersion;

    /**
     * @description The resource types that support the risk check performed to detect risks caused by a stack deletion operation.
     *
     * @example Aliyun::Terraform-v1.0
     *
     * @var string
     */
    public $transform;

    /**
     * @description The resource types that support the risk check performed to detect risks caused by a stack deletion operation.
     *
     * @var string[]
     */
    public $updateAllowedTransforms;
    protected $_name = [
        'providerVersions'        => 'ProviderVersions',
        'terraformVersion'        => 'TerraformVersion',
        'transform'               => 'Transform',
        'updateAllowedTransforms' => 'UpdateAllowedTransforms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->providerVersions) {
            $res['ProviderVersions'] = [];
            if (null !== $this->providerVersions && \is_array($this->providerVersions)) {
                $n = 0;
                foreach ($this->providerVersions as $item) {
                    $res['ProviderVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->terraformVersion) {
            $res['TerraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->transform) {
            $res['Transform'] = $this->transform;
        }
        if (null !== $this->updateAllowedTransforms) {
            $res['UpdateAllowedTransforms'] = $this->updateAllowedTransforms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProviderVersions'])) {
            if (!empty($map['ProviderVersions'])) {
                $model->providerVersions = [];
                $n                       = 0;
                foreach ($map['ProviderVersions'] as $item) {
                    $model->providerVersions[$n++] = null !== $item ? providerVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TerraformVersion'])) {
            $model->terraformVersion = $map['TerraformVersion'];
        }
        if (isset($map['Transform'])) {
            $model->transform = $map['Transform'];
        }
        if (isset($map['UpdateAllowedTransforms'])) {
            if (!empty($map['UpdateAllowedTransforms'])) {
                $model->updateAllowedTransforms = $map['UpdateAllowedTransforms'];
            }
        }

        return $model;
    }
}
