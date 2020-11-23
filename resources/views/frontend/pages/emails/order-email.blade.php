<table style="width: 100%; border-spacing: 0px">
    <tr>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; border-left: 1px solid black; width: 170px; padding: 5px; text-align: center;"> <img src="https://pbs.twimg.com/profile_images/3427592848/7c7de6f4eb5ef0073560e9f6cc968573_400x400.jpeg" style="width: 170px; height: 120px;" /> </td>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center; vertical-align: middle; padding: 5px;">
            <h1 style="color: black;">T O T O S H O P</h1>
        </td>
    </tr>
    <tr>
        <th colspan="4" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px;">
            Thông tin đơn hàng [{{ $data['dondathang']['ddh_id'] }}]
        </th>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Tài khoản khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_taikhoan'] }}</td> 
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Họ tên khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_hoten'] }}</td> 
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Email khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_email'] }}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Thời gian đặt hàng:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px;">{{ $data['dondathang']['ddh_ngaylap'] }}</td>
    </tr>
    <tr>

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Địa chỉ giao hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['dondathang']['ddh_diachigiaohang'] }}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Số điện thoại đặt hàng:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px;">{{ $data['khachhang']['kh_sdt'] }}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Hình thức thanh toán:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px;">
            @if ($data['dondathang']['httt_id'] == 1)
                {{ 'Thanh toán khi nhận hàng' }}
            @elseif($data['dondathang']['httt_id'] == 2)
                {{ 'Thanh toán Paypal' }}
            @endif
        </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">SP: Số lượng x Đơn giá:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px; text-align: left;"> 
            @foreach($data['dondathang']['chitiet'] as $item)
                {{ $data['sp_ten'][$loop->index] }} : {{ $item['ctdh_soluong'] }} x {{ number_format($item['ctdh_dongia'], 0, ',' , ',') }}<br>
            @endforeach
        </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Tổng tiền hàng:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px; text-align: left;"> 
            <?php 
            $total=0;
            foreach($data['dondathang']['chitiet'] as $item)
            {
                $total+=$item['ctdh_soluong'] * $item['ctdh_dongia'];
            }
            ?>
            {{ number_format($total, 0, ',' , ',') }} VNĐ
            
        </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Phí vận chuyển:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px; text-align: left;"> 
            @if ($data['dondathang']['htvc_id'] == 1)
                {{ '0 VNĐ (Nhận hàng trực tiếp tại cửa hàng)' }}
            @elseif($data['dondathang']['htvc_id'] == 2)
                {{ '0 VNĐ (Nhận hàng trực tiếp qua bưu điện)' }}
            @elseif($data['dondathang']['htvc_id'] == 3)
                {{ '10,000 VNĐ (Giao hàng trong khu vực nội ô thành phố)' }}
            @elseif($data['dondathang']['htvc_id'] == 4)
                {{ '20,000 VNĐ (Chuyển phát tiêu chuẩn)' }}
            @elseif($data['dondathang']['htvc_id'] == 5)
                {{ '30,000 VNĐ (Chuyển phát nhanh)' }}
            @endif
        </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; text-align: right; padding: 5px;">Tổng thanh toán:</th>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 5px; text-align: left;"> 
            <?php
                if($data['dondathang']['htvc_id'] == 1){
                    $total=$total+0;
                }
                if($data['dondathang']['htvc_id'] == 2){
                    $total=$total+0;
                }
                if($data['dondathang']['htvc_id'] == 3){
                    $total=$total+10000;
                }
                if($data['dondathang']['htvc_id'] == 4){
                    $total=$total+20000;
                }
                if($data['dondathang']['htvc_id'] == 5){
                    $total=$total+30000;
                }
            ?>
            {{ number_format($total, 0, ',' , ',') }} VNĐ
        </td>
    </tr>
    <tr>
        <th colspan="4" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px;">
            Cảm ơn quý khách đã lựa chọn và tin dùng sản phẩm ở cửa hàng chúng tôi. Chúc quý khách có một trải nghiệm thật thú vị tại TotoShop.<br>
            Xin chào và hẹn gặp lại ^^
        </th>
    </tr>

</table>

