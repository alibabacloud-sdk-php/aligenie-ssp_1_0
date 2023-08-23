<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class AuthLoginWithThirdUserInfoRequest extends Model
{
    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example wechat_ecology_openness
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example o5qxy6EItZBasv2VZAf-MGwllHL4
     *
     * @var string
     */
    public $thirdUserIdentifier;

    /**
     * @example weChatUser
     *
     * @var string
     */
    public $thirdUserType;
    protected $_name = [
        'extInfo'             => 'ExtInfo',
        'sceneCode'           => 'SceneCode',
        'thirdUserIdentifier' => 'ThirdUserIdentifier',
        'thirdUserType'       => 'ThirdUserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->thirdUserIdentifier) {
            $res['ThirdUserIdentifier'] = $this->thirdUserIdentifier;
        }
        if (null !== $this->thirdUserType) {
            $res['ThirdUserType'] = $this->thirdUserType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthLoginWithThirdUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['ThirdUserIdentifier'])) {
            $model->thirdUserIdentifier = $map['ThirdUserIdentifier'];
        }
        if (isset($map['ThirdUserType'])) {
            $model->thirdUserType = $map['ThirdUserType'];
        }

        return $model;
    }
}
