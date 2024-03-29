@extends('layout.index')


@section('content')
     <!-- Page Content -->
     <div class="container">
         
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
            <h1>{{$tintuc->TieuDe}}</h1>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <!-- Author -->
                <p class="lead">
                     <a href="#"></a>
                </p>
                
                <!-- Preview Image -->
            <img class="img-responsive" src="upload/tintuc/{{$tintuc->Hinh}}" alt="">

                <!-- Date/Time -->
               
                <hr>

                <!-- Post Content -->
                <p class="lead">{{$tintuc->TomTat}}</p>
                
               
                <p>{{$tintuc->TieuDe}}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form action="comment" role="form" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @csrf
                        <div class="form-group" name="comment">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

           @foreach ($tintuc->comment as $cm)   
             <!-- Comment -->
           <div class="media">
               <a class="pull-left" href="#">
                   <img class="media-object" src="http://placehold.it/64x64" alt="">
               </a>
               <div class="media-body">
                   <h4 class="media-heading">Start Bootstrap
                   <small>{{$cm->created_at}}</small>
                   </h4>
                  {{$cm->NoiDung}}
               </div>
           </div>

           <!-- Comment -->
               
           @endforeach
       
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        @foreach ($tinlieuquan as $tin)
                            
                      
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                            <a href="">
                                    <img class="img-responsive" src="upload/tintuc/{{$tin->Hinh}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                            <a href="news/{{$tin->id}}"><b>{{$tin->TieuDe}}</b></a>
                            </div>
                        <p>{{$tin->TomTat}}</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

            
                        @endforeach
                      

                       
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        @foreach ($tinnoibat as $nb)
                              <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="upload/tintuc/{{$nb->Hinh}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                            <a href="#"><b>{{$nb->TieuDe}}</b></a>
                            </div>
                            <p>{{$nb->TomTat}}</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        @endforeach
                      

                      

                       
                       
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

@endsection