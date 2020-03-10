@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                    ทดสอบการดึงรายการหนังสือทั้งหมด  [ ทั้งหมด{{$count}} รายการ]

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th> รหัส</th>
                            <th> ประเภทหนังสือ</th>
                            <th>edit </th>
                        </tr>
                        @foreach ($typebooks as $typebook)
                        <tr>
                            <td>{{$typebook->id}}</td>
                            <td>{{$typebook->name}}</td>
                        <td> <a href="{{url('/typebooks/destroy/'.$typebook->id)}}">delete</a></td>
                        </tr>


                        @endforeach
                    </table>
                    {!!$typebooks->render()!!}  <!-- แสดงจำนวนหน้าที่ทำการแบ่ง  -!>
            </div>
        </div>
    </div>
</div>
@endsection

