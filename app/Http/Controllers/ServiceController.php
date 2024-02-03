<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $categories = Category::all();
        $services = Service::latest( )->get();
        return view('services.index', ['categories' => $categories, 'services' => $services]);
    }

    public function createService(Request $request){
        $data = $request->validate([
            'provider' => 'required|string|min:3',
            'category' => 'required',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|between:0,999999.99',
            'title' => 'required|string',
            'description' => 'required|string',
            'email' => 'required|email|unique:services,email',
            'phone' => 'required|regex:/^\d{5,12}$/|unique:services,phone'
        ]);
        // dd($request);
        
        // $service = new Service([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'price' => $request->input('price'),
        //     'category_id' => $request->input('category'),
        //     'provider' => $request->input('provider'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        // ]);

        $data['provider'] = strip_tags($data['provider']);
        $data['price'] = strip_tags($data['price']);
        $data['title'] = strip_tags($data['title']);
        $data['description'] = strip_tags($data['description']);
        $data['email'] = strip_tags($data['email']);
        $data['phone'] = strip_tags($data['phone']);

        // dd($data);


        $service = new Service($data); 

        $service->category_id = $request->input('category'); 

        $service->save();
        // Service::create($data);

        return redirect('/services');
    }
}
