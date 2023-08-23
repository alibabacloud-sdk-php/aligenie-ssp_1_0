<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest\payload\scheduleInfo;

use AlibabaCloud\Tea\Model;

class statutoryWorkingDay extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $hour;

    /**
     * @example 0
     *
     * @var int
     */
    public $minute;
    protected $_name = [
        'hour'   => 'Hour',
        'minute' => 'Minute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statutoryWorkingDay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }
        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        return $model;
    }
}
