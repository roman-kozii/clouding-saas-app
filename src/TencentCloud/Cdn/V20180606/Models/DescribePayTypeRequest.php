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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getArea() 获取指定服务地域查询，不填充表示查询中国境内 CDN 计费方式
mainland：指定查询中国境内 CDN 计费方式
overseas：指定查询中国境外 CDN 计费方式
 * @method void setArea(string $Area) 设置指定服务地域查询，不填充表示查询中国境内 CDN 计费方式
mainland：指定查询中国境内 CDN 计费方式
overseas：指定查询中国境外 CDN 计费方式
 */

/**
 *DescribePayType请求参数结构体
 */
class DescribePayTypeRequest extends AbstractModel
{
    /**
     * @var string 指定服务地域查询，不填充表示查询中国境内 CDN 计费方式
mainland：指定查询中国境内 CDN 计费方式
overseas：指定查询中国境外 CDN 计费方式
     */
    public $Area;
    /**
     * @param string $Area 指定服务地域查询，不填充表示查询中国境内 CDN 计费方式
mainland：指定查询中国境内 CDN 计费方式
overseas：指定查询中国境外 CDN 计费方式
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
