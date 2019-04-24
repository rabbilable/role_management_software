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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                    <td>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" id="sample1" name="wt">
                            <label class="mdl-textfield__label" for="sample1">9:00 - 11:00</label>
                        </div>
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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                    <td>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" name="wt" id="sample1">
                            <label class="mdl-textfield__label" for="sample1">11:00 - 1:00</label>
                        </div>
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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                    <td>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" name="wt" id="sample1">
                            <label class="mdl-textfield__label" for="sample1">1:00 - 2:00</label>
                        </div>
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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                        <td>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" name="wt" id="sample1">
                                <label class="mdl-textfield__label" for="sample1">2:00 - 4:00</label>
                            </div>
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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                    <td>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" name="wt" id="sample1">
                            <label class="mdl-textfield__label" for="sample1">4:00 - 6:00</label>
                        </div>
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
                <form action="{{url('/schedule')}}" method="post">
                    @csrf
                    <td>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" name="wt" id="sample1">
                            <label class="mdl-textfield__label" for="sample1">6:00 - 9:00</label>
                        </div>
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