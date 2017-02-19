<?php

namespace App\Services;

use App\Contracts\GameCategoryInterface;
use App\GameCategory;

class GameCategoryService implements GameCategoryInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->game_category = new GameCategory();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->game_category->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->game_category->paginate(16);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->game_category->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->game_category->find($id);
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
     * @param $page_id
     * @return mixed
     */
    public function getPageCategory($page_id)
    {
        return $this->game_category->where('game_page_id',$page_id)->get();
    }

    /**
     * @param $page_id
     * @return mixed
     */
    public function getPageCategoryPaginate($page_id)
    {
        return $this->game_category->where('game_page_id',$page_id)->paginate(16);
    }

    /**
     * @return mixed
     */
    public function getRandomGameCategory()
    {
        return $this->game_category->inRandomOrder()->take(16)->paginate(16);
    }

    /**
     * @return mixed
     */
    public function getRandomGameCategoryInner()
    {
        return $this->game_category->inRandomOrder()->take(8)->get();
    }

}