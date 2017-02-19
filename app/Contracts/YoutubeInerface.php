<?php 

namespace App\Contracts;

interface YoutubeInerface
{

    /**
     * Create video in youtube
     *
     * @param $data
     * @return youtube
     */
    public function createYoutubeVideo($data);

    /**
     * Get one video
     *
     * @param $id
     * @return youtube
     */
    public function getOneYoutubeVideo($id);

    /**
     * Get All video
     * 
     * @param 
     * @return youtube
     */
    public function getAllYoutbeVideo();

    /**
     * Get All video paginate
     * 
     * @param 
     * @return youtube
     */
    public function getAllYoutbeVideoPaginate();

    /**
     * update  youtube video 
     *
     * @param array $id
     * @param array $data
     * @return response
     */
    public function getUpdateYoutube($id,$data);

    /**
      * delete album 
      *
      * @param array $id
      * @return response
     */
    public function deletevideo($id);

    /**
     * @param $page_id
     * @param $category_id
     * @return mixed
     */
    public function getPageCategoryVideo($page_id,$category_id);

}
