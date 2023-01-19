@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA NILAI</h2>
        <form method="POST" action="/nilai/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU MAPEL & MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id">
                            <option></option>
                            @foreach($mengajar as $each)
                                <option value="{{ $each->id }}">{{ $each->guru->nama_guru }} {{ $each->mapel->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">SISWA</td>
                    <td class="bar">
                        <select name="siswa_id">
                            <option></option>
                            @foreach($siswa as $each)
                                <option value="{{ $each->id }}">{{ $each->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar"><input type="number" name="uh"></td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar"><input type="number" name="uts"></td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar"><input type="number" name="uas"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                    </td>
                </tr>
            </table>
    </center>
@endsection