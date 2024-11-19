<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class GenStepResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 40020503
     *
     * @var string
     */
    public $errCode;

    /**
     * @example Parameter value validation failed
     *
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @description Id of the request
     *
     * @example 696acaa9-eb29-4c1f-b48a-1f901579acc5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content'   => 'Content',
        'errCode'   => 'ErrCode',
        'errMsg'    => 'ErrMsg',
        'eventType' => 'EventType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenStepResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
