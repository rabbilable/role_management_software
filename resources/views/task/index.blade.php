@extends('post.layout.app')

@section('s')
<div class="col-md-12">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th class="">TIME</th>
                <th class="">TASK</th>
                <th class="">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="{{url('task/1')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>9:00-11:00 AM</h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{url('task/2')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>11:00-1:00 PM</h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{url('task/3')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>1:00-2:00 PM</h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{url('task/4')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>2:00-4:00 PM</h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{url('task/5')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>4:00-6:00 PM</h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{url('task/6')}}" method="post">
                    @csrf
                    <td>
                        <strong><h5>6:00-9:00 PM </h5></strong> 
                    </td>
                    <div class="mdl-textfield mdl-js-textfield">
                        <td>
                            <textarea name="task" class="mdl-textfield__input" placeholder="Input your task.."></textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </div>
                </form>
            </tr>
        </tbody>
    </table>
</div>
@endsection