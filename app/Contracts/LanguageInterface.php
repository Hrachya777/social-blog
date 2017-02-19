<?php 

namespace App\Contracts;

interface LanguageInterface
{

     /**
     * select all article
     *
     * @param 
     * @return  gallery
     */
    public function getAll();


   /**
     * Create salon 
     *
     * @param array $data
     * @return gallery
     */
    public function createLang($data);
    
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
    public function deleteLanguage($id);

    
}
