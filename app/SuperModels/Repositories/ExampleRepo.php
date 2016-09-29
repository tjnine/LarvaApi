<?php 
namespace SuperModels\Repositories;

use SuperModels\Repositories\Eloquent\Repository;
use SuperModels\Repositories\Contracts\RepoInterface;

class ExampleRepo extends Repository
{
    /**
     * implement the abstract model() function from Repository.php
     */
    function model()
    {
        #return the Eloquent model inside App\Models
        return 'Models\ExampleModel';
    }

}

?>