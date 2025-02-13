<?php
use eftec\bladeone\BladeOne;
function view($view,$data=[]){
    $views = __DIR__."/../Views";
    $cache = __DIR__."/../cache";
    $blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);
    return $blade->run($view,$data);
}

