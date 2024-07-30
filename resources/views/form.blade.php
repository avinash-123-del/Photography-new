<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>


    <form method="post" action="{{ url('form_submit') }}" enctype="multipart/form-data">
        @csrf

        <div class="container my-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>category</label>
                        <input type="text" class="form-control" name="cid" />
                    </div>
                    <div class="form-group">
                        <label>subcategory</label>
                        <input type="text" class="form-control" name="scid" />
                    </div>
                    <div class="form-group">
                        <label>title</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="form-group">
                        <label>Main Image</label>
                        <input type="file" class="form-control" name="main_image" />
                    </div>
                    <div class="form-group">
                        <label>client</label>
                        <input type="text" class="form-control" name="client" />
                    </div>
                    <div class="form-group">
                        <label>year</label>
                        <input type="text" class="form-control" name="year" />
                    </div>
                    <div class="form-group">
                        <label>role</label>
                        <input type="text" class="form-control" name="role" />
                    </div>
                    <div class="form-group">
                        <label>overview</label>
                        <textarea class="form-control" name="overview"></textarea>
                    </div>
                    <div class="form-group">
                        <label>overview image</label>
                        <input type="file" class="form-control" name="overview_img" />
                    </div>
                    <div class="form-group">
                        <label>Branding concept</label>
                        <textarea class="form-control" name="branding_concept"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Branding concept image</label>
                        <input type="file" class="form-control" name="branding_concept_img" />
                    </div>
                    <div class="form-group">
                        <label>Impact</label>
                        <textarea class="form-control" name="imapact"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info btn-lg ">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    @if (session('success'))
        <script>
            $(document).ready(function() {

                toastr.success('submited successfullt.');

            });
        </script>
    @endif

    @if (session('error'))
        <script>
            $(document).ready(function() {

                toastr.error('something went wrong.');

            });
        </script>
    @endif


</body>

</html>
