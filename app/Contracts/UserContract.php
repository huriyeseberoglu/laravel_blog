<?php
namespace  App\Contracts;

interface  UserContract
{
    public function store($params);

    /**
     * @param $id
     * @return mixed
     */
    public  function  findOrfail($id);
}