<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PROJECT_ID
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==
     *
     * @var string
     */
    public $id;

    /**
     * @example OPEN_ID
     *
     * @var string
     */
    public $idType;

    /**
     * @example 123
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'encodeKey'      => 'EncodeKey',
        'encodeType'     => 'EncodeType',
        'id'             => 'Id',
        'idType'         => 'IdType',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
