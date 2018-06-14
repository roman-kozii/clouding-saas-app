<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取验证信息数量。
 * @method void setTotalCount(integer $TotalCount) 设置验证信息数量。
 * @method array getSitesVerification() 获取验证信息列表。
 * @method void setSitesVerification(array $SitesVerification) 设置验证信息列表。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeSitesVerification返回参数结构体
 */
class DescribeSitesVerificationResponse extends AbstractModel
{
    /**
     * @var integer 验证信息数量。
     */
    public $TotalCount;

    /**
     * @var array 验证信息列表。
     */
    public $SitesVerification;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 验证信息数量。
     * @param array $SitesVerification 验证信息列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SitesVerification",$param) and $param["SitesVerification"] !== null) {
            $this->SitesVerification = [];
            foreach ($param["SitesVerification"] as $key => $value){
                $obj = new SitesVerification();
                $obj->deserialize($value);
                array_push($this->SitesVerification, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
