<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1659428051452
     *
     * @var int
     */
    public $expiredTimeLong;

    /**
     * @example bd9ccdb121ee950ddead51e943e081fe
     *
     * @var string
     */
    public $loginStateAccessToken;
    protected $_name = [
        'expiredTimeLong'       => 'ExpiredTimeLong',
        'loginStateAccessToken' => 'LoginStateAccessToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTimeLong) {
            $res['ExpiredTimeLong'] = $this->expiredTimeLong;
        }
        if (null !== $this->loginStateAccessToken) {
            $res['LoginStateAccessToken'] = $this->loginStateAccessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTimeLong'])) {
            $model->expiredTimeLong = $map['ExpiredTimeLong'];
        }
        if (isset($map['LoginStateAccessToken'])) {
            $model->loginStateAccessToken = $map['LoginStateAccessToken'];
        }

        return $model;
    }
}
