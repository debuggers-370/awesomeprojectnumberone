<option>--- Select Building ---</option>
@if(!empty($buildings))
    @foreach($buildings as $building => $value)
        <option value="{{ $building }}">{{ $value }}</option>
    @endforeach
@endif

