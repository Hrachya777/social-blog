<?php
namespace App\Services;
use App\Contracts\SportInterface;
use App\Sport;
class SportService implements SportInterface
{
    /**
     * NewsService constructor.
     */
    public function __construct()
    {
        $this->sport = new Sport();
    }
    /**
     * select all Language
     *
     * @param
     * @return  Language
     */
    public function getAll()
    {
        return $this->sport->get();
    }
    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->sport->paginate(8);
    }
    /**
     * Create Language
     *
     * @param array $data
     * @return Language
     */
    public function getCreate($data)
    {
        return $this->sport->create($data);
    }
    /**
     * get one Language
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->sport->find($id);
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
     * @return mixed
     */
    public function getPageGallery($category_id)
    {
        return $this->sport->where('id',$category_id)->with('pageGallery')->with('pageVideo')->get();
    }
    /**
     * @return mixed
     */
    public function getRandomSport()
    {
        return $this->sport->inRandomOrder()->take(8)->get();
    }
    /**
     * @param $name
     * @return mixed
     */
    public function postSearch($name)
    {
        return $this->sport->where('title', 'LIKE', '%'.$name.'%')->orWhere('description', 'LIKE', '%'.$name.'%')->get();
    }
}