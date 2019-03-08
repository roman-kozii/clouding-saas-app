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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskId() 获取视频处理任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频处理任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取媒体文件 ID
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 FileId；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Id。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置媒体文件 ID
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 FileId；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Id。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取媒体文件名称
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.Name；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Name。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置媒体文件名称
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.Name；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Name。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileUrl() 获取媒体文件地址
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.MediaUrl；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Url。</li>
 * @method void setFileUrl(string $FileUrl) 设置媒体文件地址
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.MediaUrl；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Url。</li>
 * @method MediaMetaData getMetaData() 获取原始视频的元信息。
 * @method void setMetaData(MediaMetaData $MetaData) 设置原始视频的元信息。
 * @method array getMediaProcessResultSet() 获取视频处理任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) 设置视频处理任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiContentReviewResultSet() 获取视频内容审核任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) 设置视频内容审核任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiAnalysisResultSet() 获取视频内容分析任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) 设置视频内容分析任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTasksPriority() 获取任务流的优先级，取值范围为 [-10, 10]。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，取值范围为 [-10, 10]。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTasksNotifyMode() 获取任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>Change：只要任务流中每个子任务的状态发生变化，都进行事件通知；</li>
<li>None：不接受该任务流回调。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasksNotifyMode(string $TasksNotifyMode) 设置任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>Change：只要任务流中每个子任务的状态发生变化，都进行事件通知；</li>
<li>None：不接受该任务流回调。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *视频处理任务信息
 */
class ProcedureTask extends AbstractModel
{
    /**
     * @var string 视频处理任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 媒体文件 ID
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 FileId；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Id。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string 媒体文件名称
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.Name；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Name。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 媒体文件地址
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.MediaUrl；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Url。</li>
     */
    public $FileUrl;

    /**
     * @var MediaMetaData 原始视频的元信息。
     */
    public $MetaData;

    /**
     * @var array 视频处理任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaProcessResultSet;

    /**
     * @var array 视频内容审核任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiContentReviewResultSet;

    /**
     * @var array 视频内容分析任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAnalysisResultSet;

    /**
     * @var integer 任务流的优先级，取值范围为 [-10, 10]。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TasksPriority;

    /**
     * @var string 任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>Change：只要任务流中每个子任务的状态发生变化，都进行事件通知；</li>
<li>None：不接受该任务流回调。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TasksNotifyMode;
    /**
     * @param string $TaskId 视频处理任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 媒体文件 ID
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 FileId；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Id。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 媒体文件名称
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.Name；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Name。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileUrl 媒体文件地址
<li>若流程由 [ProcessMedia](https://cloud.tencent.com/document/product/266/33427) 发起，该字段表示 [MediaInfo](https://cloud.tencent.com/document/product/266/31773#MediaInfo) 的 BasicInfo.MediaUrl；</li>
<li>若流程由 [ProcessMediaByUrl](https://cloud.tencent.com/document/product/266/33426) 发起，该字段表示 [MediaInputInfo](https://cloud.tencent.com/document/product/266/31773#MediaInputInfo) 的 Url。</li>
     * @param MediaMetaData $MetaData 原始视频的元信息。
     * @param array $MediaProcessResultSet 视频处理任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiContentReviewResultSet 视频内容审核任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiAnalysisResultSet 视频内容分析任务的执行状态与结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TasksPriority 任务流的优先级，取值范围为 [-10, 10]。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TasksNotifyMode 任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>Change：只要任务流中每个子任务的状态发生变化，都进行事件通知；</li>
<li>None：不接受该任务流回调。</li>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new MediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("AiContentReviewResultSet",$param) and $param["AiContentReviewResultSet"] !== null) {
            $this->AiContentReviewResultSet = [];
            foreach ($param["AiContentReviewResultSet"] as $key => $value){
                $obj = new AiContentReviewResult();
                $obj->deserialize($value);
                array_push($this->AiContentReviewResultSet, $obj);
            }
        }

        if (array_key_exists("AiAnalysisResultSet",$param) and $param["AiAnalysisResultSet"] !== null) {
            $this->AiAnalysisResultSet = [];
            foreach ($param["AiAnalysisResultSet"] as $key => $value){
                $obj = new AiAnalysisResult();
                $obj->deserialize($value);
                array_push($this->AiAnalysisResultSet, $obj);
            }
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }
    }
}
