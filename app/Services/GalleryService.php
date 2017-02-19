<?php 

namespace App\Services;

use App\Contracts\GalleryInterface;
use App\Gallery;

class GalleryService implements GalleryInterface
{

	/**
	 * Create a new instance of UserService class
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->gallery = new Gallery();
	}
    
    /**
     * select all article
     *
     * @param 
     * @return  gallery
     */
    public function getAll()
    {
        return $this->gallery->get();
    }


    /**
     * Create salon 
     *
     * @param array $data
     * @return gallery
     */
    public function createGallery($data)
	{
		return $this->gallery->create($data);
	}

    /**
     * get one album 
     *
     * @param array $id
     * @return gallery
     */
    public function getOne($id)
    {
        return $this->gallery->find($id);
    }

    /**
     * delete one image on gallery
     * 
     * @param $id 
     * @return  gallery
     */
    public function deleteGallery($id)
    {
        return $this->getOne($id)->delete();
    }

    /**
     * update Images for Gallery
     * 
     * @param $id
     * @param $data
     * @param gallery
     */
    public function updateImagesGallery($id,$data)
    {
        return $this->getOne($id)->update($data);
    }
 

}