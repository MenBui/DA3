<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nxb extends Model
{
    protected $table = 'nxb';

    public function editNxb($request,$id) {
    	$nxb = Nxb::where('id',$id)->get()->first();
        $nxb->name = $request->name;
        $nxb->save(); 
    }
    public function deleteNxb($id){
    	$nxb = Nxb::where('id',$id)->get()->first();
    	$nxb->delete();
    }
}
