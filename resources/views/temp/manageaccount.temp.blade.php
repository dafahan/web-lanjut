<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard
		</title>
	    <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

            <!--google material icon-->
                <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
            rel="stylesheet">
        </head>
        <body>
        
        <div class="wrapper">

        <div class="body-overlay"></div>

                <!-- Sidebar  -->   
                
                <!-- Page Content  -->
                <div id="content">
            
                    
                    <div class="main-content">
                            
                            <div class="row ">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card" style="min-height: 485px">
                                        <div class="card-header card-header-text">
                                            <h4 class="card-title">Daftar Akun</h4>
                                            <p class="category">JRP</p>
                                        </div>
                                        <div class="card-content table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>EMAIL</th>
                                                        <th>ROLE</th>
                                                        <th>STATUS</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $data)
                                                    <tr>
                                                        <td>{{$i}}</td>
                                                        <td>{{$data->email}}</td>
                                                        <td>{{$data->role}}</td>
                                                        @if($data->active == 1)
                                                        <td>Aktif</td>
                                                        @else
                                                        <td>Tidak Aktif</td>
                                                        @endif
                                                        @if($data->active == 0)
                                                        <td><a class="btn btn-warning" href="{{url('activate/' . $data->id)}}">Accept</a></td>
                                                        @endif
                                                        <!-- {{$i++}} -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                                
                            <footer class="footer">
                        <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-6">
                            <nav class="d-flex">
                    
                        
                        </div>
                        <div class="col-md-6">
                        <p class="copyright d-flex justify-content-end">JRP</p>
                                
                        </div>
                        </div>
                            </div>
                    </footer>
                            
                            </div>
            
                </div>
            </div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  </body>
  
  </html>