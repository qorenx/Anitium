<head>
    <title><?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords"
        content="<?=$websiteTitle?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <meta property="og:url" content="<?=$websiteUrl?>/home">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:secure_url" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico?v=<?=$version?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.ico?v=<?=$version?>" />
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/min.css?v=<?=$version?>">
    <script type="text/javascript">
    setTimeout(function() {
        var wpse326013 = document.createElement('link');
        wpse326013.rel = 'stylesheet';
        wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
        wpse326013.type = 'text/css';
        var godefer = document.getElementsByTagName('link')[0];
        godefer.parentNode.insertBefore(wpse326013, godefer);
        var wpse326013_2 = document.createElement('link');
        wpse326013_2.rel = 'stylesheet';
        wpse326013_2.href =
            'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
        wpse326013_2.type = 'text/css';
        var godefer2 = document.getElementsByTagName('link')[0];
        godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
    }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
</head>



<div id="anime-featured">

        </div>
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Subbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/subbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                    <?php 
                                $json = file_get_contents("$api/recent-release?type=1&page=1");
                                $json = json_decode($json, true);
                                foreach($json as $recentRelease) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn">
                                                    <?=$recentRelease['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode
                                                    <?=$recentRelease['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['imgUrl']?>"
                                                src="<?=$websiteUrl?>/files/images/no_poster.jpg" alt="<?=$recentRelease['name']?>">
                                            <a class="film-poster-ahref" href="/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['name']?>"
                                                data-jname="<?=$recentRelease['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['name']?>"
                                                    data-jname="<?=$recentRelease['name']?>"><?=$recentRelease['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <?php } ?>




                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Dubbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/dubbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">
                                    <?php 
                                $json = file_get_contents("$api/recent-release?type=2&page=1");
                                $json = json_decode($json, true);
                                foreach($json as $recentReleaseDub) { ?>

                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-dub  tick-eps amp-algn">
                                                    <?=$recentReleaseDub['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode
                                                    <?=$recentReleaseDub['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentReleaseDub['imgUrl']?>"
                                                src="<?=$websiteUrl?>/files/images/no_poster.jpg"
                                                alt="<?=$recentReleaseDub['imgUrl']?>">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentReleaseDub['episodeId']?>"
                                                title="<?=$recentReleaseDub['name']?>"
                                                data-jname="<?=$recentReleaseDub['name']?>"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="/watch/<?=$recentReleaseDub['episodeId']?>"
                                                    title="<?=$recentReleaseDub['name']?>"
                                                    data-jname="<?=$recentReleaseDub['name']?>"><?=$recentReleaseDub['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Dub</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>