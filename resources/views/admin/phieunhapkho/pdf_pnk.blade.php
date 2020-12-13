<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Phiếu nhập kho {{ $ds_pnk->pnk_id }}</title>
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
        $date_0=date("m.y", strtotime($ds_pnk->pnk_ngaynhapkho));
    ?>
    <table class="tieude">
        <tr>
            <td class="phieubanhang">PHIẾU NHẬP KHO</td>
            <td class="ma_don">Số: <span style="text-decoration: underline;"><span style="font-weight: bold;">&nbsp;{{ $ds_pnk->pnk_id }} /&nbsp;</span><span>{{ $date_0 }}</span></span></td>
        </tr>
    </table>
    <?php 
        $date=date("d/m/Y", strtotime($ds_pnk->pnk_ngaynhapkho));
    ?>
    <span><center>Ngày nhập kho: {{ $date }}</center></span> 
    <br>
    
    <table class="table_0" cellpadding=3>
        @foreach ($ds_pnk1 as $ds_pnk1)
        <tr>
            <td colspan="2">Nhân viên lập phiếu: <strong>{{ $ds_pnk1->name }}</strong></td>
        </tr>
        <tr>
            <td  colspan="2">Kho: {{ $ds_pnk1->kho_ten }}</td>
        </tr>
        <tr>
            <td colspan="2">Nhà cung cấp: {{ $ds_pnk1->ncc_ten }}</td>
        </tr>
        @endforeach
    </table>

    <table class="table_1">
        <thead>
            <tr>
                <th width=5%>STT</th>
                <th width=25%>Tên SP</th>
                <th width=7%>Màu</th>
                <th width=7%>Size</th>
                <th width=10%>SL</th>
                <th>Giá nhập</th>
                <th>Thành tiền</th>
    
            </tr>
        </thead> 

        <tbody>
            <?php 
                $i=1; 
                //$total=0;
            ?>
            @foreach($ds_pnk2 as $ds_pnk2)
            <tr>
                <td style="text-align: center;">{{ $i++ }}</td>
                <td>{{ $ds_pnk2->sp_ten }}</td>
                <td style="text-align: center;">{{ $ds_pnk2->m_ten }}</td>
                <td style="text-align: center;">{{ $ds_pnk2->size_ten }}</td>
                <td style="text-align: center;">{{ $ds_pnk2->ctpn_soluong }}</td>
                <td style="text-align: right;">{{ number_format($ds_pnk2->ctpn_gianhap, 0, ',' , ',') }} đ</td>
                <td style="text-align: right;">{{ number_format($ds_pnk2->ThanhTien, 0, ',' , ',') }} đ</td>  
            </tr>
            @endforeach
            @foreach($ds_pnk3 as $ds_pnk3)
            <tr>
                <th colspan="6">Tổng tiền:</th>
                <th style="text-align: right;">{{ number_format($ds_pnk3->TongTienPhieuNhap, 0, ',' , ',') }} đ</th>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
    <br>
    
    
</body>
</html>
