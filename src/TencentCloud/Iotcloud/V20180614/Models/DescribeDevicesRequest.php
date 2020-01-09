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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取需要查看设备列表的产品 ID
 * @method void setProductId(string $ProductId) 设置需要查看设备列表的产品 ID
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取分页的大小，数值范围 10-100
 * @method void setLimit(integer $Limit) 设置分页的大小，数值范围 10-100
 * @method string getFirmwareVersion() 获取设备固件版本号，若不带此参数会返回所有固件版本的设备
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置设备固件版本号，若不带此参数会返回所有固件版本的设备
 */

/**
 *DescribeDevices请求参数结构体
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var string 需要查看设备列表的产品 ID
     */
    public $ProductId;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 分页的大小，数值范围 10-100
     */
    public $Limit;

    /**
     * @var string 设备固件版本号，若不带此参数会返回所有固件版本的设备
     */
    public $FirmwareVersion;
    /**
     * @param string $ProductId 需要查看设备列表的产品 ID
     * @param integer $Offset 分页偏移
     * @param integer $Limit 分页的大小，数值范围 10-100
     * @param string $FirmwareVersion 设备固件版本号，若不带此参数会返回所有固件版本的设备
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }
    }
}
