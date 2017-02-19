<?php

namespace App\Services;

use App\Contracts\NewsInterface;
use App\News;

class NewsService implements NewsInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->news = new News();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->news->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->news->paginate(8);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->news->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->news->find($id);
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
        return $this->news->where('id',$category_id)->where('page_id','2')->with('pageGallery')->with('pageVideo')->get();
    }

    /**
     * @return mixed
     */
    public function getRandomNews()
    {
        return $this->news->inRandomOrder()->take(8)->get();
    }

    /**
     * @return mixed
     */
    public function getLastRow()
    {
        return $this->news->orderBy('id', 'desc')->take(8)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getShowMoreNews($id)
    {
        return $this->news->where('id','>',$id)->limit(8)->get();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function postSearch($name)
    {
        return $this->news->where('title', 'LIKE', '%'.$name.'%')->orWhere('description', 'LIKE', '%'.$name.'%')->get();
    }

}