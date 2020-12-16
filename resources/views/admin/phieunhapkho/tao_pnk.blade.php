@extends('layouts.admin.master')

@section('title')
    Tạo phiếu nhập kho
@endsection

@section('content')
	<body class="">
    <div class="wrapper">
       @include('layouts.admin.sidenav')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">QUẢN LÝ PHIẾU NHẬP KHO</a>
                    </div>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                {{-- <div class="container-fluid">
                   
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Purchased On</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2015/04/01</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2010/11/21</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2016/01/12</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2017/12/28</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2000/10/30</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>2011/03/11</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>2015/06/25</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>2016/11/12</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                      </tbody>
                    </table> 
                </div> --}}



                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">THÊM MỚI PHIẾU NHẬP KHO</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <form class="mt-4 ml-5 mr-5 mb-5" role="form" id="dynamic_form" method="post">
                            {{ csrf_field() }}
                            <div class="row mb-4">
                                <div class="col">
                                    Tên nhân viên:
                                    @if(isset(Auth::user()->name))
                                        <input type="text" class="form-control" id="ncc_ten" name="ncc_ten" value="{{ Auth::user()->name }}" readonly>    
                                        <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}" >             
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col">
                                    Kho nhập hàng:
                                    <select name="kho_id" id="kho_id" class="form-control">
                                        @foreach($ds_kho as $ds_kho)
                                            <option value="{{ $ds_kho->kho_id }}">{{ $ds_kho->kho_ten }}</option>
                                        @endforeach
                                    </select>   
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col">
                                    Nhà cung cấp:
                                    <select name="ncc_id" id="ncc_id" class="form-control">
                                        @foreach($ds_ncc as $ds_ncc)
                                            <option value="{{ $ds_ncc->ncc_id }}">{{ $ds_ncc->ncc_ten }}</option>
                                        @endforeach
                                    </select>   
                                </div>
                            </div>

                            <table class="table table-bordered" id="user_table">
                                <thead>
                                    <tr>
                                        <th width="15%">Danh mục</th>
                                        <th width="15%">Loại sản phẩm</th>
                                        <th width="17%">Sản phẩm</th>
                                        <th width="6%">Màu</th>
                                        <th width="5%">Size</th>
                                        <th width="7%">Số lượng</th>
                                        <th width="15%">Giá nhập</th>
                                        <th width="10%">Thành tiền</th>
                                        <th width="10%">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="text-right"><strong>Tính tổng:</strong></td>
                                        <td colspan="2" ><input type="text" name="sum" id="sum" class="form-control" readonly="" value="0"></td>
                                    </tr>
                                </tfoot>
                            </table>

                            
                            <span id="result"></span>
                            <input type="submit" name="save" id="save" class="btn btn-primary" value="Lưu" />
                           
                        </form>

                    </div>
                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function(){
            var count = 1;
            dynamic_field(count);

            function dynamic_field(number){
                html = '<tr>';
                html += '<td><select name="dm_id[]" class="form-control dm_id" id="dm_id'+count+'" data-sub_dm_id="'+count+'">   <option value="">--Chọn danh mục--</option></select></td>';
                html += '<td><select name="lsp_id[]" class="form-control lsp_id" id="lsp_id'+count+'" data-sub_lsp_id="'+count+'">   <option value="">--Chọn loại sản phẩm--</option></select></td>';
                html += '<td><select name="sp_id[]" class="form-control sp_id" id="sp_id'+count+'" data-sub_sp_id="'+count+'">   <option value="">--Chọn sản phẩm--</option></select></td>';
                html += '<td><select name="m_id[]" class="form-control m_id" id="m_id'+count+'"> @foreach($ds_mau as $ds_mau) <option value="{{ $ds_mau->m_id }}">{{ $ds_mau->m_ten }}</option> @endforeach </select></td>';
                html += '<td><select name="size_id[]" class="form-control size_id" id="size_id'+count+'"> @foreach($ds_size as $ds_size) <option value="{{ $ds_size->size_id }}">{{ $ds_size->size_ten }}</option> @endforeach </select></td>';
                html += '<td><input type="number" name="ctsp_soluong[]" class="form-control ctsp_soluong" id="ctsp_soluong'+count+'" min="0"></td>';
                html += '<td><input type="number" name="ctpn_gianhap[]" class="form-control ctpn_gianhap" id="ctpn_gianhap'+count+'" min="0"></td>';
                html += '<td><input type="text"  name="ctpn_tt[]" class="form-control ctpn_tt"  id="ctpn_tt'+count+'" value="0" readonly="" ></td>';
               
               

                if(number > 1){
                    html += '<td> <button type="button" name="remove" id="" class="btn btn-danger remove">Giảm</button> </td> </tr>';
                    $('tbody').append(html);
                }
                else{
                    html += '<td> <button type="button" name="add" id="add" class="btn btn-success">Thêm</button> </td> </tr>';
                    $('tbody').html(html);
                }
            }

            //Khi bấm vào nút Thêm
            $(document).on('click', '#add', function(){
                count++;
                dynamic_field(count);

                var ncc_id = $('#ncc_id').val(); 

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('admin/danhmuc_theoncc')!!}',
                    data:{'ncc_id':ncc_id},
                
                    success:function(data){
                        //console.log(data);
                        $('#dm_id'+count).html(data);
                    },
                    error:function(){

                    }
                });
            });

            //Khi bấm vào nút Giảm
            $(document).on('click', '.remove', function(){
                count--;
                $(this).closest("tr").remove();
            });

            $('#dynamic_form').on('submit', function(event){
                event.preventDefault();
                var a= $(this).serialize();
                //  console.log(a);
              
                $.ajax({
                    url: '{{ route("admin.dynamic-field.insert") }}',
                    method:'post',
                    data:$(this).serialize(),

                    dataType:'json',
                    beforeSend:function(){
                        $('#save').attr('disabled','disabled');
                    },
                    success:function(data){
                        if(data.error){
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++){
                                error_html += '<p>'+data.error[count]+'</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        }
                        else{
                            $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                            //window.location.href="{!!URL::to('admin/pnk_create')!!}"
                        }
                        $('#save').attr('disabled', false);

                    }
                })
            });
        });

        $('.sp_id').each(function(){
            var count = 1;
            if($(this).val() == ''){
                error += '<p>Chọn sản phẩm tại dòng '+count+' </p>';
                return false;
            }
            count = count + 1;
        });

        //Khi thay đổi nhà cung cấp
        $(document).on('change','#ncc_id',function () {
            var ncc_id=$(this).val();

            $.ajax({
                type:'get',
                url:'{!!URL::to('admin/danhmuc_theoncc')!!}',
                data:{'ncc_id':ncc_id},
            
                success:function(data){
                    console.log(data);
                    $('.dm_id').html(data);
                    $('.lsp_id option:selected ').text("--Chọn loại sản phẩm--");
                    $('.sp_id option:selected ').text("--Chọn sản phẩm--");
                        $('.ctsp_soluong').val("");
                        $('.ctpn_gianhap').val(0);
                        $('.ctpn_tt').val(0);
                },
                error:function(){

                }
            });
        });

        //Khi thay đổi danh mục 
        $(document).on('change','.dm_id',function () {
            var dm_id = $(this).val();
            var sub_dm_id = $(this).data('sub_dm_id');

            $.ajax({
                type:'get',
                url:'{!!URL::to('admin/loaisanpham_theodanhmuc')!!}',
                data:{'dm_id':dm_id},
            
                success:function(data){
                //console.log(data);
                    $('#lsp_id'+sub_dm_id).html(data);
                },
                error:function(){

                }
            });
        });

        //Khi thay đổi loại sản phẩm
        $(document).on('change','.lsp_id',function () {
            var lsp_id = $(this).val();
            var sub_lsp_id = $(this).data('sub_lsp_id');

            $.ajax({
                type:'get',
                url:'{!!URL::to('admin/sanpham_theoloaisanpham')!!}',
                data:{'lsp_id':lsp_id},
            
                success:function(data){
                //console.log(data);
                    $('#sp_id'+sub_lsp_id).html(data);
                },
                error:function(){

                }
            });
        });

         //Khi thay đổi sản phẩm
         $(document).on('change','.sp_id',function () {
            var sp_id = $(this).val();
            var sub_sp_id = $(this).data('sub_sp_id');

            $(document).on('change','.ctsp_soluong',function () {
                //var sub_sp_id=$('.sp_id').data('sub_sp_id');

                var ctsp_soluong = $("#ctsp_soluong"+sub_sp_id).val();
                var ctpn_gianhap = $("#ctpn_gianhap"+sub_sp_id).val();

                $('#ctpn_tt'+sub_sp_id).val(ctsp_soluong*ctpn_gianhap);
                sum_pnk();
            });


            $(document).on('change','.ctpn_gianhap',function () {
                //var sub_sp_id=$('.sp_id').data('sub_sp_id');

                var ctpn_gianhap = $("#ctpn_gianhap"+sub_sp_id).val();
                var ctsp_soluong = $("#ctsp_soluong"+sub_sp_id).val();

                $('#ctpn_tt'+sub_sp_id).val(ctsp_soluong*ctpn_gianhap);
                sum_pnk();
                //alert(ctsp_soluong*ctpn_gianhap);
            });

            var sl=$('#ctsp_soluong'+sub_sp_id).val();
            var dg=$('#ctpn_gianhap'+sub_sp_id).val();
            var t = sl*dg;
           
            $('#ctpn_tt'+sub_sp_id).val(t);

        });

        function parseCurrency( num ) {
            return parseFloat( num.replace( /,/g, '') );
        }

        function sum_pnk(){
            var sum=0;
            $('.ctpn_tt').each(function(){
                var value= parseCurrency($(this).val());
                if(value.length !=0){
                    sum+=parseFloat(value);
                }
            });
            $('#sum').val(sum);
        }
        
    </script>
@endsection