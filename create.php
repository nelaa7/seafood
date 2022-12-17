@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-7">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Tambah Data Butuh Darah</h1>
            </div>
            <div>
                <a href="{{ route('butuh-darahs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('butuh-darahs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="subject" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}">
                    @error('subject')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="berat_badan" class="form-label">Berat Badan (KG)</label>
                    <input type="number" class="form-control" id="berat_badan" name="berat_badan"
                        value="{{ old('berat_badan') }}">
                    @error('berat_badan')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="golongan_darah" class="form-label">Golongan Darah</label>
                    <select class="form-select" id="golongan_darah" name="golongan_darah">
                        <option value="A" @if(old('golongan_darah')=='A' ) selected @endif>A</option>
                        <option value="B" @if(old('golongan_darah')=='B' ) selected @endif>B</option>
                        <option value="O" @if(old('golongan_darah')=='O' ) selected @endif>O</option>
                        <option value="AB" @if(old('golongan_darah')=='AB' ) selected @endif>AB</option>
                    </select>
                    @error('golongan_darah')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_darah" class="form-label">Jumlah Darah</label>
                    <input type="number" class="form-control" id="jumlah_darah" name="jumlah_darah"
                        value="{{ old('jumlah_darah') }}">
                    @error('jumlah_darah')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                    @error('no_telp')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_koleksi" class="form-label">Tanggal Koleksi</label>
                    <input type="date" class="form-control" id="tanggal_koleksi" name="tanggal_koleksi"
                        value="{{ old('tanggal_koleksi') }}">
                    @error('tanggal_koleksi')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="L" @selected(old('gender')=='L' )>Laki-Laki</option>
                        <option value="P" @selected(old('gender')=='P' )>Perempuan</option>
                    </select>
                    @error('gender')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30"
                        rows="10">{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="mt-4 btn px-3 btn-primary py-2 d-block">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection