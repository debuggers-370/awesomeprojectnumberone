<option>--- Select Unit ---</option>
@if(!empty($units))
    @foreach($units as $unit => $value)
        <option value="{{ $unit}}">{{ $value }}</option>
    @endforeach
@endif