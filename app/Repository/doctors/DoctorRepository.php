<?php

namespace  App\Repository\Doctors;
use App\Models\Doctor;
use App\Models\Section;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Interfaces\Doctors\DoctorRepositoryInterface;

class DoctorRepository implements DoctorRepositoryInterface
{

    use UploadTrait;
    public function index(){
        $doctors = Doctor::paginate(10);
        return view('dashboard.doctors.index', compact('doctors'));
    }

    public function store( $request)
    {
        // $data = $request->validate([
        //     'name'=> 'required|string|min:2|max:100',
        // ]);
        // $name = $request->name;
        // Doctor::create($data);
        // return redirect()->route('dashboard.doctors.index')->with('add', 'تم أضافة دكتور '. $name);
    }



    public function create()
    {
        $sections = Section::all();
        return view('dashboard.doctors.add', compact('sections'));
    }




    public function edit($id){
        $doctor = Doctor::find($id);

       return view('dashboard.doctors.edit', ['doctor'=>$doctor ]);
   }

   public function update( $request)
   {
       $data = $request->validate([
        'name'=> 'required|string|min:2|max:100',
       ]);
       $name = $request->name;
       Doctor::findOrFail($request->id)->update($data);
       return redirect()->route('dashboard.doctors.index')->with('edit', 'تم تعديل الدكتور الى '. $name);
    }




    public function destroy( $request)
    {
        // Find the post by its ID
        Doctor::findOrFail($request->id)->delete();

         // Return a response indicating success
         return redirect()->route('dashboard.doctors.index')->with('delete', 'تم حذف الدكتور بنجاح ');
        }
}

