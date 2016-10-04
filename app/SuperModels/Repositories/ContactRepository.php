<?php 
namespace SuperModels\Repositories;

use SuperModels\Repositories\Eloquent\Repository;
use SuperModels\Repositories\Contracts\RepositoryInterface;

class ContactRepository extends Repository
{
    function model()
    {
        return 'Models\Contact';
    }
}


?>