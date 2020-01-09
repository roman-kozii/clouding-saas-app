<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取服务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置服务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgId() 获取程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgName() 获取程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgName(string $PkgName) 设置程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取vpc 子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置vpc 子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgVersion() 获取程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgVersion(string $PkgVersion) 设置程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *Serverless部署组信息
 */
class ServerlessGroup extends AbstractModel
{
    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 服务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgName;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 命名空间id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string vpc ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string vpc 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgVersion;
    /**
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 服务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgId 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgName 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId vpc 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgVersion 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PkgVersion",$param) and $param["PkgVersion"] !== null) {
            $this->PkgVersion = $param["PkgVersion"];
        }
    }
}
