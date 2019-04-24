@extends('post.layout.app')

@section('s')

<form action="{{url('/employee')}}" method="POST">
    @csrf
    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="card" >
                <div class="card-title">
                    <h3 class="text-center">Assign the categories</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="form-group">Choose Employee</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" >{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-group">Choose Department</label>
                        <select name="dept_id" id="" class="form-control">
                            @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-group">Choose Designation</label>
                        <select name="designation_id" id="" class="form-control">
                            @foreach ($designations as $designation)
                                <option value="{{$designation->id}}">{{$designation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-group">Reporting To</label>
                        <select name="reporting_id" id="" class="form-control">
                            @foreach ($reportings as $reporting)
                                <option value="{{$reporting->id}}">{{$reporting->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5">
                <table class="table table-bordered">
                    <div class="text-center bg-light"><h3>Employee Information</h3></div>
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Reporting</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($datas as $data)
                        <tr>
                            <td> {{$data->user->name}}</td>
                            <td> {{$data->user->email}}</td>
                            <td> {{$data->dept->name}}</td>
                            <td> {{$data->designation->name}}</td>
                            <td> {{$data->reportingTo->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>               
                </table>
            </div>
        </div>
    </div>
</form>
@endsection