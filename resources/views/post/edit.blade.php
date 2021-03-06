@extends('post.layout.app')

@section('s')

<div class="col-md-8 mt-4 mx-auto">
    <style>
        .demo-card-square.mdl-card {
          width: 600px;
          height: 320px;
        }
        .demo-card-square > .mdl-card__title {
          color: #fff;
          background:
            url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
        }
    </style>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Update</h2>
          </div>
            <form action="{{url('post')}}/{{$post->id}}" method="POST">
              @csrf
              @method('patch')
                <div class="mdl-card__supporting-text">
                    <div class="mdl-textfield mdl-js-textfield">
                        
                        <input type="hidden" value="{{$post->id}}" name="post_id">
                        <input class="mdl-textfield__input" type="text" id="sample1" value="{{$post->post}}" name="post">
                        <label class="mdl-textfield__label" for="sample1">Text...</label>
                    </div>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Submit</button>  
                </div>
            </form>
        </div>
</div>
@endsection