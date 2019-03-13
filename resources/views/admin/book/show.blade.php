@extends('admin.layouts.admin')
@section('title', "Services Management")

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th>Services Image</th>
                <td>
                        <img  id="myImg" onclick="displayIMG(this.id)" height="200" width="200" src="\image\service\item\{{$Services->pic}}" alt={{ $Services->name }}>{{-- {{ $employee->avatar }} --}}
                        <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                          </div>
                        {{-- <img height="200" width="200" src="\image\service\item\{{$Services->pic}}" class="user-profile-image"></td> --}}
            </tr>

            <tr>
                <th>Services name</th>
                <td>{{ $Services->serviceName }}</td>
            </tr>
            <tr>
                    <th>Services DID</th>
                    <td>{{ $Services->Did }}</td>
                </tr>
            <tr>
                <th>Services type</th>
                <td>
                        {{ $Services->type }}
                    </a>
                </td>
            </tr>
            <tr>
                <th>Services description</th>
                <td>
                    {{ ($Services->description)}} 
                </td>
            </tr>
            </tbody>
        </table>
        <a href="{{ route('admin.services') }}" class="btn btn-danger">Store home</a>
        <a class="btn btn-info" href="{{ route('admin.services.edit',[$Services->id]) }}">Edit</a>
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