<?= $this->Html->css('owl.carousel') ?>
<?= $this->Html->script('owl.carousel.min') ?>

<?php if(!empty($search_slider)) { ?> 

<style>
  .single-blog a:hover {
color: white;
}
</style>
  <section id="home">
    <!-- *** HOMEPAGE CAROUSEL ***  -->
    <div class="home-pattern"></div>

      <div class="homepage owl-carousel">

        <?php
          foreach ($search_slider as $k => $v) {

            echo '<div class="item" style="background:url('.$v['Slider']['url_img'].') no-repeat;background-size: auto;background-position: center;">';
               echo '<div class="container">';
                                      echo '<center><h1 class="title-one" style="margin-top : 15%; color: white; font-size: 64px;">'.before_display($v['Slider']['title']).'</h1></center>';
                                        echo '<p class="text-center" style="color: white; font-size: 25px;">'.before_display($v['Slider']['subtitle']).'</p>';
                                        echo '<center><a class="btn btn-default slider-btn animated fadeIn" href="#">'. $theme_config['ip'].'</a></center> ';
                  echo '<div class="col-sm-7"><div style="height:155px;"></div></div>';
                  echo '</div>';
            echo '</div>';

          }
        ?>

      </div>
      <!-- /.project owl-slider -->
    </div>
    <!-- *** HOMEPAGE CAROUSEL END *** -->
  </section>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.homepage').owlCarousel({
        navigation: false, // Show next and prev buttons
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        slideSpeed: 2000,
        paginationSpeed: 1000,
        autoPlay: true,
        stopOnHover: true,
        singleItem: true,
        lazyLoad: false,
        addClassActive: true,
        pagination: false,
        afterInit: function () {
        //animationsSlider();
        },
        afterMove: function () {
        //animationsSlider();
        }
    });
  });
  </script>
<?php } ?>


<section id="services" class="parallax-section">
          <h2 class="title-one">Joueur<?php if($server_infos['GET_PLAYER_COUNT'] >= 2) echo 's';?>: <?= $server_infos['GET_PLAYER_COUNT'] ?></h2>
    </section>



<section id="blog"> 
            <div class="container">
              <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                  <h2 class="title-one"><?= $Lang->get('NEWS__LAST_TITLE') ?></h2>
                  <p class="blog-heading"><?= $theme_config['news_text'] ?></p>
                </div>
              </div> 

              <div class="row">

<?php
        if(!empty($search_news)) {

          $i = 0;
          foreach ($search_news as $news) {

            $i++;

            if($i > 4) {
              break;
            }

echo '<div class="col-sm-4">';
  echo '<div class="single-blog">';
  echo '<h2><a href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'">'.$news['News']['title'].'</a></h2>';
      echo '<ul class="post-meta">';
        echo '<li><i class="fa fa-pencil-square-o"></i><strong> Auteur: </strong>';
          echo $Lang->get('GLOBAL__BY').' <a href="#">'.$news['News']['author'].'</a> ';
            echo '</li>';
              echo '</ul>';
              echo '<div class="blog-content">';
            echo '<p>';
          echo $this->Text->truncate($news['News']['content'], 170, array('ellipsis' => '...', 'html' => true));
        echo '</p>';
      echo '</div>';
    echo '<a  href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'" class="btn btn-template-main">'.$Lang->get('NEWS__READ_MORE').'</a>';
  echo '</div>';
echo '</div>';
          }
        } else {
          echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>';
        }
        ?>
                </div> 
              </div> 
            </section> <!--/#blog-->
<!--NEWS-->

<section id="social"> 
            <div class="container">
              <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                  <h2 class="title-one"><?= $Lang->get('GLOBAL__JOIN_US') ?></h2>
      
                </div>
              </div> 
              <div class="row">
      </br>
<center>

              <?php
             
                  if(!empty($skype_link)) {
                    echo '<a href="'.$skype_link.'" target="_blank" class="btn btn-custom btn-block btn-success"><img src="theme/kuro/img/skype.png"></a>';
                  }
                
                  if(!empty($youtube_link)) {
                    echo'<a href="'.$youtube_link.'" target="_blank" class="btn btn-custom btn-block btn-danger"><img src="theme/kuro/img/yt.png"></a>';
                  }
              
                  if(!empty($twitter_link)) {
                    echo '<a href="'.$twitter_link.'" target="_blank" class="btn btn-custom btn-block btn-info"><img src="theme/kuro/img/twitter.png"></a>';
                  }
                  if(!empty($facebook_link)) {
                    echo '<a href="'.$facebook_link.'" target="_blank" style="background-color: rgb(59, 89, 152);" class="btn btn-custom btn-block btn-info"><img src="theme/kuro/img/fb.png"></a>';
                  }
                  ?>
               
                </center>
                </div> 
              </div> 
            </section>

                </br>

<?= $Module->loadModules('home') ?>
 