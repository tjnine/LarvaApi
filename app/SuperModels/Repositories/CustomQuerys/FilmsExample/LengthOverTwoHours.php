<?php 
namespace SuperModels\Repositories\CustomQuerys\FilmsExample;

use SuperModels\Repositories\Contracts\CustomQuerysInterface;
use SuperModels\Repositories\Contracts\RepositoryInterface as Repository;

class LengthOverTwoHours implements CustomQuerysInterface
{
    public function apply($model, Repository $repository)
    {
        $query = $model->where('length', '>', 120);
        return $query;
    }
}

?>