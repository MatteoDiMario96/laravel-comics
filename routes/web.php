<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $UlHeaderLinks = [
        [
            "id" => 1,
            "title" => "CHARACTERS",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 2,
            "title" => "COMICS",
            "active" => true,
            "href" => "#",
        ],
        [
            "id" => 3,
            "title" => "MOVIES",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 4,
            "title" => "TV",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 5,
            "title" => "GAMES",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 6,
            "title" => "COLLECTIBLES",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 7,
            "title" => "VIDEOS",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 8,
            "title" => "FANS",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 9,
            "title" => "NEWS",
            "active" => false,
            "href" => "#",
        ],
        [
            "id" => 10,
            "title" => "SHOP",
            "active" => false,
            "href" => "#",
        ],
    ];
    $MainLogo = [
        "src" => '/resources/img/dc-logo.png',
        "href" => '/',
        "alt" => "Main logo Dc Comics",
    ];
    $LiCardsJson = [
        [
            "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
            "price" => "$19.99",
            "series" => "Action Comics",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
            "price" => "$16.99",
            "series" => "Aquaman",
            "type" => "graphic novel",
        ],
        [
            "thumb" => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
            "price" => "$2.99",
            "series" => "Batgirl",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
            "price" => "$3.99",
            "series" => "Batman",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "type" => "comic book",
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
            "price" => "$16.99",
            "series" => "Catwoman",
            "type" => "graphic novel",
        ],
    ];
    $ArticleImgLinks = [
        [
            "id" => 1,
            "title" => "Digital Comics",
            "src" => "./src/assets/img2/buy-comics-digital-comics.png",
            "alt" => "Digital Comics Immagine"
        ],
        [
            "id" => 2,
            "title" => "Dc Merchandice",
            "src" => "./src/assets/img2/buy-comics-merchandise.png",
            "alt" => "Merchandise Immagine"
        ],
        [
            "id" => 3,
            "title" => "Subscription",
            "src" => "./src/assets/img2/buy-comics-subscriptions.png",
            "alt" => "Subscription Immagine"
        ],
        [
            "id" => 4,
            "title" => "Comic Shop Locator",
            "src" => "./src/assets/img2/buy-comics-shop-locator.png",
            "alt" => "Shop locator Immagine"
        ],
        [
            "id" => 5,
            "title" => "Dc Power Visa",
            "src" => "./src/assets/img2/buy-dc-power-visa.svg",
            "alt" => "DC Power VISA Immagine"
        ],
    ];
    $FooterUlLinksDCComics = [
        [
            "id" => 1,
            "title" => "Characters",
            "href" => "#",
        ],
        [
            "id" => 2,
            "title" => "Comics",
            "href" => "#",
        ],
        [
            "id" => 3,
            "title" => "Movies",
            "href" => "#",
        ],
        [
            "id" => 4,
            "title" => "Tv",
            "href" => "#",
        ],
        [
            "id" => 5,
            "title" => "Games",
            "href" => "#",
        ],
        [
            "id" => 6,
            "title" => "Videos",
            "href" => "#",
        ],
        [
            "id" => 7,
            "title" => "News",
            "href" => "#",
        ],
    ];
    $FooterUlLinksShop = [
        [
            "id" => 1,
            "title" => "Shop DC",
            "href" => "#",
        ],
        [
            "id" => 2,
            "title" => "Shop DC Collectibles",
            "href" => "#",
        ],
    ];
    $FooterUlLinksDC = [
        [
            "id" => 1,
            "title" => "Term of use",
            "href" => "#",
        ],
        [
            "id" => 2,
            "title" => "Privacy policy(New)",
            "href" => "#",
        ],
        [
            "id" => 3,
            "title" => "Ad Choices",
            "href" => "#",
        ],
        [
            "id" => 4,
            "title" => "Advertising",
            "href" => "#",
        ],
        [
            "id" => 5,
            "title" => "Jobs",
            "href" => "#",
        ],
        [
            "id" => 6,
            "title" => "Subscriptions",
            "href" => "#",
        ],
        [
            "id" => 7,
            "title" => "Talent Workshops",
            "href" => "#",
        ],
        [
            "id" => 8,
            "title" => "CPSC Certificates",
            "href" => "#",
        ],
        [
            "id" => 9,
            "title" => "Ratings",
            "href" => "#",
        ],
        [
            "id" => 10,
            "title" => "Shop help",
            "href" => "#",
        ],
        [
            "id" => 11,
            "title" => "Contact Us",
            "href" => "#",
        ],
    ];
    $FooterUlLinksSites = [
        [
            "id" => 1,
            "title" => "DC",
            "href" => "#",
        ],
        [
            "id" => 2,
            "title" => "MAD Magazine",
            "href" => "#",
        ],
        [
            "id" => 3,
            "title" => "DC Kids",
            "href" => "#",
        ],
        [
            "id" => 4,
            "title" => "DC Universe",
            "href" => "#",
        ],
        [
            "id" => 5,
            "title" => "DC Power Visa",
            "href" => "#",
        ],
    ];








    return view('home', compact('UlHeaderLinks', 'MainLogo', 'LiCardsJson', 'ArticleImgLinks', 'FooterUlLinksDCComics', 'FooterUlLinksShop', 'FooterUlLinksDC', 'FooterUlLinksSites'));
});
