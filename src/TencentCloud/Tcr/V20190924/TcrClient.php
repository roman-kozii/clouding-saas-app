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

namespace TencentCloud\Tcr\V20190924;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcr\V20190924\Models as Models;

/**
* @method Models\BatchDeleteImagePersonalResponse BatchDeleteImagePersonal(Models\BatchDeleteImagePersonalRequest $req) 用于在个人版镜像仓库中批量删除Tag
* @method Models\BatchDeleteRepositoryPersonalResponse BatchDeleteRepositoryPersonal(Models\BatchDeleteRepositoryPersonalRequest $req) 用于个人版镜像仓库中批量删除镜像仓库
* @method Models\CreateApplicationTriggerPersonalResponse CreateApplicationTriggerPersonal(Models\CreateApplicationTriggerPersonalRequest $req) 用于创建应用更新触发器
* @method Models\CreateImageLifecyclePersonalResponse CreateImageLifecyclePersonal(Models\CreateImageLifecyclePersonalRequest $req) 用于在个人版中创建清理策略
* @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建实例
* @method Models\CreateInstanceTokenResponse CreateInstanceToken(Models\CreateInstanceTokenRequest $req) 获取临时登录密码
* @method Models\CreateNamespacePersonalResponse CreateNamespacePersonal(Models\CreateNamespacePersonalRequest $req) 创建个人版镜像仓库命名空间，此命名空间全局唯一
* @method Models\CreateRepositoryPersonalResponse CreateRepositoryPersonal(Models\CreateRepositoryPersonalRequest $req) 用于在个人版仓库中创建镜像仓库
* @method Models\CreateUserPersonalResponse CreateUserPersonal(Models\CreateUserPersonalRequest $req) 创建个人用户
* @method Models\DeleteApplicationTriggerPersonalResponse DeleteApplicationTriggerPersonal(Models\DeleteApplicationTriggerPersonalRequest $req) 用于删除应用更新触发器
* @method Models\DeleteImageLifecycleGlobalPersonalResponse DeleteImageLifecycleGlobalPersonal(Models\DeleteImageLifecycleGlobalPersonalRequest $req) 用于删除个人版全局镜像版本自动清理策略
* @method Models\DeleteImageLifecyclePersonalResponse DeleteImageLifecyclePersonal(Models\DeleteImageLifecyclePersonalRequest $req) 用于在个人版镜像仓库中删除仓库Tag自动清理策略
* @method Models\DeleteImagePersonalResponse DeleteImagePersonal(Models\DeleteImagePersonalRequest $req) 用于在个人版中删除tag
* @method Models\DeleteNamespacePersonalResponse DeleteNamespacePersonal(Models\DeleteNamespacePersonalRequest $req) 删除共享版命名空间
* @method Models\DeleteRepositoryPersonalResponse DeleteRepositoryPersonal(Models\DeleteRepositoryPersonalRequest $req) 用于个人版镜像仓库中删除
* @method Models\DescribeApplicationTriggerLogPersonalResponse DescribeApplicationTriggerLogPersonal(Models\DescribeApplicationTriggerLogPersonalRequest $req) 用于查询应用更新触发器触发日志
* @method Models\DescribeApplicationTriggerPersonalResponse DescribeApplicationTriggerPersonal(Models\DescribeApplicationTriggerPersonalRequest $req) 用于查询应用更新触发器
* @method Models\DescribeFavorRepositoryPersonalResponse DescribeFavorRepositoryPersonal(Models\DescribeFavorRepositoryPersonalRequest $req) 查询个人收藏仓库
* @method Models\DescribeImageFilterPersonalResponse DescribeImageFilterPersonal(Models\DescribeImageFilterPersonalRequest $req) 用于在个人版中查询与指定tag镜像内容相同的tag列表
* @method Models\DescribeImageLifecycleGlobalPersonalResponse DescribeImageLifecycleGlobalPersonal(Models\DescribeImageLifecycleGlobalPersonalRequest $req) 用于获取个人版全局镜像版本自动清理策略
* @method Models\DescribeImageLifecyclePersonalResponse DescribeImageLifecyclePersonal(Models\DescribeImageLifecyclePersonalRequest $req) 用于获取个人版仓库中自动清理策略
* @method Models\DescribeImagePersonalResponse DescribeImagePersonal(Models\DescribeImagePersonalRequest $req) 用于获取个人版镜像仓库tag列表
* @method Models\DescribeInstanceStatusResponse DescribeInstanceStatus(Models\DescribeInstanceStatusRequest $req) 查询实例当前状态以及过程信息
* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询实例信息
* @method Models\DescribeNamespacePersonalResponse DescribeNamespacePersonal(Models\DescribeNamespacePersonalRequest $req) 查询个人版命名空间信息
* @method Models\DescribeRepositoryFilterPersonalResponse DescribeRepositoryFilterPersonal(Models\DescribeRepositoryFilterPersonalRequest $req) 用于在个人版镜像仓库中，获取满足输入搜索条件的用户镜像仓库
* @method Models\DescribeRepositoryOwnerPersonalResponse DescribeRepositoryOwnerPersonal(Models\DescribeRepositoryOwnerPersonalRequest $req) 用于在个人版中获取用户全部的镜像仓库列表
* @method Models\DescribeRepositoryPersonalResponse DescribeRepositoryPersonal(Models\DescribeRepositoryPersonalRequest $req) 查询个人版仓库信息
* @method Models\DescribeUserQuotaPersonalResponse DescribeUserQuotaPersonal(Models\DescribeUserQuotaPersonalRequest $req) 查询个人用户配额
* @method Models\DuplicateImagePersonalResponse DuplicateImagePersonal(Models\DuplicateImagePersonalRequest $req) 用于在个人版镜像仓库中复制镜像版本
* @method Models\ManageImageLifecycleGlobalPersonalResponse ManageImageLifecycleGlobalPersonal(Models\ManageImageLifecycleGlobalPersonalRequest $req) 用于设置个人版全局镜像版本自动清理策略
* @method Models\ModifyApplicationTriggerPersonalResponse ModifyApplicationTriggerPersonal(Models\ModifyApplicationTriggerPersonalRequest $req) 用于修改应用更新触发器
* @method Models\ModifyRepositoryAccessPersonalResponse ModifyRepositoryAccessPersonal(Models\ModifyRepositoryAccessPersonalRequest $req) 用于更新个人版镜像仓库的访问属性
* @method Models\ModifyRepositoryInfoPersonalResponse ModifyRepositoryInfoPersonal(Models\ModifyRepositoryInfoPersonalRequest $req) 用于在个人版镜像仓库中更新容器镜像描述
* @method Models\ModifyUserPasswordPersonalResponse ModifyUserPasswordPersonal(Models\ModifyUserPasswordPersonalRequest $req) 修改个人用户登录密码
* @method Models\ValidateNamespaceExistPersonalResponse ValidateNamespaceExistPersonal(Models\ValidateNamespaceExistPersonalRequest $req) 查询个人版用户命名空间是否存在
* @method Models\ValidateRepositoryExistPersonalResponse ValidateRepositoryExistPersonal(Models\ValidateRepositoryExistPersonalRequest $req) 用于判断个人版仓库是否存在
 */

class TcrClient extends AbstractClient
{
    protected $endpoint = "tcr.tencentcloudapi.com";

    protected $version = "2019-09-24";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tcr")."\\"."V20190924\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
