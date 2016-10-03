<?php 
namespace SuperModels\Repositories\Criteria\Articles;

use SuperModels\Repositories\Contracts\CriteriaInterface;
use SuperModels\Repositories\Criteria\Criteria;
use SuperModels\Repositories\Contracts\RepositoryInterface as Repository;

class AuthorIsTeej extends Criteria
{
        /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $query = $model->where('author', '=', 'teejten');
        return $query;
    }
}

?>