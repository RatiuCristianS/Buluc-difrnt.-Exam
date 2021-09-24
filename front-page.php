<?php get_header(); ?>
<div class="front-container">
</div>
<div class="text-front-container text-center">
    <h1 class="nume-front font-sans"><span class="punct">&#8226;</span>buluc</h1>    
    <p class="detail-center font-apple">companie independentă</p>
</div>
<!-- Slider Start -->
<div class="container cine_suntem_main">
    <div class="cine_suntem_container">
        <div class="cine_suntem_container_inside">
          <?php
          //Query Custom Post Type care să conțină post 'Main' cu BD
          query_posts( array( 'post_type' => array('slider'), 'p' => 'main' ) ); //Model 1 Query
          while (have_posts()):
             the_post();
          endwhile;
          //Query-End

          //Obține ACF din Query
          //SLIDER 1/3
          $slider_unu_stânga_titlu = get_field('slider_unu_stânga_titlu');
          $slider_unu_stânga_subtitlu = get_field('slider_unu_stânga_subtitlu');
          $slider_unu_dreapta_titlu = get_field('slider_unu_dreapta_titlu');
          $slider_unu_dreapta_text = get_field('slider_unu_dreapta_text');
          //SLIDER 2/3
          $slider_doi_stânga_titlu = get_field('slider_doi_stânga_titlu');
          $slider_doi_stânga_subtitlu = get_field('slider_doi_stânga_subtitlu');
          $slider_doi_dreapta_titlu = get_field('slider_doi_dreapta_titlu');
          $slider_doi_dreapta_text = get_field('slider_doi_dreapta_text');
          //SLIDER 3/3
          $slider_trei_stânga_titlu = get_field('slider_trei_stânga_titlu');
          $slider_trei_stânga_subtitlu = get_field('slider_trei_stânga_subtitlu');
          $slider_trei_dreapta_titlu = get_field('slider_trei_dreapta_titlu');
          $slider_trei_dreapta_text = get_field('slider_trei_dreapta_text');
          //ACF-END

          ?>
            <div class="slider">
                <div class="h-full slide active">
                  <div class="flex phone:flex-col justify-between h-full">
                    <div class="slider-stanga w-1/2 phone:w-full slider-height_unu">
                      <div class="linie"></div>
                      <h1 class="titlu_slider"><span class="punct">&#8226;</span> <?php echo $slider_unu_stânga_titlu; ?></h1>
                      <h1 class="titlu_slider pl-20"> <?php echo $slider_unu_stânga_subtitlu; ?></h1>
                    </div>
                    <div class="slider-dreapta w-1/2 phone:w-full slider-height_doi">
                      <div class="mini-container">
                        <div class="titlu-min">
                        <h4 class="titlu-min-content"><?php echo $slider_unu_dreapta_titlu; ?></h4>
                        </div>
                        <div class="text-min">
                        <p class="text-min-content">
                        <?php echo $slider_unu_dreapta_text; ?>
                        </p>
                        </div>
                        <button type="button" class="buton-min">CTA</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="h-full slide">
                  <div class="flex phone:flex-col justify-between h-full">
                    <div class="slider-stanga w-1/2 phone:w-full slider-height_unu">
                      <div class="linie"></div>
                      <h1 class="titlu_slider"><span class="punct">&#8226;</span> <?php echo $slider_doi_stânga_titlu; ?></h1>
                      <h1 class="titlu_slider pl-20"> <?php echo $slider_doi_stânga_subtitlu; ?></h1>
                    </div>
                    <div class="slider-dreapta w-1/2 phone:w-full slider-height_doi">
                      <div class="mini-container">
                        <div class="titlu-min">
                        <h4 class="titlu-min-content"><?php echo $slider_doi_dreapta_titlu; ?></h4>
                        </div>
                        <div class="text-min">
                        <p class="text-min-content">
                        <?php echo $slider_doi_dreapta_text; ?>
                        </p>
                        </div>
                        <button type="button" class="buton-min">CTA</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="h-full slide">
                  <div class="flex phone:flex-col justify-between h-full">
                    <div class="slider-stanga w-1/2 phone:w-full slider-height_unu">
                      <div class="linie"></div>
                      <h1 class="titlu_slider"><span class="punct">&#8226;</span> <?php echo $slider_trei_stânga_titlu; ?></h1>
                      <h1 class="titlu_slider pl-20"> <?php echo $slider_trei_stânga_subtitlu; ?></h1>
                    </div>
                    <div class="slider-dreapta w-1/2 phone:w-full slider-height_doi">
                      <div class="mini-container">
                        <div class="titlu-min">
                        <h4 class="titlu-min-content"><?php echo $slider_trei_dreapta_titlu; ?></h4>
                        </div>
                        <div class="text-min">
                        <p class="text-min-content">
                        <?php echo $slider_trei_dreapta_text; ?>
                        </p>
                        </div>
                        <button type="button" class="buton-min">CTA</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="navigation">
                    <div class="btn active"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                </div>
            </div>
            <script src="<?php bloginfo('template_directory'); ?>/includes/slider.js"></script>
        </div>
  </div>
</div>
<!-- Slider-End -->
<!-- Spectacole -->
<div class="text-center pt-10">
<h1 class="subtitlu-primar font-apple">spectacole</h1>
</div>

<div id="spectacol" class="container mx-auto">
<div class="flex phone:flex-col justify-center">   
<?php 
    //Mod 2 Query
    query_posts(array( 
        'post_type' => 'spectacole',
        'posts_per_page' => 2,
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>  
    <div class="flex box-legatura flex-col justify-center items-center p-2">   
      <div class="box-img">
        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
      </div>

      <div class="box-content flex flex-col">
        <p class="universal-time"><?php echo get_the_date('l &#183; F j'); ?></p>
        <p class="universal-time"><?php echo get_the_date('g:i a'); ?></p>
        <h1 class="universal-text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <div class="arrow mx-auto">
          <svg width="71" height="16" viewBox="0 0 71 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="white"/>
          </svg>
        </div>
      </div>
    </div>  
<?php endwhile;?>
  </div>
  </div>
</div>
<!-- Spectacole-End -->
<!-- Proiecte-Start -->
<div class="text-center pt-10">
<h1 class="subtitlu-primar font-apple">.proiecte</h1>
</div>

<div id="proiect" class="container mx-auto">
<div class="flex phone:flex-col justify-center">   
<?php 
    //Mod 2 Query
    query_posts(array( 
        'post_type' => 'proiecte',
        'posts_per_page' => 2,
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>  
    <div class="flex box-legatura flex-col justify-center items-center p-2">   
      <div class="box-img">
        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
      </div>

      <div class="box-content flex flex-col">
        <h1 class="universal-text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <button type="button" class="buton-min">Read More</button>
      </div>
    </div>  
<?php endwhile;?>
  </div>
  </div>
</div>
<!-- Proiecte-End -->
<!-- Oameni Buluc -->
<div class="text-center pt-10">
<h1 class="subtitlu-primar font-apple">.oamenii bulúc</h1>
</div>

<div id="oameni" class="container mx-auto">
<div class="flex phone:flex-col justify-center">   
<?php 
    //Mod 2 Query
    query_posts(array( 
        'post_type' => 'oameni',
        'posts_per_page' => 3,
    ) );
?>
<?php while (have_posts()) : the_post(); ?>  
<?php
 $nume = get_field('nume');
 $functie = get_field('functie');
 $competente_unu = get_field('competente_unu');
 $competente_doi = get_field('competente_doi');
 $competente_trei = get_field('competente_trei');
?>
    <div class="flex box-legatura flex-col justify-center items-center p-2">   
      <div class="box-img">
        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
      </div>

      <div class="box-content flex flex-col">
      <div class="parte_unu">
        <h1><a href="<?php the_permalink() ?>"><?php echo $nume; ?></a></h1>
        <p><?php echo $functie; ?></p>
      </div>
      <div class="parte_doi">
        <p><?php echo $competente_unu; ?></p>
        <p><?php echo $competente_doi; ?></p>
        <p><?php echo $competente_trei; ?></p>
      </div>
      </div>
    </div>  
<?php endwhile;?>
  </div>
  <div class="container mx-auto">
<button type="button" class="buton-min relative bottom-20 left-1/2">View More</button>
</div>
</div>
<div class="text-center pt-10">
<h1 class="subtitlu-primar font-apple">.donatie</h1>
</div>
<div class="div_donatie">
  <p>Fii parte din povestea noastra! Ne poți susține prin:</p>
  <img src="<?php echo get_template_directory_uri(); ?>/includes/images/donatie.png" />
  <button type="button" class="buton-min-red relative bottom-20 left-1/2">Donează</button>
</div>


<!-- Oameni End -->

<?php get_footer(); ?>