@extends ('layouts.default')

@section ('title')
todotrelo!
@endsection


@section('body')
            <h1>New Task</h1>
            
            <form method=post action="{{ url('/todocard/add') }}" >
                {{ csrf_field() }}
                
                <p>
                    <textarea rows="3"   name="body" placeholder="enter task"></textarea>
                    @if ($errors->has('body'))
                    <span class = "error"><br>
                        {{ $errors->first('body') }}</span>
                    @endif
                </p>
                
                <p>
                    <button type="submit" value="Add">Add</button>
                </p>
            </form>
            
            
            
            <p>ひとつにフォーカスしよう。マルチタスクは死ぬ。</p>
            <a href="{{ url('/') }}" class="header-menu">Back</a>
            
@endsection
