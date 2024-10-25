<?php
get_header();
?>

<div class="content">

<?php
$your_browser_does_not_support_video = pll__('Your browser does not support the video tag.');
$nyhed = pll__('Nyhed');
$klassikeren_title = pll__('Klassikeren der vil med dig hjem');
$koeb_nu_button = pll__('Køb nu');
$shop_alle_button = pll__('Shop alle');
$shop_tilbud_button = pll__('Shop tilbud');
$shop_nu_button = pll__('Shop nu');
$contact_title = pll__('Support');
?>

  <div class="hero-section">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            $herovideo = get_field('herovideo');

            if ($herovideo) {
                echo '<div class="hero-video-wrapper">';
                echo '<video autoplay muted loop width="100%">'; 
                echo '<source src="' . esc_url($herovideo['url']) . '" type="' . esc_attr($herovideo['mime_type']) . '">';
                echo esc_html($your_browser_does_not_support_video); 
                echo '</video>';
                echo '</div>';
            }

            $herotext = get_field('herotext');
            if ($herotext) {
                echo '<h1 class="hero-title">' . esc_html($herotext) . '</h1>';
            }

        endwhile;
    endif;
    ?>
  </div>

    
  <div class="shop-section">
    <?php
    $loop = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 4
    ));

    if ($loop->have_posts()) : ?>
        <div class="products-wrapper">
        <?php while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $title = get_the_title();
            $excerpt = get_the_excerpt();
            $price = $product->get_price_html();
            $link = get_permalink();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            
            $overskrift = get_field('overskrift');
            $beskrivelse = get_field('beskrivelse');
        ?>
            <div class="product-forside">
                <a href="<?php echo $link; ?>">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr($title); ?>" class="product-image" />
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo wp_kses_post($excerpt); ?></p>
                    <span class="price"><?php echo wp_kses_post($price); ?></span>
                    
                    <p><strong><?php echo esc_html($nyhed); ?></strong></p> 
                    <h4><?php echo esc_html($klassikeren_title); ?></h4> 

                    <button class="buy-now"><?php echo esc_html($koeb_nu_button); ?></button> 
                </a>
            </div>
        <?php endwhile; ?>
        </div>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</div>

<?php
$maerke1 = get_field('maerke1');
$maerke2 = get_field('maerke2');
$maerke3 = get_field('maerke3');
$maerke4 = get_field('maerke4');
$maerke1text = get_field('maerke1text');
$maerke2text = get_field('maerke2text');
$maerke3text = get_field('maerke3text');
$maerke4text = get_field('maerke4text');

echo '<div class="box-section">';
echo '<div class="box-container">';

$shop_nu = pll__('Shop nu');


// Box for Mærke 1
if ($maerke1) {
    $maerke1img = isset($maerke1['maerke1img']) ? $maerke1['maerke1img'] : null;
    $maerke1link = isset($maerke1['maerke1link']) ? $maerke1['maerke1link'] : null;
    
    echo '<div class="box">';
    if ($maerke1text) {
        echo '<div class="box-title">' . esc_html($maerke1text) . '</div>';
    }
    if ($maerke1img) {
        if ($maerke1link) {
            echo '<a href="' . esc_url($maerke1link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($maerke1img['url']) . '" alt="' . esc_attr($maerke1img['alt']) . '" class="box-image">';
        if ($maerke1link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($maerke1link) . '" class="shop-button">' . esc_html($shop_nu) . '</a>'; 
    echo '</div>';
}

// Box for Mærke 2
if ($maerke2) {
    $maerke2img = isset($maerke2['maerke2img']) ? $maerke2['maerke2img'] : null;
    $maerke2link = isset($maerke2['maerke2link']) ? $maerke2['maerke2link'] : null;

    echo '<div class="box">';
    if ($maerke2text) {
        echo '<div class="box-title">' . esc_html($maerke2text) . '</div>';
    }
    if ($maerke2img) {
        if ($maerke2link) {
            echo '<a href="' . esc_url($maerke2link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($maerke2img['url']) . '" alt="' . esc_attr($maerke2img['alt']) . '" class="box-image">';
        if ($maerke2link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($maerke2link) . '" class="shop-button">' . esc_html($shop_nu) . '</a>'; 
    echo '</div>';
}

// Box for Mærke 3
if ($maerke3) {
    $maerke3img = isset($maerke3['maerke3img']) ? $maerke3['maerke3img'] : null;
    $maerke3link = isset($maerke3['maerke3link']) ? $maerke3['maerke3link'] : null;

    echo '<div class="box">';
    if ($maerke3text) {
        echo '<div class="box-title">' . esc_html($maerke3text) . '</div>';
    }
    if ($maerke3img) {
        if ($maerke3link) {
            echo '<a href="' . esc_url($maerke3link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($maerke3img['url']) . '" alt="' . esc_attr($maerke3img['alt']) . '" class="box-image">';
        if ($maerke3link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($maerke3link) . '" class="shop-button">' . esc_html($shop_nu) . '</a>'; 
    echo '</div>';
}

// Box for Mærke 4
if ($maerke4) {
    $maerke4img = isset($maerke4['maerke4img']) ? $maerke4['maerke4img'] : null;
    $maerke4link = isset($maerke4['maerke4link']) ? $maerke4['maerke4link'] : null;

    echo '<div class="box">';
    if ($maerke4text) {
        echo '<div class="box-title">' . esc_html($maerke4text) . '</div>';
    }
    if ($maerke4img) {
        if ($maerke4link) {
            echo '<a href="' . esc_url($maerke4link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($maerke4img['url']) . '" alt="' . esc_attr($maerke4img['alt']) . '" class="box-image">';
        if ($maerke4link) {
            echo '</a>';
        }
    }
    echo '<a href="' . esc_url($maerke4link) . '" class="shop-button">' . esc_html($shop_nu) . '</a>'; 
    echo '</div>';
}

echo '</div>';
echo '</div>';
?>

<div class="shop-section">
    <div class="shop-box">
        <?php 
        $shop = get_field('shop'); 
        $shopimg = isset($shop['shopimg']) ? $shop['shopimg'] : null; 
        $shopurl = isset($shop['shopurl']) ? $shop['shopurl'] : null; 
        $shoptext = isset($shop['shoptext']) ? $shop['shoptext'] : ''; 


        
        if ($shopimg && $shopurl): ?>
            <a href="<?php echo esc_url($shopurl); ?>">
                <img src="<?php echo esc_url($shopimg['url']); ?>" alt="<?php echo esc_attr($shopimg['alt']); ?>" class="shop-img">
                <div class="shop-text">
                    <a href="<?php echo esc_url($shopurl); ?>" class="shop-button2"><?php echo esc_html(pll__('Shop alle')); ?></a> 
                </div>
            </a>
        <?php endif; ?>
    </div>

    <!-- Tilbud box -->
    <div class="shop-box">
        <?php 
        $tilbud = get_field('tilbud'); 
        $tilbudimg = isset($tilbud['tilbudimg']) ? $tilbud['tilbudimg'] : null; 
        $tilbudurl = isset($tilbud['tilbudurl']) ? $tilbud['tilbudurl'] : null; 
        $tilbudtext = isset($tilbud['tilbudtext']) ? $tilbud['tilbudtext'] : ''; 

        if ($tilbudimg && $tilbudurl): ?>
            <a href="<?php echo esc_url($tilbudurl); ?>">
                <img src="<?php echo esc_url($tilbudimg['url']); ?>" alt="<?php echo esc_attr($tilbudimg['alt']); ?>" class="shop-img">
                <div class="shop-text">
                    <h2><?php echo esc_html($tilbudtext); ?></h2> 
                    <a href="<?php echo esc_url($tilbudurl); ?>" class="shop-button2"><?php echo esc_html(pll__('Shop tilbud')); ?></a> 
                </div>
            </a>
        <?php endif; ?>
    </div>
</div>

<?php
  $model1 = get_field('model1');
  $model2 = get_field('model2');
  $model3 = get_field('model3');
  $model4 = get_field('model4');
  $model1text = get_field('model1text');
  $model2text = get_field('model2text');
  $model3text = get_field('model3text');
  $model4text = get_field('model4text');

  echo '<div class="box-section">';
  echo '<div class="box-container">';

  // Box for Mærke 1
  if ($model1) {
      $model1img = isset($model1['model1img']) ? $model1['model1img'] : null;
      $model1link = isset($model1['model1link']) ? $model1['model1link'] : null;
      
      echo '<div class="box">';
      if ($model1text) {
          echo '<div class="box-title">' . esc_html($model1text) . '</div>';
      }
      if ($model1img) {
          if ($model1link) {
              echo '<a href="' . esc_url($model1link) . '" class="box-link">';
          }
          echo '<img src="' . esc_url($model1img['url']) . '" alt="' . esc_attr($model1img['alt']) . '" class="box-image">';
          if ($model1link) {
              echo '</a>';
          }
      }
      echo '<a href="' . esc_url($model1link) . '" class="shop-button">Shop nu</a>';
      echo '</div>';
  }

  // Box for Mærke 2
  if ($model2) {
      $model2img = isset($model2['model2img']) ? $model2['model2img'] : null;
      $model2link = isset($model2['model2link']) ? $model2['model2link'] : null;

      echo '<div class="box">';
      if ($model2text) {
          echo '<div class="box-title">' . esc_html($model2text) . '</div>';
      }
      if ($model2img) {
          if ($model2link) {
              echo '<a href="' . esc_url($model2link) . '" class="box-link">';
          }
          echo '<img src="' . esc_url($model2img['url']) . '" alt="' . esc_attr($model2img['alt']) . '" class="box-image">';
          if ($model2link) {
              echo '</a>';
          }
      }
      echo '<a href="' . esc_url($model2link) . '" class="shop-button">Shop nu</a>';
      echo '</div>';
  }

  // Box for Mærke 3
  if ($model3) {
      $model3img = isset($model3['model3img']) ? $model3['model3img'] : null;
      $model3link = isset($model3['model3link']) ? $model3['model3link'] : null;

      echo '<div class="box">';
      if ($model3text) {
          echo '<div class="box-title">' . esc_html($model3text) . '</div>';
      }
      if ($model3img) {
          if ($model3link) {
              echo '<a href="' . esc_url($model3link) . '" class="box-link">';
          }
          echo '<img src="' . esc_url($model3img['url']) . '" alt="' . esc_attr($model3img['alt']) . '" class="box-image">';
          if ($model3link) {
              echo '</a>';
          }
      }
      echo '<a href="' . esc_url($model3link) . '" class="shop-button">Shop nu</a>';
      echo '</div>';
  }

  // Box for Mærke 4
  if ($model4) {
      $model4img = isset($model4['model4img']) ? $model4['model4img'] : null;
      $model4link = isset($model4['model4link']) ? $model4['model4link'] : null;

      echo '<div class="box">';
      if ($model4text) {
          echo '<div class="box-title">' . esc_html($model4text) . '</div>';
      }
      if ($model4img) {
          if ($model4link) {
              echo '<a href="' . esc_url($model4link) . '" class="box-link">';
          }
          echo '<img src="' . esc_url($model4img['url']) . '" alt="' . esc_attr($model4img['alt']) . '" class="box-image">';
          if ($model4link) {
              echo '</a>';
          }
      }
      echo '<a href="' . esc_url($model4link) . '" class="shop-button">Shop nu</a>';
      echo '</div>';
  }

  echo '</div>';
  echo '</div>';
  ?>
    


    <div class="contact-form">
        <h2><?php echo esc_html($contact_title); ?></h2>
        <?php echo do_shortcode('[contact-form-7 id="710262f" title="Har du nogle spørgsmål?"]'); ?>






</div>

<?php
get_footer();
?>