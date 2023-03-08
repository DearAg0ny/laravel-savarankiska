<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('pages.home', compact('services'));
    }

    public function addService(){
        $services = Service::all();
        return view('pages.add-service',compact('services'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'service_name'=>'required',
            'address'=>'required',
            'manager'=>'required'
        ]);

        Service::create([
            'service_name'=>request('service_name'),
            'address'=>request('address'),
            'manager'=>request('manager'),
        ]);
        return redirect('/');
    }

    public function showService(Service $service){
        return view('pages.show-service',compact('service'));
    }

    public function editService(Service $service){
        return view('pages.edit-service',compact('service'));
    }

    public function storeUpdate(Service $service, Request $request){
        Service::where('id',$service->id)->update(
            $request->only(['service_name','address','manager'])
        );

        return redirect('/service/'.$service->id);
    }

    public function deleteService(Service $service){
        $service->delete();

        return redirect('/');
    }
}
