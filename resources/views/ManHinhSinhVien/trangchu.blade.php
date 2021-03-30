@extends('layouts.layout')

@section('content')
<form method=get action="">
    <table>
        <thead class="andi">
            <tr>
                <th>STT</th>
                <th width=100%>Nội dung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lopHoc as $key=> $value)
            <tr>
                <td>
                    <a class="btn btn-default btn-circle">{{$key+1}}</a>
                </td>
                <td width=100% style="height: 100px;">
                    <p style="margin-left: 23px; font-size: 14px;">Lớp: <?php echo \App\qlsv_lophoc::find($value->id_lophoc)->tenlophoc ?></p>
                    <ul style="list-style: none; margin-top: 30px; margin-left: -17px; ">
                        <li style="float: left; margin-right: 3px; "><a class="btn-sm btn-success"  style="padding: 9px 9px; font-size: 13px;"
                        href="/sinh_vien/viewworltask/?id_lophoc={{$value->id_lophoc}}&id_thoikhoabieu={{$value->id_thoikhoabieu}}">Work Task</a></li>
                       
                        <li style="float: left; margin-right: 3px; line-height; "><a class="btn-sm btn-success"  style="padding: 9px 9px; font-size: 13px;"
                        href="/sinh_vien/viewdanhgia/?id_lophoc={{$value->id_lophoc}}&id_sinhvien={{$value->id_sinhvien}}&id_monhoc={{$value->id_monhoc}}">
                        Đánh giá</a></li>
                      
                        <li style="float: left; margin-right: 3px; "><a class="btn-sm btn-success"  style="padding: 9px 9px; font-size: 13px;"
                        href="/sinh_vien/viewdiemthi/?id_lophoc={{$value->id_lophoc}}&id_thoikhoabieu={{$value->id_thoikhoabieu}}">Điểm</a></li>
                       
                        <li style="float: left; margin-right: 3px; "><a class="btn-sm btn-success" style="padding: 9px 9px; font-size: 13px;"
                        href="/sinh_vien/viewdiemdanh/?id_lophoc={{$value->id_lophoc}}&id_thoikhoabieu={{$value->id_thoikhoabieu}}&id_sinhvien={{$value->id_sinhvien}}">Điểm danh</a></li>
                    </ul>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
    </div>
</form>
@endsection