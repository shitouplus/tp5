<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'nickname|昵称' => 'require|min:5|token',
        'email|邮箱' => 'require|email',
        'birthday|生日' => 'dateFormat:Y-m-d',
    ];
}