<?php 
namespace SuperModels\Repositories\Eloquent;

use SuperModels\Contracts\RepositoryInterface;
use SuperModels\Repositories\Contracts\CustomQuerysInterface;
use SuperModels\Repositories\CustomQuerys\CustomQuerys;


use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class Repository extends RepositoryInterface, CustomQuerysInterface
{
    private $app;
    protected $model,
              $custom,
              $skipCustom = false;

    public function __construct(App $app, Collection $collection)
    {
        $this->app = $app;
        $this->custom = $collection;
        $this->resetScope();
        $this->makeModel();
    }

    public function all($cols = ['*'])
    {
        $this->applyCustom();
        return $this->model->get($cols);
    }

    public function paginate($perPage = 15, $cols = ['*'])
    {
        $this->applyCustom();
        return $this->model->paginate($perPage, $cols);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id, $attribute = 'id')
    {
        return $this->model->where($attribute, '=', $id);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id, $cols = ['*'])
    {
        $this->applyCustom();
        return $this->model->find($id, $cols)
    }

    public function findBy($field, $vals, $cols = ['*'], $attribute)
    {
        $this->applyCustom();
        return $this->model->where($attribute, '=', $vals)->first($cols)
    }

    abstract function model();

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if(!model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\Dataase\Eloquent\Model");
        }
        return $this->model = $model->newQuery();
    }

    public function resetScope()
    {
        $this->skipCustom(false);
        return $this;
    }

    public function skipCustom($status = true)
    {
        $this->skipCustom = $status;
        return $this;
    }

    public function getCustom()
    {
        return $this->custom;
    }

    public function getByCustom(Custom $custom)
    {
        $this->model = $custom->apply($this->model, $this);
        return $this;
    }

    public function pushCustom(Custom $custom)
    {
        $this->custom->push($custom);
        return $this;
    }

    public function applyCustom()
    {
        if($this->skipCustom == true) {
            return true;
        }

        foreach($this->getCustom() as $custom) {
            if($custom instanceof Custom) {
                $this->model = $custom->apply($this->model, $this);
            }
        }
        return $this;
    }

}
?>