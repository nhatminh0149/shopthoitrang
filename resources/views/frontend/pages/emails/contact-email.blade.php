<table style="width: 100%; border-spacing: 0px">
    <tr>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; border-left: 1px solid black; width: 170px; padding: 5px; text-align: center;"> <img src="https://pbs.twimg.com/profile_images/3427592848/7c7de6f4eb5ef0073560e9f6cc968573_400x400.jpeg" style="width: 170px; height: 120px;" /> </td>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center; vertical-align: middle; padding: 5px;">
            <h1 style="color: black;">T O T O S H O P</h1>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px; text-align: center; font-weight: bold;"> Thông tin:  </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; text-align: right; padding: 5px; width: 170px;">Email của khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $data['kh_email'] }}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; text-align: right; padding: 5px; width: 170px;">Lời nhắn của khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{!! $data['message'] !!}</td>
    </tr>
</table>