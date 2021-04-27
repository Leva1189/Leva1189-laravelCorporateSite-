<?php


namespace Corp\Repositories;

use Illuminate\Support\Facades\Config;

abstract class Repository
{
    protected $model = FALSE;

    public function get($select = '*', $take = FALSE, $pagination = FALSE, $where = FALSE)
    {
        $builder = $this->model->select($select);

        if ($take){
            $builder->take($take);
        }

        if ($where){
            $builder->where($where[0], $where[1]);

        }
        // dd($builder);

        //Реализовуем пагинацию
        if ($pagination){
            return $this->check($builder->paginate(Config::get('settings.paginate')));
        }


        return $this->check($builder->get());
    }

    protected function check($result){
        if ($result->isEmpty()){
            return FALSE;
        }

        $result->transform(function ($item, $key){

            //json_decode - декодирует все строки img. Для таблиц slider делаем исключения
            if (is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)){
                //json_decode($item->img) - декодируем формат json и формируем в обычный обьект
                $item->img = json_decode($item->img);
            }


            return $item;
        });

        return $result;

    }

    public function one($alias, $attr = array()){
        $result = $this->model->where('alias', $alias)->first();

        return $result;
    }
}