@extends('layout')
@section('content')  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/bootstrap.min.css') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="https://amar.vote/assets/img/amarVotebd.png" class="w-75" alt="Logo"></span><br/>
                <span class="logo_title mt-5">thêm mới</span>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update',$student->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" name="name" class="form-control" value={{ $student->name}} />
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" name="phone" class="form-control" value={{ $student->phone}} />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" value="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection