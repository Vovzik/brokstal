<?php

/*Template Name: Главная */ 
get_header(); ?>
<main class="main">
    <section class="home">
        <div class="home__content">
            <div class="container">
                <div class="home__slider">
                    <div class="swiper-wrapper">
						
						<?php

// проверяем есть ли в повторителе данные
if( have_rows('slajdy') ):

 	// перебираем данные
    while ( have_rows('slajdy') ) : the_row();?>
                        <div class="home__slide swiper-slide" style="background-image: url('<?php the_sub_field('fon')?>')">
                            <div class="home__info">
                                <h1 class="home__title">
                                    <?php the_sub_field('nazvanie')?>
                                </h1>
                                <p class="home__text">
                                 <?php the_sub_field('opisanie')?>
                                </p>
                                <a class="home__btn" href="<?php the_sub_field('ssylka_na_knopke')?>">
                                    <?php the_sub_field('nazvanie_knopki')?>
                                </a>
                            </div>
                            <div class="home__items">
								
								<?php

// проверяем есть ли в повторителе данные
if( have_rows('uslugi') ):

 	// перебираем данные
    while ( have_rows('uslugi') ) : the_row(); ?>
                                <a class="home__item" href="<?php the_sub_field('ssylka')?>">
                                    <?php the_sub_field('nazvanie_uslugi')?>
                                </a>
                                <?php endwhile;

else :

    // вложенных полей не найдено

endif;

?>
                            </div>
                        </div>
                  <?php   endwhile;

else :

    // вложенных полей не найдено

endif;

?>
                    </div>
                    <div class="home-pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantage">
        <div class="advantage__content">
            <div class="container">
                <div class="advantage__items">
					
					<?php

// проверяем есть ли в повторителе данные
if( have_rows('preimushhestva') ):

 	// перебираем данные
    while ( have_rows('preimushhestva') ) : the_row(); ?>
                    <div class="advantage__item">
                        <img class="advantage__icon" src="<?php the_sub_field('kartinka')?>"
                             alt="alt">
                        <p class="advantage__text">
                            <?php the_sub_field('preimushhestvo')?>
                        </p>
                    </div>
                    
					 <?php endwhile;

else :

    // вложенных полей не найдено

endif;

?>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title">
                            Металлопрокат
                        </h2>
                        <p>
                            Компания “Броксталь” реализует широкий ассортимент металлопроката включая различные виды
                            сортового, листового, фасонного и трубного проката
                        </p>
                        <a class="rolled-metal__btn" href="#">
                            В каталог
                        </a>
                    </div>
                    <div class="rolled-metal__items">
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon" width="107" height="64" viewBox="0 0 107 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M87.977 17.8363C89.9146 17.1299 91.9138 16.4061 93.9745 15.6649C94.5842 15.4459 95.18 15.4495 95.7618 15.6758C98.9481 16.9203 102.132 18.1823 105.312 19.4616C106.435 19.9141 106.997 20.7968 106.998 22.1095C107.001 25.9286 107 29.6781 106.996 33.358C106.995 34.0093 106.688 34.4742 106.077 34.7527C84.4089 44.632 63.239 54.2901 42.5674 63.727C41.6587 64.1419 40.6958 64.0839 39.6786 63.553C36.2783 61.7805 32.9594 60.0406 29.7217 58.3334C28.772 57.833 28.1616 57.0809 27.8904 56.0771C27.7966 55.7319 27.7526 55.2467 27.7585 54.6216C27.7805 52.4951 27.7841 50.3796 27.7695 48.2749C27.768 48.1792 27.7226 48.1487 27.6332 48.1835C25.0214 49.2018 22.1824 50.31 19.1163 51.5081C18.3747 51.7967 17.6001 51.878 16.7925 51.7518C16.3147 51.6763 15.5628 51.3688 14.5369 50.8293C10.7027 48.8145 6.59155 46.6518 2.20339 44.3412C1.35625 43.8959 0.719419 43.1757 0.292914 42.1807C0.0979827 41.7281 0.00051728 41.1523 0.00051728 40.4531C-0.00241402 31.1105 0.00711295 25.2469 0.0290977 22.8623C0.0356932 21.8941 0.464396 20.308 1.55264 19.9946C27.1825 12.6551 50.3369 6.02566 71.0157 0.106192C71.7303 -0.0961518 72.5217 0.00610831 73.2054 0.282427C77.5042 2.00852 81.6388 3.65483 85.6092 5.22136C87.0881 5.80446 87.829 6.91409 87.8319 8.55024C87.8407 11.6238 87.8436 14.688 87.8407 17.7428C87.8407 17.8399 87.8861 17.8711 87.977 17.8363ZM85.2795 6.0612C81.287 4.46855 77.0044 2.78888 72.8998 1.17666C72.2931 0.939502 71.7852 0.837241 71.1938 1.00695C48.9203 7.38332 26.6131 13.7691 4.27216 20.1644C4.13146 20.205 4.12779 20.2543 4.26117 20.3123C8.81055 22.3009 13.4178 24.3077 18.083 26.3326C19.1976 26.8178 20.1474 27.4553 20.7476 28.5061C20.7647 28.5361 20.7918 28.5593 20.8243 28.5716C20.8568 28.5839 20.8927 28.5846 20.9256 28.5736L86.0885 6.84664C86.1603 6.82198 86.1728 6.78064 86.1259 6.72262C85.8826 6.40932 85.6005 6.18884 85.2795 6.0612ZM21.2686 49.6826L27.7717 47.1435C27.8508 47.1116 27.8904 47.0536 27.8904 46.9695C27.8904 45.4189 27.8919 43.7886 27.8948 42.0784C27.8963 41.1994 28.0758 40.4749 28.4334 39.9049C28.805 39.3109 29.381 39.3392 29.9636 39.1259C48.9115 32.1665 67.8668 25.2113 86.8294 18.2606C86.8983 18.2345 86.9327 18.1852 86.9327 18.1126C86.9357 14.7794 86.9335 11.4962 86.9261 8.26305C86.9261 8.00341 86.8902 7.74304 86.8184 7.48196C86.8134 7.46258 86.8044 7.44443 86.792 7.42863C86.7796 7.41284 86.7641 7.39973 86.7463 7.39014C86.7286 7.38055 86.7091 7.37467 86.6889 7.37288C86.6688 7.37108 86.6485 7.3734 86.6293 7.37969L21.2994 29.1676C21.2334 29.1908 21.2122 29.2343 21.2356 29.2981C21.4687 29.932 21.5866 30.5847 21.5896 31.2563C21.6072 36.4926 21.6079 41.8608 21.5918 47.3611C21.5903 48.1661 21.4423 48.8986 21.1477 49.5586C21.0861 49.6964 21.1264 49.7378 21.2686 49.6826ZM42.2047 44.3738C42.898 44.6755 43.4761 45.1701 43.9393 45.8577C43.9789 45.9157 44.0316 45.9317 44.0976 45.9055L105.222 20.7148C105.483 20.6075 105.482 20.5016 105.22 20.3972C101.847 19.0525 98.5444 17.7493 95.3111 16.4874C94.974 16.3554 94.6406 16.3496 94.3108 16.4699C73.3681 24.1329 52.3961 31.8096 31.3948 39.5002C31.2292 39.5611 31.2277 39.6264 31.3904 39.696C34.9798 41.2408 38.5845 42.8 42.2047 44.3738ZM17.5004 27.0353C12.7693 25.0184 8.06014 22.9123 3.30703 20.9063C1.38996 20.0969 0.945864 21.9833 0.943665 23.3257C0.934871 29.0943 0.933405 34.802 0.939267 40.4488C0.940733 41.9442 1.6655 43.0706 3.11356 43.8277C7.56768 46.1543 11.7939 48.362 15.7922 50.4507C17.2461 51.2107 18.5586 51.0737 19.7297 50.0395C20.4398 49.4128 20.7146 48.4664 20.7102 47.5286C20.6897 42.3997 20.6926 37.2098 20.719 31.959C20.7234 31.1598 20.6552 30.5078 20.5145 30.0031C20.0836 28.4692 19.0613 27.6989 17.5004 27.0353ZM105.804 21.2479L44.4757 46.4973C44.3863 46.5336 44.3585 46.5974 44.3922 46.6888C44.5593 47.1414 44.6406 47.6505 44.6406 48.1292C44.6391 52.1108 44.6406 56.2577 44.645 60.57C44.645 60.9856 44.5549 61.4186 44.4603 61.8233C44.4582 61.8335 44.459 61.844 44.4625 61.8538C44.4661 61.8636 44.4723 61.8722 44.4805 61.8787C44.4887 61.8852 44.4985 61.8894 44.5089 61.8907C44.5193 61.8921 44.5299 61.8906 44.5395 61.8864L105.87 33.878C105.985 33.8253 106.083 33.7414 106.151 33.6361C106.219 33.5309 106.255 33.4087 106.255 33.2841L106.273 21.5568C106.273 21.5018 106.259 21.4476 106.233 21.399C106.206 21.3505 106.168 21.3091 106.122 21.2786C106.076 21.248 106.022 21.2292 105.967 21.2239C105.912 21.2185 105.856 21.2268 105.804 21.2479ZM40.6987 44.6806C37.5535 43.3128 34.2235 41.8674 30.7089 40.3444C30.2853 40.1601 29.9577 40.0811 29.7261 40.1072C28.9149 40.1986 28.7566 41.2952 28.7566 41.9588C28.7537 46.023 28.7529 50.5007 28.7544 55.3918C28.7544 56.2577 29.2315 57.0214 30.0405 57.4435C33.2899 59.1362 36.5678 60.8565 39.8743 62.6044C40.2832 62.8219 41.1274 63.1374 41.51 63.0678C42.9859 62.8082 43.7209 61.9212 43.7151 60.4069C43.696 56.2497 43.6982 52.221 43.7216 48.3206C43.7246 47.7781 43.6322 47.2683 43.4446 46.7911C42.9522 45.5313 41.8419 45.1788 40.6987 44.6806Z" fill="#003B81"/>
                                <path d="M14.9901 47.2457C11.7119 45.661 8.29413 44.0445 4.73691 42.3962C3.51255 41.8294 3.00332 41.0987 3.00111 39.797C2.99963 34.697 2.99963 29.8945 3.00111 25.3896C3.00111 24.3101 4.09705 23.708 5.12658 24.1419C8.55538 25.5868 12.0978 27.0469 15.7539 28.5223C17.7532 29.3278 18.9909 30.2578 18.9931 32.3504C19.0005 37.146 19.0019 41.7353 18.9975 46.1185C18.9975 46.7759 18.7222 47.3191 18.1717 47.7481C17.3392 48.3979 15.7872 47.6298 14.9901 47.2457ZM16.396 29.5665C12.4905 27.9514 8.56719 26.3674 4.65499 24.7606C4.5516 24.7182 4.43857 24.7006 4.32611 24.7094C4.21365 24.7182 4.1053 24.7531 4.01084 24.811C3.91637 24.8689 3.83876 24.9479 3.78501 25.0409C3.73126 25.134 3.70306 25.2381 3.70296 25.3439L3.70738 40.2164C3.70738 40.4115 3.80554 40.4759 4.00185 40.4094L18.2315 35.5807C18.2512 35.5734 18.2681 35.5609 18.2803 35.5446C18.2925 35.5284 18.2994 35.5092 18.3001 35.4893C18.3193 34.6908 18.3237 33.8251 18.3134 32.8923C18.2934 31.2605 17.968 30.2142 16.396 29.5665ZM4.65499 41.6073C8.56719 43.5401 12.5392 45.3337 16.2543 47.1232C16.61 47.2935 16.9414 47.3834 17.2484 47.3931C18.0433 47.4159 18.2957 46.4963 18.2979 45.8797C18.3156 42.5623 18.3185 39.3922 18.3067 36.3696C18.3067 36.2741 18.2588 36.2429 18.1628 36.2761L4.18783 40.999C4.10222 41.0281 4.08303 41.0786 4.13026 41.1506C4.24982 41.3402 4.42473 41.4924 4.65499 41.6073Z" fill="#003B81"/>
                                <path d="M39.1513 60.4986C36.4802 59.1534 33.7791 57.8316 31.0844 56.463C30.1797 56.0019 29.9958 55.0583 30.0001 54.136C30.02 50.5063 30.0207 46.9071 30.0022 43.3383C29.9979 42.7263 30.2909 42.2354 30.894 42.0399C31.0765 41.9804 31.2519 41.9875 31.4201 42.0611C34.1063 43.2356 36.8858 44.4356 39.7587 45.6611C41.2857 46.3114 41.9957 47.087 41.9957 48.8169C41.9914 52.4097 41.9929 55.9757 42 59.5147C42.0021 60.3924 41.2771 61.1956 40.3532 60.9576C39.9612 60.857 39.5605 60.704 39.1513 60.4986ZM40.0389 46.5069C37.1966 45.2467 34.2966 43.9992 31.3025 42.7178C31.2233 42.6839 31.1349 42.6774 31.0515 42.6993C30.9681 42.7213 30.8946 42.7705 30.8427 42.8389C30.75 42.9579 30.7044 43.1187 30.7058 43.3213C30.713 47.1423 30.7137 50.9547 30.708 54.7587C30.7081 54.7689 30.7108 54.779 30.7158 54.7879C30.7209 54.7968 30.7281 54.8044 30.7368 54.8099C30.7455 54.8154 30.7554 54.8186 30.7657 54.8193C30.776 54.82 30.7863 54.8182 30.7956 54.8139L41.2194 50.1748C41.2878 50.1451 41.3256 50.0933 41.3327 50.0197C41.4632 48.6639 41.5017 47.155 40.0389 46.5069ZM41.2771 50.8527L31.2768 55.3367C30.9361 55.4897 30.9325 55.6498 31.2661 55.817C33.9908 57.1856 36.9271 58.654 40.0752 60.2223C41.1317 60.7472 41.367 59.8292 41.3691 59.0344C41.3734 56.3624 41.3741 53.655 41.3712 50.9122C41.3712 50.9012 41.3683 50.8903 41.363 50.8807C41.3576 50.871 41.3499 50.8629 41.3405 50.8569C41.3312 50.851 41.3205 50.8475 41.3094 50.8468C41.2983 50.8461 41.2872 50.8481 41.2771 50.8527Z" fill="#003B81"/>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Профильные трубы
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                        <svg class="rolled-metal__icon" width="112" height="64" viewBox="0 0 112 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <img src="<?php the_field('ikonka_metalloprokata')?>">
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Арматура
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon" width="125" height="48" viewBox="0 0 125 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 21.7987V18.8404L75.6814 0.515917L124.5 13.3001V15.8322L53.7401 42.4641L1.5 21.7987Z" stroke="white"/>
                                <path d="M53.5 47L124.5 20" stroke="white" stroke-width="0.5" stroke-dasharray="2 2"/>
                                <path d="M0.994416 26.5383C0.867508 26.5927 0.80872 26.7396 0.863109 26.8665L1.74943 28.9346C1.80382 29.0615 1.95079 29.1203 2.07769 29.0659C2.2046 29.0115 2.26339 28.8646 2.209 28.7377L1.42116 26.8994L3.25945 26.1115C3.38636 26.0571 3.44515 25.9102 3.39076 25.7833C3.33637 25.6564 3.1894 25.5976 3.06249 25.652L0.994416 26.5383ZM51.1914 46.9979C51.3183 46.9435 51.3771 46.7965 51.3227 46.6696L50.4364 44.6015C50.382 44.4746 50.235 44.4158 50.1081 44.4702C49.9812 44.5246 49.9224 44.6716 49.9768 44.7985L50.7646 46.6368L48.9263 47.4246C48.7994 47.479 48.7406 47.626 48.795 47.7529C48.8494 47.8798 48.9964 47.9386 49.1233 47.8842L51.1914 46.9979ZM1.00005 27.0002L51 47.0002L51.1857 46.5359L1.18574 26.5359L1.00005 27.0002Z" fill="white"/>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Листовой прокат
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon" width="106" height="68" viewBox="0 0 106 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.8313 55.4724C19.8316 55.4579 19.8283 55.4436 19.8217 55.4306C19.8151 55.4177 19.8054 55.4065 19.7934 55.3981C19.7814 55.3897 19.7675 55.3843 19.7529 55.3824C19.7383 55.3805 19.7234 55.3821 19.7094 55.387L14.5617 57.2442C14.4916 57.2701 14.4165 57.2799 14.3419 57.2727C14.2673 57.2655 14.1952 57.2415 14.1307 57.2025L0.217664 48.7228C0.151111 48.6819 0.0961315 48.6248 0.0580115 48.5569C0.0198915 48.489 -8.61648e-05 48.4127 2.79347e-07 48.3352V21.79C1.07573e-05 21.6878 0.0337257 21.5883 0.0959106 21.5072C0.158096 21.426 0.245272 21.3676 0.343909 21.3411C26.481 14.2513 52.5005 7.19798 78.4024 0.181178C79.5299 -0.123964 80.6509 -0.0436633 81.7653 0.422079C85.7732 2.09963 89.7478 3.77207 93.6889 5.4394C93.8486 5.50656 93.9284 5.62701 93.9284 5.80075L93.924 8.35869C93.9242 8.38837 93.9145 8.4174 93.8965 8.44147C93.8784 8.46553 93.853 8.48335 93.8239 8.49228L84.3403 11.3437C84.2648 11.3656 84.2271 11.4159 84.2271 11.4948V15.7062C84.2272 15.7185 84.2302 15.7307 84.2358 15.7417C84.2415 15.7527 84.2496 15.7622 84.2595 15.7695C84.2695 15.7767 84.281 15.7815 84.2932 15.7834C84.3053 15.7854 84.3177 15.7844 84.3294 15.7806C86.9153 14.9411 89.5047 14.1067 92.0978 13.2775C93.028 12.9811 93.9959 13.0161 95.0015 13.3826C98.5944 14.6922 102.173 15.9996 105.737 17.3049C105.912 17.3691 106 17.4962 106 17.686V19.957C106 20.1366 105.916 20.257 105.748 20.3183L97.3283 23.3428C97.3059 23.3512 97.2865 23.3663 97.2729 23.3858C97.2593 23.4054 97.252 23.4286 97.2521 23.4523C97.2579 25.2364 97.2579 27.1658 97.2521 29.2405C97.2521 29.7515 97.4799 30.1325 97.9356 30.3836C100.382 31.7254 102.881 33.1 105.432 34.5074C105.604 34.6022 105.747 34.7418 105.847 34.9117C105.947 35.0817 106 35.2756 106 35.4732V37.6501C106 37.6929 105.987 37.7347 105.963 37.7702C105.939 37.8057 105.905 37.8333 105.865 37.8494L33.0609 67.9599C32.987 67.9906 32.9072 68.0039 32.8276 67.999C32.748 67.9941 32.6707 67.971 32.6017 67.9314L20.0991 60.8467C20.0159 60.7995 19.9468 60.7309 19.8989 60.6481C19.8511 60.5653 19.8262 60.4713 19.827 60.3759L19.8313 55.4724ZM82.9712 1.89815C81.1559 1.13602 80.0806 0.60166 78.4656 1.04185C52.877 7.99587 27.3059 14.9441 1.75219 21.8864C1.60999 21.9244 1.60563 21.9755 1.73913 22.0397L14.4376 28.1849C14.5204 28.2243 14.6141 28.2321 14.701 28.2068L91.9215 5.80294C92.0623 5.76206 92.0652 5.71388 91.9302 5.6584C88.986 4.42031 85.9996 3.1669 82.9712 1.89815ZM14.8621 29.0981C14.845 29.1029 14.83 29.1133 14.8194 29.1275C14.8088 29.1418 14.8031 29.1591 14.8033 29.177L14.8077 31.367C14.8079 31.3794 14.8109 31.3915 14.8165 31.4026C14.8221 31.4136 14.8302 31.4232 14.8401 31.4306C14.85 31.438 14.8614 31.443 14.8735 31.4453C14.8856 31.4475 14.8981 31.447 14.91 31.4436L93.2036 8.06304C93.2202 8.05782 93.2347 8.04732 93.2449 8.03311C93.2551 8.01889 93.2605 8.00173 93.2602 7.98419L93.2645 6.44462C93.2643 6.43222 93.2613 6.42004 93.2556 6.40901C93.25 6.39798 93.242 6.38839 93.2321 6.38099C93.2222 6.37358 93.2108 6.36856 93.1986 6.3663C93.1865 6.36404 93.1741 6.36461 93.1622 6.36796L14.8621 29.0981ZM14.0458 32.2342L4.97361 29.1945C4.91526 29.1746 4.85304 29.1691 4.79213 29.1782C4.73121 29.1874 4.67335 29.2111 4.62334 29.2473C4.57333 29.2835 4.53262 29.3311 4.50458 29.3863C4.47654 29.4415 4.46198 29.5026 4.46211 29.5646C4.4563 34.7067 4.45775 39.754 4.46646 44.7063C4.46791 44.956 4.55135 45.183 4.71677 45.3874C4.76466 45.4458 4.82343 45.4633 4.89308 45.44L19.6964 40.5935C19.7269 40.5833 19.7534 40.5639 19.7722 40.5379C19.7909 40.512 19.801 40.4808 19.8009 40.4489L19.7987 37.28C19.7988 37.1958 19.8253 37.1138 19.8746 37.0457C19.9239 36.9777 19.9933 36.927 20.0729 36.9011L83.2999 16.1464C83.3207 16.1395 83.3388 16.1261 83.3517 16.108C83.3646 16.0899 83.3716 16.0681 83.3717 16.0456V11.9065C83.3717 11.8072 83.3245 11.7715 83.2302 11.7992L14.8055 32.2452C14.5577 32.3207 14.2922 32.3169 14.0458 32.2342ZM21.4834 37.5012L32.8781 42.7069C32.9419 42.7361 33.0065 42.739 33.0718 42.7156L104.043 17.7341C104.153 17.6962 104.153 17.6575 104.043 17.6181C100.961 16.5143 97.7063 15.3492 94.2788 14.1228C93.6193 13.8863 92.8444 13.9257 92.1892 14.1403C68.6337 21.8857 45.0673 29.6361 21.4899 37.3917C21.3942 37.4238 21.392 37.4603 21.4834 37.5012ZM105.31 18.3298C105.31 18.318 105.307 18.3064 105.302 18.2959C105.296 18.2854 105.288 18.2764 105.279 18.2695C105.269 18.2627 105.258 18.2582 105.247 18.2565C105.235 18.2548 105.223 18.2559 105.212 18.2597L33.296 43.6048C33.2815 43.6098 33.2688 43.6192 33.2598 43.6318C33.2509 43.6443 33.246 43.6594 33.2459 43.6748L33.2307 45.5451C33.2303 45.5574 33.2329 45.5695 33.2382 45.5806C33.2436 45.5916 33.2516 45.6011 33.2615 45.6082C33.2714 45.6154 33.2829 45.62 33.295 45.6216C33.3071 45.6231 33.3194 45.6217 33.3308 45.6174L105.256 19.8344C105.27 19.829 105.282 19.8194 105.29 19.8069C105.299 19.7943 105.304 19.7795 105.303 19.7643L105.31 18.3298ZM13.8869 28.936L1.00561 22.6595C0.992041 22.6528 0.977026 22.6498 0.961961 22.6508C0.946896 22.6518 0.932272 22.6566 0.919451 22.6649C0.90663 22.6732 0.896031 22.6847 0.88864 22.6983C0.88125 22.7119 0.877309 22.7272 0.877185 22.7427V47.9541C0.877247 48.0029 0.889712 48.0508 0.913364 48.093C0.937016 48.1352 0.971048 48.1704 1.01214 48.195L13.728 55.9367C13.8615 56.017 13.9283 55.9791 13.9283 55.8228V54.2088C13.9284 54.1237 13.909 54.0396 13.8716 53.9629C13.8343 53.8863 13.78 53.819 13.7128 53.7664C10.667 51.3822 7.58268 48.9783 4.45993 46.5547C3.86788 46.097 3.5588 45.3677 3.55445 44.6253C3.53268 40.1329 3.52833 35.3586 3.54139 30.3026C3.54284 29.631 3.62337 29.1485 3.78299 28.855C4.09353 28.2783 4.63914 28.1177 5.41983 28.3732C8.15513 29.2711 10.9724 30.2092 13.8717 31.1874C13.908 31.1991 13.9261 31.1859 13.9261 31.148L13.9283 29.0039C13.9283 28.9718 13.9145 28.9492 13.8869 28.936ZM96.253 23.7983L33.2002 46.4277C33.0067 46.4974 32.7959 46.502 32.5995 46.4408L24.337 43.8719C24.2889 43.8569 24.2379 43.8535 24.1882 43.862C24.1385 43.8705 24.0914 43.8906 24.0508 43.9209C24.0101 43.9511 23.9771 43.9906 23.9542 44.0361C23.9313 44.0816 23.9193 44.1319 23.9191 44.1829C23.9234 48.3673 23.922 52.5188 23.9147 56.6375C23.9147 56.8521 23.9517 57.05 24.0257 57.231C24.0408 57.2688 24.0699 57.2991 24.107 57.3155C24.144 57.3319 24.1859 57.333 24.2238 57.3186L96.462 30.2501C96.536 30.2223 96.5607 30.1705 96.536 30.0946C96.4359 29.7996 96.3843 29.5033 96.3814 29.2054C96.3684 27.3556 96.3698 25.5853 96.3858 23.8946C96.3872 23.7983 96.343 23.7662 96.253 23.7983ZM99.2655 32.1138C98.3571 31.6393 97.5822 31.1596 96.9408 30.6749C96.8813 30.6311 96.8175 30.6216 96.7493 30.6464L24.448 57.6515C24.4346 57.6567 24.4229 57.6654 24.4139 57.6767C24.405 57.688 24.3993 57.7015 24.3973 57.7158C24.3953 57.7301 24.3971 57.7446 24.4026 57.758C24.4081 57.7713 24.417 57.783 24.4284 57.7917L32.8911 64.2456C32.9521 64.2924 33.0181 64.3011 33.0892 64.2719C34.076 63.8762 35.0903 63.4696 36.1322 63.0521C45.3843 59.3466 55.6631 55.1994 66.9686 50.6106C69.4253 49.6134 71.9102 48.6082 74.4235 47.595C82.2449 44.4399 90.416 41.1315 98.9368 37.6698C100.889 36.877 102.812 36.0828 104.707 35.2871C104.775 35.2593 104.777 35.2265 104.714 35.1885C101.903 33.5665 100.087 32.5415 99.2655 32.1138ZM105.169 35.7251C105.168 35.714 105.165 35.7032 105.16 35.6935C105.155 35.6838 105.147 35.6755 105.138 35.6693C105.129 35.6631 105.118 35.6591 105.107 35.6578C105.096 35.6565 105.085 35.6578 105.075 35.6616L33.2002 64.7669C33.1873 64.7721 33.1762 64.7812 33.1684 64.7929C33.1606 64.8047 33.1566 64.8185 33.1567 64.8326L33.1959 66.808C33.1961 66.8193 33.1991 66.8304 33.2045 66.8404C33.21 66.8503 33.2178 66.8588 33.2272 66.865C33.2366 66.8713 33.2474 66.8751 33.2586 66.8762C33.2699 66.8774 33.2812 66.8757 33.2917 66.8715L105.171 37.1858C105.184 37.1805 105.195 37.1715 105.203 37.1597C105.21 37.148 105.214 37.1342 105.214 37.1201L105.169 35.7251ZM20.7107 38.1954L20.6715 59.9466C20.6701 60.0883 20.7303 60.1934 20.8522 60.262L32.31 66.8189C32.3135 66.8207 32.3174 66.8216 32.3214 66.8216C32.3253 66.8215 32.3292 66.8204 32.3327 66.8185C32.3361 66.8165 32.339 66.8137 32.3412 66.8104C32.3433 66.807 32.3445 66.8032 32.3448 66.7992C32.3666 66.1962 32.3601 65.5881 32.3252 64.9749C32.3246 64.9605 32.3209 64.9464 32.3145 64.9335C32.3082 64.9207 32.2992 64.9094 32.2882 64.9005C29.4238 62.7104 26.6478 60.5905 23.9604 58.5406C23.3321 58.0618 23.0187 57.4413 23.0201 56.6791C23.0288 53.032 23.023 49.1083 23.0027 44.9078C22.9962 43.6639 23.4075 42.6324 24.9051 43.0967C27.3037 43.8442 29.7757 44.6165 32.3209 45.4137C32.3571 45.4254 32.3753 45.4122 32.3753 45.3743V43.4734C32.3753 43.4296 32.3557 43.3982 32.3165 43.3792L20.7978 38.1385C20.7884 38.134 20.778 38.132 20.7676 38.1327C20.7572 38.1334 20.7471 38.1368 20.7384 38.1425C20.7297 38.1482 20.7225 38.156 20.7177 38.1653C20.7128 38.1746 20.7104 38.185 20.7107 38.1954ZM5.18039 45.8189C5.16775 45.8232 5.1565 45.8309 5.14784 45.8411C5.13918 45.8513 5.13343 45.8637 5.1312 45.8769C5.12897 45.8902 5.13034 45.9038 5.13517 45.9163C5.14 45.9288 5.1481 45.9398 5.15863 45.9481L14.553 53.2693C14.5625 53.2764 14.5737 53.2812 14.5854 53.2831C14.5971 53.285 14.6092 53.284 14.6205 53.2802L19.7682 51.526C19.7828 51.521 19.7954 51.5116 19.8044 51.499C19.8133 51.4865 19.8182 51.4714 19.8183 51.456L19.8096 41.1038C19.8095 41.0919 19.8067 41.0803 19.8012 41.0698C19.7958 41.0593 19.788 41.0503 19.7785 41.0435C19.7689 41.0366 19.7578 41.0322 19.7462 41.0305C19.7346 41.0288 19.7227 41.0299 19.7116 41.0337L5.18039 45.8189ZM19.7747 54.3183C19.7889 54.3129 19.801 54.3033 19.8096 54.2908C19.8182 54.2783 19.8227 54.2634 19.8226 54.2482L19.8161 52.056C19.816 52.0442 19.8132 52.0326 19.8078 52.0221C19.8024 52.0116 19.7945 52.0026 19.785 51.9957C19.7754 51.9889 19.7644 51.9844 19.7527 51.9827C19.7411 51.981 19.7293 51.9821 19.7181 51.9859L14.849 53.7095C14.8345 53.7145 14.8218 53.7239 14.8129 53.7365C14.8039 53.749 14.799 53.7641 14.799 53.7796L14.8098 56.0572C14.8098 56.0693 14.8126 56.0812 14.8182 56.0919C14.8237 56.1026 14.8317 56.1118 14.8416 56.1187C14.8514 56.1256 14.8628 56.13 14.8747 56.1315C14.8866 56.133 14.8987 56.1315 14.91 56.1273L19.7747 54.3183Z" fill="#003B81"/>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Швеллер
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                            <img class="rolled-metal__icon" src="#" alt="alt">
                            <h3 class="rolled-metal__subtitle">
                                Смотреть все
                            </h3>
                        </a>
                    </div>
                    <a class="rolled-metal__btn rolled-metal__btn-phone" href="#">
                        В каталог
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Металлообработка
                        </h2>
                        <p>
                            Основными направлениями деятельности организации являются продажа и обработка металла
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__button btn" href="#">
                                Все услуги
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="#">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__right">
                        <div class="rolled-metal__slider">
                            <div class="swiper-wrapper">
                                <a class="rolled-metal__slide swiper-slide" href="#">
                                    <h3 class="rolled-metal__subtitle2">
                                        Лазерная резка ЧПУ
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="#">
                                    <h3 class="rolled-metal__subtitle2">
                                        Плазменная резка ЧПУ
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide2.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="#">
                                    <h3 class="rolled-metal__subtitle2">
                                        Гибка листа (ЧПУ)
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide3.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="#">
                                    <h3 class="rolled-metal__subtitle2">
                                        Гибка трубы
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide4.jpg"
                                         alt="alt">
                                </a>
                            </div>
                            <div class="rolled-metal__prev rolled-metal-prev"></div>
                            <div class="rolled-metal__next rolled-metal-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info rolled-metal__info2">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Металлоконструкции
                        </h2>
                        <p>
                            Компания «Броксталь» изготавливает элементы
                            для быстровозводимых зданий. Мы изготавливаем
                            фермы, балки перекрытия и даже целые цеха под ключ, а так же можем изготовить изделия по
                            вашим чертежам
                        </p>
                        <a class="rolled-metal__button btn" href="#">
                            Проконсультироваться
                        </a>
                    </div>
                    <div class="rolled-metal__box">
                        <img class="rolled-metal__box-images"
                             src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/6.jpg" alt="alt">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Прием металлолома
                        </h2>
                        <p>
                            Компания “Броксталь” занимается приемом лома цветных и черных металлов по выгодным ценам у
                            предприятий и населения
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__button btn" href="#">
                                Цены на металлолом
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="#">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__inner-box">
                        <div class="rolled-metal__box-img">
                            <img class="rolled-metal__images2"
                                 src="<?php bloginfo('template_directory'); ?>/assets/img/rolled-metal/7.jpg" alt="alt">
                        </div>
                        <a class="rolled-metal__price" href="#">
                            <svg class="rolled-metal__price-icon" width="33" height="39" viewBox="0 0 33 39" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7007 0.00707354C25.7295 0.013504 25.7551 0.0186486 25.7762 0.0405122C28.0763 2.40478 30.3762 4.76925 32.6759 7.13395C32.7879 7.24905 33.0087 7.40788 32.9997 7.58151C32.9963 7.64967 32.9946 7.68525 32.9946 7.68825C32.9946 18.0379 32.9946 28.3896 32.9946 38.7435C32.9946 38.7518 32.9912 38.7599 32.9852 38.7658C32.9792 38.7717 32.9711 38.775 32.9626 38.775H0.0415989C0.013866 38.775 0 38.7613 0 38.7338V0.0160761C0 0.00535871 0.00554719 2.19034e-10 0.0166403 2.19034e-10H25.6386C25.6594 -8.32385e-07 25.6803 0.00237204 25.7007 0.00707354ZM30.4865 8.76021C30.4865 8.56987 30.4775 8.46698 30.3233 8.30879C28.4558 6.39037 26.5879 4.47238 24.7196 2.55482C24.7052 2.53998 24.688 2.52818 24.669 2.52011C24.65 2.51205 24.6295 2.50789 24.6088 2.50788H2.51388C2.5098 2.50788 2.5059 2.5095 2.50302 2.5124C2.50014 2.51529 2.49852 2.51922 2.49852 2.52331V36.2343C2.49852 36.2429 2.50182 36.251 2.5077 36.2571C2.51358 36.2631 2.52156 36.2665 2.52988 36.2665L30.4814 36.2658C30.486 36.2658 30.4904 36.264 30.4936 36.2607C30.4968 36.2575 30.4987 36.2531 30.4987 36.2485C30.4974 27.0868 30.4933 17.924 30.4865 8.76021Z"
                                      fill="white"/>
                                <path d="M11.7157 15.8374L11.7176 8.18514C11.7176 8.17019 11.713 8.15558 11.7046 8.14319C11.6961 8.13081 11.6842 8.12123 11.6702 8.11569L10.7441 7.75366C10.7361 7.75064 10.7293 7.74479 10.7251 7.73713C10.7209 7.72948 10.7195 7.72053 10.7211 7.71186L10.9758 6.36532C10.9775 6.35675 10.9829 6.35246 10.9918 6.35246C13.1742 6.35075 15.3563 6.35096 17.5383 6.3531C19.9939 6.35568 22.1321 7.08682 22.4111 9.83777C22.5135 10.8525 22.4745 11.9463 22.0963 12.8922C21.3974 14.6407 19.4659 15.085 17.7776 15.0992C16.7353 15.1077 15.6925 15.1097 14.6494 15.105C14.6225 15.105 14.609 15.1185 14.609 15.1455L14.6078 15.8348C14.6078 15.8442 14.6115 15.8532 14.6181 15.8598C14.6247 15.8665 14.6336 15.8702 14.643 15.8702L19.0998 15.8715C19.1246 15.8715 19.137 15.8837 19.137 15.9081L19.1382 18.0205C19.1382 18.029 19.1349 18.0372 19.1289 18.0433C19.1229 18.0493 19.1147 18.0527 19.1062 18.0527L14.6417 18.0533C14.6199 18.0533 14.609 18.064 14.609 18.0855V19.6326C14.609 19.6777 14.5866 19.7002 14.5418 19.7002L11.7598 19.7034C11.7539 19.7034 11.7481 19.7022 11.7427 19.6999C11.7372 19.6976 11.7323 19.6942 11.7281 19.69C11.724 19.6858 11.7207 19.6807 11.7184 19.6752C11.7162 19.6697 11.715 19.6637 11.715 19.6577L11.7201 18.0797C11.7201 18.0727 11.7173 18.066 11.7123 18.061C11.7072 18.0561 11.7004 18.0533 11.6933 18.0533H10.6264C10.6177 18.0533 10.6094 18.0499 10.6033 18.0437C10.5972 18.0376 10.5938 18.0292 10.5938 18.0205L10.5944 15.9171C10.5944 15.9052 10.5992 15.8937 10.6077 15.8853C10.6162 15.8768 10.6278 15.8721 10.6398 15.8721L11.6792 15.874C11.7035 15.874 11.7157 15.8618 11.7157 15.8374ZM18.5488 8.8359C18.1345 8.69829 17.6961 8.6312 17.2336 8.63463C16.3637 8.64149 15.4959 8.64449 14.6302 8.64363C14.6242 8.64363 14.6185 8.646 14.6143 8.65022C14.6101 8.65445 14.6078 8.66017 14.6078 8.66614L14.609 12.7636C14.609 12.7863 14.6201 12.7977 14.6423 12.7977C15.517 12.8037 16.3916 12.8031 17.2663 12.7958C18.4349 12.7861 19.4192 12.5456 19.5882 11.2042C19.704 10.2866 19.5651 9.17286 18.5488 8.8359Z"
                                      fill="white"/>
                                <path d="M25.9163 22.8406H7.08271C7.06292 22.8406 7.04688 22.8567 7.04688 22.8766V25.3137C7.04688 25.3336 7.06292 25.3497 7.08271 25.3497H25.9163C25.9361 25.3497 25.9521 25.3336 25.9521 25.3137V22.8766C25.9521 22.8567 25.9361 22.8406 25.9163 22.8406Z"
                                      fill="white"/>
                                <path d="M25.9125 26.5718H7.08655C7.06464 26.5718 7.04688 26.5896 7.04688 26.6116V29.0398C7.04688 29.0618 7.06464 29.0797 7.08655 29.0797H25.9125C25.9344 29.0797 25.9521 29.0618 25.9521 29.0398V26.6116C25.9521 26.5896 25.9344 26.5718 25.9125 26.5718Z"
                                      fill="white"/>
                                <path d="M25.9196 30.3179H7.07317C7.05656 30.3179 7.04309 30.3314 7.04309 30.3481V32.7955C7.04309 32.8122 7.05656 32.8257 7.07317 32.8257H25.9196C25.9362 32.8257 25.9496 32.8122 25.9496 32.7955V30.3481C25.9496 30.3314 25.9362 30.3179 25.9196 30.3179Z"
                                      fill="white"/>
                            </svg>
                            <h3 class="rolled-metal__price-subtitle">
                                Посмотреть прайс на лом
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info rolled-metal__info3">
                        <h2 class="rolled-metal__title rolled-metal__title3">
                            Вторсырьё
                        </h2>
                        <p>
                            Узнай стоимость вторсырья и посчитай сколько денег ты выбрасываешь
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__btn rolled-metal__btn2" href="#">
                                Рассчитать стоимость
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="#">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__box-wastes">
                        <h3 class="rolled-metal__wastes-title">
                            Мы принимаем более 20 видов отходов
                        </h3>
                        <div class="rolled-metal__wastes">
                            <a class="rolled-metal__waste" href="#">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Макулатура
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="#">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste2.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Пленка
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="#">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste3.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Пластик
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="#">
                                <img class="rolled-metal__waste-img" src="#" alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Прочее
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>