<?php

class UserTask extends Shell {
    public $uses = array('User');

    public function execute() {

    $users = $this->User->find("all");

    /*foreach($users as $user)
    {
        $this->out($user['User']['username']);

    }*/


    }

    function add()
    {
        $total = 0;
        $args = func_get_args();
        foreach($args as $arg)
        {
             $this->out($arg['username']);
        }

    }

}
