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
 * @method string getIdCard() 获取身份证号
 * @method void setIdCard(string $IdCard) 设置身份证号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getBankCard() 获取银行卡
 * @method void setBankCard(string $BankCard) 设置银行卡
 * @method integer getCertType() 获取证件类型（不填默认0）
0 身份证
1 军官证
2 护照
3 港澳证
4 台胞证
5 警官证
6 士兵证
7 其它证件
 * @method void setCertType(integer $CertType) 设置证件类型（不填默认0）
0 身份证
1 军官证
2 护照
3 港澳证
4 台胞证
5 警官证
6 士兵证
7 其它证件
 */

/**
 *BankCardVerification请求参数结构体
 */
class BankCardVerificationRequest extends AbstractModel
{
    /**
     * @var string 身份证号
     */
    public $IdCard;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 银行卡
     */
    public $BankCard;

    /**
     * @var integer 证件类型（不填默认0）
0 身份证
1 军官证
2 护照
3 港澳证
4 台胞证
5 警官证
6 士兵证
7 其它证件
     */
    public $CertType;
    /**
     * @param string $IdCard 身份证号
     * @param string $Name 姓名
     * @param string $BankCard 银行卡
     * @param integer $CertType 证件类型（不填默认0）
0 身份证
1 军官证
2 护照
3 港澳证
4 台胞证
5 警官证
6 士兵证
7 其它证件
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BankCard",$param) and $param["BankCard"] !== null) {
            $this->BankCard = $param["BankCard"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }
    }
}
