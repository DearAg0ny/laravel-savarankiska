<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mechanic;
use App\Models\Service;
use File;


class MasterController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::all();
        return view('pages.home', compact('mechanics'));
    }

    public function addMechanics()
    {
        $services = Service::all();
        return view('pages.add-master',compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'lname'=>'required',
            'type'=>'required',
            'city'=>'required',
            'service_id'=>'required'
        ]);
        $path = $request->file('photo')->store('public/images');
        $fileName = str_replace('public/','',$path);

        Mechanic::create([
            'name'=>request('name'),
            'lname'=>request('lname'),
            'type'=>request('type'),
            'photo'=>$fileName,
            'city'=>request('city'),
            'service_id'=>request('service_id'),
        ]);
        return redirect('/');
    }

    public function showMechanics(Mechanic $mechanic){
        return view('pages.show-master',compact('mechanic'));
    }

    public function editMechanic(Mechanic $mechanic){
        return view('pages.edit-master',compact('mechanic'));
    }

    public function update(Mechanic $mechanic, Request $request){
        if(request()->hasFile('photo')){
            File::delete(storage_path('app/public/'.$mechanic->photo));
            $path = $request->file('photo')->store('public/images');
            $fileName = str_replace('public/','',$path);
            Mechanic::where('id',$mechanic->id)->update(['photo'=>$fileName]);

        }
        Mechanic::where('id',$mechanic->id)->update(
            $request->only(['name','lname','type','city'])
        );

        return redirect('/all-masters');
    }

    public function deleteMechanic(Mechanic $mechanic){
        $mechanic->delete();

        return redirect('/all-masters');
    }

    public function searchResults(){
        $results = Mechanic::where('name','like','%'.request('search').'%')->get();
        return view('pages.search', compact('results'));
    }
}
