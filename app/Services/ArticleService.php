<?php 

namespace App\Services;

use App\Contracts\ArticleInterface;
use App\Article;

class ArticleService implements ArticleInterface
{

	/**
	 * Create a new instance of UserService class
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->article = new Article();
	}
    
    /**
     * select all article
     *
     * @param 
     * @return  article
     */
    public function getAll()
    {
        return $this->article->get();
    }

    /**
     * select articles
     *
     * @param 
     * @return  article
     */
    public function getAllPaginate()
    {
        return $this->article->paginate(10);
    }
    /**
     * get this month's articles
     *
     * @param 
     * @return  article
     */
    public function getMonthArticles($min,$max)
    {
        return $this->article->where('created_at','>=',$min)->where('created_at','<=',$max)->orderBy('id','desc')->paginate(2);
    }



    /**
     * Create salon 
     *
     * @param array $data
     * @return response
     */
    public function createArticle($data)
	{
		return $this->article->create($data);
	}



    /**
     * get one album 
     *
     * @param array $id
     * @return response
     */
    public function getOne($id)
    {
        return $this->article->find($id);
    }

    /**
     * update  album 
     *
     * @param array $id
     * @param array $data
     * @return response
     */
    public function getUpdateArticle($id,$data)
    {
        return $this->getOne($id)->update($data); 
    }

    /**
     * delete album 
     *
     * @param array $id
     * @return response
     */
    public function deleteArticle($id)
    {  
        return $this->getOne($id)->delete();
    }

    /**
     * Article Album
     *
     * @param $id
     * @return article
     */
    public function articleAlbum($id)
    {
        return $this->article->where('id',$id)->get();
    }

 

}