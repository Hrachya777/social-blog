<?php

namespace App\Contracts;

interface GamePageInterface
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

    

}
