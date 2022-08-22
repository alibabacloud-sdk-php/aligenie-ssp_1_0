<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListAlbumIsAddedShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $albumIdListShrink;

    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'albumIdListShrink' => 'AlbumIdList',
        'deviceInfoShrink'  => 'DeviceInfo',
        'userInfoShrink'    => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumIdListShrink) {
            $res['AlbumIdList'] = $this->albumIdListShrink;
        }
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlbumIsAddedShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumIdList'])) {
            $model->albumIdListShrink = $map['AlbumIdList'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
