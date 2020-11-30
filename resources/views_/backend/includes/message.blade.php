@if (session()->has('success'))
    <div class="alert alert-success">
        @if(is_array(session()->get('success')))
            <ul>
                @foreach (session()->get('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session()->get('success') }}
        @endif
    </div>
@endif

@if(count($errors->all()))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" style="width:650px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{$error}}</strong>
        </div>

    @endforeach
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            {{session('error')}}
        </ul>
    </div>
@endif


