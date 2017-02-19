<?php 

namespace App\Services;

use App\Contracts\LanguageInterface;
use App\Language;

class LanguageService implements LanguageInterface
{

	/**
	 * Create a new instance of UserService class
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->language = new Language();
	}
    
    /**
     * select all Language
     *
     * @param 
     * @return  Language
     */
    public function getAll()
    {
        return $this->language->get();
    }


    /**
     * Create Language 
     *
     * @param array $data
     * @return Language
     */
    public function createLang($data)
	{
		return $this->language->create($data);
	}

    /**
     * get one Language 
     *
     * @param array $id
     * @return Language
     */
    public function getOne($id)
    {
        return $this->language->find($id);
    }

    /**
     * delete one Language
     *
     * @param $id
     * @return language
     */
    public function deleteLanguage($id)
    {
        return $this->getOne($id)->delete();
    }
    
 

}