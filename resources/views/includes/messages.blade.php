
{{-- errors --}}

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- messages --}}

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif