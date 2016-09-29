<?php 
namespace SuperModels\Repositories\Contracts;

interface RepositoryInterface
{

    public function all($cols = ['*']);
    public function paginate($perPage = 15, $cols = ['*']);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function find($id, $cols = ['*']);
    public function findBy($field, $val, $cols = ['*']);

}


?>