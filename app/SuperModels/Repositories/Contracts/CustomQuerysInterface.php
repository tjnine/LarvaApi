<?php 
namespace SuperModels\Repositories\Contracts;

use SuperModels\Repositories\CustomQuerys\CustomQuerys as Custom;

interface CustomQuerysInterface
{
    public function skipCustom($status = true);
    public function getCustom();
    public function getByCustom(Custom $Custom);
    public function pushCustom(Custom $Custom);
    public function applyCustom();
}



?>