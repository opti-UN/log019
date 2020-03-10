<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;   // นำโมเดล typeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
public function index(){
    $typebooks =TypeBooks::all();
    $count =TypeBooks::count();  //นับจำนวนแถวทั้งหมด
    $typebooks=TypeBooks::paginate(5); // การแบ่งจำหน้าในการแสดงผล

    return view('Typebooks.index',['typebooks'=>$typebooks,
    'count'=>$count]);

}
public function destroy($id){
    TypeBooks::destroy($id);
    return back();
}

}
