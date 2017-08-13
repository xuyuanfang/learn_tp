<?php
/**
 * 注册登录操作
 */

namespace Home\Model;

use Think\Model\RelationModel;

class LoginModel extends RelationModel
{
    public function register($username, $password, $email)
    {
        $data = array(
            'user_name' => $username,
            'password' => $password,
            'email' => $email,
            'creatime' => date("Y-m-d H:i:s"),
        );

        if ($this->create($data)) {
            $uid = $this->add();
            if ($uid) {
                return true;
            }
        }
        return false;
    }
}