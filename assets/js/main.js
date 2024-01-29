document.addEventListener("DOMContentLoaded", ready);

function ready() {
    function search() {
        const headerSearchBtnJs = document.querySelector('.header-search-btn-js');
        const headerSearchInputJs = document.querySelector('.header-search-input-js');


        if (window.innerWidth > 480) {
            headerSearchBtnJs.addEventListener('click', () => {
                headerSearchBtnJs.classList.toggle('show');
                headerSearchInputJs.classList.toggle('open');
            })
        }
    }

    search();

    function addArrow() {
        const menuLeftLink = document.querySelectorAll('.menu-left__link');
        const submenuLeftLink = document.querySelectorAll('.submenu-left__link');
        const sidebarMenu = document.querySelectorAll('.sidebar-menu > li > a');



        for (let i = 0; i < submenuLeftLink.length; i++) {
            const element = document.createElement('span');
            element.classList.add('submenu-left__icon', 'rotate')
            submenuLeftLink[i].append(element);
        }

        for (let i = 0; i < menuLeftLink.length; i++) {
            const element = document.createElement('span');
            element.classList.add('menu-left__icon', 'rotate')
            menuLeftLink[i].append(element);
        }

        for (let i = 0; i < sidebarMenu.length; i++) {
            const element = document.createElement('span');
            sidebarMenu[i].append(element);
        }

    }

    addArrow();

    function openMenu() {
        const submenuLeftItem = document.querySelectorAll('.submenu-left__item');
        const menuLeftItem = document.querySelectorAll('.menu-left__item');


        submenuLeftItem.forEach((element) => {
            const submenuLeftIcon = element.querySelector('.submenu-left__icon');
            const submenuLeft = element.querySelector('.submenu-left.level-more');

            submenuLeftIcon.addEventListener('click', (event) => {
                event.preventDefault();
                submenuLeft.classList.toggle('open');
                submenuLeftIcon.classList.toggle('rotate')
            })
        })

        menuLeftItem.forEach((element) => {
            const menuLeftIcon = element.querySelector('.menu-left__icon');
            const submenuLeft = element.querySelector('.submenu-left');

            menuLeftIcon.addEventListener('click', (event) => {
                event.preventDefault();
                submenuLeft.classList.toggle('open');
                menuLeftIcon.classList.toggle('rotate')
            })
        })

        const sidebarMenu = document.querySelectorAll('.sidebar-menu > li');


        sidebarMenu.forEach((element) => {
            const menuLeftIcon = element.querySelector('span');
            const submenu = element.querySelector('.sub-menu');

            if (menuLeftIcon) {
                menuLeftIcon.classList.toggle('rotate')
            }

            if (submenu) {
                submenu.classList.toggle('open');
            }


            menuLeftIcon.addEventListener('click', (event) => {
                console.log(menuLeftIcon)
                event.preventDefault();
                menuLeftIcon.classList.toggle('rotate')
                submenu.classList.toggle('open');
            })
        })


    }

   openMenu();

    function burger() {
        const js__headerBurgerClick = document.querySelectorAll('.js__header-burgerclick');
        const js__headerBurger = document.querySelectorAll('.js__header-burger')
        const headerNavOpenJs = document.querySelector('.header-nav-open-js');
        const headerContentJs = document.querySelector('.header-content-js');
        const body = document.querySelector('body');
        const lockPaddingValue = window.innerWidth - body.offsetWidth + 'px'; //Получили ширину scroll
        const timeout = 400;


        for (let i = 0; i < js__headerBurgerClick.length; i++) {
            js__headerBurgerClick[i].addEventListener('click', () => {
                headerNavOpenJs.classList.toggle('open');
                body.classList.toggle('menu-lock');

                bodylock();


                for (let i = 0; i < js__headerBurger.length; i++) {
                    js__headerBurger[i].classList.toggle('open')
                }


                if (!headerNavOpenJs.classList.contains('open')) {
                    bodyUnlock()
                }
            });

        }

        function bodylock() {
            body.style.paddingRight = lockPaddingValue;
            headerContentJs.style.paddingRight = lockPaddingValue;
            body.classList.add('menu-lock')
        };


        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                headerContentJs.style.paddingRight = '0px';
                body.classList.remove('menu-lock');
            }, timeout)
        };
    }

    burger();

    function fixedHeader() {
        const header = $(".header__content");
        const scrollChange = 1;
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= scrollChange) {
                header.addClass('fixed');
            } else {
                header.removeClass("fixed");
            }
        });
    }

    fixedHeader()

    function homeSlider() {
        new Swiper('.home__slider', {
            // Optional parameters
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            /* breakpoints: {
                 // when window width is >= 320px
                 320: {
                     slidesPerView: 2,
                     spaceBetween: 20
                 },
             }*/

        });
    }

    homeSlider();

    function rolledMetalSlider() {
        new Swiper('.rolled-metal__slider', {
            // Optional parameters
            slidesPerView: 4,
            spaceBetween: 15,
            loop: true,
            // Navigation arrows
            navigation: {
                nextEl: '.rolled-metal__next',
                prevEl: '.rolled-metal__prev',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                },

                1301: {
                    slidesPerView: 4,
                },
            }

        });
    }

    rolledMetalSlider();

    function newsSlider() {
        new Swiper('.news__slider', {
            // Optional parameters
            slidesPerView: 2,
            spaceBetween: 15,
            loop: true,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1.4,
                },

                481: {
                    slidesPerView: 2,
                },
            }

        });
    }

    newsSlider();

    function popup() {
        const js__popupLink = document.querySelectorAll('.js__popup-link');
        const js__popupClose = document.querySelectorAll('.js__popup-close');
        const body = document.querySelector('body');


        let unlock = true;

        const timeout = 400;


        for (let i = 0; i < js__popupLink.length; i++) {
            js__popupLink[i].addEventListener('click', (event) => {
                const popup__name = js__popupLink[i].dataset.modal;
                const popupCurent = document.querySelector(`[data-popup="${popup__name}"]`);
                popupOpen(popupCurent);
                event.preventDefault();
            });
        }
        ;


        for (let i = 0; i < js__popupClose.length; i++) {
            js__popupClose[i].addEventListener('click', (event) => {
                popupClose(js__popupClose[i].closest('.js__popup-open'));
                event.preventDefault();
            });
        }
        ;


        function popupOpen(popupCurent) {
            if (popupCurent && unlock) {
                const popupActive = document.querySelector('.js__popup-open.open');

                if (popupActive) {
                    popupClose(popupActive, false);
                } else {
                    bodylock();
                }


                popupCurent.classList.add('open');
                popupCurent.addEventListener('click', (event) => {
                    if (!event.target.closest('.js__popup-content')) {
                        popupClose(event.target.closest('.js__popup-open'));
                    }
                });
            }
            ;
        }


        function popupClose(popupActive, doUnlock = true) {
            if (unlock) {
                popupActive.classList.remove('open');

                if (doUnlock) {
                    bodyUnlock();
                }
                ;
            }
            ;
        };


        function bodylock() {
            const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + 'px'; //Получили ширину scrolla

            body.style.paddingRight = lockPaddingValue;
            body.classList.add('lock');

        };


        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                body.classList.remove('lock');
            }, timeout)
        };
    }

    popup();

    function maskPhone() {
        const element = document.querySelector('.phone');
        const maskOptions = {
            mask: '+7 (000) 000 - 00 - 00',
            lazy: false
        }
        const mask = new IMask(element, maskOptions);
    }

    maskPhone()

    // Селекты
    function select() {
        var time = 300,
            trigger = null;
        $('body').on('click', '.select__trigger-js', function () {
            var drop = $(this).siblings('.select__drop-js');
            trigger = $(this);
            trigger.toggleClass('active');
            drop.fadeToggle(time);


            $(document).mouseup(function (e) {
                if (!trigger.is(e.target)
                    && trigger.has(e.target).length === 0
                    && !drop.is(e.target)
                    && drop.has(e.target).length === 0) {
                    trigger.removeClass('active');
                    drop.fadeOut(time);
                }
            });


            $('body').on('change', '.select__drop-js input', function () {
                if ($(this).is(':checked')) {
                    trigger.find('span').text($(this).siblings('label').text());
                }
                trigger.removeClass('active');
                drop.fadeOut(time);
            });


        })

    }

    select();

    function plusMinusValue() {
        const js__productsMinus = document.querySelectorAll('.js__products-minus');
        const js__productsValue = document.querySelectorAll('.js__products-value');
        const js__productsPlus = document.querySelectorAll('.js__products-plus');


        for (let i = 0; i < js__productsPlus.length; i++) {
            js__productsPlus[i].addEventListener('click', () => {
                js__productsValue[i].value++;
            })

            js__productsMinus[i].addEventListener('click', () => {
                if (js__productsValue[i].value > 1) {
                    js__productsValue[i].value--;
                }
            })
        }
    }

    plusMinusValue();

    function accardion () {
        const FAQQuestion = document.querySelectorAll('.FAQ__question');
        const FAQAnswer = document.querySelectorAll('.FAQ__answer');


        for (let i = 0; i < FAQQuestion.length; i++) {
            if (FAQQuestion[i]) {
                FAQQuestion[i].addEventListener('click', () => {
                    FAQAnswer[i].classList.toggle('open');
                    FAQQuestion[i].classList.toggle('minus');
                })
            }
        }
    }

    accardion();

    function map () {
        //api карта
        const map = document.querySelector('.map-js');

        if (map) {
            ymaps.ready(init);
        }


        function init() {
            let i;
            let pointer = [
                [51.97516107208106, 113.27185299999995],
                [52.03228357208567, 113.44739299999996],
                [52.05879857203995, 113.48445749999999]
            ];

            let myMap = new ymaps.Map(map, {
                center: [52.030072706573115, 113.53862925781252],
                zoom: 12
            });

            for (i = 0; i < pointer.length; ++i) {
                let place = [
                    new ymaps.Placemark(pointer[0], {}, {
                        iconLayout: 'default#image',
                        iconImageHref: './images/infrastructure/infrastructure__map.png',
                        iconImageSize: [46, 46],
                        iconImageOffset: [-35, -80]
                    }),
                    new ymaps.Placemark(pointer[1], {}, {
                        iconLayout: 'default#image',
                        iconImageHref: './images/infrastructure/infrastructure__map3.png',
                        iconImageSize: [46, 46],
                        iconImageOffset: [-35, -80]
                    }),
                    new ymaps.Placemark(pointer[2], {}, {
                        iconLayout: 'default#image',
                        iconImageHref: './images/infrastructure/infrastructure__map-green.png',
                        iconImageSize: [46, 46],
                        iconImageOffset: [-35, -80]
                    }),
                ]

                myMap.geoObjects.add(place[i]);
            }

            myMap.controls.remove('geolocationControl'); // удаляем геолокацию
            myMap.controls.remove('searchControl'); // удаляем поиск
            myMap.controls.remove('trafficControl'); // удаляем контроль трафика
            myMap.controls.remove('typeSelector'); // удаляем тип
            myMap.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
            myMap.controls.remove('zoomControl'); // удаляем контрол зуммирования
            myMap.controls.remove('rulerControl'); // удаляем контрол правил
            myMap.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
        };
    }
    map();

    function more () {
        const showMore = document.querySelector('.show-more');
        const itemLength = document.querySelectorAll('.item-element-js').length;
        let items = 9;

        if(showMore) {
            showMore.addEventListener('click', (e) => {
                e.preventDefault();
                items += 3;
                const array = Array.from(document.querySelector('.items-elements-js').children);
                const visItems = array.slice(0, items);

                visItems.forEach(el => el.classList.add('is-visible'));

                if (visItems.length === itemLength) {
                    showMore.style.display = 'none';
                }
            });
        }
    }

    more();


}


