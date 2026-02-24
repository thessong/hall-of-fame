<!-- 2x2 Grid with rotating images in bottom-right slot only -->
<div class="grid-carousel" aria-label="Featured images">
    <div class="grid-slot"><a href="{{ route('hall-of-fame.index') }}"><img data-slot="0" src="{{ asset('images/topLeft/1916EveningStar1916.jpg') }}" alt="Featured 1"></a></div>
    <div class="grid-slot"><a href="{{ route('records.index') }}"><img data-slot="1" src="{{ asset('images/topRight/1975DavidCaldwell120Hurdles.jpg') }}" alt="Featured 2"></a></div>
    <div class="grid-slot"><a href="{{ route('about') }}"><img data-slot="2" src="{{ asset('images/bottomLeft/1M1A5988.JPG') }}" alt="Featured 3"></a></div>
    <div class="grid-slot"><a href="{{ route('about') }}"><img data-slot="3" src="{{ asset('images/bottomRight/CopyofBand.png') }}" alt="Featured 4"></div>
</div>

<style>
    .grid-carousel { margin-top: 2rem; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
    .grid-slot { width: 100%; aspect-ratio: 16 / 9; overflow: hidden; border-radius: 8px; background: #f3f3f3; }
    .grid-slot img { width: 100%; height: 100%; object-fit: contain; display: block; transition: opacity .45s ease; }
    .grid-slot img.fading { opacity: 0; }
    @media (max-width: 640px) { .grid-carousel { grid-template-columns: 1fr 1fr; } .grid-slot { aspect-ratio: 4/3; } }
</style>

<script>
    (function(){
        const bottomRightImages = [/*
            "CopyofBand.png",
            "CopyofBasketball.Boys.png",
            "CopyofBasketball.Girls.png",
            "CopyofBowling.png",
            "CopyofBoys.Golf.png",
            "CopyofcatPRIDE.png",
            "CopyofCheer.png",
            "CopyofChoir.jpg",
            "CopyofDebate.png",
            "CopyofDeSotoHS_ActivityMarkR.png",
            "CopyofDeSotoHS_Mascot1_ForWhiteBackgroundR.png",
            "CopyofDeSotoHS_PrimaryMark_ForWhiteBackgroundR.png",
            "CopyofDeSotoHS_PrimaryWordmark.png",
            "CopyofFreshmanFocus.png",
            "CopyofGirlsSwim.png",
            "CopyofHEROClub.png",
            "CopyofScholarsBowl.png",
            "CopyofSoccer.png",
            "CopyofSoftball2.png",
            "CopyofTennis.png",
            "CopyofTheatre.png",
            "CopyofVolleyball.png",
            "GirlsBBLogo.png",
            "WrestlingLogo.jpg" */
        ];

        const bottomLeftImages = [/*
            "1M1A5988.JPG",
            "2018-19BoysBballVarsity.JV.jpg",
            "2018-19BoysSwimTeam.jpg",
            "2018-19Varsity.JV.jpg",
            "2018-19WrestlingTeamPhoto.jpg",
            "2019BoysRegionalChampions.jpg",
            "2019BoysSoccer.jpg",
            "2019BoysStateRunnerUp.JPG",
            "2019BoysUKCChampions.jpg",
            "2019Football.jpg",
            "2019RegionalChamps.jpg",
            "2019TeamPicture(1).jpg",
            "2019TeamPicture(2).jpg",
            "2019TeamPicture.jpg",
            "2019UKCChampions.jpg",
            "2019Volleyball.jpg",
            "2019-20AllLevelsBoys.jpg",
            "2019-20BowlingBothTeams.jpg",
            "2019-20BoysBowling.jpg",
            "2019-20GirlsAllLevels.jpg",
            "2019-20GirlsBowling.jpg",
            "2019-20TeamPhoto.jpg",
            "2019-20WrestlingTeamPhoto.jpg"*/
        ];

        const topRightImages = [/*
            "1975DavidCaldwell120Hurdles.jpg",
            "1987Girls4x400mRelay.jpg",
            "1988Girls4x400mRelay.jpg",
            "1990RyanJohnson1600mRun.jpg",
            "1991RyanJohnson1600mRun.jpg",
            "1995BrianORourkeLongJump.jpg",
            "1997DerekTate3200mRun.jpg",
            "1998Softball(2).jpg",
            "1998Softball.JPG",
            "2006GirlsCrossCountry.jpg",
            "2006GirlsXC.jpg",
            "2006JackieGolemanHighJump.jpg",
            "2006NeilErismanWrestling.jpg",
            "2009-JamellTownsendTripleJump.jpg",
            "2011AngelVasquezCrossCountry.jpg",
            "2011ScholarsBowl(2).jpg",
            "2011ScholarsBowl.JPG",
            "2012ScholarsBowl(2).jpg",
            "2012ScholarsBowl.jpg",
            "2012ToriMarshall200m.jpg",
            "2013-crosscountry.JPG",
            "2013-Softball.JPG",
            "2013GirlsCrossCountry.jpg",
            "2013ScholarsBowl(2).jpg",
            "2013ScholarsBowl.JPG",
            "2013Softball.jpg",
            "2013SotballStateChamps.jpg",
            "2014-Baseball.jpg",
            "2014-Baseball2.jpg",
            "2014Baseball.jpg",
            "2014BaseballStateChamps.jpg",
            "2014BrittanyJensenGolf.jpg",
            "2014JannellClampittPoleVault.jpg",
            "2015JacobSweattInfomativeSpeaking.jpg",
            "2015JannellClampittPoleVault.jpg",
            "2015TravisHodge800mRun.jpg",
            "2016TravisHodge1600mRun.jpg",
            "2016TravisHodge800mRun.jpg",
            "2018ScholarsBowl.JPG",
            "2021Boys4x100mRelay.jpg"
        */];

        const topLeftImages = [/*
            "1916EveningStar1916.jpg",
            "1M1A3423.JPG",
            "1M1A3459.JPG",
            "1M1A3465.JPG",
            "1M1A3475.JPG",
            "AkronVolleyball1.JPG",
            "AkronVolleyball2.JPG",
            "AkronVolleyball3.JPG",
            "AkronVolleyball4.JPG",
            "AkronVolleyball5.JPG",
            "AkronVolleyball6.JPG",
            "AllAreaTeam.JPG",
            "BaptistChurch.jpg",
            "BarnCrane.jpg",
            "BarnCupola.JPG",
            "BarnFloat.jpg",
            "BarnFrame.jpg",
            "BarnFrame2.JPG",
            "Basketball1.JPG",
            "Basketball2.JPG",
            "Basketball3.JPG",
            "Basketball4.jpg",
            "Basketball5.jpg",
            "Basketball6.jpg",
            "Basketball7.jpg",
            "DancePreparation.jpg",
            "DHSVolleyball1.JPG",
            "DHSVolleyball10.jpg",
            "DHSVolleyball11.jpg",
            "DHSVolleyball2.JPG",
            "DHSVolleyball3.JPG",
            "DHSVolleyball4.JPG",
            "DHSVolleyball5.JPG",
            "DHSVolleyball6.jpg",
            "DHSVolleyball7.jpg",
            "DHSVolleyball8.jpg",
            "DHSVolleyball9.jpg",
            "FarmTour1.jpg",
            "FarmTour2.jpg",
            "FarmTour3.jpg",
            "Football1.jpg",
            "Football2.jpg",
            "Football3.jpg",
            "Golf2.jpg",
            "GolfNewspaper.jpg",
            "Graduation.jpg",
            "Homecoming1.JPG",
            "Homecoming2.jpg",
            "Jewett,J.Mark&Mavishoneymoonpic.jpg",
            "Jewett,J.Mark-Mavis-Martha,JohnJr.-Mary1937.jpg",
            "Jewett,J.Mark1901frontleft-DeSoto.jpg",
            "Jewett,J.Mark1918Ntl.GuardWWIstanding.jpg",
            "Jewett,J.Mark1918WWI(2).jpg",
            "Jewett,J.Mark1918WWI.jpg",
            "Jewett,J.Mark1921&MavisLaizure.jpg",
            "Jewett,J.Mark1921KU.jpg",
            "Jewett,J.Mark1940.jpg",
            "Jewett,J.Mark1950Mary-Martha-JohnJr.Chanute,KS.jpg",
            "Jewett,J.Mark1960.jpg",
            "Jewett,JohnMark&family.jpg",
            "Jewett,JohnMark(2).jpg",
            "Jewett,JohnMarkfieldtrip.jpg",
            "Jewett,JohnMarkonrightbikingwithfriend.jpg",
            "MarkJewettKansasQuote.jpg",
            "Musical1.jpg",
            "Musical2.jpg",
            "Newspaper1.jpg",
            "Newspaper2.jpg",
            "Parade.jpg",
            "Portrait(2).jpg",
            "Portrait.JPG",
            "Presentation1.jpg",
            "Presentation2.jpg",
            "Quartet1.jpg",
            "Quartet2.jpg",
            "Quartet3.jpg",
            "SB2012RegionalChampions.JPG",
            "SB2012StateChampion.JPG",
            "SB2012Trophy.JPG",
            "SingingGroup.jpg",
            "SteepleBuild.PNG",
            "Track1.JPG",
            "Track10.jpg",
            "Track11.jpg",
            "Track12.jpg",
            "Track13.jpg",
            "Track14.jpg",
            "Track2.JPG",
            "Track3.JPG",
            "Track4.JPG",
            "Track5.JPG",
            "Track6.JPG",
            "Track7.JPG",
            "Track8.JPG",
            "Track9.jpg",
            "Wrestling1.jpg",
            "Wrestling2.jpg",
            "YearbookAnnouncement1.jpg",
            "YearbookAnnouncement2.jpg",
            "YearbookDrama.jpg",
            "YearbookImages.jpg",
            "YearbookPic.jpg"
        */];

        const slots = Array.from(document.querySelectorAll('.grid-slot img'));
        if (!slots.length || slots.length < 4) return;

        const topLeftSlot = slots[0];
        const topRightSlot = slots[1];
        const bottomLeftSlot = slots[2];
        const bottomRightSlot = slots[3];
        
        let topLeftIndex = 0;
        let topIndex = 0;
        let leftIndex = 0;
        let rightIndex = 0;
        
        // Extract base path for top-left from its initial src
        const topLeftInitialSrc = topLeftSlot.src;
        const topLeftPath = topLeftInitialSrc.substring(0, topLeftInitialSrc.lastIndexOf('/') + 1);
        const placeholder = "{{ asset('images/carousel1.svg') }}";

        // Add error handlers to log failing URLs and fall back
        slots.forEach(s => {
            s.onerror = function(){
                console.error('Image failed to load for slot', this.dataset.slot, 'url=', this.src);
                this.onerror = null; // avoid loop
                this.src = placeholder;
            };
        });
        // Extract base paths from the initial working images for the others
        const topInitialSrc = topRightSlot.src;
        const leftInitialSrc = bottomLeftSlot.src;
        const rightInitialSrc = bottomRightSlot.src;
        const topRightPath = topInitialSrc.substring(0, topInitialSrc.lastIndexOf('/') + 1);
        const bottomLeftPath = leftInitialSrc.substring(0, leftInitialSrc.lastIndexOf('/') + 1);
        const bottomRightPath = rightInitialSrc.substring(0, rightInitialSrc.lastIndexOf('/') + 1);

        function tick() {
            topLeftIndex = (topLeftIndex + 1) % topLeftImages.length;
            topIndex = (topIndex + 1) % topRightImages.length;
            leftIndex = (leftIndex + 1) % bottomLeftImages.length;
            rightIndex = (rightIndex + 1) % bottomRightImages.length;

            // Fade and cycle all four slots together
            topLeftSlot.classList.add('fading');
            topRightSlot.classList.add('fading');
            bottomLeftSlot.classList.add('fading');
            bottomRightSlot.classList.add('fading');
            
            setTimeout(() => {
                const leftUrl = topLeftPath + encodeURIComponent(topLeftImages[topLeftIndex]);
                const topUrl = topRightPath + encodeURIComponent(topRightImages[topIndex]);
                const bottomLeftUrl = bottomLeftPath + encodeURIComponent(bottomLeftImages[leftIndex]);
                const bottomRightUrl = bottomRightPath + encodeURIComponent(bottomRightImages[rightIndex]);
                console.log('Carousel swap ->', { left: leftUrl, top: topUrl, bottomLeft: bottomLeftUrl, bottomRight: bottomRightUrl });

                // Helper to preload and assign only on success
                function assignIfLoaded(url, slot) {
                    const tester = new Image();
                    tester.onload = function() {
                        slot.src = url;
                        slot.alt = 'Featured image';
                    };
                    tester.onerror = function() {
                        console.error('Preload failed for', url);
                        slot.src = placeholder;
                        slot.alt = 'Featured image';
                    };
                    // Start load
                    tester.src = url;
                }

                assignIfLoaded(leftUrl, topLeftSlot);
                assignIfLoaded(topUrl, topRightSlot);
                assignIfLoaded(bottomLeftUrl, bottomLeftSlot);
                assignIfLoaded(bottomRightUrl, bottomRightSlot);

                // Ensure fade transition completes after assignment attempts
                setTimeout(() => {
                    void topLeftSlot.offsetWidth;
                    topLeftSlot.classList.remove('fading');
                    topRightSlot.classList.remove('fading');
                    bottomLeftSlot.classList.remove('fading');
                    bottomRightSlot.classList.remove('fading');
                }, 100);
            }, 450);
        }

        let timer = setInterval(tick, 5000); // 5 seconds
        const container = document.querySelector('.grid-carousel');
        container.addEventListener('mouseenter', () => clearInterval(timer));
        container.addEventListener('mouseleave', () => { timer = setInterval(tick, 5000); });
    })();
</script>
