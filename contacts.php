<?php
/*
Template Name: Страница "Контакты"
Template Post Type: page
*/

get_header(); ?> 
<div class="contact-section">
  <div class="container">
  <div class="contact-titleblock-wrapper">
    <h2 class="contact-titleblock">Как нас найти</h1>
    <p class="span-wrapper"> <!-- обертка подзаголовка -->
      <span class="">Создано с</span>
      <svg class="icon why-card-pic" width="18" height="18" fill=#626262>
        <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#heart"></use>
      </svg>
      <span>клевыми чуваками из <a href="https://freehtml5.co/" class="">FreeHTML5.co</a></span>
    </p><!-- ./обертка подзаголовка -->
  </div>

    <div class="contact-row-wrapper">
      <div class="left">
        <h2 class="left-title">Контакты (ACF)</h2>
        <div class="left-address">
          <svg class="icon why-card-pic" width="22" height="22" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#map"></use>
          </svg>
          <?php 
          //проверка наличия поля address
          $address = get_field('address_ACF');
          if ($address) {echo '<address>' . $address . '</address>';}?>
        </div>

          
        <?php 
          //проверка наличия поля phone
          $phone = get_field('phone_ACF');
          if ($phone) {echo '<a href="tel:' . $phone . '">' . $phone . '</a>';} ?>

        <?php 
        //проверка наличия поля email
          $email = get_field('email_ACF');
          if ($email) {echo '<a href="mailto:' . $email . '">' . $email . '</a>';}?> 

        <?php 
        //проверка наличия поля email
          $www = get_field('www_ACF');
          if ($www) {echo '<a href="mailto:' . $www . '">' . $www . '</a>';}?> 

      </div><!-- /.left -->
      <div class="right">  
        <form action="form.php" class="contacts-form" method="POST"><!-- форма HTML -->
          <input name="contact_name" type="text" class="input contacts-input" placeholder="Ваше имя">
          <input name="contact_email" type="email" class="input contacts-input" placeholder="Ваш Email">
          <textarea name="contact_comment" id="" class="textarea contacts-textarea" placeholder="Ваш вопрос"></textarea>
          <button type="submit" class="button more">Отправить</button>
        </form><!-- /.конец формы HTML -->      
      </div><!-- /.right -->
      
    </div><!-- /.contacts-wrapper -->
  </div><!-- /.container -->
</div>

  
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac02e31ab180432d84e5a3fe57cc01744d02ffe5ca6a380d2e55835617c66534e&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
<?php get_footer();
