<!DOCTYPE html>
<html>

<head>
    <title>Catalog | VinciLab</title>
    <!-- <link rel="stylesheet" href="../css/app.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">

</head>

<body>
    @include('partials.header')
    <section class="main-section">
        <div class="main-section__catalog">
            <div class="main-section__filter">
                <div class="main-section__filter-search">
                    <input type="text" placeholder="Zoek op titel, studentnummer...">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="main-section__filter-options">
                    <span>Naam</span>
                    <ul>
                        <li><i class="fa-solid fa-arrow-up-a-z"></i>A-Z</li>
                        <li><i class="fa-solid fa-arrow-up-z-a"></i>Z-A</li>
                    </ul>
                    <span>Datum</span>
                    <ul>
                        <li><i class="fa-solid fa-arrow-up-a-z"></i>nieuw-oud</li>
                        <li><i class="fa-solid fa-arrow-up-z-a"></i>oud-nieuw</li>
                    </ul>
                </div>
            </div>
            <div class="main-section__overview">
                <div class="item">
                    <div class="item__info">
                        <div class="item__image">200x150</div>
                        <div class="item__title">Titel</div>
                        <div class="item__creator">990XXXXX</div>
                        <div class="item__details">
                            <div class="item__details-date">dd-mm<br>yyy</div>
                            <div class="item__details-button"><button>Details</button></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

</html>