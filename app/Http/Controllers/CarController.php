<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function create()
    {
        return view('car');
    }

    public function store()
    {

        $car = new Car();
        $validatedData = $this->request->validate([
            'brand' => 'required|max:100|alpha_num',
            'model' => 'required|max:100|alpha_num',
            'production_year' => 'required|min:1900|max:2017|integer',
        ]);
        $brand = $this->request->get('brand');
        $model = $this->request->get('model');
        $productionYear = $this->request->get('production_year');
        $car->brand = $brand;
        $car->model = $model;
        $car->production_year = $productionYear;
        $car->save();
        return back()->with('success', 'Success!!');
    }

    public function index()
    {
        $cars = Car::paginate(5);
        return view('index')->with([ 'cars' => $cars]);
    }
    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return redirect('/',301);
    }
    public function edit($id){
        $car = Car::find($id);
        return view('edit')->with([ 'car' => $car]);
    }
    public function update($id){
        $car = Car::find($id);
        $validatedData = $this->request->validate([
            'brand' => 'required|max:100|alpha_dash',
            'model' => 'required|max:100|alpha_num',
            'production_year' => 'required|min:1900|max:2017|integer',
        ]);
        $brand = $this->request->get('brand');
        $model = $this->request->get('model');
        $productionYear = $this->request->get('production_year');
        $car->brand = $brand;
        $car->model = $model;
        $car->production_year = $productionYear;
        $car->save();
        return redirect('/',301);
    }
}
