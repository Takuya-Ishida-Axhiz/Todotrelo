@extends ('layouts.default')

@section ('title')
todotrelo!
@endsection

@section ('body')
<h1>Todotrelo</h1>
            <a href="{{ url('/todocard/create') }}" class="header-menu">New Task</a>
        
            @forelse ($todocard as $todocard)
            <ul>
             <a href = "{{ url('/todocard/',$todocard->id)}}"> {{ $todocard->body }} </a>
             <a href = "{{ url('/todocard/'.$todocard->id.'/edit')}}" class = "edit">[edit] </a>
             <!--<a href = "#" class = "del" data-id="{{ $todocard->id}}" >[×]</a>-->
             <a href = "{{ url('/todocard/'.$todocard->id.'/delete')}}" class = "del" data-id="{{ $todocard->id}}" >[×]</a>
             <!--<form method="post" action="{{ url('/todocard/'.$todocard->id) }}" id="form_{{ $todocard->id}}">-->
                {{ csrf_field() }} 
                {{ method_field('delete') }}
                <!--<button class="btn btn-primary btn-sm">[×]</button>-->
             </form>
             
            </ul>
            @empty <p>No task! happy hour!</p>
            @endforelse

<script src="js/main.js"></script>
@endsection
     
