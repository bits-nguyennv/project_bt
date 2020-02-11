@extends('layout')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Tên học sinh</td>
                <td>điện thoại</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td><a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
