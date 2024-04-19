<?php

namespace  App\Repository\Doctors;
use App\Models\Doctor;
use App\Models\Section;
use App\Traits\UploadTrait;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use App\Http\Requests\Dashboard\DoctorRequest;
use App\Interfaces\Doctors\DoctorRepositoryInterface;

class DoctorRepository implements DoctorRepositoryInterface
{

    use UploadTrait;
    public function index(){
        $doctors = Doctor::paginate(10);
        return view('dashboard.doctors.index', compact('doctors'));
    }

    public function store($request)
    {
   DB::beginTransaction();
            $doctors = new Doctor();
            $doctors->email =$request->email;
            $doctors['password'] = $request->has('password') ? bcrypt( $request->password) :
            $doctors->password;
            $doctors->section_id =$request->section_id;
            $doctors->phone = $request->phone;
            $doctors->price =$request->price;
            $doctors->status =$request->status;
            $doctors->save();
            //Store Translate
            $doctors->name = $request->name;
            $doctors->appointments =implode(",",$request->appointments);
            $doctors->save();
            //Upload img
            $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$doctors->id,'App\Models\Doctor');
DB::commit();
            // Doctor::create($doctors);
            return redirect()->route('dashboard.doctors.index')->with('add', 'تم أضافة دكتور ');
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

