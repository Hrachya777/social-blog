<?php 

namespace App\Services;

use App\Contracts\UserInterface;
use App\User;
use Mail;


class UserService implements UserInterface
{

    /**
     * UserService constructor.
     */
	public function __construct()
	{
        $this->user = new User();
	}

    /**
    * Create new user 
    *
    * @param array $dataArray
    * @return response
    */
	public function createOne($dataArray)
	{
		return $this->user->create($dataArray);
	}

    /**
    * Get one user by user id
    *
    * @param integer $id
    * @return response
    */
    public function getOne($id)
    {
        return $this->user->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDelete($id)
    {
        return $this->getOne($id)->delete();
    }

    /**
     * Select all social login Email
     *
     * @param @emil
     * @return user
     */
    public function getAllSocial($email)
    {
        return $this->user->where('email',$email)->first();
    }

    /**
     * Select all social login Email
     *
     * @param @emil
     * @return user
     */
    public function getAllEmail($email)
    {
        return $this->user->where('email',$email)->first();
    }

    /**
     * Update token 
     *
     * @param $token
     * @param $email
     * @return user
     */
    public function updateSocialToken($email,$token)
    {
        return $this->user->where('email',$email)->update($token);
    }

    /**
     * Select All user
     *
     * @param 
     * @return user 
     */
    public function getAllUser()
    {
        return $this->user->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->user->where('role','user')->paginate(10);
    }

    /**
     * 
     */
    public function getUserReg()
    {
        return $this->user->where('facebook_id',null)->where('google_id',null)->where('twitter_id',null)->where('role','user')->get();
    }

    /**
     * Select All users in facebook
     *
     * @param
     * @return user
     */
    public function getAllUserFacebook()
    {
        return $this->user->where('facebook_id','!=', null)->paginate(10);
    }

    /**
     * Select All users in google
     * 
     * @param 
     * @return user 
     */
    public function getAllUserGoogle()
    {
        return $this->user->where('google_id','!=', null)->paginate(10);
    }

    /**
     * Select All users in tweeter
     *
     * @param
     * @return user
     */
    public function getAllUserTweeter()
    {
        return $this->user->where('twitter_id','!=', null)->paginate(10);
    }

    /**
     * @param $dataEmail
     * @param $email
     */
    public function sendEmailFromRegistration($dataEmail,$email)
    {
        Mail::send('user.user_profile.mail.reminder', $dataEmail, function($message) use ($email)
        {
            $message->from('thinkday@gamil.com');
            $message->to($email)->subject("Welcome!");
        });
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
     * @param $id
     * @param $data
     * @return mixed
     */
    public function getPassword($id,$data)
    {
        return $this->user->where('id',$id)->update($data);
    }
    
}