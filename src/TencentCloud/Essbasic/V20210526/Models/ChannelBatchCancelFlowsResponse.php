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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelBatchCancelFlows返回参数结构体
 *
 * @method array getFailMessages() 获取签署流程批量撤销失败原因，错误信息与流程Id一一对应，成功为"", 失败则对应失败原因

注:  `如果全部撤销成功, 此数组为空数组`
 * @method void setFailMessages(array $FailMessages) 设置签署流程批量撤销失败原因，错误信息与流程Id一一对应，成功为"", 失败则对应失败原因

注:  `如果全部撤销成功, 此数组为空数组`
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelBatchCancelFlowsResponse extends AbstractModel
{
    /**
     * @var array 签署流程批量撤销失败原因，错误信息与流程Id一一对应，成功为"", 失败则对应失败原因

注:  `如果全部撤销成功, 此数组为空数组`
     */
    public $FailMessages;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FailMessages 签署流程批量撤销失败原因，错误信息与流程Id一一对应，成功为"", 失败则对应失败原因

注:  `如果全部撤销成功, 此数组为空数组`
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
        if (array_key_exists("FailMessages",$param) and $param["FailMessages"] !== null) {
            $this->FailMessages = $param["FailMessages"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
