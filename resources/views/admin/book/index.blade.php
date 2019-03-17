@extends('admin.layouts.admin')
@section('content')
    <div class="row title-section">
        <div class="col-12 col-md-8">
        @section('title', "Service Management")
        </div>
        <div class="col-8 col-md-4" style="padding-bottom: 15px;">
            <div class="topicbar">
                <a href="" class="btn btn-primary">Add Service</a>
            </div>
            <div class="right-searchbar">
                    <!-- Search form -->
                    <form action="searchservice" method="post" class="form-inline">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" required />
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" style="margin-top: -10px;" type="submit">Search</button>
                        </div>
                        {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
                    </form>
                </div>
           
        </div>
    </div>
    <div class="row">
       
        <div class="alert alert-danger" role="alert">
                <p>Not have Data in service table</p>
        </div>
        
        <div class="container">
                <br>
                <div class="col-12 panel panel-primary">
                            
                    {{-- <div class="panel-body"><p style="text-align:center;"><img src="img/core-img/artificial.png" class="center" width="800" height="420"></p></div> --}}
                    <div class="panel-heading"><p style="text-align:center;"> <img src="\img\icons\orthosis.png" width="75px" height="75px"></p><h4 align="center">Orthosis care</h4>
                </div>
                </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-3 text-center">
                <div class="panel panel-success ">
                    <div class="panel-heading " style="text-align: justify;">
                            <p style="text-align:center;">  
                                {{-- <img class="imgdis" id={{ $service->id }} onclick="displayIMG(this.id)"  src="\image\service\item\{{ $service->pic }}" alt="Snow" style="height:200px;width:150px;max-width:150px"></p> --}}
                            <h4 align="center"></h4></div>
                      {{-- <p >{{ $service->description }}</p> --}}
                      <a class="btn btn-xs btn-primary" href="">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-xs btn-danger" href="">
                            <i class="fa fa-trash"></i>
                        </a>
                </div>
              </div>
            
    </div>
    
    
    </div>
    <div id="myModal" class="modal">
            <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
    <script>
            // Get the modal
            var modal = document.getElementById('myModal');
            // var img=document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
           
              function displayIMG(clicked_id)
            {
                modal.style.display = "block";
                modalImg.src = document.getElementById(clicked_id).src;
                captionText.innerHTML =document.getElementById(clicked_id).alt;
            }  
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
            </script>
@endsection