<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div class="container mt-5">
        <form action="/kalkulator" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <input type="number" name="pertama" class="form-control" placeholder="Masukkan Bilangan Pertama" required>
            </div>
            <div class="col-md-3">
                <select name="operan" class="form-control">
                    <option value="tambah"> + </option>
                    <option value="kurang"> - </option>
                    <option value="bagi"> : </option>
                    <option value="kali"> x </option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="kedua" class="form-control" placeholder="Masukkan Bilangan Kedua" required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info">hasil</button>
            </div>
        </form>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-6">
                @if(session('info'))
                <div class="alert alert-info">
                {{session('info')}}
                </div>
                @endif
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>

    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>