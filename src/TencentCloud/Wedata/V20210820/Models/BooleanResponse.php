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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BooleanResponse
 *
 * @method boolean getSuccess() 获取是否成功
 * @method void setSuccess(boolean $Success) 设置是否成功
 * @method string getMessage() 获取失败返回提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置失败返回提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBaselineId() 获取基线Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineId(integer $BaselineId) 设置基线Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BooleanResponse extends AbstractModel
{
    /**
     * @var boolean 是否成功
     */
    public $Success;

    /**
     * @var string 失败返回提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 基线Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineId;

    /**
     * @param boolean $Success 是否成功
     * @param string $Message 失败返回提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BaselineId 基线Id
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }
    }
}
