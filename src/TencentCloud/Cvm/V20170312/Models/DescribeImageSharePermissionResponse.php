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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSharePermissionSet() 获取镜像共享信息
 * @method void setSharePermissionSet(array $SharePermissionSet) 设置镜像共享信息
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeImageSharePermission返回参数结构体
 */
class DescribeImageSharePermissionResponse extends AbstractModel
{
    /**
     * @var array 镜像共享信息
     */
    public $SharePermissionSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $SharePermissionSet 镜像共享信息
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SharePermissionSet",$param) and $param["SharePermissionSet"] !== null) {
            $this->SharePermissionSet = [];
            foreach ($param["SharePermissionSet"] as $key => $value){
                $obj = new SharePermission();
                $obj->deserialize($value);
                array_push($this->SharePermissionSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
