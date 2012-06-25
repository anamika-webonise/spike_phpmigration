<?php
class UserShell extends Shell {
    public $tasks = array('User');

    public function main() {
        $this->User->execute();
    }

}

