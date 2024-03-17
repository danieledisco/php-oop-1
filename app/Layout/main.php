<body>
    <main>
        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i < $nMovies; $i++) : ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>Title: <?php echo $objArray[$i]->title; ?></h3>
                        <h5>Genre: <?php echo $objArray[$i]->movieGenre; ?></h5>
                        <h5>Year of production: <?php echo $objArray[$i]->yearProduction; ?></h5>
                        <h5>Country: <?php echo $objArray[$i]->countryProduction; ?></h5>
                        <h5>Duration: <?php echo $objArray[$i]->duration; ?>m</h5>
                        <h5>Sponsor: <?php echo $objArray[$i]->sponsor; ?></h5>
                        <h5>Producer: <?php echo $objArray[$i]->producer; ?></h5>
                        <h3>Cast:</h3>
                        <h5>Director: <?php $director = $objArray[$i]->getDirector();
                                        echo $director ?></h5>
                        <h5>Screen Player: <?php echo $objArray[$i]->castMovie->screePlayer; ?></h5>
                        <h5>Photograpy Director: <?php echo $objArray[$i]->castMovie->photograpyDirector; ?></h5>
                        <h5>Main Actor: <?php $mainActor = $objArray[$i]->getMainActor();
                                        echo $mainActor; ?></h5>
                        <h6>Redistribution: <?php echo Movie::$redistribution ?></h6>
                        <h6>Tech: <?php echo $objArray[$i]->getTech(); ?></h6>
                        <h3> <?php echo Movie::endClass(); ?></h3>

                    </div>
                <?php endfor ?>
            </div>
    </main>