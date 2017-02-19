<?php

namespace App\Services;

use App\Contracts\SubscripeInterface;
use App\Subscripe;

class SubscripeService implements SubscripeInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->subscripe = new Subscripe();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->subscripe->get();
    }

    /**
     * @return mixed
     */
    public function getAllActiveStatus()
    {
        return $this->subscripe->where('status','0')->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->subscripe->paginate(9);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->subscripe->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->subscripe->find($id);
    }

    /**
     * delete one Language
     *
     * @param $id
     * @return language
     */
    public function getdelete($id)
    {
        return $this->getOne($id)->delete();
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function getUpdate($id,$data)
    {
        return $this->getOne($id)->update($data);
    }


}