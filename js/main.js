$(document).ready(function() {
    var currentPage = 0;
    var cardsPerPage = 12; 
    var $cards = $('.js-card-container__card');
    var pageCount = Math.ceil($cards.length / cardsPerPage);

    function showPage(page) {
        $cards.hide().slice(page * cardsPerPage, (page + 1) * cardsPerPage).show();
        $('.page-count').text((page + 1) + ' / ' + pageCount);
    }

    showPage(currentPage);

    if (pageCount <= 1) {
        $('.js-next-page').prop('disabled', true);
        $('.js-prev-page').prop('disabled', true);
    }

    $('.js-next-page').click(function() {
        if (currentPage < pageCount - 1) {
            currentPage++;
            showPage(currentPage);
            $('.js-prev-page').prop('disabled', false);
        }
        if (currentPage === pageCount - 1) {
            $(this).prop('disabled', true);
        }
    });

    $('.js-prev-page').click(function() {
        if (currentPage > 0) {
            currentPage--;
            showPage(currentPage);
            $('.js-next-page').prop('disabled', false);
        }
        if (currentPage === 0) {
            $(this).prop('disabled', true);
        }
    });

    $('.js-hamburger-menu').click(function() {
        $('.js-menu-items').toggleClass('menu-opened');
        if ($(window).width() <= 1200 && $('.js-menu-items').hasClass('menu-opened')) {
            $('.js-menu-items').css('display', 'flex');
        } else {
            $('.js-menu-items').css('display', 'none');
        }
    });

    $(window).resize(function() {
        if ($(window).width() > 1200) {
            $('.js-menu-items').css('display', 'flex');
        } else {
            $('.js-menu-items').css('display', 'none');
        }
    });

    $(window).scroll(function() {
        var header = $('.header');
        if ($(this).scrollTop() > 0) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });

    function shortenText(element, maxLength) {
        var content = $(element).text();
        var words = content.split(" ");
        if (words.length > maxLength) {
            var shortenedContent = words.slice(0, maxLength).join(" ") + "...";
            $(element).text(shortenedContent);
        }
    }

    $('.js-card-container__card').each(function(index, element) {
        var maxLength = 15; 
        shortenText($(element).find('.content'), maxLength); 
    });

    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true, 
      },
      mousewheel: true,
      keyboard: true,
    });
});
