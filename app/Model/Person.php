<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // 主テーブル = 外部キーを持たないテーブル
    // 従テーブル = 外部キーによって主テーブルの関連情報を保管しているテーブル

    // People（主テーブル）と Boards（従テーブル）は１対多（has Many）の関係
    public function boards()
    {
        return $this->hasMany('App\Model\Board');
    }
}
