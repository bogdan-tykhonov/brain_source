<?php
/*
Template Name: Контакты
*/
?>
<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="contacts">
        <div class="container">
            <section class="breadcrumbs">
                <ul class="flex flex-align">
                    <li class="flex flex-align">
                    <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                    </li>
                    <li>
                    <h4> <?php the_title();?></h4>
                    </li>
                </ul>
            </section>
            <section class="contact-block">
                <h2>Контакти</h2>
                <form action="" class="country-address">
                    <div class="select-wrap">
                        <select name="location" onchange="this.form.submit()">
                        <?php
                        $current = $_GET['location'];
                        $contacts_locations = get_terms('contacts_taxonomy');
                       foreach($contacts_locations as $location){
                           $selected = '';
                           if($location->name == $current){
                               $selected = 'selected';
                           };
                        ?>
                        <option <?php echo  $selected  ?> value="<?php echo $location->name ?>"><?php echo $location->name ?></option>
                        <?php
                       }
                        ?>
                        </select>
                    </div>
                </form>
                <div class="address-list">
                    <?php get_template_part( 'inc/contacts_list' ); ?>
                </div>
            </section>
           <section class="main-form">
                <img src="<?php echo get_template_directory_uri()?>/src/assets/img/bussinesman2.png" alt="">
                <form class="main-form-block">
                    <h2>Залишилися питання?</h2>
                    <div class="input-row flex flex-between">
                        <div class="input-wrap flex flex-column">
                            <label >
                                Ім'я <span>*</span>
                            </label>
                           <div class="obligatory">
                           <input  name="name" type="text"  >
                              <div class="error-text">
                              Невірно заповнені дані
                              </div>
                           </div>
                        </div>
                        <div class="input-wrap flex flex-column">
                            <label >
                                Прізвище <span>*</span>
                            </label>
                            <div class="obligatory">
                            <input  name="surname" type="text"  >
                              <div class="error-text">
                              Невірно заповнені дані
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-row flex flex-between">
                        <div class="input-wrap flex flex-column">
                            <label >                        
                                 E-mail <span>*</span>
                            </label>
                            <div class="obligatory">
                            <input name="email" type="email"  >
                              <div class="error-text">
                              Невірно заповнені дані
                              </div>
                            </div>
                        </div>
                        <div class="input-wrap flex flex-column">
                            <label >
                                Телефон 
                            </label>
                            <input name="number" type='text'>
                        </div>
                    </div>
                    <div class="input-row flex flex-between">
                       <div class="input-comlpex">
                        <div class="input-wrap flex flex-column">
                            <label >                        
                                Установа 
                            </label>
                            <input name="organ" type="text" >
                        </div>
                        <div class="input-wrap contact-message-mob flex flex-column">
                            <label >
                                Текст повідомлення<span>*</span>
                            </label>
                           <div class="obligatory">
                            <textarea  name="message"  ></textarea>
                            <div class="error-text">
                              Невірно заповнені дані
                              </div>
                           </div>
                        </div>
                        <div class="capcha-row flex">
                          <div class="input-wrap">
                              <label >
                                Захист від спаму <span>*</span>
                              </label>
                            <div class="capcha-wrap flex">
                                <div class="capcha flex-full">
                                    2245
                                </div>
                                <input type="text" >
                            </div>
                          </div>
                        </div>
                       </div>
                        <div class="input-wrap contact-message flex flex-column">
                            <label >
                                Текст повідомлення<span>*</span>
                            </label>
                           <div class="obligatory">
                           <textarea  name="message"  ></textarea>
                           <div class="error-text">
                             Невірно заповнені дані
                            </div>
                           </div>
                        </div>
                    </div>
                    <button class="main-btn flex-full" type="submit">
                        Надіслати повідомлення
                    </button>
                </form>
           </section>
        </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>