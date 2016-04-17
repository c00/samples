<?php
/**
 * Created by PhpStorm.
 * User: Co
 * Date: 17/04/2016
 * Time: 18:44
 */

namespace c00\dependencies;


class UserManager
{
    use TDependency;

    var $db, $loggedInUser, $isLoggedIn;

    //And then a bunch of code.

    public function getUser($id){
        //Do some magic.
        $user = [ 'name' => 'Peter', 'email' => 'peter@microsoft.com' ];
        
        return $user;
    }

}