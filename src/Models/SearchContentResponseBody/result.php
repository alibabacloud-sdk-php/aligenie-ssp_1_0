<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody\result\authors;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody\result\cover;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var string[]
     */
    public $alias;

    /**
     * @var bool
     */
    public $audition;

    /**
     * @var authors[]
     */
    public $authors;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $charge;

    /**
     * @var int
     */
    public $commCateId;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var float
     */
    public $hotScore;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $lyric;

    /**
     * @var string
     */
    public $orderIndex;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string[]
     */
    public $styles;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $valid;
    protected $_name = [
        'albumId'     => 'AlbumId',
        'alias'       => 'Alias',
        'audition'    => 'Audition',
        'authors'     => 'Authors',
        'category'    => 'Category',
        'charge'      => 'Charge',
        'commCateId'  => 'CommCateId',
        'cover'       => 'Cover',
        'description' => 'Description',
        'duration'    => 'Duration',
        'hotScore'    => 'HotScore',
        'id'          => 'Id',
        'itemType'    => 'ItemType',
        'lyric'       => 'Lyric',
        'orderIndex'  => 'OrderIndex',
        'source'      => 'Source',
        'styles'      => 'Styles',
        'title'       => 'Title',
        'type'        => 'Type',
        'valid'       => 'Valid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->audition) {
            $res['Audition'] = $this->audition;
        }
        if (null !== $this->authors) {
            $res['Authors'] = [];
            if (null !== $this->authors && \is_array($this->authors)) {
                $n = 0;
                foreach ($this->authors as $item) {
                    $res['Authors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->charge) {
            $res['Charge'] = $this->charge;
        }
        if (null !== $this->commCateId) {
            $res['CommCateId'] = $this->commCateId;
        }
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->hotScore) {
            $res['HotScore'] = $this->hotScore;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->lyric) {
            $res['Lyric'] = $this->lyric;
        }
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->styles) {
            $res['Styles'] = $this->styles;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = $map['Alias'];
            }
        }
        if (isset($map['Audition'])) {
            $model->audition = $map['Audition'];
        }
        if (isset($map['Authors'])) {
            if (!empty($map['Authors'])) {
                $model->authors = [];
                $n              = 0;
                foreach ($map['Authors'] as $item) {
                    $model->authors[$n++] = null !== $item ? authors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Charge'])) {
            $model->charge = $map['Charge'];
        }
        if (isset($map['CommCateId'])) {
            $model->commCateId = $map['CommCateId'];
        }
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['HotScore'])) {
            $model->hotScore = $map['HotScore'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Lyric'])) {
            $model->lyric = $map['Lyric'];
        }
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Styles'])) {
            if (!empty($map['Styles'])) {
                $model->styles = $map['Styles'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
