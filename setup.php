<HTML>
    <head>
        <title>Athenaum Media Library Setup File</title>
    </head>

    <body>
    <H2>Setting Up Athenaum Media Library...</H2>
    </body>
</HTML>

<?php
include("config.php");

    createTable('users',
        'username VARCHAR(45) NOT NULL PRIMARY KEY,
               FirstName VARCHAR(16),
               LastName VARCHAR(16),
               Email VARCHAR(64),
               password VARCHAR(45)');

    createTable('movies',
                'movieID int(11) AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(45),
                       year INT(11),
                       photo VARCHAR(256),
                       username VARCHAR(45),
                       synopsis VARCHAR(512)');

    addUser('Tom',
            'Tom',
            'Jones',
            'Tom@abc.com',
            'password');

    addUser('George',
        'George',
        'Smith',
        'George@none@nowhere.com',
        'password');

    addUser('Michelle',
        'Michelle',
        'Davis',
        'mdavis@time.com',
        'password');

    addMovie( 'Joker',
              '2019',
             'https://image.tmdb.org/t/p/w600_and_h900_bestv2/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg',
          'Tom',
           'During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.');

    addMovie( 'Gemini Man',
        '2019',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uTALxjQU8e1lhmNjP9nnJ3t2pRU.jpg',
        'George',
        'During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.');

    addMovie( 'SpaceBalls',
        '1987',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/xWt9KAcToCRdJ6JH8JyZZlhkVgG.jpg',
        'Michelle',
        'When the nefarious Dark Helmet hatches a plan to snatch Princess Vespa and steal her planets air, space-bum-for-hire Lone Starr and his clueless sidekick fly to the rescue. Along the way, they meet Yogurt, who puts Lone Starr wise to the power of The Schwartz. Can he master it in time to save the day');

    addMovie( 'Venom',
        '2018',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/2uNW4WbgBXL25BAbXGLnLqX71Sw.jpg',
        'Tom',
        'Investigative journalist Eddie Brock attempts a comeback following a scandal, but accidentally becomes the host of Venom, a violent, super powerful alien symbiote. Soon, he must rely on his newfound powers to protect the world from a shadowy organization looking for a symbiote of their own.');

    addMovie( 'Avengers - Infinity War',
        '2018',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg',
        'George',
        'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.');

    addMovie( 'Inception',
        '2010',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg',
        'Michelle',
        '');

    addMovie( 'The Lion King',
        '2019',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg',
        'Tom',
        'Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cubs arrival. Scar, Mufasas brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simbas exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.');

    addMovie( 'The Lion King',
        '2019',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg',
        'George',
        'Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cubs arrival. Scar, Mufasas brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simbas exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.');

    addMovie( 'Maleficient: Mistress of Evil',
        '2019',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/tBuabjEqxzoUBHfbyNbd8ulgy5j.jpg',
        'Michelle',
        'Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.');

    addMovie( 'Spider-Man: Far From Home',
        '2019',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lcq8dVxeeOqHvvgcte707K0KVx5.jpg',
        'Tom',
        'Peter Parker and his friends go on a summer trip to Europe. However, they will hardly be able to rest - Peter will have to agree to help Nick Fury uncover the mystery of creatures that cause natural disasters and destruction throughout the continent.');

    addMovie( 'The Shining',
        '1980',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9fgh3Ns1iRzlQNYuJyK0ARQZU7w.jpg',
        'George',
        'Jack Torrance accepts a caretaker job at the Overlook Hotel, where he, along with his wife Wendy and their son Danny, must live isolated from the rest of the world for the winter. But they arent prepared for the madness that lurks within.');

    addMovie( 'Robin Hood',
        '2018',
        'https://image.tmdb.org/t/p/w600_and_h900_bestv2/AiRfixFcfTkNbn2A73qVJPlpkUo.jpg',
        'Michelle',
        'A war-hardened Crusader and his Moorish commander mount an audacious revolt against the corrupt English crown.');


    header("location: index.php");
?>
