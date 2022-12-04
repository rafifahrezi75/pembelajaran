@extends('tugas')

@section('content')

    <h1>Zodiac</h1>

    <form action="{{ url('zodiac') }}" method="post">
        @csrf
        
        Tanggal Lahir :
        <input type="number" name="tanggal" required placeholder="Tanggal Lahir Anda">
        Bulan Lahir :
        <input type="number" name="bulan" required placeholder="Bulan Lahir Anda">
        <input type="submit" name="submit" value="Submit">
    </form>


@endsection

@section('menu')
    <a href="#">Home</a>
@endsection