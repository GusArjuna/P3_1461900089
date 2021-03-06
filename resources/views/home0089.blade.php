@extends('layout0089')
@section('judul','home')
@section('isi')
<h5>Select Filter</h5>
<a href="{{url('add0089')}}" class="btn btn-primary mb-3">Add Data</a>
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
        A-Z
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
        Z-A
    </label>
</div>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Guru</td>
            <td>Bidang Mata Pelajaran</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($gurus as $guru)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$guru->nama}}</td>
            <td>{{$guru->mengajar}}</td>
            <td>
                <a href="{{url('edit0089',$guru->id)}}"><span class="badge bg-warning text-light">Edit</span></a>
                <a href="{{url('delete',$guru->id)}}"><span class="badge bg-danger  text-light">Delete</span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection