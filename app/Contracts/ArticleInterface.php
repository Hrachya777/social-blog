<?php 

namespace App\Contracts;

interface ArticleInterface
{

    /**
     * select all article
     *
     * @param 
     * @return  article
     */
    public function getAll();



    /**
    * Create album 
    *
    * @param array $data
    * @return response
    */
    public function createArticle($data);
    
    /**
     * get one album 
     *
     * @param array $id
     * @return response
     */
    public function getOne($id);


    /**
     * update  album 
     *
     * @param array $id
     * @param array $data
     * @return response
     */
    public function getUpdateArticle($id,$data);

    /**
     * delete album 
     *
     * @param array $id
     * @return response
     */
    public function deleteArticle($id);


    /**
     * select articles
     *
     * @param 
     * @return  article
     */
    public function getAllPaginate();
        /**
     * get this month's articles
     *
     * @param 
     * @return  article
     */
    public function getMonthArticles($min,$max);



}
