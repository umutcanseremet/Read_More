<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Konu Ekle</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4.col-md-offset-4">
            <h4>Yeni Yazı Ekle</h4>
            <hr>
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Resim Seçin</label>
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="name">Konu Başlık</label>
                    <input type="text" class="form-control" placeholder="Konu İsmini Giriniz" name="topic">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Yazı</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" cols="60" rows="10" name="writer" maxlength="255"></textarea>
                </div>
                <button class="btn btn-block btn-primary" type="submit">Konuyu Ekle</button>
        </div>
        </form>
    </div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
