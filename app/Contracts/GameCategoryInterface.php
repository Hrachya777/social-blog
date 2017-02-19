<?php

namespace App\Contracts;

interface GameCategoryInterface
{

    /**
     * select all article
     *
     * @param
     * @return  gallery
     */
    public function getAll();


    /**
     * @return mixed
     */
    public function getAllPaginate();

    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data);

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id);

    /**
     * delete one Language
     *
     * @param $id
     * @return language
     */
    public function getdelete($id);

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function getUpdate($id,$data);

    /**
     * @param $page_id
     * @return mixed
     */
    public function getPageCategory($page_id);

    /**
     * @return mixed
     */
    public function getRandomGameCategory();

    /**
     * @param $page_id
     * @return mixed
     */
    public function getPageCategoryPaginate($page_id);

    /**
     * @return mixed
     */
    public function getRandomGameCategoryInner();
}
