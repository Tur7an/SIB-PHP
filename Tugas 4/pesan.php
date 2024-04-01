<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css>
</head>
<body>

  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Nama Lengkap</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="adr"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>2</b></span></h4>
      <p><a href="#">Produk 1</a> <span class="price">Rp. 1.000.0000</span></p>
      <p><a href="#">Produk 2</a> <span class="price">Rp. 2.000.0000</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rp. 3.000.0000</b></span></p>
    </div>
    <input type="submit" value="Continue to checkout" class="btn">
  </div>
</div>

</body>
</html>