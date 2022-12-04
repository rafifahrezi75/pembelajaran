@extends('tugas')

@section('content')

    <h1>Konversi Suhu</h1>

    <form action="{{ 'suhu' }}" method="post">
        @csrf
        
        Suhu :
        <input type="number" name="suhu"><br><br>
        <select name="sebelum" name="">
            <option value="C">Celcius</option>
            <option value="R">Reamur</option>
            <option value="F">Fareheit</option>
            <option value="K">Kelvin</option>
        </select>
        Ke Satuan :
        <select name="sesudah" name="">
            <option value="C">Celcius</option>
            <option value="R">Reamur</option>
            <option value="F">Fareheit</option>
            <option value="K">Kelvin</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

@endsection