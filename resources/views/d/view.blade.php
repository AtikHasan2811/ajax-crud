<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<section class="mt-5">
    <div class="container">
        <div class="card" style="background-color: aquamarine">
            <div class="card-header">
                <div class="text-right">
                    <a href="#" class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">New Student</a>
                </div>

            </div>
            <div class="card-body">


                <div class="div">

                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Section</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($students as $key=>$student)--}}
{{--                        <tr>--}}

{{--                            <td scope="row" >{{$key+1}}</td>--}}
{{--                            <td scope="row" style="display: none;" >{{$student->id}}</td>--}}
{{--                            <td>{{$student->name}}</td>--}}
{{--                            <td>{{$student->class}}</td>--}}
{{--                            <td>{{$student->section}}</td>--}}
{{--                            <td>--}}
{{--                                <div class="btn-group">--}}
{{--                                    <name_available href="#" class="btn btn-success editBtn"><i class="fa fa-edit"></i>Edit</name_available>--}}
{{--                                    <name_available class="btn btn-danger deletebtn" ><i class="fa fa-edit"></i>Delete</name_available>--}}
{{--                                </div>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>



                </div>

            </div>
        </div>
    </div>
</section>





<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: darksalmon">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form id="addForm">
                            @CSRF
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"  class="form-control" id="name" name="name"  placeholder="Enter Name" value="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Class</label>
                                <input type="text" class="form-control" id="class" name="class"  placeholder="Enter Class" value="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Section</label>
                                <input type="text" class="form-control" id="section" name="section"  placeholder="Enter Subject" value="">
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
{{--<-- end model -->--}}
















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<script type="text/javascript">

    $(document).ready(function (){


        $('#editForm').on('submit',function (e){
            e.preventDefault();

            $.ajax({
                type: "post",
                url: "{{url('/student/update/')}}",
                data: $('#editForm').serialize(),
                success: function (restonce){
                    alert('data save successfully')
                    $('#editexampleModal').hidden();

                },
                error: function (error){
                    alert('data not found')
                }
            });
        });
    });






</script>








</body>
</html>






















