<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function register_post(Request $request){

        DB::table('users')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ])->paginate();

        return redirect(route('date'));

    }

    public function update($id)
    {
        $whup = DB::table('users')->where('id', $id)->get();

        return view('update', ['whup' => $whup]);
    }

    public function update_post(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ]);

        return redirect(route('date'));
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect(route('date'));
    }

    public function search(Request $search)
    {
            $dates = DB::table('users')->where('name' , 'like' , "%".$search->name."%")->paginate();
            
            return view('date', ['dates' => $dates]);
    }

    public function login_post(Request $login)
    {
        $name_dates = DB::table('users')->where('name', $login->name)->get('name');
        $dates = DB::table('users')->where('name', $login->name)->get();
        foreach( $name_dates as $name_date ){
            if ( $name_date->name == $login->name ) {
                return view('admin', ['dates' => $dates]);
            } else {
                echo "Gagal";
            }
        }
        
    }
}
