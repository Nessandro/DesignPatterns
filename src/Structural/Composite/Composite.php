<?php
namespace DesignPatterns\Structural\Composite;

/*
File:   Run.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Run
*/

use \DesignPatterns\Structural\Composite\Components;

class Composite
{

    public function run(): string
    {
        /**
         * login section
         */
        $div = new Components\DivComponent('loginSection');
        $div->addNode(new Components\LabelField('loginLabel', 'Login:'));
        $div->addNode(new Components\TextField('login'));

        /**
         * password section
         */
        $divPw = new Components\DivComponent('passwordSection');
        $divPw->addNode(new Components\LabelField('pwLabel', 'Password:'));
        $divPw->addNode(new Components\PasswordField('password'));

        /**
         * main form
         */
        $form = new Components\Form('baseForm');
        $form->addNode($div);
        $form->addNode($divPw);

        /**
         *
         * rendering output
         */
        return $form->render();
    }



}