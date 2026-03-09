<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>
<body>

@include('partials.header')

<div class="Product">

    <h1 class="product-name">BoyckeIsEI</h1>
    
    <div class="image-wrapper">
        <p style="color: #858585;" class="creator">Created by: Eggman</p>
        <img style="width: 350px; height: 350px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">
        
        <div class="thumbnail-row">
            <img style="width: 50px; height: 50px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">
            <img style="width: 50px; height: 50px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">
            <img style="width: 50px; height: 50px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">
            <img style="width: 50px; height: 50px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">
            <img style="width: 50px; height: 50px;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product">        </div>
    </div>

    <div class="rest">
        <p style="font-size: xx-large; margin-top: 125px; margin-left: 10px; color: white;" class="description"><span>Product</span> Description</p>
        <p style="font-size: medium; margin-left: 10px; color: white;" class="description-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies lacinia, nunc nisl aliquam nisl.</p>
        <p style="font-size: medium; margin-left: 10px; color: white;" class="price">Estimated print time: 20 hours</p>

        <label for="type_of_fillament" style="margin-left: 10px; margin-bottom: ; color: white;">Select a preferred fillament type <br></label>
        <select style="margin-left: 10px; margin-top: 20px; width: 220px;" name="type_of_fillament" id="type_of_fillament">
            <option value="pla">PLA</option>
            <option value="abs">ABS</option>
            <option value="petg">PETG</option>
        </select><br>
    <button style=" margin-top: 20px; margin-left: 10px;" class="order-btn">Order now</button>

    </div>
</div>


{{-- <img style="width: 250px; height: 250px;;" src="{{ asset('images/No_Image_Available.jpg') }}" alt="image-of-product"> --}}
  

</body>
</html>
 