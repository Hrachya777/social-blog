<?php

namespace App\Contracts;

interface NewsInterface
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
     * Create salon
     *
     * @param array $data
     * @return gallery
     */
    public function getCreate($data);

    /**
     * get one album
     *
     * @param array $id
     * @return response
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
     * @param $category_id
     * @return mixed
     */
    public function getPageGallery($category_id);

    /**
     * @return mixed
     */
    public function getRandomNews();

    /**
     * @return mixed
     */
    public function getLastRow();

    /**
     * @param $id
     * @return mixed
     */
    public function getShowMoreNews($id);

    /**
     * @param $name
     * @return mixed
     */
    public function postSearch($name);
    
}
