<?php
//-ABOUT ME
$aboutMeBackground = get_field('aboutme_background');
$sideProjectsBackground = get_field('sideprojects_background'); ?>
<section class="content aboutMe">

    <h2>
        <span>About Me</span>
    </h2>
    <!--//- IMAGE BACKGROUND-->
    <div class="overlay overlay-aboutMe">
        <div class="hack-fix rellax" data-rellax-speed="0">
            <div class="overlay-img rellax" data-rellax-speed="-10" style=" background: url(<?php echo $aboutMeBackground ?>)">
            </div>
        </div>
    </div>

    <!--//-About ME-->
    <div class="aboutMe">
        <div class="about-me-text">
            <p>
                <?php echo get_field('about_me_summary'); ?>
            </p>
        </div>

        <!--//-Picture and contact-->
        <div class="img-wrapper parallaxin2">
            <img class="layer" data-relative-input="true" data-depth="0.30" src="<?php
                $image = get_field('picture_of_me');
                echo $image['url']; ?> ">

            <div class="links layer" data-relative-input="true" data-depth="0.40">

                <a class="email" data-relative-input="true" data-depth="0.40" href="mailto:david@jackalope.tech" target="_blank"
                    rel="noopener">
                    [ ✉- david@jackalope.tech ]
                </a>

                <a class="email-mobile" data-relative-input="true" data-depth="0.40" href="mailto:david@jackalope.tech"
                    target="_blank" rel="noopener">
                    [ ✉ ]
                </a>

                <a class="telephone" data-relative-input="true" data-depth="0.40" href="tel:+1-409-594-7119" target="_blank"
                    rel="noopener">
                    [ ☎- (409) 594-7119 ]
                </a>
            </div>
            <!--//-END OF LINKS-->
        </div>
        <!--//-end of picture and contacts-->
    </div>
    <!--//-end of about me-->

    <!--//-SKILLSS -->
    <div class="skills">
        <h3><span>Skills</span></h3>

        <h4>Development:</h4>
        <p>
            <?php echo get_field('development-skills'); ?>
        </p>

        <h4>Design:</h4>
        <p>
            <?php echo get_field('design-skills'); ?>
        </p>

        <h4>Tools:</h4>
        <p>
            <?php echo get_field('tool-skills'); ?>
        </p>
    </div>
    <!-- end of skills section -->


    <a href="https://cloud.jackalope.tech/s/resumes"">
    <button class=" resume-button downloadbtn icon-download">
        <span>[ Download Resumé.txt ]</span>
        </button>
    </a>

</section>
<!--//- END ABOUT ME SECTION -->
