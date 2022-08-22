<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceByUserIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceByUserIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
