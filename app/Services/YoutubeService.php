<?php 

namespace App\Services;

use App\Contracts\YoutubeInerface;
use App\Youtube;


class YoutubeService implements YoutubeInerface
{

    /**
     * YoutubeService constructor.
     */
	public function __construct()
	{
        $this->youtube = new Youtube();
	}

    /**
     * Create video in youtube
     *
     * @param $data
     * @return youtube
     */
    public function createYoutubeVideo($data)
    {
        return $this->youtube->create($data);
    }

    /**
     * Get one video
     *
     * @param $id
     * @return youtube
     */
    public function getOneYoutubeVideo($id)
    {
        return $this->youtube->find($id);
    }

    /**
     * Get All video
     * 
     * @param 
     * @return youtube
     */
    public function getAllYoutbeVideo()
    {
        return $this->youtube->get();
    }

    /**
     * Get All video paginate
     * 
     * @param 
     * @return youtube
     */
    public function getAllYoutbeVideoPaginate()
    {
        return $this->youtube->paginate(3);
    }
   
    /**
     * update  youtube video 
     *
     * @param array $id
     * @param array $data
     * @return response
     */
    public function getUpdateYoutube($id,$data)
    {
        return $this->getOneYoutubeVideo($id)->update($data); 
    }

    /**
      * delete album 
      *
      * @param array $id
      * @return response
     */
    public function deletevideo($id)
    {  
        return $this->getOneYoutubeVideo($id)->delete();
    }

    /**
     * @param $page_id
     * @param $category_id
     * @return mixed
     */
    public function getPageCategoryVideo($page_id,$category_id)
    {
        return $this->youtube->where('page_id',$page_id)->where('category_id',$category_id)->get();
    }
}