@if($errors->any())
    <ul class="alter alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error  }}</li>
        @endforeach
    </ul>
@endif