<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('icon/pe-icon-7-stroke.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('slide/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slide/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

<!--datatable bootstrap-->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css">

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('slide/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/index.js') }}"></script>


</head>
<body>
<header class="w-100 header fixed-top">
	<div class="container-fluid">

		<div class="col-md-10 offset-1 header-content">
			<div class="row mt-4 mb-3">
				<div class="col-md-2 header-left">
					<a href="{{ url('index/') }}">
						<h3>MODUS</h3>
					</a>
				</div>
				<div class="col-md-8 header-center" id="header-menu">
					<!--
					<ul>
						<li>
							<a>Khóa học</a>
							<div class="header-menu">
								<ul>
									<li>
										<a href="">Toeic</a>
									</li>
									<li>
										<a href="">Ielts</a>
									</li>
									<li>
										<a href="">Lập Trình</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a>Thi Thử</a>
							<div class="header-menu">
								<ul>
									<li>
										<a href="">THPT</a>
									</li>
									<li>
										<a href="">Toeic</a>
									</li>
									<li>
										<a href="">Ielts</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a>Tài liệu</a>
							<div class="header-menu">
								<ul>
									<li>
										<a href="">Toeic</a>
									</li>
									<li>
										<a href="">Ielts</a>
									</li>
									<li>
										<a href="">Lập Trình</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="">Bài Viết</a>
						</li>
						<li>
							<a href="">Liên Hệ</a>
						</li>
					</ul>-->
				</div>
				<div class="col-md-2 header-right text-right">
					<div class="mt-2">
						<a href="" data-toggle="modal" data-target="#login">Đăng Nhập</a> / 
						<a href="" data-toggle="modal" data-target="#register">Đăng Kí</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</header>
<section class="w-100 middle-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset(url('image/images.jpg')) }}" width="100%" height="379">
			</div>
			<div class="col-md-6">
				<img src="{{ asset(url('image/Toeic-Speaking-Bai-2-P-1-mo-ta-tranh-01.jpg')) }}" width="100%" height="379">
			</div>
			<!--
			<div class="col-md-12 pl-0 pr-0">
				<table id="example" class="table table-striped table-bordered cell-border" style="width:100%">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
		                
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>Tiger Nixon</td>
		                <td>System Architect</td>
		                <td>Edinburgh</td>
		                <td>61</td>
		                <td>2011/04/25</td>
		                <td>$320,800</td>
		                
		            </tr>
		            <tr>
		                <td>Garrett Winters</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>63</td>
		                <td>2011/07/25</td>
		                <td>$170,750</td>
		            </tr>
		            <tr>
		                <td>Ashton Cox</td>
		                <td>Junior Technical Author</td>
		                <td>San Francisco</td>
		                <td>66</td>
		                <td>2009/01/12</td>
		                <td>$86,000</td>
		            </tr>
		            <tr>
		                <td>Cedric Kelly</td>
		                <td>Senior Javascript Developer</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2012/03/29</td>
		                <td>$433,060</td>
		            </tr>
		            <tr>
		                <td>Airi Satou</td>
		                <td>Accountant</td>
		                <td>Tokyo</td>
		                <td>33</td>
		                <td>2008/11/28</td>
		                <td>$162,700</td>
		            </tr>
		            <tr>
		                <td>Brielle Williamson</td>
		                <td>Integration Specialist</td>
		                <td>New York</td>
		                <td>61</td>
		                <td>2012/12/02</td>
		                <td>$372,000</td>
		            </tr>
		            <tr>
		                <td>Herrod Chandler</td>
		                <td>Sales Assistant</td>
		                <td>San Francisco</td>
		                <td>59</td>
		                <td>2012/08/06</td>
		                <td>$137,500</td>
		            </tr>
		            <tr>
		                <td>Rhona Davidson</td>
		                <td>Integration Specialist</td>
		                <td>Tokyo</td>
		                <td>55</td>
		                <td>2010/10/14</td>
		                <td>$327,900</td>
		            </tr>
		            <tr>
		                <td>Colleen Hurst</td>
		                <td>Javascript Developer</td>
		                <td>San Francisco</td>
		                <td>39</td>
		                <td>2009/09/15</td>
		                <td>$205,500</td>
		            </tr>
		            <tr>
		                <td>Sonya Frost</td>
		                <td>Software Engineer</td>
		                <td>Edinburgh</td>
		                <td>23</td>
		                <td>2008/12/13</td>
		                <td>$103,600</td>
		            </tr>
		            <tr>
		                <td>Jena Gaines</td>
		                <td>Office Manager</td>
		                <td>London</td>
		                <td>30</td>
		                <td>2008/12/19</td>
		                <td>$90,560</td>
		            </tr>
		            <tr>
		                <td>Quinn Flynn</td>
		                <td>Support Lead</td>
		                <td>Edinburgh</td>
		                <td>22</td>
		                <td>2013/03/03</td>
		                <td>$342,000</td>
		            </tr>
		            <tr>
		                <td>Charde Marshall</td>
		                <td>Regional Director</td>
		                <td>San Francisco</td>
		                <td>36</td>
		                <td>2008/10/16</td>
		                <td>$470,600</td>
		            </tr>
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
		        </tfoot>
		    	</table>
			</div>
			-->
			<div class="col-md-12">
				<fieldset class="form-control mt-5 text-center">
					<legend class="form-control text-center bg-light">Chúng tôi có gì để giúp bạn phát triển , nâng cao trình độ Tiếng Anh . Đạt 900 Toeic không khó </legend>
					<div class="row">
						<div class="col-md-4 offset-1 alert alert-primary mt-3">
							Thi thử
						</div>
						<div class="col-md-4 offset-2 alert alert-success mt-3">
							Từ vựng
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 offset-1 alert alert-info mt-3">
							Ngữ pháp
						</div>
						<div class="col-md-4 offset-2 alert alert-danger mt-3">
							Luyện nghe
						</div>
					</div>
					<div class="row">
						<a href="" class="col-md-4 offset-4 btn btn-primary" data-toggle="modal" data-target="#login">Đăng nhập ngay để trải nghiệm</a>
					</div>
				</fieldset>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<img src="{{ asset(url('image/hoc-cong-nghe-thong-tin.jpg')) }}" width="100%" height="225">
			</div>
			<div class="col-md-6">
				<img src="{{ asset(url('image/tải xuống.jpg')) }}" width="100%" height="225">
			</div>
			<div class="col-md-10 offset-1 mt-3 alert alert-danger">
				Bạn muốn học lập trình. Bạn muốn trở thành một developer fontend hay backend . Bạn có thể tìm thấy khá nhiều ở đây đó
			</div>
			<div class="col-md-12 mt-3">
				<fieldset class="form-control">
					<legend class="form-control bg-light text-center">Frontend</legend>
					<div class="slide-frontend owl-carousel owl-theme">
						<div class="col-md-12">
							<img src="{{ asset(url('image/htmlvscss.jpg')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/php.png')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/java.jpg')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/angular.jpg')) }}" width="100%" height="130">
						</div>
					</div>
				</fieldset>
			</div>
			<a href="" class="col-md-4 offset-4 btn btn-primary mt-3" data-toggle="modal" data-target="#login">Đăng nhập ngay để trải nghiệm</a>
			<div class="col-md-12 mt-3">
				<fieldset class="form-control">
					<legend class="form-control bg-light text-center">Backend</legend>
					<div class="slide-backend owl-carousel owl-theme">
						<div class="col-md-12">
							<img src="{{ asset(url('image/dotnet.png')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/php.png')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/java.jpg')) }}" width="100%" height="130">
						</div>
						<div class="col-md-12">
							<img src="{{ asset(url('image/nodejs.jpg')) }}" width="100%" height="130">
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</section>
<footer>
	
</footer>
<!--Form login-->
<div class="modal fade" id="login">
			  <div class="modal-dialog">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Login</h4>
			        <a href="" class="close" data-dismiss="modal">&times;</a>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body">
			        <form method="post" action="" >
			        	{{ csrf_field() }}
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Username</label>
			        		<input type="text" name="username" class="form-control" placeholder="Username" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Password</label>
			        		<input type="password" name="password" class="form-control" placeholder="Password" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<input type="submit" value="Login" class="btn btn-primary">
			        		<input type="button" value="Register" class="btn btn-success" data-toggle="modal" data-target="#register" data-dismiss="modal">
			        		<input type="button" value="close" class="btn btn-danger" data-dismiss="modal">
			        	</div>
			        </form>
			      </div>

			    </div>
			  </div>
</div>
<!--Form register-->
<div class="modal fade" id="register">
			  <div class="modal-dialog">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Register</h4>
			        <a href="" class="close" data-dismiss="modal">&times;</a>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body">
			        <form method="post" action="">
			        	{{ csrf_field() }}
			        	<div class="form-group">
			        		<label class="form-control-label">Fullname</label>
			        		<input type="text" name="fullname" class="form-control" placeholder="Fullname" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<input type="radio" name="sex" value="man" checked> Man
			        		<input type="radio" name="sex" value="woman"> Woman
			        	</div>
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Birthday</label>
			        		<input type="date" name="date" class="form-control">
			        	</div>
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Email</label>
			        		<input type="email" name="email" class="form-control" placeholder="Email" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Username</label>
			        		<input type="text" name="username" class="form-control" placeholder="Username" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<label class="form-control-label">Password</label>
			        		<input type="password" name="password" class="form-control" placeholder="Password" required>
			        	</div>
			        	<div class="form-group mt-3">
			        		<input type="submit" value="Register" class="btn btn-primary">
			        		<input type="button" value="Close" class="btn btn-danger" data-dismiss="modal">
			        	</div>
			        </form>
			      </div>

			    </div>
			  </div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>
<script type="text/javascript">
	$('.slide-frontend').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            autoplay:true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            navText: ['<span class="pe-7s-angle-left"></span>','<span class="pe-7s-angle-right"></span>'],
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
          });
	$('.slide-backend').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            autoplay:true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            navText: ['<span class="pe-7s-angle-left"></span>','<span class="pe-7s-angle-right"></span>'],
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
          });
</script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</html>