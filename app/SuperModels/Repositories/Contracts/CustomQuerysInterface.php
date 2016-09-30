<?php 
namespace SuperModels\Repositories\Contracts;

use SuperModels\Repositories\CustomQuerys\CustomQuerys as Custom;

interface CustomQuerysInterface
{
    public function skipCustom($status = true);
    public function getCustom();
    public function getByCustom(Custom $custom);
    public function pushCustom(Custom $custom);
    public function applyCustom();
}



?>