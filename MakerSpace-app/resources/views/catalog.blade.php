<!DOCTYPE html>
<html>
<head>
    <title>Catalog | Workspace</title>
    <!-- <link rel="stylesheet" href="../css/app.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">

</head>
<body>
    @include('partials.header')
    <section class="main-section">
        <h1>Catalog</h1>
        <div class="main-catalog">
            <div class="filtermenu">
                <div class="searchbarfilter">
                    <input type="text" placeholder="Zoek op titel, studentnummer...">
                </div>
            </div>
            <div class="itemsoverview">

            </div>
        </div>
    </section>
    
</body>
</html>