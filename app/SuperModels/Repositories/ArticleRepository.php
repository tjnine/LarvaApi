<?php 
namespace SuperModels\Repositories;

use SuperModels\Repositories\Eloquent\Repository;
use SuperModels\Repositories\Contracts\RepositoryInterface;

class ArticleRepository extends Repository
{

    function model()
    {
        return 'Models\Article';
    }

}

?>