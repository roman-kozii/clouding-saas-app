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

namespace TencentCloud\Live\V20180801;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Live\V20180801\Models as Models;

/**
* @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) 对流设置延播时间
注意：如果在推流前设置延播，需要提前5分钟设置。

* @method Models\AddLiveDomainResponse AddLiveDomain(Models\AddLiveDomainRequest $req) 添加域名，一次只能提交一个域名。域名必须已备案。
* @method Models\AddLiveWatermarkResponse AddLiveWatermark(Models\AddLiveWatermarkRequest $req) 添加水印，成功返回水印id后，需要调用[CreateLiveWatermarkRule](/document/product/267/32629)接口将水印id绑定到流使用。
* @method Models\BindLiveDomainCertResponse BindLiveDomainCert(Models\BindLiveDomainCertRequest $req) 域名绑定证书
* @method Models\CreateLiveCallbackRuleResponse CreateLiveCallbackRule(Models\CreateLiveCallbackRuleRequest $req) 创建回调规则，需要先调用[CreateLiveCallbackTemplate](/document/product/267/32637)接口创建回调模板，将返回的模板id绑定到域名/路径进行使用。
<br>回调协议相关文档：[事件消息通知](/document/product/267/32744)。
* @method Models\CreateLiveCallbackTemplateResponse CreateLiveCallbackTemplate(Models\CreateLiveCallbackTemplateRequest $req) 创建回调模板，成功返回模板id后，需要调用[CreateLiveCallbackRule](/document/product/267/32638)接口将模板id绑定到域名/路径使用。
<br>回调协议相关文档：[事件消息通知](/document/product/267/32744)。
* @method Models\CreateLiveCertResponse CreateLiveCert(Models\CreateLiveCertRequest $req) 添加证书
* @method Models\CreateLiveDomainStrategyResponse CreateLiveDomainStrategy(Models\CreateLiveDomainStrategyRequest $req) 该接口用于新增直播推流和播放的域名映射
* @method Models\CreateLiveRecordResponse CreateLiveRecord(Models\CreateLiveRecordRequest $req) - 使用前提
  1. 录制文件存放于点播平台，所以用户如需使用录制功能，需首先自行开通点播服务。
  2. 录制文件存放后相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，具体请参考 [对应文档](https://cloud.tencent.com/document/product/266/2838)。

- 模式说明
  该接口支持两种录制模式：
  1. 定时录制模式【默认模式】。
    需要传入开始时间与结束时间，录制任务根据时间自动开始与结束。
  2. 实时视频录制模式。
    忽略传入的开始时间，在录制任务创建后立即开始录制，录制时长支持最大为30分钟，如果传入的结束时间与当前时间差大于30分钟，则按30分钟计算，实时视频录制主要用于录制精彩视频场景，时长建议控制在5分钟以内。

- 注意事项
  1. 调用接口超时设置应大于3秒，小于3秒重试以及频繁调用都有可能产生重复录制任务。
* @method Models\CreateLiveRecordRuleResponse CreateLiveRecordRule(Models\CreateLiveRecordRuleRequest $req) 创建录制规则，需要先调用[CreateLiveRecordTemplate](/document/product/267/32614)接口创建录制模板，将返回的模板id绑定到流使用。
<br>录制相关文档：[直播录制](/document/product/267/32739)。
* @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) 创建录制模板，成功返回模板id后，需要调用[CreateLiveRecordRule](/document/product/267/32615)接口，将模板id绑定到流进行使用。
<br>录制相关文档：[直播录制](/document/product/267/32739)。
* @method Models\CreateLiveSnapshotRuleResponse CreateLiveSnapshotRule(Models\CreateLiveSnapshotRuleRequest $req) 创建截图规则，需要先调用[CreateLiveSnapshotTemplate](/document/product/267/32624)接口创建截图模板，然后将返回的模板id绑定到流进行使用。
<br>截图相关文档：[直播截图](/document/product/267/32737)。
* @method Models\CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplate(Models\CreateLiveSnapshotTemplateRequest $req) 创建截图模板，成功返回模板id后，需要调用[CreateLiveSnapshotRule](/document/product/267/32625)接口，将模板id绑定到流使用。
<br>截图相关文档：[直播截图](/document/product/267/32737)。
* @method Models\CreateLiveTranscodeRuleResponse CreateLiveTranscodeRule(Models\CreateLiveTranscodeRuleRequest $req) 创建转码规则，需要先调用[CreateLiveTranscodeTemplate](/document/product/267/32646)接口创建转码模板，将返回的模板id绑定到流使用。
<br>转码相关文档：[直播转封装及转码](/document/product/267/32736)。
* @method Models\CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplate(Models\CreateLiveTranscodeTemplateRequest $req) 创建转码模板，成功返回模板id后，需要调用[CreateLiveTranscodeRule](/document/product/267/32647)接口，将返回的模板id绑定到流使用。
<br>转码相关文档：[直播转封装及转码](/document/product/267/32736)。
* @method Models\CreateLiveWatermarkRuleResponse CreateLiveWatermarkRule(Models\CreateLiveWatermarkRuleRequest $req) 创建水印规则，需要先调用[AddLiveWatermark](/document/product/267/30154)接口添加水印，将返回的水印id绑定到流使用。
* @method Models\CreatePullStreamConfigResponse CreatePullStreamConfig(Models\CreatePullStreamConfigRequest $req) 添加拉流配置，目前限制添加10条任务。
* @method Models\DeleteLiveCallbackRuleResponse DeleteLiveCallbackRule(Models\DeleteLiveCallbackRuleRequest $req) 删除回调规则
* @method Models\DeleteLiveCallbackTemplateResponse DeleteLiveCallbackTemplate(Models\DeleteLiveCallbackTemplateRequest $req) 删除回调模板
* @method Models\DeleteLiveCertResponse DeleteLiveCert(Models\DeleteLiveCertRequest $req) 删除域名对应的证书
* @method Models\DeleteLiveDomainResponse DeleteLiveDomain(Models\DeleteLiveDomainRequest $req) 删除已添加的直播域名
* @method Models\DeleteLiveDomainStrategyResponse DeleteLiveDomainStrategy(Models\DeleteLiveDomainStrategyRequest $req) 该接口用于删除已新增的播放和推流域名映射关系
* @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) 用于删除录制任务
* @method Models\DeleteLiveRecordRuleResponse DeleteLiveRecordRule(Models\DeleteLiveRecordRuleRequest $req) 删除录制规则
* @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) 删除录制模板
* @method Models\DeleteLiveSnapshotRuleResponse DeleteLiveSnapshotRule(Models\DeleteLiveSnapshotRuleRequest $req) 删除截图规则
* @method Models\DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplate(Models\DeleteLiveSnapshotTemplateRequest $req) 删除截图模板
* @method Models\DeleteLiveTranscodeRuleResponse DeleteLiveTranscodeRule(Models\DeleteLiveTranscodeRuleRequest $req) 删除转码规则
* @method Models\DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplate(Models\DeleteLiveTranscodeTemplateRequest $req) 删除转码模板
* @method Models\DeleteLiveWatermarkResponse DeleteLiveWatermark(Models\DeleteLiveWatermarkRequest $req) 删除水印
* @method Models\DeleteLiveWatermarkRuleResponse DeleteLiveWatermarkRule(Models\DeleteLiveWatermarkRuleRequest $req) 删除水印规则
* @method Models\DeletePullStreamConfigResponse DeletePullStreamConfig(Models\DeletePullStreamConfigRequest $req) 删除直播拉流配置
* @method Models\DescribeLiveCallbackRulesResponse DescribeLiveCallbackRules(Models\DescribeLiveCallbackRulesRequest $req) 获取回调规则列表
* @method Models\DescribeLiveCallbackTemplateResponse DescribeLiveCallbackTemplate(Models\DescribeLiveCallbackTemplateRequest $req) 获取单个回调模板
* @method Models\DescribeLiveCallbackTemplatesResponse DescribeLiveCallbackTemplates(Models\DescribeLiveCallbackTemplatesRequest $req) 获取回调模板列表
* @method Models\DescribeLiveCertResponse DescribeLiveCert(Models\DescribeLiveCertRequest $req) 获取证书信息
* @method Models\DescribeLiveCertsResponse DescribeLiveCerts(Models\DescribeLiveCertsRequest $req) 获取证书信息列表
* @method Models\DescribeLiveDomainResponse DescribeLiveDomain(Models\DescribeLiveDomainRequest $req) 查询直播域名信息
* @method Models\DescribeLiveDomainCertResponse DescribeLiveDomainCert(Models\DescribeLiveDomainCertRequest $req) 获取域名证书信息
* @method Models\DescribeLiveDomainStrategysResponse DescribeLiveDomainStrategys(Models\DescribeLiveDomainStrategysRequest $req) 该接口用于查询已有域名策略
* @method Models\DescribeLiveDomainsResponse DescribeLiveDomains(Models\DescribeLiveDomainsRequest $req) 根据域名状态、类型等信息查询用户的域名信息
* @method Models\DescribeLiveForbidStreamListResponse DescribeLiveForbidStreamList(Models\DescribeLiveForbidStreamListRequest $req) 获取禁推流列表
* @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) 查询播放鉴权key
* @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) 查询直播推流鉴权key
* @method Models\DescribeLiveRecordRulesResponse DescribeLiveRecordRules(Models\DescribeLiveRecordRulesRequest $req) 获取录制规则列表
* @method Models\DescribeLiveRecordTemplateResponse DescribeLiveRecordTemplate(Models\DescribeLiveRecordTemplateRequest $req) 获取单个录制模板
* @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) 获取录制模板列表
* @method Models\DescribeLiveSnapshotRulesResponse DescribeLiveSnapshotRules(Models\DescribeLiveSnapshotRulesRequest $req) 获取截图规则列表
* @method Models\DescribeLiveSnapshotTemplateResponse DescribeLiveSnapshotTemplate(Models\DescribeLiveSnapshotTemplateRequest $req) 获取单个截图模板
* @method Models\DescribeLiveSnapshotTemplatesResponse DescribeLiveSnapshotTemplates(Models\DescribeLiveSnapshotTemplatesRequest $req) 获取截图模板列表
* @method Models\DescribeLiveStreamEventListResponse DescribeLiveStreamEventList(Models\DescribeLiveStreamEventListRequest $req) 查询推断流事件
* @method Models\DescribeLiveStreamOnlineInfoResponse DescribeLiveStreamOnlineInfo(Models\DescribeLiveStreamOnlineInfoRequest $req) 查询在线推流信息列表
* @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) 返回正在直播中的流列表
* @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) 返回已经推过流的流列表
* @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) 返回直播中、无推流或者禁播等状态
* @method Models\DescribeLiveTranscodeDetailInfoResponse DescribeLiveTranscodeDetailInfo(Models\DescribeLiveTranscodeDetailInfoRequest $req) 支持查询某天的转码详细信息。
注意：当前只支持查询近30天内某天的详细数据。
* @method Models\DescribeLiveTranscodeRulesResponse DescribeLiveTranscodeRules(Models\DescribeLiveTranscodeRulesRequest $req) 获取转码规则列表
* @method Models\DescribeLiveTranscodeTemplateResponse DescribeLiveTranscodeTemplate(Models\DescribeLiveTranscodeTemplateRequest $req) 获取单个转码模板
* @method Models\DescribeLiveTranscodeTemplatesResponse DescribeLiveTranscodeTemplates(Models\DescribeLiveTranscodeTemplatesRequest $req) 获取转码模板列表
* @method Models\DescribeLiveWatermarkResponse DescribeLiveWatermark(Models\DescribeLiveWatermarkRequest $req) 获取单个水印信息
* @method Models\DescribeLiveWatermarkRulesResponse DescribeLiveWatermarkRules(Models\DescribeLiveWatermarkRulesRequest $req) 获取水印规则列表
* @method Models\DescribeLiveWatermarksResponse DescribeLiveWatermarks(Models\DescribeLiveWatermarksRequest $req) 查询水印列表
* @method Models\DescribePullStreamConfigsResponse DescribePullStreamConfigs(Models\DescribePullStreamConfigsRequest $req) 查询拉流配置
* @method Models\DescribeStreamPlayInfoListResponse DescribeStreamPlayInfoList(Models\DescribeStreamPlayInfoListRequest $req) 查询播放数据，支持按流名称查询详细播放数据，也可按播放域名查询详细总数据。
* @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) 断开推流连接，但可以重新推流
* @method Models\EnableLiveDomainResponse EnableLiveDomain(Models\EnableLiveDomainRequest $req) 启用状态为停用的直播域名
* @method Models\ForbidLiveDomainResponse ForbidLiveDomain(Models\ForbidLiveDomainRequest $req) 停用使用某个直播域名
* @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) 禁止某条流的推送，可以预设某个时刻将流恢复。
* @method Models\ModifyLiveCallbackTemplateResponse ModifyLiveCallbackTemplate(Models\ModifyLiveCallbackTemplateRequest $req) 修改回调模板
* @method Models\ModifyLiveCertResponse ModifyLiveCert(Models\ModifyLiveCertRequest $req) 修改证书
* @method Models\ModifyLiveDomainCertResponse ModifyLiveDomainCert(Models\ModifyLiveDomainCertRequest $req) 修改域名和证书绑定信息
* @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) 修改播放鉴权key
* @method Models\ModifyLivePlayDomainResponse ModifyLivePlayDomain(Models\ModifyLivePlayDomainRequest $req) 修改播放域名信息
* @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) 修改直播推流鉴权key
* @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) 修改录制模板配置
* @method Models\ModifyLiveSnapshotTemplateResponse ModifyLiveSnapshotTemplate(Models\ModifyLiveSnapshotTemplateRequest $req) 修改截图模板配置
* @method Models\ModifyLiveTranscodeTemplateResponse ModifyLiveTranscodeTemplate(Models\ModifyLiveTranscodeTemplateRequest $req) 修改转码模板配置
* @method Models\ModifyPullStreamConfigResponse ModifyPullStreamConfig(Models\ModifyPullStreamConfigRequest $req) 更新拉流配置
* @method Models\ModifyPullStreamStatusResponse ModifyPullStreamStatus(Models\ModifyPullStreamStatusRequest $req) 修改直播拉流配置状态
* @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) 恢复延迟播放设置
* @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) 恢复某条流的推送。
* @method Models\SetLiveWatermarkStatusResponse SetLiveWatermarkStatus(Models\SetLiveWatermarkStatusRequest $req) 设置水印是否启用
* @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) 说明：录制后的文件存放于点播平台。用户如需使用录制功能，需首先自行开通点播账号并确保账号可用。录制文件存放后，相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，请参考对应文档。
* @method Models\UnBindLiveDomainCertResponse UnBindLiveDomainCert(Models\UnBindLiveDomainCertRequest $req) 解绑域名证书
* @method Models\UpdateLiveWatermarkResponse UpdateLiveWatermark(Models\UpdateLiveWatermarkRequest $req) 更新水印
 */

class LiveClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "live.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-08-01";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("live")."\\"."V20180801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
