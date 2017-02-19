<?php

namespace App\Services;

use App\Contracts\CommentInterface;
use App\Comment;

class CommentService implements CommentInterface
{

    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->comment = new Comment();
    }

    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->comment->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->comment->paginate(8);
    }


    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->comment->create($data);
    }

    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->comment->find($id);
    }

    /**
     * delete one Language
     *
     * @param $id
     * @return language
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
     * @param $category_id
     * @param $page_id
     * @return mixed
     */
    public function getCategoryPageComment($page_id,$category_id)
    {
        return $this->comment->where('category_id',$category_id)->where('page_id',$page_id)->with('usercomment')->get();
    }

   
    
}