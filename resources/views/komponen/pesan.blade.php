@if (Session::has('sukses'))
<div class="pt-3">
    <div class="alert alert-success">
        {{Session::get('sukses')}}
    </div>
</div>
@endif

@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif