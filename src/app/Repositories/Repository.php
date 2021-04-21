<?php


namespace Corp\Repositories;

use Illuminate\Support\Facades\Config;

abstract class Repository
{
    protected $model = FALSE;

    public function get($select = '*', $take = FALSE)
    {
        $builder = $this->model->select($select);

        if ($take){
            $builder->take($take);
        }
        // dd($builder);


        return $builder->get();
    }
}