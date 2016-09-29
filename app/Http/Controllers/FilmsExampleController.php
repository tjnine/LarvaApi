<?php 
namespace App\Http\Controllers;

use SuperModels\Repositories\CustomQuerys\FilmsExample\LengthOverTwoHours;
use SuperModels\Repositories\FilmRepository as Film;

class FilmsExampleController extends Controllers
{
    private $film;

    public function __construct(Film $film)
    {
        $this->film = $film;
    }

    public function index()
    {
        #useful for stacking querys
        $this->film->pushCustom(new LengthOverTwoHours);
        return \Response::json($this->film->all());

        #useful for applying a single query
        $custom = new LengthOverTwoHours;
        return \Response::json($this->film->getByCustom($custom)->all());
    }

}
?>