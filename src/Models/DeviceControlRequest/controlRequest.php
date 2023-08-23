<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlRequest;

use AlibabaCloud\Tea\Model;

class controlRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $muted;

    /**
     * @example 10
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'muted'  => 'Muted',
        'volume' => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->muted) {
            $res['Muted'] = $this->muted;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Muted'])) {
            $model->muted = $map['Muted'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
