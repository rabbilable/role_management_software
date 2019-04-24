@extends('post.layout.app')

@section('s')

<div class="mt-4">
    <table class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr>
            <th class="mdl-data-table__cell--non-numeric"><h3 class="">POSTS</h3>
                @role('admin')
                    <span>
                        <a href="{{url('/permission')}}" class="text-center mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">GIVE PERMISSION</a>
                    </span>
                @endrole   
            </th>
            <th>
                @can('write post')
                    <form action="{{url('post/create')}}" method="GET">
                        @csrf
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                            <i class="material-icons">add</i>
                        </button>
                    </form>
                @endcan
            </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{$post->post}}</td>
                    <td>
                        @can('edit post')
                            <form action="{{url('post')}}/{{$post->id}}/{{'edit'}}" method="GET">
                                @csrf
                                {{-- @method('patch') --}}
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Edit</button>
                            </form>                           
                        @endcan     
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    {{-- {{ print_r($posts) }} --}}
@endsection