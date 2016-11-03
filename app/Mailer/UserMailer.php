<?php
/**
 * Created by PhpStorm.
 * User: YV
 * Date: 16/11/2
 * Time: 上午11:35
 */

namespace App\Mailer;


class UserMailer extends Mailer
{

    public function  welcome($user){

        $subject = '一栖社区 邮箱确认';

        $view = 'email.welcome';

        $data = ['%name%' => [$user->name],'%token%' => [str_random(40)]];

        $this->sendTo($user, $subject, $view, $data);

    }


}