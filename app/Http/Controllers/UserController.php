<?php
/**
 * Created by PhpStorm.
 * User: Anonymous
 * Date: 2/28/2019
 * Time: 2:39 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
public function edit($id){
  $user=User::find($id);
  return view('users/account_details',['user'=>$user]);
}
public function update(Request $request, $id){

   $this->validate($request,[
       'name'=>'required',
      'email'=>'required'
    ]);

    $user=User::find($id);


    if($request->hasFile('picture')){
//getFileName
        $filenamewithExt=$request->file('picture')->getClientOriginalName();
        $filename=pathinfo($filenamewithExt,PATHINFO_FILENAME);
        $fileextension=$request->file('picture')->getClientOriginalExtension();


        $filenameToStore=$filename.'_'.time().'.'.$fileextension;

        //saving
        $path=$request->file('picture')->move('img/profile_pictures',$filenameToStore);
    }else{
        $filenameToStore=$user->picture;
    }
    $user = User::find($id);
    $user->name = $request->name;
    $user->picture = $filenameToStore;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('edit_user',$user->id)->with('success', 'Post has been updated successfully!');

}
}
