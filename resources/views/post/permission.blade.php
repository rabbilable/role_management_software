@extends('post.layout.app')

@section('s')
<div class="col-md-12 mt-4">


    <div class="row">
        <div class="card">
            <div class="card-title text-center bg-dark text-white">
                <span>ADD ROLE</span>
            </div>
            <div class="card-body">
                    {{-- @if($errors->all())
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @endif --}}
                <form action="{{url('/add/role')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="role_name" value="" class="form-control">
                    </div>
                        <div>{{$errors->first('role_name')}}</div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div>
            {{-- <div class="card-title text-center bg-dark text-white">
                <span>ADD PERMISSION</span>
            </div>
            <div class="card-body">
                <form action="{{url('/add/permission')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="permission_name" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div> --}}
            <div class="card">
                <div class="card-title text-center bg-dark text-white">
                    <span>ASSIGN PERMISSION</span>
                </div>
                <div class="card-body">
                    <form action="{{url('/assign/permission')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="" class="">Choose Role</label>
                            </div>
                            <div class="form-group">                            
                                <select name="role_id[]" class="form-control">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}" name="role_id">{{$role->name}}</option>
                                    @endforeach
                                </select>                                     
                            </div>

                        <div class="">
                            <label for="" class="">Choose Permission</label>
                        </div>
                        <div class="form-group">                            
                            <select name="permission_id[]" class="form-control multiple_permission" multiple="multiple">
                                @foreach ($permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                                @endforeach
                            </select>                                     
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-title text-center bg-dark text-white">
                    <span>ASSIGN ROLE</span>
                </div>
                <div class="card-body">
                    <form action="{{url('/assign/role')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="" class="">Choose User</label>
                            </div>
                            <div class="form-group">                            
                                <select name="user_id" class="form-control">
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>                                     
                            </div>
                        <div class="">
                            <label for="" class="">Choose Role</label>
                        </div>
                        <div class="form-group">                            
                            <select name="assigned_role_id" class="form-control multiple_permission">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>                                     
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Role</th>
                        <th>Assigned Permission</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                <strong>{{$role->name}}</strong>
                            </td>
                            <td>
                                @foreach ($role->getAllPermissions() as $permission)
                                    <li class="float-left">
                                        {{$permission->name}} 
                                    </li>
                                    <a href="{{url('/remove/permission')}}/{{$role->id}}/{{$permission->id}}"><i class="float-right far fa-times-circle"></i></a>
                                    <div class="clearfix"></div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>               
            </table>
        </div>

        <div class="row">
            <div class="ml-3">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <strong>{{$user->name}}</strong>
                                </td>
                                <td>
                                    <strong>{{$user->email}}</strong>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>               
                </table>
            </div>
        </div>
        
    </div>
</div>
    @section('footer_script')
        <script>
            $(document).ready(function() {
                $('.multiple-permission').select2();
            });
        </script>
    @endsection
@endsection