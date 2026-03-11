<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Settings</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product_view.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-settings.css') }}">
</head>
<body>
    @include('partials.header')

    <div class="Product">

    <h1 class="product-name">Admin Settings</h1>
    
    <div class="image-wrapper">
        <p style="color: #858585; margin-bottom: 20px" class="creator">(docent naam) settings</p>
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; margin-left: 100px;">
            <label style="color: white;">get email for every order</label>
            <button class="button-7" id="btn" role="button" onclick="toggleColor(this)">Disabled</button>
        </div>

        <label style="color: white; display: block; margin-bottom: 5px; margin-left: 100px;">Change Email address</label>
        <input type="email" placeholder="example@email.com" style="
        margin-left: 100px;
        margin-bottom: 20px;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #070707;
        font-size: 13px;
        width: 220px;
        ">

        <label style="color: white; display: block; margin-bottom: 5px; margin-left: 100px;">Change docent number</label>
        <input type="email" placeholder="(docent nummer)" style="
        margin-left: 100px;
        margin-bottom: 20px;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #070707;
        font-size: 13px;
        width: 220px;
        ">

        <label style="color: white; display: block; margin-bottom: 5px; margin-left: 100px;">Change docent name</label>
        <input type="email" placeholder="(docent name)" style="
        margin-left: 100px;
        margin-bottom: 20px;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #070707;
        font-size: 13px;
        width: 220px;
        ">

        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; margin-left: 100px;">
            <label style="color: white;">your second option here</label>
            <button class="button-7" id="btn" role="button" onclick="toggleColor(this)">Disabled</button>
        </div>

        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; margin-left: 100px;">
            <label style="color: white;">your second option here</label>
            <button class="button-7" id="btn" role="button" onclick="toggleColor(this)">Disabled</button>
        </div>

        <div class="settings-row">
            
        </div>
    </div>

    <!-- <div class="rest">
        <p style="font-size: xx-large; margin-top: 125px; margin-left: 10px; color: white;" class="description"><span>Product</span> Description</p>
        <p style="font-size: medium; margin-left: 10px; color: white;" class="price">Estimated print time: 2 hours</p>

        <label for="type_of_fillament" style="margin-left: 10px; margin-bottom: ; color: white;">Select a preferred fillament type <br></label>
        <select style="margin-left: 10px; margin-top: 20px; width: 220px;" name="type_of_fillament" id="type_of_fillament">
            <option value="pla">PLA</option>
            <option value="abs">ABS</option>
            <option value="petg">PETG</option>
        </select><br>
    <button style=" margin-top: 20px; margin-left: 10px;" class="order-btn">Order now</button>

    </div> -->
</div>
    <script src="{{ asset('javascript/admin-settings.js') }}"></script>
</body>
</html>