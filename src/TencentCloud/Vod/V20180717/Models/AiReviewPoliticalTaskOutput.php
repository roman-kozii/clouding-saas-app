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
 * @method float getConfidence() 获取视频涉政评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置视频涉政评分，分值为0到100。
 * @method string getSuggestion() 获取涉政结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置涉政结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method string getLabel() 获取视频鉴政结果标签，取值范围：
<li>politician：政治人物。</li>
<li>violation_photo：违规图标。</li>
 * @method void setLabel(string $Label) 设置视频鉴政结果标签，取值范围：
<li>politician：政治人物。</li>
<li>violation_photo：违规图标。</li>
 * @method array getSegmentSet() 获取有涉政嫌疑的视频片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置有涉政嫌疑的视频片段列表。
 */

/**
 *涉政信息
 */
class AiReviewPoliticalTaskOutput extends AbstractModel
{
    /**
     * @var float 视频涉政评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string 涉政结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var string 视频鉴政结果标签，取值范围：
<li>politician：政治人物。</li>
<li>violation_photo：违规图标。</li>
     */
    public $Label;

    /**
     * @var array 有涉政嫌疑的视频片段列表。
     */
    public $SegmentSet;
    /**
     * @param float $Confidence 视频涉政评分，分值为0到100。
     * @param string $Suggestion 涉政结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     * @param string $Label 视频鉴政结果标签，取值范围：
<li>politician：政治人物。</li>
<li>violation_photo：违规图标。</li>
     * @param array $SegmentSet 有涉政嫌疑的视频片段列表。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewPoliticalSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
