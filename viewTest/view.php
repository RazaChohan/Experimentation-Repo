<?php

class view
{

    public function render($params)
    {
        $output = shell_exec("php abc.php $params");
        return $output;
    }

}
