<?php

namespace App\Services;

use App\Contracts\InteresInterface;
use App\Interes;

class InteresService implements InteresInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->interes = new Interes();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->interes->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->interes->paginate(8);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->interes->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->interes->find($id);
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

    /**
     * @param $category_id
     * @return mixed
     */
    public function getPageGallery($category_id)
    {
        return $this->interes->where('id',$category_id)->where('page_id','4')->with('pageGallery')->with('pageVideo')->get();
    }

    /**
     * @return mixed
     */
    public function getRandomInteres()
    {
        return $this->interes->inRandomOrder()->take(8)->get();
    }

    /**
     * @return mixed
     */
    public function getLastRow()
    {
        return $this->interes->orderBy('id', 'desc')->take(8)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function showMoreInterest($id)
    {
        return $this->interes->where('id','>',$id)->limit(8)->get();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function postSearch($name)
    {
        return $this->interes->where('title', 'LIKE', '%'.$name.'%')->orWhere('description', 'LIKE', '%'.$name.'%')->get();
    }



}