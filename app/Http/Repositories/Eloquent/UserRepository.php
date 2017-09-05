<?php
 namespace  App\Http\Repositories\Eloquent;
 use App\Contracts\UserContract;
 use App\User;

 /**
 * Created by PhpStorm.
 * User: BanuPC
 * Date: 5.09.2017
 * Time: 10:31
 */

Class UserRepository implements  UserContract
{

 /**
  * @var User
  */
 private $user;

 /**
  * UserRepository constructor.
  * @param User $user
     */
 public  function  __construct(User $user)
 {

  $this->user = $user;
 }

 /**
  * @param $params
     */
 public function store($params)
 {
   return $this->user->create($params);
 }
}