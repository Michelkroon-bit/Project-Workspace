<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @include('partials.header')


    <h1>Custom Upload</h1>
    <p class="subtitle">Here you can upload your own 3D model to be printed!</p>
    <div class="custom-upload">
       

        <label tooltip="Upload a file" for="file-upload" class="upload-label">
    <div class="upload-icon">
    <svg width="40" height="40" fill="#4caf50" viewBox="0 0 24 24">
        <path d="M12 2L6 8h4v6h4V8h4l-6-6zM6 18v2h12v-2H6z"/>
    </svg>
     <p>drag and drop your model file here</p>
        <p>Available formats: .stl .cad .gcode .3fm</p>

    </div>
</label>

<input  style="display: none;" type="file" id="file-upload" name="model" accept=".stl,.cad, .gcode ,.3fm">

        <button class="upload-btn">Upload</button>
    </div>


</body>
</html>