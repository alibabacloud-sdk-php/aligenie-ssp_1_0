<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoResponseBody\dataObj;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoResponseBody\result;
use AlibabaCloud\Tea\Model;

class AuthLoginWithThirdUserInfoResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @var dataObj
     */
    public $dataObj;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 73C67BD9-175A-1324-8202-9FAABBB3E6FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'dataObj'   => 'DataObj',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dataObj) {
            $res['DataObj'] = null !== $this->dataObj ? $this->dataObj->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthLoginWithThirdUserInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DataObj'])) {
            $model->dataObj = dataObj::fromMap($map['DataObj']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
