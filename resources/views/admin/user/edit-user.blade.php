@extends('admin.master')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Edit User Form</h3>
                        {{ session('message') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" value="{{ $user->name }}" name="name" />
                                <label for="inputEmail">User Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" value="{{ $user->email }}" name="email" readonly />
                                <label for="inputEmail">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="password" name="password" />
                                <label for="inputEmail">Password</label>
                            </div>


                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary">Save User</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
