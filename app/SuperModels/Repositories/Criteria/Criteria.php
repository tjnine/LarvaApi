<?php 
namespace SuperModels\Repositories\Criteria;

use SuperModels\Repositories\Contracts\RepositoryInterface as Repository;

abstract class Criteria
{
     public abstract function apply($model, Repository $repository);
}
?>