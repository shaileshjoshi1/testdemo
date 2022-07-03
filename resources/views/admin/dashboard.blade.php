<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  @include('admin.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">User Dashboard</h1>
		  
		  
		    


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


       





    

 @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
						@php $i=1; @endphp
        @foreach ($users as $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->name}}</td>
				 <td>{{ $user->created_at}}</td>
                <td>
                    <form action="" method="POST">

                        <a href="{{ url('/admin/edit/'.$user->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf



                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
        
    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  @include('admin.layout.footer')
  <script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

</body>

</html>
