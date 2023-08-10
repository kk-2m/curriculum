<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // update_atで降順に並べた後、limitで件数制限をかける
        // orderBy('ソートするキー', '並べ方') ＊並べ方：ASC(昇順), DESK(降順)
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
