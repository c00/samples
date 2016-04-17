<?php
/**
 * Created by PhpStorm.
 * User: Co
 * Date: 17/04/2016
 * Time: 18:44
 */

namespace c00\dependencies;


class MyProjectContainer extends DependencyContainer
{
    const USER_MANAGER = UserManager::class;

    /**
     * Get the User Manager.
     *
     * @return UserManager
     */
    public function getUm(){
        return $this->getDependency($this::USER_MANAGER);
    }


}