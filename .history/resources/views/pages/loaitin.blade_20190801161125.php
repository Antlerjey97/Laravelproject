 
 @extends('layout.index')
 @section('content')
     <!-- Page Content -->
  <div class="container">
        <div class="row">
            {{-- <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    {{-- <li href="#" class="list-group-item menu1 active">
                        Menu
                  
                @foreach ($loaitin as $lt)
                    
                </li>
                    <li href="#" class="list-group-item menu1">
                                {{$lt->Ten}}
                    </li>   
                    <ul>
                            @foreach ($lt->tintuc as $tintuc)
                        <li class="list-group-item">
                            <a href="#">{{$tintuc->TieuDe}}</a>
                        </li>
                        @endforeach
                    </ul>
                
      @endforeach      
      
                </ul>
            </div> --}}

            @include('layout.menu')

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Loại Tin</b></h4>
                    </div>
                    @foreach ($tintuc as $tt)
                        
                  
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                        <h3>{{$tt->TieuDe}}</h3>
                        <p>{{$tt->TomTat}}</p>
                            <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                 
                    @endforeach
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            {{$tintuc->links()}}
                        </div>
                    </div>
                    <!-- /.row -->
                  
                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->
 @endsection
 
 