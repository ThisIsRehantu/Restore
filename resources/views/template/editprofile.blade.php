@extends("main")

@section("content")
@include('../navbar')

<style>
    .css-6qw8qz {
    border: 1px solid rgba(203,203,203,0.5);
    background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
}
.css-6qw8qz {
    border: 1px solid rgba(203,203,203,0.5);
    background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
}
.css-6qw8qz {
    border: 1px solid rgba(203,203,203,0.5);
    background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
}
</style>

            
<div class="wrapper pt-5">
    <div class="container mb-5">
        <div class="row mt-1 justify-content-center">
            <div class="col-md-6">
                <div class="card mt-1 bg-dark shadow-lg mt-1 text-white">
                    <div class="p-3 border-none rounded-2xl css-6qw8qz">
                        <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('success'))
                          <div class="alert alert-success">
                              <ul>
                                  <li>{{session('success')}}</li>
                              </ul>
                          </div>
                        @endif
                        <form id="editProfile" action="{{url('/user/edit/profile')}}" method="POST">
                            @csrf
                            <div class="row mt-2">
                            <div class="col-4"><strong>Name</strong></div>
                            <div class="col"><input placeholder="name" type="text" name="name" value="{{Auth()->user()->name}}" class="form-control"></div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-4"><strong>Username</strong></div>
                            <div class="col"><input placeholder="username" type="text" name="username" value="{{Auth()->user()->username}}" class="form-control"></div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-4"><strong>Password</strong></div>
                            <div class="col"><input type="password" name="password" id="password" placeholder="(Enter if want to changed)" class="form-control"></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-12 text-end">
                            <button class="btn btn-primary" type="submit">Edit Profile</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../footer')
@endsection