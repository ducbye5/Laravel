<!DOCTYPE html>
<html>
<head>
	<title>Dasdboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('icon/pe-icon-7-stroke.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/admin.js') }}"></script>

<!--datatable-->
	
    <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css') }}">

    


	
</head>
<body>
<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 sticky-top">
	<a href="{{ url('admin/layout') }}" class="navbar-brand col-md-2 col-sm-3 mr-0 text-center">
		<h4>Modus</h4>
	</a>
	<form method="post" action="" class="w-100">
		<div class="input-group">
			<input type="text" class="form-control form-control-dark" placeholder="Search">
			<div class="input-group-append">
				<button class="btn btn-outline-secondary bg-black" type="submit">Search</button>
			</div>
		</div>
	</form>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a href="{{ url('admin/logout') }}" class="nav-link">Sign Out</a>
		</li>
	</ul>
</nav>
<div class="container-fluid">
	<div class="row">
		<nav class="col-md-3 col-lg-2 sidebar bg-light p-0">
			<div class="sidebar-sticky">
				<div class="text-center">
					
					<a href="{{ url('admin/adminstrator/profile/'.$user->user_id) }}"><img src="{!! url('upload/user/'. $user->user_img) !!}" alt="picturel" class="rounded-circle" width="100px" height="100px"></a>
					<p><i>{{ $user->user_name }}</i></p>
				</div>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a href="{{ url('admin/layout') }}" class="nav-link">
							<span class="pe-7s-home"></span>Home
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/toeic') }}" class="nav-link">
							<span class="pe-7s-news-paper"></span>Toeic
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/layout') }}" class="nav-link">
							<span class="pe-7s-cart"></span>Products
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/news') }}" class="nav-link">
							<span class="pe-7s-news-paper"></span>News
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/layout') }}" class="nav-link">
							<span class="pe-7s-mail"></span>Report
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/layout') }}" class="nav-link">
							<span class="pe-7s-users"></span>Customers
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('admin/adminstrator') }}" class="nav-link">
							<span class="pe-7s-user"></span>Admin
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<main class="col-md-9 col-lg-10 ml-sm-auto mt-3">
			@yield('controller')
		</main>
	</div>
</div>
</body>
</html>

<script type="text/javascript" language="Javascript">

function DetectBrowserExit()
{
   alert('Execute task which do you want before exit');
}

window.onbeforeunload = function(){ DetectBrowserExit(); }

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').DataTable( {
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
	});
</script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
