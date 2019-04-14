<?php

use App\Event;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        

        Event::create([
            'venue_id' => 5,
            'title' => 'STEPBACK! 90S CONCERT',
            'date' => Carbon::parse('2018-10-14'),
            'start_time' => '19:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Pop',
            'description' => 'Featuring performances from Peter Andre, B*Witched, Blazin’ Squad, Booty Luv, Big Brovaz, East 17., Boyzlife, 5IVE and SCLUB',
            'ticket_price' => 50,
            'image' => '/css/img/stepback.png',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 5,
            'title' => 'David Byrne',
            'date' => Carbon::parse('2018-10-27'),
            'start_time' => '18:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Rock',
            'description' => 'Byrne will be performing songs from his critically acclaimed album American Utopia, as well as classics from his solo career and his days with Talking Heads.  A twelve-piece band will also join Byrne on stage for an Annie-B Parson choreographed concert that he has called  “The most ambitious show I’ve done since the shows that were filmed for Stop Making Sense.”  Annie-B Parson also choreographed the St. Vincent and David Byrne collaboration tour around Love This Giant.',
            'ticket_price' => 50,
            'image' => '/css/img/david.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);


        Event::create([
            'venue_id' => 2,
            'title' => 'PLAYAZ CARDIFF',
            'date' => Carbon::parse('2018-10-13'),
            'start_time' => '21:00:00',
            'end_time' => '03:00:00',
            'age_restriction' => '18+',
            'genre' => 'Rave',
            'description' => 'PLAYAZ - HYPE B2B HAZARD - ANNIX - MC AD - IC3 DADDY EARL <br> EARLY BIRD tickets on sale Thursday 9 a.m!',
            'ticket_price' => 10,
            'image' => '/css/img/playaz.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);


        Event::create([
            'venue_id' => 3,
            'title' => 'WOLFGANG FLÜR',
            'date' => Carbon::parse('2018-10-12'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => '18+',
            'genre' => 'Electronic',
            'description' => 'Best known as the drummer of German electronic band Kraftwerk from 1973 to 1986, Wolfgang Flür developed his sound with musical partner Florian Schneider, which saw the pair take on the first electronic drum pads board for the Electric Quartet.',
            'ticket_price' => 17,
            'image' => '/css/img/wolfgang.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);


        Event::create([
            'venue_id' => 4,
            'title' => 'Stan Webbs Chicken Shack',
            'date' => Carbon::parse('2018-10-11'),
            'start_time' => '19:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => '14+',
            'genre' => 'Blues',
            'description' => 'Chicken Shack enjoyed their heyday in the mid to late 1960s, when R&B was popular in England. Chicken Shack\'s line-up has evolved over the years, with Webb being the only constant. Their music was traditional in make-up, and the group covered a variety of American blues standards, as well as composing their own songs. Their repertoire included "I\'d Rather Go Blind" by Ellington Jordan and Billy Foster.',
            'ticket_price' => 15,
            'image' => '/css/img/chicken.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 5,
            'title' => 'Rick Astley',
            'date' => Carbon::parse('2018-11-02'),
            'start_time' => '18:30:00',
            'end_time' => '21:00:00',
            'age_restriction' => 'None',
            'genre' => 'Pop',
            'description' => 'In a career spanning over 30 years, Rick Astley has sold over 40 million records worldwide. ‘50’ has over 10 million UK streams, 20 million worldwide while his classic ‘Never Gonna Give You Up’ has had over 140 million streams on Spotify alone! Singles from ‘50’ had over 12 million You Tube views while Rick has over 600,000 followers on socials.',
            'ticket_price' => 150,
            'image' => '/css/img/ricky.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'Drunk Yoga 1st Birthday Disco',
            'date' => Carbon::parse('2018-10-12'),
            'start_time' => '21:00:00',
            'end_time' => '02:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'WE ARE FAST APPROACHING A TOTAL 365 DAYS OF 7″ DISCO DREAMS AS WE REACH OUR 1ST BIRTHDAY AS DRUNK YOGA THIS OCTOBER!
                WHAT WAS ONCE A DRUNKEN FANTASY THAT WE WOULD FILL THE EARS OF EASILY AMUSED FRIENDS AND STRANGERS, HAS ACTUALLY BECOME A REALITY!
                2018 HAS BEEN GRAND TO US AND WE WANNA THANK ALL OF THE GEMS OF CARDIFF (YA’LL KNOW WHO YOU ARE) FOR THEIR CONTINUED SUPPORT AND GUIDANCE ON OUR JOURNEY INTO SOUND.',
            'ticket_price' => 3,
            'image' => '/css/img/drunkyoga.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'THE SURE SHOT',
            'date' => Carbon::parse('2018-10-13'),
            'start_time' => '21:00:00',
            'end_time' => '02:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'CHRIS WEBB IS THE LONDON-BASED DJ WHO ALSO RUNS KALITA RECORDS.
                PAST AND FUTURE KALITA RELEASES INCLUDE OKYEREMA ASANTE’S ‘SABI (GET DOWN)’, RANDOLPH BAKER’S ‘GETTING NEXT TO YOU’ AND NANA TUFFOUR’S ‘SIKYI MEDLEY’ IN CONJUNCTION WITH CC:DISCO.
                CHRIS WILL BE PLAYING A VINYL-ONLY SET FULL OF UNDER THE RADAR AFRO AND DISCO WINNERS, INCLUDING LOADS OF FUTURE KALITA RELEASES.',
            'ticket_price' => 4,
            'image' => '/css/img/sureshot.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'Dr Syntax & Pete Cannon',
            'date' => Carbon::parse('2018-10-19'),
            'start_time' => '21:00:00',
            'end_time' => '02:00:00',
            'age_restriction' => '18+',
            'genre' => 'Hip Hop',
            'description' => 'STARVING ARTISTS ARE AMPED TO BRING BACK UK HIPHOP DONS DR SYNTAX & PETE CANNON TO GWDIHŴ CAFÉ BAR!
                PLUS SUPPORT FROM SOME CARDIFF CITY’S FINEST!
                LINE UP: 
                DR SYNTAX & PETE CANNON
                S.A. COLLECTIVE
                DJ MANSFIELD GREEN (AV SET)
                MESIJO',
            'ticket_price' => 5,
            'image' => '/css/img/starvingartists.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 3,
            'title' => 'Westerman',
            'date' => Carbon::parse('2018-10-13'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => '18+',
            'genre' => 'Performing Arts',
            'description' => 'The effortless, sensitively delivered pop is overwhelming in Westerman\'s Confirmation, which is in fact, a single providing clear confirmation of his talents. The killer stand-out track is textured, thoughtful and slightly twisted, offering up a dynamic cut with melodies that sooth. Don\'t miss his ethereal sounds live.',
            'ticket_price' => 9,
            'image' => '/css/img/westerman.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 3,
            'title' => 'Chatham County Lane',
            'date' => Carbon::parse('2018-10-15'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => '16+',
            'genre' => 'Bluegrass Band',
            'description' => 'The icons came back with their most recent album, Autumn, which fell just as smoothly as the season. The Americana/bluegrass band released on Yep Roc Records, and hit the sweet spot they\'ve become renowned for once more: laid-back sound, focused songwriting and powerful playing. The intricate, multi-part vocal harmonies that flex over their instrumental builds are mastered to perfection. Nothing about the album is try-hard, it\'s just good.',
            'ticket_price' => 19,
            'image' => '/css/img/chatham.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 4,
            'title' => 'We Are Scientists',
            'date' => Carbon::parse('2018-10-18'),
            'start_time' => '19:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => '14+',
            'genre' => 'Indie Rock',
            'description' => 'We Are Scientists is a New York City-based rock band that formed in Berkeley, California, in 2000.[1] It consists of guitarist and vocalist Keith Murray and bass guitarist Chris Cain.
                The band\'s breakthrough success came with their first studio album, With Love and Squalor, which sold 100,000 copies in the first six months. Their second album, Brain Thrust Mastery,[2] charted at number 11 in the UK album chart, with two top-40 singles, "After Hours" and "Chick Lit". .',
            'ticket_price' => 20,
            'image' => '/css/img/scientists.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 6,
            'title' => 'FALSE HEADS',
            'date' => Carbon::parse('2018-10-11'),
            'start_time' => '20:00:00',
            'end_time' => '23:30:00',
            'age_restriction' => '18+',
            'genre' => 'Punk',
            'description' => '*PLEASE NOTE FALSE HEADS WILL PLAY AFTER THE WALES MATCH HAS FINISHED*
                PUNK-ROCKERS WHO HAVE CAUGHT THE EYE OF IGGY POP, EX RAMONES MANAGER DANNY FIELDS, AND RECENTLY SUPPORTED THE LIBERTINES ON A SOLD-OUT TOUR.',
            'ticket_price' => 0,
            'image' => '/css/img/falseheads.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 6,
            'title' => 'TABLE SCRAPS',
            'date' => Carbon::parse('2018-10-12'),
            'start_time' => '20:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Garage Rock',
            'description' => 'Supported By: ALL DEAD, ALL DEAD//TYRANNOSAW
                BAR OPENS 5PM, LIVE MUSIC FROM 8PM, DJS TIL 4AM. AGES 18+ FREE ENTRY ALL NIGHT.
                "DEBAUCHED GARAGE ROCK THAT PACKS A REAL PUNCH" CLASH
                "DARK AND BRILLIANT" DIY
                "A SNARLING SENSATION" UPSET',
            'ticket_price' => 0,
            'image' => '/css/img/tablescraps.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);
        
        Event::create([
            'venue_id' => 9,
            'title' => 'Say Sue Me',
            'date' => Carbon::parse('2018-10-11'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => '18+',
            'genre' => 'Indie Rock',
            'description' => 'Say Sue Me are a surf-inspired indie rock quartet from Busan, South Korea. Friends since 5th grade Jae Young (Bass) and Kim Byungkyu (guitar) met drummer kang Semin at high school and played in band’s together until the winter of 2012, when one day they were drinking tea and beer at a tea shop in Nampo-dong, when Sumi arrived. They liked her speaking voice and immediately offered her a spot as the vocalist in a new band that would become Say Sue Me.',
            'ticket_price' => 8,
            'image' => '/css/img/saysueme.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);
    }
}

