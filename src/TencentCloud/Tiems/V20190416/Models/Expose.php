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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getExposeType() 获取暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method void setExposeType(string $ExposeType) 设置暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method string getIp() 获取暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
 * @method void setIp(string $Ip) 设置暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
 * @method string getUnVpcId() 获取暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnVpcId(string $UnVpcId) 设置暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnSubnetId() 获取暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnSubnetId(string $UnSubnetId) 设置暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *服务暴露方式
 */
class Expose extends AbstractModel
{
    /**
     * @var string 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     */
    public $ExposeType;

    /**
     * @var string 暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
     */
    public $Ip;

    /**
     * @var string 暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnVpcId;

    /**
     * @var string 暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnSubnetId;
    /**
     * @param string $ExposeType 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     * @param string $Ip 暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
     * @param string $UnVpcId 暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnSubnetId 暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExposeType",$param) and $param["ExposeType"] !== null) {
            $this->ExposeType = $param["ExposeType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("UnVpcId",$param) and $param["UnVpcId"] !== null) {
            $this->UnVpcId = $param["UnVpcId"];
        }

        if (array_key_exists("UnSubnetId",$param) and $param["UnSubnetId"] !== null) {
            $this->UnSubnetId = $param["UnSubnetId"];
        }
    }
}
