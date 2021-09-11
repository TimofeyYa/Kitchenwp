<?php get_header();?>
<?php

/* Template Name: main */

?>
      <main>
        <section class="firstscreen">
            <div class="container">
                <h1 class="visually-hidden">Kitchen</h1>
                <h2>Новый бренд творожного сыра</h2>
                <img class="firstscreen__logo" src="<?php echo get_template_directory_uri() ?>/assets/Source/firstscreen/logo.png" alt="logo">
                
            </div>
            <div class="firstscreen__color"></div>
        </section>
        <section class="about" id="items">
            <div class="container">
                <img class="about__logo" src="<?php echo get_template_directory_uri() ?>/assets/Source/about/logo.png" alt="">
                <h2>
                    эксперт вашей<br>кухни!
                </h2>
                <div class="about__desc">
                    <p>Наш сream cheese поможет реализовать любые фантастические идеи на профессиональном уровне. Наши
                        эксперты добились идеальной консистенции для легкого смешивания ингредиентов, что делает наш сыр
                        оптимальным для ваших рецептов</p>
                    <p>Мы тщательно изучили потребности профессионального рынка и уверены, что шеф-повару важно
                        использовать надежные ингредиенты!</p>
                    <p><strong>Ведь хорошее сырье – залог ваших кулинарных шедевров!</strong></p>

                </div>
            </div>
        </section>
        <section class="startAnim">
            <div class="container">
                <div id='lottie-1'></div>
            </div>
        </section>
        <section class="mobBanka">
            <div class="container">
                <img src="<?php echo get_template_directory_uri() ?>/assets/Source/other/banka.png" alt="">
            </div>
        </section>
        <section class="sostav">
            <div class="container">
                <div class="sostav__side sostav__left">
                    <div class="sostav__title">
                        <h2>Состав</h2>
                    </div>
                    <div class="sostav__desc">
                        <p>Молокр пастерилизованное, сливки пастерилизованные бактериальные закваски молочнокислых
                            микроорганизмов, молокосвертывающий фермент микробного происхождения, соль поваренная
                            пищевая, стабилизаторы - камедь рожкового дерева, гуарава камедь крахмал картофельный.</p>
                    </div>
                </div>
                <div class="sostav__side sostav__right">
                    <div class="sostav__title">
                        <h2>Пищевая ценность</h2>
                    </div>
                    <div class="sostav__bgy">
                        <ul>
                            <li class="sostav__bgy-item">
                                <p class="sostav__element">Жиры</p>
                                <p class="sostav__size">26,0 г</p>
                            </li>
                            <li class="sostav__bgy-item">
                                <p class="sostav__element">Белки</p>
                                <p class="sostav__size">6,0 г</p>
                            </li>
                            <li class="sostav__bgy-item">
                                <p class="sostav__element">Углеводы</p>
                                <p class="sostav__size">3,0 г</p>
                            </li>
                            <li class="sostav__bgy-item">
                                <p class="sostav__element">Энергетическа ценность/калорийность (средние значения)</p>
                                <p class="sostav__size">270 ккал/
                                    1130 кДж</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sostav__banka">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/Source/other/banka2.png" alt="">
                </div>
                <div class="sostav__bg">
                    <img class="sostav__bg-el1" src="<?php echo get_template_directory_uri() ?>/assets/Source/sostav/el1.png" alt="">
                    <img class="sostav__bg-el2" src="<?php echo get_template_directory_uri() ?>/assets/Source/sostav/el2.png" alt="">
                    <img class="sostav__bg-el3" src="<?php echo get_template_directory_uri() ?>/assets/Source/sostav/el3.png" alt="">
                </div>
            </div>
            
        </section>

      <section class="perks" id='perks'>
            <div class="container">
                <div class="perks__block">
                    <div class="perks__block-title">
                        <h3>Инновационная технология</h3>
                    </div>
                    <div class="perks__block-desc">
                        <p>Технология мембраннойультра- фильтрации позволяет максимально бережно концентрировать белок
                            молочного калье</p>
                    </div>
                </div>

                <div class="perks__block">
                    <div class="perks__block-title">
                        <h3>Произведено в предгорьях Алтая</h3>
                    </div>
                    <div class="perks__block-desc">
                        <p>Мы отбираем только лучшее молоко-сырье от ведущих производителей Алтая </p>
                    </div>
                </div>

                <div class="perks__block">
                    <div class="perks__block-title">
                        <h3>100% натурально</h3>
                    </div>
                    <div class="perks__block-desc">
                        <p>Отборное молоко и качественные ингредиенты </p>
                    </div>
                </div>

                <div class="perks__block">
                    <div class="perks__block-title">
                        <h3>Профессиональная рецептура</h3>
                    </div>
                    <div class="perks__block-desc">
                        <p>Рецептура разработана с учетом рекомендаций ведущих шеф-поваров</p>
                    </div>
                </div>
            </div>
            <div class="perks__bg">
                <img class="perks__bg-el1" src="<?php echo get_template_directory_uri() ?>/assets/Source/perks/el1.png" alt="">
                <img class="perks__bg-el2" id="secEl" src="<?php echo get_template_directory_uri() ?>/assets/Source/perks/el2.png" alt="">
                <img class="perks__bg-el3" src="<?php echo get_template_directory_uri() ?>/assets/Source/perks/el3.png" alt="">
            </div>
            <img class="perks__banka" src="<?php echo get_template_directory_uri() ?>/assets/Source/other/banka2.png" alt="">
        </section>
        <section class="video">

        </section>
      <section class="povar">
            <div class="container">
                <div class="povar__content">
                    <div class="povar__block">
                        <p><strong>Термостабильность</strong> как залог гарантированного результата при работе с другими
                            ингредиентами </p>
                    </div>
                    <div class="povar__block">
                        <p><strong>Легко смешивается</strong> с другими ингредиентами, создавая правильную текстуру </p>
                    </div>
                    <div class="povar__block">
                        <p><strong>Цветная «платинка»</strong> гарантирует безопасность: остатки пленки не попадут в
                            продукт</p>
                    </div>
                    <div class="povar__block">
                        <p><strong>Идеальный объем</strong> для ваших рецептов</p>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/povar/povar.png" class="povar__bg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/povar/logo.png" class="povar__logo" alt="">
            <div class="povar__black"></div>
        </section>

       <section class="aboutus">
            <div class="container">
                <div class="aboutus__title">
                    <h2>Шеф-повара <br>
                        о KITCHN! </h2>
                </div>
                <div class="aboutus__control aboutus__control1">
                    <div class="aboutus__control-item aboutus__control-left">
                        <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="51.5" cy="51.5" r="51" />
                            <path
                                d="M34.6464 51.6464C34.4512 51.8417 34.4512 52.1583 34.6464 52.3536L37.8284 55.5355C38.0237 55.7308 38.3403 55.7308 38.5355 55.5355C38.7308 55.3403 38.7308 55.0237 38.5355 54.8284L35.7071 52L38.5355 49.1716C38.7308 48.9763 38.7308 48.6597 38.5355 48.4645C38.3403 48.2692 38.0237 48.2692 37.8284 48.4645L34.6464 51.6464ZM68 51.5L35 51.5L35 52.5L68 52.5L68 51.5Z" />
                        </svg>
                    </div>
                    <div class="aboutus__control-item aboutus__control-right">
                        <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="51.5" cy="51.5" r="51" transform="rotate(180 51.5 51.5)" />
                            <path
                                d="M68.3536 51.3536C68.5488 51.1583 68.5488 50.8417 68.3536 50.6464L65.1716 47.4645C64.9763 47.2692 64.6597 47.2692 64.4645 47.4645C64.2692 47.6597 64.2692 47.9763 64.4645 48.1716L67.2929 51L64.4645 53.8284C64.2692 54.0237 64.2692 54.3403 64.4645 54.5355C64.6597 54.7308 64.9763 54.7308 65.1716 54.5355L68.3536 51.3536ZM35 51.5L68 51.5L68 50.5L35 50.5L35 51.5Z" />
                        </svg>
                    </div>
                </div>
                <div class="aboutus__content">
                    <div class="aboutus__content-left">
                        <div class="aboutus__content-pic">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/aboutus/povar.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/aboutus/povar1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/aboutus/povar.jpg" alt="">
                        </div>
                        <div class="aboutus__control aboutus__control2">
                            <div class="aboutus__control-item aboutus__control-left">
                                <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="51.5" cy="51.5" r="51" />
                                    <path
                                        d="M34.6464 51.6464C34.4512 51.8417 34.4512 52.1583 34.6464 52.3536L37.8284 55.5355C38.0237 55.7308 38.3403 55.7308 38.5355 55.5355C38.7308 55.3403 38.7308 55.0237 38.5355 54.8284L35.7071 52L38.5355 49.1716C38.7308 48.9763 38.7308 48.6597 38.5355 48.4645C38.3403 48.2692 38.0237 48.2692 37.8284 48.4645L34.6464 51.6464ZM68 51.5L35 51.5L35 52.5L68 52.5L68 51.5Z" />
                                </svg>
                            </div>
                            <div class="aboutus__control-item aboutus__control-right">
                                <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="51.5" cy="51.5" r="51" transform="rotate(180 51.5 51.5)" />
                                    <path
                                        d="M68.3536 51.3536C68.5488 51.1583 68.5488 50.8417 68.3536 50.6464L65.1716 47.4645C64.9763 47.2692 64.6597 47.2692 64.4645 47.4645C64.2692 47.6597 64.2692 47.9763 64.4645 48.1716L67.2929 51L64.4645 53.8284C64.2692 54.0237 64.2692 54.3403 64.4645 54.5355C64.6597 54.7308 64.9763 54.7308 65.1716 54.5355L68.3536 51.3536ZM35 51.5L68 51.5L68 50.5L35 50.5L35 51.5Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="aboutus__content-right">
                        <div class="aboutus__content-name">
                            <h3>Гордон рамзи 1</h3>
                            <h3>Гордон рамзи 2</h3>
                            <h3>Гордон рамзи 3</h3>
                        </div>
                        <div class="aboutus__content-subTitle">
                            <h4>Известный шеф-повар в Барнауле</h4>
                            <h4>Известный шеф-повар в Барнауле</h4>
                            <h4>Известный шеф-повар в Барнауле</h4>
                        </div>
                        <div class="aboutus__content-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor,
                                netus. Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod
                                aliquet lorem tortor, cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget
                                euismod porttitor ut sit. Ornare vel viverra viverra magna lacus, pretium. Enim elit
                                justo, eleifend eu at. Quam tincidunt risus est feugiat amet. Elementum, aliquam
                                tristique turpis eu pellentesque. Magna neque ultrices fringilla malesuada euismod
                                integer sed semper. Sagittis, convallis purus convallis integer etiam in massa pharetra,
                                consequat. Euismod molestie mattis eu iaculis ornare elementum.</p>

                                <p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor,
                                    netus. Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod
                                    aliquet lorem tortor, cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget
                                    euismod porttitor ut sit. Ornare vel viverra viverra magna lacus, pretium. Enim elit
                                    justo, eleifend eu at. Quam tincidunt risus est feugiat amet. Elementum, aliquam
                                    tristique turpis eu pellentesque. Magna neque ultrices fringilla malesuada euismod
                                    integer sed semper. Sagittis, convallis purus convallis integer etiam in massa pharetra,
                                    consequat. Euismod molestie mattis eu iaculis ornare elementum.</p>

                                    <p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor,
                                        netus. Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod
                                        aliquet lorem tortor, cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget
                                        euismod porttitor ut sit. Ornare vel viverra viverra magna lacus, pretium. Enim elit
                                        justo, eleifend eu at. Quam tincidunt risus est feugiat amet. Elementum, aliquam
                                        tristique turpis eu pellentesque. Magna neque ultrices fringilla malesuada euismod
                                        integer sed semper. Sagittis, convallis purus convallis integer etiam in massa pharetra,
                                        consequat. Euismod molestie mattis eu iaculis ornare elementum.</p>
                        </div>
                        <div class="aboutus__control aboutus__control3">
                            <div class="aboutus__control-item aboutus__control-left">
                                <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="51.5" cy="51.5" r="51" />
                                    <path
                                        d="M34.6464 51.6464C34.4512 51.8417 34.4512 52.1583 34.6464 52.3536L37.8284 55.5355C38.0237 55.7308 38.3403 55.7308 38.5355 55.5355C38.7308 55.3403 38.7308 55.0237 38.5355 54.8284L35.7071 52L38.5355 49.1716C38.7308 48.9763 38.7308 48.6597 38.5355 48.4645C38.3403 48.2692 38.0237 48.2692 37.8284 48.4645L34.6464 51.6464ZM68 51.5L35 51.5L35 52.5L68 52.5L68 51.5Z" />
                                </svg>
                            </div>
                            <div class="aboutus__control-item aboutus__control-right">
                                <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="51.5" cy="51.5" r="51" transform="rotate(180 51.5 51.5)" />
                                    <path
                                        d="M68.3536 51.3536C68.5488 51.1583 68.5488 50.8417 68.3536 50.6464L65.1716 47.4645C64.9763 47.2692 64.6597 47.2692 64.4645 47.4645C64.2692 47.6597 64.2692 47.9763 64.4645 48.1716L67.2929 51L64.4645 53.8284C64.2692 54.0237 64.2692 54.3403 64.4645 54.5355C64.6597 54.7308 64.9763 54.7308 65.1716 54.5355L68.3536 51.3536ZM35 51.5L68 51.5L68 50.5L35 50.5L35 51.5Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <section class="cheese">
            <div class="container">
                <div class="cheese__title">
                    <h2>Сыр в деле</h2>
                </div>
                <div class="cheese__imgs">
                    <img class="cheese__imgs-item" src="<?php echo get_template_directory_uri() ?>/assets/Source/cheese/img1.jpg" alt="">
                    <img class="cheese__imgs-item" src="<?php echo get_template_directory_uri() ?>/assets/Source/cheese/img2.jpg" alt="">
                    <img class="cheese__imgs-item" src="<?php echo get_template_directory_uri() ?>/assets/Source/cheese/img3.jpg" alt="">
                </div>
            </div>
        </section>

    <section class="prod" id='prod'>
            <div class="container">
                <div class="prod__title">
                    <h2>Производство</h2>
                </div>
                <div class="prod__content">
                    <div class="prod__left">
                        <div class="prod__left-pic">
                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31" cy="31" r="29.5" stroke-width="3" />
                                <path d="M41 31L26 39.6603L26 22.3397L41 31Z" fill="#E21D37" />
                            </svg>
                        </div>
                        <div class="prod__left-txt">
                            <h3>посомтрите,<br> как производится KITCHN!</h3>
                        </div>
                        <div class="prod__left-video">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/prod/pic.jpg" alt="Видео">
                        </div>
                    </div>
                    <div class="prod__right">
                        <div class="prod__right-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor,
                                netus. Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod
                                aliquet lorem tortor, cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget
                                euismod porttitor ut sit. Ornare vel viverra viverra magna lacus, pretium. Enim elit
                                justo, eleifend eu at. Quam tincidunt risus est feugiat amet. Elementum, aliquam
                                tristique turpis eu pellentesque. Magna neque ultrices fringilla malesuada euismod
                                integer sed semper. Sagittis, convallis purus convallis integer etiam in massa pharetra,
                                consequat. Euismod molestie mattis eu iaculis ornare elementum.</p>
                        </div>
                        <div class="prod__right-pic">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/prod/pic.jpg" alt="Картинка">
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="quality">
            <div class="container">
                <div class="quality__title">
                    <h2>Контроль качества</h2>
                </div>
                <div class="quality__content">
                    <div class="quality__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor,
                            netus. Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod aliquet
                            lorem tortor, cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget euismod
                            porttitor ut sit. Ornare vel viverra viverra magna lacus, pretium. Enim elit justo, eleifend
                            eu at. Quam tincidunt risus est feugiat amet. Elementum, aliquam tristique turpis eu
                            pellentesque. Magna neque ultrices fringilla malesuada euismod integer sed semper. Sagittis,
                            convallis purus convallis integer etiam in massa pharetra, consequat. Euismod molestie
                            mattis eu iaculis ornare elementum.</p>
                    </div>
                    <div class="quality__pic">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/other/controlq.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="sertif">
            <div class="container">
                <div class="sertif__title">
                    <h2>Сертификаты</h2>
                </div>
            </div>
            <div class="sertif__content">
                <div class="sertif__content-wrap">
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/Source/sertif/sert.jpg" alt="Сертификат">
                    </div>
                    <div class="sertif__content-block">
                        <div class="sertif__content-blockEmp"></div>
                    </div>
                </div>
            </div>
            <div class="sertif__black">

            </div>
        </section>

       <section class="logistic" id="log">
            <div class="container">
                <div class="logistic__title">
                    <h2>Логистика</h2>
                </div>
                <div class="logistic__desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit etiam faucibus felis tempor, netus.
                        Egestas phasellus pretium, amet, fringilla ac semper amet, lectus. Euismod aliquet lorem tortor,
                        cursus eget aliquam nunc, nisi, habitant. Non mi justo arcu eget euismod porttitor ut sit.
                        Ornare vel viverra viverra magna lacus, pretium. Enim elit justo, eleifend eu at. Quam tincidunt
                        risus est feugiat amet. Elementum, aliquam tristique turpis eu pellentesque. Magna neque
                        ultrices fringilla malesuada euismod integer sed semper. Sagittis, convallis purus convallis
                        integer etiam in massa pharetra, consequat. Euismod molestie mattis eu iaculis ornare elementum.
                    </p>
                </div>
                <div class="logistic__perks">
                    <div class="logistic__perks-block">
                        <p>Срок годности: 120 суток</p>
                    </div>
                    <div class="logistic__perks-block">
                        <p>Температура хранения от +2 С<sup>0</sup> до +8С<sup>0</sup> </p>
                        <p>Хранить в темном месте</p>
                    </div>
                    <div class="logistic__perks-block">
                        <p>65% Массовая доля жира в сухом веществе</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="fasofka">
            <div class="container">
                <div class="fasofka__title">
                    <h2>Фасовка</h2>
                </div>
                <div class="fasofka__content">
                    <div class="fasofka__content-block">
                        <div class="fasofka__content-pic">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka1.png" alt="">
                            <h3>2 кг</h3>
                        </div>
                        <div class="fasofka__content-txt">
                            <p>Поддон: 216 ведер</p>
                            <p>Вес нетто: 432 кг Вес брутто: 470 кг</p>
                        </div>
                    </div>
                    <div class="fasofka__content-block">
                        <div class="fasofka__content-pic">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka2.png" alt="">
                            <h3>5 кг</h3>
                        </div>
                        <div class="fasofka__content-txt">
                            <p>Поддон: 90 ведер</p>
                            <p>Вес нетто: 450 кг Вес брутто: 485 кг</p>
                        </div>
                    </div>
                    <div class="fasofka__content-block">
                        <div class="fasofka__content-pic">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka3.png" alt="">
                            <h3>10 кг</h3>
                        </div>
                        <div class="fasofka__content-txt">
                            <p>Поддон: 48 ведер</p>
                            <p>Вес нетто: 480 кг Вес брутто: 515 кг</p>
                        </div>
                    </div>
                </div>

                <div class="fasofka__look-wrap">
                    <div class="fasofka__look">
                        <div class="fasofka__look-block">
                            <div class="fasofka__look-title">
                                <h4>Ведро пластиковое круглое с крышкой</h4>
                            </div>
                            <div class="fasofka__look-desc">
                                <h5>Упаковка:</h5>
                                <p>
                                    EAN 4650117433114<br>
                                    ВхШхД, мм: 170*170*140
                                </p>
                            </div>
                        </div>

                        <div class="fasofka__look-block">
                            <div class="fasofka__look-title">
                                <h4>Ведро пластиковое круглое с крышкой</h4>
                            </div>
                            <div class="fasofka__look-desc">
                                <h5>Упаковка:</h5>
                                <p>
                                    EAN 4650117433138<br>
                                    ВхШхД, мм: 230*230*190
                                </p>
                            </div>
                        </div>
                        
                        <div class="fasofka__look-block">
                            <div class="fasofka__look-title">
                                <h4>Ведро пластиковое круглое с крышкой</h4>
                            </div>
                            <div class="fasofka__look-desc">
                                <h5>Упаковка:</h5>
                                <p>
                                    EAN 4650117433176<br>
                                    ВхШхД, мм: 270*270*260
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fasofka__corob">
                    <div class="fasofka__corob-item">
                        <p>Короб: 4х2 кг</p>
                        <p>Вес нетто: 8 кг </p>
                        <p>Вес брутто: 8,3 кг  </p>
                        <p>ДхШхВ, мм: 380*370*145 </p>
                    </div>
                </div>

                <div class="fasofka__btn main__btn" id="que">
                    <button>Задать вопрос</button>
                </div>
            </div>
        </section>

        <section class="fasofkamob">
            
            <div class="container">
                
                <div class="fasofkamob__content">
                    <div class="fasofkamob__title">
                        <h2>Фасовка</h2>
                    </div>
                    <div class="fasofkamob__block">
                        <div class="fasofkamob__block-pic">
                            <div class="fasofka__content-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka1.png" alt="">
                                <h3>2 кг</h3>
                            </div>
                        </div>
                        <div class="fasofkamob__block-text">
                            <div class="fasofkamob__textItem">
                                <p>Поддон: 216 ведер</p> 
                                <p>Вес нетто: 432 кг
                                Вес брутто: 470 кг</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                               <strong><p>Ведро пластиковое круглое с крышкой</p></strong>
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Упаковка:</p> 
                                <p>EAN 4650117433114</p> 
                                <p>ВхШхД, мм: 170*170*140</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Короб: 4х2 кг</p>
                                <p>Вес нетто: 8 кг </p>
                                <p>Вес брутто: 8,3 кг  </p>
                                <p>ДхШхВ, мм: 380*370*145 </p>
                            </div>
                        </div>
                    </div>

                    <div class="fasofkamob__block">
                        <div class="fasofkamob__block-pic">
                            <div class="fasofka__content-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka2.png" alt="">
                                <h3>5 кг</h3>
                            </div>
                        </div>
                        <div class="fasofkamob__block-text">
                            <div class="fasofkamob__textItem">
                                <p>Поддон: 216 ведер</p> 
                                <p>Вес нетто: 432 кг
                                Вес брутто: 470 кг</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                               <strong><p>Ведро пластиковое круглое с крышкой</p></strong>
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Упаковка:</p> 
                                <p>EAN 4650117433114</p> 
                                <p>ВхШхД, мм: 170*170*140</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Короб: 4х2 кг</p>
                                <p>Вес нетто: 8 кг </p>
                                <p>Вес брутто: 8,3 кг  </p>
                                <p>ДхШхВ, мм: 380*370*145 </p>
                            </div>
                        </div>
                    </div>

                    <div class="fasofkamob__block">
                        <div class="fasofkamob__block-pic">
                            <div class="fasofka__content-pic">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/Source/fasofka/banka3.png" alt="">
                                <h3>10 кг</h3>
                            </div>
                        </div>
                        <div class="fasofkamob__block-text">
                            <div class="fasofkamob__textItem">
                                <p>Поддон: 216 ведер</p> 
                                <p>Вес нетто: 432 кг
                                Вес брутто: 470 кг</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                               <strong><p>Ведро пластиковое круглое с крышкой</p></strong>
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Упаковка:</p> 
                                <p>EAN 4650117433114</p> 
                                <p>ВхШхД, мм: 170*170*140</p> 
                            </div>
                            <div class="fasofkamob__textItem">
                                <p>Короб: 4х2 кг</p>
                                <p>Вес нетто: 8 кг </p>
                                <p>Вес брутто: 8,3 кг  </p>
                                <p>ДхШхВ, мм: 380*370*145 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fasofka__btn main__btn">
                    <button>Задать вопрос</button>
                </div>
            </div>
        </section>

        <section class="contacts" id="contacts">
            <div class="container">
                <div class="contacts__left">
                    <div class="contacts__title">
                        <h2>Заказать <br>
                            пробную партию</h2>
                    </div>
                </div>
                <div class="contacts__right">
                    <div class="contacts__form main__btn">
                        <form action="<?php echo admin_url('admin-ajax.php?action=send_mail')?>">
                            <input name="name" type="text" placeholder="Ваше имя">
                            <input name="phone" class="phone" type="text" placeholder="Ваш телефон">
                            <input name="mail" type="mail" placeholder="Почта">
                            <button>Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
