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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getLimit() 获取最大上限
注：目前固定设置为0
 * @method void setLimit(integer $Limit) 设置最大上限
注：目前固定设置为0
 * @method integer getOffset() 获取偏移量
注：目前固定设置为0
 * @method void setOffset(integer $Offset) 设置偏移量
注：目前固定设置为0
 * @method integer getNumberOfPullPackages() 获取需要拉取的套餐包个数
 * @method void setNumberOfPullPackages(integer $NumberOfPullPackages) 设置需要拉取的套餐包个数
 * @method string getSmsSdkAppid() 获取短信SdkAppid在[短信控制台](https://console.cloud.tencent.com/sms/smslist) 添加应用后生成的实际SdkAppid,示例如1400006666。
 * @method void setSmsSdkAppid(string $SmsSdkAppid) 设置短信SdkAppid在[短信控制台](https://console.cloud.tencent.com/sms/smslist) 添加应用后生成的实际SdkAppid,示例如1400006666。
 */

/**
 *SmsPackagesStatistics请求参数结构体
 */
class SmsPackagesStatisticsRequest extends AbstractModel
{
    /**
     * @var integer 最大上限
注：目前固定设置为0
     */
    public $Limit;

    /**
     * @var integer 偏移量
注：目前固定设置为0
     */
    public $Offset;

    /**
     * @var integer 需要拉取的套餐包个数
     */
    public $NumberOfPullPackages;

    /**
     * @var string 短信SdkAppid在[短信控制台](https://console.cloud.tencent.com/sms/smslist) 添加应用后生成的实际SdkAppid,示例如1400006666。
     */
    public $SmsSdkAppid;
    /**
     * @param integer $Limit 最大上限
注：目前固定设置为0
     * @param integer $Offset 偏移量
注：目前固定设置为0
     * @param integer $NumberOfPullPackages 需要拉取的套餐包个数
     * @param string $SmsSdkAppid 短信SdkAppid在[短信控制台](https://console.cloud.tencent.com/sms/smslist) 添加应用后生成的实际SdkAppid,示例如1400006666。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NumberOfPullPackages",$param) and $param["NumberOfPullPackages"] !== null) {
            $this->NumberOfPullPackages = $param["NumberOfPullPackages"];
        }

        if (array_key_exists("SmsSdkAppid",$param) and $param["SmsSdkAppid"] !== null) {
            $this->SmsSdkAppid = $param["SmsSdkAppid"];
        }
    }
}
