<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');


    // 主テーブル = 外部キーを持たないテーブル
    // 従テーブル = 外部キーによって主テーブルの関連情報を保管しているテーブル

    // Boards（従テーブル）と People（主テーブル）は belongs Toの関係
    // 関連先は一つなので、メソッド名は単数形
    public function person()
    {
        return $this->belongsTo('App\Model\Person');
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleAndPersonName()
    {
        return $this->title . ' (' . $this->person->name . ')';
    }

}
