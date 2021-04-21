<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    //
    public function filter(){

        //связь моделей БД одни ко многим
        return $this->belongsTo('Corp\Filter', 'filter_alias', 'alias');
    }
}
