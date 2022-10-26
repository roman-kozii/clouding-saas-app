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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VideoLivenessCompare返回参数结构体
 *
 * @method float getSim() 获取相似度，取值范围 [0.00, 100.00]。推荐相似度大于等于70时可判断为同一人，可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）。
 * @method void setSim(float $Sim) 设置相似度，取值范围 [0.00, 100.00]。推荐相似度大于等于70时可判断为同一人，可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）。
 * @method string getResult() 获取业务错误码，成功情况返回Success, 错误情况请参考下方错误码 列表中FailedOperation部分
 * @method void setResult(string $Result) 设置业务错误码，成功情况返回Success, 错误情况请参考下方错误码 列表中FailedOperation部分
 * @method string getDescription() 获取业务结果描述。
 * @method void setDescription(string $Description) 设置业务结果描述。
 * @method FileInfo getBestFrame() 获取验证通过后的视频最佳截图照片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrame(FileInfo $BestFrame) 设置验证通过后的视频最佳截图照片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VideoLivenessCompareResponse extends AbstractModel
{
    /**
     * @var float 相似度，取值范围 [0.00, 100.00]。推荐相似度大于等于70时可判断为同一人，可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）。
     */
    public $Sim;

    /**
     * @var string 业务错误码，成功情况返回Success, 错误情况请参考下方错误码 列表中FailedOperation部分
     */
    public $Result;

    /**
     * @var string 业务结果描述。
     */
    public $Description;

    /**
     * @var FileInfo 验证通过后的视频最佳截图照片。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrame;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Sim 相似度，取值范围 [0.00, 100.00]。推荐相似度大于等于70时可判断为同一人，可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）。
     * @param string $Result 业务错误码，成功情况返回Success, 错误情况请参考下方错误码 列表中FailedOperation部分
     * @param string $Description 业务结果描述。
     * @param FileInfo $BestFrame 验证通过后的视频最佳截图照片。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new FileInfo();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}