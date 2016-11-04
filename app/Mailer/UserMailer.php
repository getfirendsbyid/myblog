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

        $subject = '欢迎来到一栖社区';

        $view = 'welcome';

        $data = ['%name%' => [$user->name],'%token%' => [str_random(40)]];

        $this->sendTo($user, $subject, $view, $data);

    }


}