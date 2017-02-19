<?php

namespace App\Services;

use App\Contracts\PageGalleryServiceInterface;
use App\PageGallery;

class PageGalleryService implements PageGalleryServiceInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->pagegallery = new PageGallery();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->pagegallery->get();
    }


    /**
     * @param $data
     * @return static
     */
    public function getCreate($data)
    {
        return $this->pagegallery->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        return $this->pagegallery->find($id);
    }

    /**
     * @param $id
     * @return mixed
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

    /**
     * @param $page_id
     * @param $category_id
     * @return mixed
     */
    public function getPageCategory($page_id,$category_id)
    {
        return $this->pagegallery->where('page_id',$page_id)->where('category_id',$category_id)->get();
    }

}