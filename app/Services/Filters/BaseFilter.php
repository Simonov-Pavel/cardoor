<?php

namespace App\Services\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\FilterRequest;

class BaseFilter
{
    public $request;
    protected $builder;
    protected $delimiter = ',';

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
    }

    public function filter()
    {
        return $this->request->query();
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach($this->filter() as $name => $value){
            if(method_exists($this, $name)){
                call_user_func_array([$this, $name], array_filter([$value]));
            }
        }

        return $this->builder;
    }

    protected function paramToArray($param)
    {
        return explode($this->delimiter, $param);
    }
}