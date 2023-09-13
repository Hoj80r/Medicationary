@if(session('failed'))
    <div class="alert alert-danger">{{ session('failed') }}</div>
@elseif(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </div>
@endif
