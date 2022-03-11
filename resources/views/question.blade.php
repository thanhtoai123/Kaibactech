<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaibatech</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                   <h2 class="h2 text-center mb-5">Form hỏi đáp</h2>

                   <form action="{{url('/store')}}" enctype="multipart/form-data" method="POST">
                       @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="full_name" placeholder="Enter Họ và tên" name="full_name" value="{{old('full_name')}}">
                            <label for="full_name">Tên người hỏi</label>

                            @error('full_name')
                                <small class="text-danger px-1">{{$message}}</small>                            
                            @enderror
                        </div>
                      
                        <div class="form-floating mb-3">
                            <input class="form-control" type="date" name="date" id="date" value="{{old('date')}}">
                            <label for="date">Ngày hỏi</label>

                            @error('date')
                                <small class="text-danger px-1">{{$message}}</small>                            
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="question" name="question" placeholder="Nội dung hỏi">{{old('question')}}</textarea>
                            <label for="question">Nội dung hỏi</label>

                            @error('question')
                                <small class="text-danger px-1">{{$message}}</small>                            
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="d-block mb-1" for="file">File đính kèm</label>
                            <input class="d-block" type="file" name="file" id="file">

                            @error('file')
                                <small class="text-danger px-1">{{$message}}</small>                            
                            @enderror
                        </div>

                        <div>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}

                            @error('g-recaptcha-response')
                                <small class="text-danger px-1">{{$message}}</small>                            
                            @enderror
                        </div>

                        <input class="w-100 p-2 btn btn-primary mt-5" type="submit" value="Gửi đi">
                   </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>