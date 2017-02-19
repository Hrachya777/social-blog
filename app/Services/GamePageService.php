<?php

namespace App\Services;

use App\Contracts\GamePageInterface;
use App\PageGame;

class GamePageService implements GamePageInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->page_game = new PageGame();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->page_game->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->page_game->paginate(10);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->page_game->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->page_game->find($id);
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