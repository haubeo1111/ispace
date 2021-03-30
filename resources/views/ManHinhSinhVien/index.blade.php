@extends('layouts.layout')

@section('content')
<main>
    <div class="row">
        <div class="col-xs-4 col-sm-3 cao40">
            <a href="{{ route('sinh_vien.trangchu') }}">
                <img src="/images/lophoc.png" class="lopsv">
            </a>
            <label class="loplabel">Lớp Học</label>
        </div>

        <div class="col-xs-4 col-sm-3 cao40">
            <a href="/sinh_vien/viewlichhoc/?id_sinhvien={{$sinhVien->id_sinhvien}}">
                <img src="/images/lichhoc.png" class="lichsv">
            </a>
            <label class="lichlabel">Lịch học</label>
        </div>

        <div class="col-xs-4 col-sm-3 ">
            <a href="/sinh_vien/chonlop">
                <img src="/images/xinnghi.png" class="phepsv">
            </a>
            <label class="pheplabel">Xin nghỉ phép</label>
        </div>

        <div class="col-xs-4 col-sm-3 cao40">
            <a href="{{route("sinh_vien.trangthongbao")}}">
                <img src="/images/thongbao.png" class="thongbaosv">
            </a>
            <label class="thongbaolabel">Thông báo</label>
        </div>
    </div>
</main>

@endsection