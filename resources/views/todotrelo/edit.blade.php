@extends ('layouts.default')

@section ('title')
Edit Task
@endsection


@section('body')
            <h1>Edit Task</h1>
            
            <form method=post action="{{ url('/todocard',$todocard->id) }}" >
                {{ csrf_field() }}
                {{ method_field('patch') }}
                
                <p>
                    <textarea rows="3"   name="body" placeholder="enter task" >"{{ old('body',$todocard->body) }}"</textarea>
                    @if ($errors->has('body'))
                    <span class = "error"><br>
                        {{ $errors->first('body') }}</span>
                    @endif
                </p>
                
                <p>
                    <button type="submit" value="Update">Update</button>
                </p>
            </form>
            
            
            
            <p>厄介じゃのう。</p>
            <a href="{{ url('/') }}" class="header-menu">Back</a>
            
@endsection
