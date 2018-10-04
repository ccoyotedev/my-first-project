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
            'venue_id' => 1,
            'title' => 'The MixTape Freshers Party',
            'date' => Carbon::parse('2018-10-06'),
            'start_time' => '21:00:00',
            'end_time' => '02:00:00',
            'age_restriction' => '18+',
            'genre' => 'Dance',
            'description' => 'We are back!
                 After a lovely long summer with brief stopovers at Gottwood, Kala and Westival, the mixtape is back with more bangers, clangers and slammers to get your taps aff and boogie to.
                Get cosy and crack open a cold tin of dark fruit (other fruit-flavoured alcoholic beverages are available) as our residents guide you through a night of dancefloor joy.
                maximum fun maximum love maximum good times
                join us for a dance x',
            'ticket_price' => 3,
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'Juxtaposed PRESENTS Surreal Kinnock',
            'date' => Carbon::parse('2018-10-09'),
            'start_time' => '19:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'Romping political grit-pop with colourful realms & biting lyrics, the amazing Surreal Kinnock headline Gwdihw in October!
                support comes from Scott Lavene, shop girls & more tbc
                presented in conjunction with funnel music & crosstown concerts
                “Gruffydd John and Meredydd Russell-Jones are brothers both musically and biologically, and together they’ve crafted their own world.',
            'ticket_price' => 4,
            'image' => '/css/img/surreal.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 3,
            'title' => 'YUM!',
            'date' => Carbon::parse('2018-10-5'),
            'start_time' => '23:00:00',
            'end_time' => '03:00:00',
            'age_restriction' => '18+',
            'genre' => 'Party Anthems',
            'description' => 'Where else could you possibly need to be on a Friday night…. There’s simply no where else that will tantalise the musical pallet like YUM!

                Party Anthems // Cult Classics // Dance floor Bangers',
            'ticket_price' => 3,
            'image' => '/css/img/yum.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

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
            'title' => 'Triple Cooked',
            'date' => Carbon::parse('2018-10-05'),
            'start_time' => '21:00:00',
            'end_time' => '03:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'Weird and Wonderful! Ticket price includes £1 venue restoration levy.',
            'ticket_price' => 10,
            'image' => '/css/img/triplecooked.png',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 2,
            'title' => 'Graham Parker & The Goldtops',
            'date' => Carbon::parse('2018-10-09'),
            'start_time' => '19:30:00',
            'end_time' => '22:30:00',
            'age_restriction' => 'None',
            'genre' => 'Rock',
            'description' => 'Best known as lead singer of Graham & The Rumour who preceded the arrival of punk rock and new wave, his career has spanned over 40 years and was recently reinvigorated when acclaimed US film producer and director Judd Apatow cast Parker in his hit film \'This Is 40\', featuring a performance by GP & The Rumour that signalled the band to reform to play a series of now legendary come back concerts.',
            'ticket_price' => 28,
            'image' => '/css/img/graham.jpg',
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
            'title' => 'Strange Bones',
            'date' => Carbon::parse('2018-10-06'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => '16+',
            'genre' => 'Rock',
            'description' => 'Recently nominated for Best Live Act at the 2018 Unsigned Music Awards, British punk prodigies Strange Bones aren\'t ones to sleep on. Not that you could, if you\'ve checked out their recent single, Blind Faith No Future, you\'ll have had no choice other than to be stunned by their aural attack, blistering delivery and a fire that can only be fuelled by Britain in unrest. Don\'t miss their renowned live show, their fast-fire drums are enough alone.',
            'ticket_price' => 9,
            'image' => '/css/img/strangebones.jpg',
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
            'title' => 'DR Feelgood',
            'date' => Carbon::parse('2018-10-05'),
            'start_time' => '19:30:00',
            'end_time' => '22:00:00',
            'age_restriction' => '14+',
            'genre' => 'Rock',
            'description' => 'Dr. Feelgood are a British pub rock band formed in 1971. Hailing from Canvey Island, Essex, the group are best known for early singles such as "She Does It Right", "Roxette", "Back in the Night" and "Milk and Alcohol" .',
            'ticket_price' => 17,
            'image' => '/css/img/feelgood.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 4,
            'title' => 'Neville Staple Band',
            'date' => Carbon::parse('2018-10-06'),
            'start_time' => '19:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Ska',
            'description' => 'Neville Eugenton Staple is a Jamaican born English singer for the two-tone ska band, The Specials as well as his own combo, The Neville Staple Band. He also sang with Ranking Roger in Special Beat.',
            'ticket_price' => 17,
            'image' => '/css/img/neville.jpg',
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
            'venue_id' => 6,
            'title' => 'LOVELY WIFE',
            'date' => Carbon::parse('2018-10-05'),
            'start_time' => '19:30:00',
            'end_time' => '04:00:00',
            'age_restriction' => '18+',
            'genre' => 'Psych Rock',
            'description' => 'LOVELY WIFE - IMPROVISED HORRIBLE DOOM THAT SOMETIMES GOES ALL SPACEY OR GRINDY.
            SUPPORTED BY - SNAKES DONT BELONG IN ALASKA / MADE OF TEETH. // DJ until late.',
            'ticket_price' => 0,
            'image' => '/css/img/lovelywife.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 6,
            'title' => 'Mike Dennis + Madcap',
            'date' => Carbon::parse('2018-10-06'),
            'start_time' => '20:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Alt Hip Hop',
            'description' => 'BAR OPENS 5PM, LIVE MUSIC FROM 8PM, DJS TIL 4AM. AGES 18+ FREE ENTRY.
                ALT-HIP-HOP-VIOLINICA FROM MIKE DENNIS PLUS HIP-HOP GROUP MADCAP CHOSEN BY MIKE.',
            'ticket_price' => 0,
            'image' => '/css/img/mikedennis.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 6,
            'title' => 'Childcare + Lazyday',
            'date' => Carbon::parse('2018-10-08'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => 'None',
            'genre' => 'Alternative/Indy',
            'description' => 'SLINKY ART-ROCK FROM THE LONDON QUARTET - DEBUT EP \'MADE SIMPLE\' EARNED ACCLAIM FROM DIY, THE LINE OF BEST FIT, WONDERLAND AND THE 405 AS WELL AS NATIONAL AIRPLAY, A RADIO 1 MAIDA VALE SESSION, AND PERFORMANCES AT READING & LEEDS FESTIVALS. NEW EP \'LUCKYUCKER\' IS OUT NOW ON ELEPHANT RECORDS.',
            'ticket_price' => 7,
            'image' => '/css/img/childcare.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 9,
            'title' => 'The Hard Aches',
            'date' => Carbon::parse('2018-10-05'),
            'start_time' => '19:00:00',
            'end_time' => '22:00:00',
            'age_restriction' => 'None',
            'genre' => 'Alternative Rock',
            'description' => 'Indie­Punk Rock mainstay The Hard Aches are releasing a new single ‘BRAIN DRAIN’, which will form side A of a split 7” that will be released with UK friends, and all round good people Muncie Girls. Muncie Girls will make their Australian debut as support of The Hard Aches June tour.',
            'ticket_price' => 7,
            
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);
    }
}
