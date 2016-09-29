<?php 
namespace SuperModels\Repositories\CustomQuerys;

use SuperModels\Repositories\Contracts\RepositoryInterface as Repository;
// use SuperModels\Repositories\Eloquent\Repository;

abstract class CustomQuerys
{
    public abstract function apply($model, Repository $repository);
}
?>