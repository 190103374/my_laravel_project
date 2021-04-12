<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetails;

class UploadController extends Controller
{
    public function uploadForm() {
        return view('home');
    }
    public function uploadSubmit(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'photos'=>'required',
            ]);
            if($request->hasFile('photos'))
            {
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('photos');
            foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            
            if($check)
            {
            //$users = User::create($request->all());
            foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            UserDetails::create([
            'user_id' => auth()->user()->id,
            'filename' => $filename,
            'project_type' => $filename
            ]);
            }
            echo "Upload Successfully";
            }
            else
            {
            echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }
    }
}
