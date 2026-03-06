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
        <div class="main-catalog">
            <div class="filtermenu">
                <div class="searchbarfilter">
                    <input type="text" placeholder="Zoek op titel, studentnummer...">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="itemsoverview">
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
                    <div class="catalog-item"></div>
            </div>
        </div>
    </section>
    
</body>
</html>