@extends('tugas')

@section('content')


    <h1>Kalkulator Sederhana</h1>
    <form action="{{ url('kalkulator') }}" method="post">
        @csrf

        angka 1:
        <input type="number" name="angka1">
        <br>
        angka 2:
        <input type="number" name="angka2">
        <br><br>
        <select name="operasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> : </option>
        </select>
        <br><br>
        
        <input type="submit" value="hitung" name="hitung">
    </form>


@endsection

@section('menu')
    <a href="#">Home</a>
@endsection