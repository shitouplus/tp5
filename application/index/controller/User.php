<?php

namespace app\index\controller;

use app\index\model\User as UserModel;

class User
{
    public function create()
    {
        return view();
    }

    public function add()
    {
        $user = new UserModel;
        if ($user->allowField(true)->validate(true)->save(input('post.'))) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }
}