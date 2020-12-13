<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Phiếu bán hàng {{ $ddh->ddh_id }}</title>
    <style>
        body{
            font-family: DejaVu Sans, sans-serif;
        }
        .table_0, .table_1, .table_2, .tieude{
            border-collapse: collapse;
        }
        .tieude{
            /* border: 1px solid #000; */
            border: none;
            width: 100%;
        }
        /* .tieude td{
            border: 1px solid #000;
        } */
        .phieubanhang{
            font-weight: bold;
            font-size: 30px;
            text-align: center;
            margin-bottom: 5px;
            padding-left: 134px;
        }
        .ma_don{
            text-align: right;
        }
        .table_0{
            width: 100%;
            border: none;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        .table_1{
            width: 100%;
            margin-top: 5px;
        }
        .table_1 th{
            border: 1px solid #000;
        }
        .table_1 td{
            border: 1px solid #000;
        }
        .table_2{
            border: none;
            width: 310px;
            margin-right: -80px;
        }
        .table_2 th{
            text-align: left;
        }
        .table_2 td{
            text-align: right;
        }
        .table_3{
            border: none;
            width: 100%;
            margin-top: 10px;
        }
        .table_3 th{
            text-align: center;
            /* border: 1px solid #000; */
        }
    </style>
</head>
<body>
    <?php 
        $date_0=date("m.y", strtotime($ddh->ddh_ngaylap));
    ?>
    <table class="tieude">
        <tr>
            <td class="phieubanhang">PHIẾU BÁN HÀNG</td>
            <td class="ma_don">Số: <span style="text-decoration: underline;"><span style="font-weight: bold;">&nbsp;{{ $ddh->ddh_id }} /&nbsp;</span><span>{{ $date_0 }}</span></span></td>
        </tr>
    </table>
    <?php 
        $date=date("d/m/Y H:i:s", strtotime($ddh->ddh_ngaylap));
    ?>
    <span><center>Ngày mua hàng: {{ $date }}</center></span> 
    <br>
    
    <table class="table_0" cellpadding=3>
        <tr>
            <td>Khách hàng: <strong>{{ $ddh->khachhang->kh_taikhoan }}</strong></td>
            <td style="text-align: right;">SĐT: <strong>{{ $ddh->khachhang->kh_sdt }}<strong></td>
        </tr>
        @foreach ($ds_ddh1 as $ds_ddh)
        <tr>
            <td  colspan="2">Địa chỉ: {{ $ds_ddh->ddh_diachigiaohang }}{{','}} {{ $ds_ddh->px_ten }}{{','}} {{ $ds_ddh->qh_ten }}{{','}} {{ $ds_ddh->tinhtp_ten }}.</td>
        </tr>
        <tr>
            <td colspan="2">Hình thức vận chuyển: {{ $ds_ddh->htvc_ten }}</td>
        </tr>
        <tr>
            <td colspan="2">Hình thức thanh toán: {{ $ds_ddh->httt_ten }}</td>
        </tr>
        <tr>
            <td colspan="2">Nhân viên lập phiếu: 
                @if($ds_ddh->name == NULL)
                    {{ 'Chưa có' }}
                @else
                    {{ $ds_ddh->name }}
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <i style="color: red;">*Hàng mua rồi miễn đổi trả</i><br>

    <table class="table_1">
        <thead>
            <tr>
                <th width=5%>STT</th>
                <th width=25%>Tên SP</th>
                <th width=7%>Màu</th>
                <th width=7%>Size</th>
                <th width=10%>SL</th>
                <th>Giá bán</th>
                <th>Thành tiền</th>
    
            </tr>
        </thead> 

        <tbody>
            <?php 
                $i=1; 
                //$total=0;
            ?>
            @foreach($ds_ddh2 as $ds_ddh2)
            <tr>
                <td style="text-align: center;">{{ $i++ }}</td>
                <td>{{ $ds_ddh2->sp_ten }}</td>
                <td style="text-align: center;">{{ $ds_ddh2->m_ten }}</td>
                <td style="text-align: center;">{{ $ds_ddh2->size_ten }}</td>
                <td style="text-align: center;">{{ $ds_ddh2->ctdh_soluong }}</td>
                <td style="text-align: right;">{{ number_format($ds_ddh2->ctdh_dongia, 0, ',' , ',') }} đ</td>
                <td style="text-align: right;">{{ number_format($ds_ddh2->ctdh_soluong * $ds_ddh2->ctdh_dongia, 0, ',' , ',') }} đ</td>  
            </tr>
            @endforeach
            @foreach($ds_ddh3 as $ds_ddh3)
            <tr>
                <th colspan="6">Tổng tiền sản phẩm:</th>
                <th style="text-align: right;">{{ number_format($ds_ddh3->TongTienDonHang, 0, ',' , ',') }} đ</th>
            </tr>
            <tr>
                <th colspan="6">Phí vận chuyển:</th>
                <th style="text-align: right;">{{ number_format($ds_ddh3->htvc_chiphi, 0, ',' , ',') }} đ</th>
            </tr>
            <tr>
                <th colspan="6">Tổng tiền thanh toán:</th>
                <th style="text-align: right;">{{ number_format($ds_ddh3->TongTienDonHang + $ds_ddh3->htvc_chiphi, 0, ',' , ',') }} đ</th>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
    <br>
     
    <hr style="color: black; margin-top: 105px;" />
    
</body>
</html>
