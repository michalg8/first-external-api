@extends('panel.layout')

@section('content')
    <div class="container">
        <form action="{{url('/kursy')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <select name="choice">
                <option>EUR</option>
                <option>USD</option>
                <option>CHF</option>
            </select><br><br>
            <input type="submit" class="btn btn-primary" value="Sprawdz">
        </form>
    </div>
@endsection

