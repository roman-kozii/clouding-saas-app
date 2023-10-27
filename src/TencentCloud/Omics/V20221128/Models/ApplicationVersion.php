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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用版本。
 *
 * @method string getType() 获取版本类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置版本类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationVersionId() 获取版本ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationVersionId(string $ApplicationVersionId) 设置版本ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取发布名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置发布名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取发布描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置发布描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntrypoint() 获取入口文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrypoint(string $Entrypoint) 设置入口文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorName() 获取创建者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorName(string $CreatorName) 设置创建者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorId() 获取创建者ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorId(string $CreatorId) 设置创建者ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGitInfo() 获取Git信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGitInfo(string $GitInfo) 设置Git信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationVersion extends AbstractModel
{
    /**
     * @var string 版本类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 版本ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationVersionId;

    /**
     * @var string 发布名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 发布描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 入口文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entrypoint;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 创建者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorName;

    /**
     * @var string 创建者ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorId;

    /**
     * @var string Git信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GitInfo;

    /**
     * @param string $Type 版本类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationVersionId 版本ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 发布名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 发布描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Entrypoint 入口文件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorName 创建者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorId 创建者ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GitInfo Git信息。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("GitInfo",$param) and $param["GitInfo"] !== null) {
            $this->GitInfo = $param["GitInfo"];
        }
    }
}
