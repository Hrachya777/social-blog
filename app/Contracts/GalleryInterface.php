<?php 

namespace App\Contracts;

interface GalleryInterface
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
    public function createGallery($data);
    
    /**
     * get one album 
     *
     * @param array $id
     * @return response
     */
    public function getOne($id);

    /**
     * delete one image on gallery
     * 
     * @param $id 
     * @return  gallery
     */
    public function deleteGallery($id);

    /**
     * update Images for Gallery
     * 
     * @param $id
     * @param $data
     * @param gallery
     */
    public function updateImagesGallery($id,$data);


}
