<?php
include_once('locale.php');
include_once('configs.php');
?>

<!DOCTYPE html>
<html lang="<?= $currlang ?>">

<head>
    <meta charset="utf-8">

    <meta name="title" content="<?= __('site_title') ?>">
    <meta name="description" content="<?= __('site_description') ?>">
    <meta name="keywords" content="<?= __('site_keywords') ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">

    <title><?= __('site_title') ?>, <?= __('site_motto') ?></title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <?php echo _embed('all.css')?>

</head>

<body id="top">

    <?php // Header
    ?>
    <header class="header fixed_menu fixed_menu_shadow container-fluid" id="header">
        <div class="row">
            <div class="col-lg-4 col-7 logo_side">
                <a class="logo" href="#home-section" onclick="toElm('#top')">
                    <img src="img/PT_Logo_Header.svg" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>" />
                </a>
            </div>
            <?php /*<div class="col-lg-8 col-5 icons hideWeb">
                <a href="https://wa.me/<?= __('wts_number') ?>"><img src="img/WhatsApp_Icon_Mobile.svg" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>" /></a>
                <a href="#menu-section" onclick="openMenu()"><img src="img/Menu_Icon_Mobile.svg" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>" /></a>
            </div> */ ?>
            <div class="col-lg-8 col-5 links_side">
                <header><?=__('since_2001')?></header>
                <?php /*
                <div class="closeBtn"><a href="#close-menu-section" onclick="closeMenu()">&times;</a></div>
                <div class="bg" onclick="closeMenu()"></div>
                <nav class="mmenu">
                    <a href="#listings-section" onclick="toElm('#offers-and-join')"><?= __('listings') ?></a>
                    <a href="#reviews-section" onclick="toElm('#trustpilot')"><?= __('reviews') ?></a>
                    <a href="#news-section" onclick="toElm('#news')"><?= __('news') ?></a>
                    <a href="#info-section" onclick="toElm('#partners')"><?= __('info') ?></a>
                    <button onclick="window.location.href='tel:<?= __('site_phone') ?>'" class="butn butn-green"><?= __('site_phone') ?></button>
                </nav> */?>
            </div>
        </div>
        <?php /*<div class="sticky_wts">
            <a href="https://wa.me/<?= __('wts_number') ?>"><img src="img/WhatsApp_Icon_Mobile.svg" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>" /> <?=__('contact_us_whatsapp')?> </a>
        </div> */?>
    </header>

    <?php // Hero Banner
    ?>
    <section class="container-fluid margin_for_fixed_menu hero-banner" id="hero-banner">

        <div class="carousel-inner">
            <div class="item active">
                <picture>
                    <source media="(min-width: 1400px)" srcset="img/IstanbulApartments-Main.webp">
                    <source media="(max-width: 650px)" srcset="img/IstanbulApartments-Main.webp">
                    <img src="img/IstanbulApartments-Main.webp" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>"  />
                </picture>
                <div class="carousel-caption">
                    <h4><?= __('stay_ahead_the_curve') ?></h4>
                    <h1><?= __('emerging_global_realestate_goms') ?></h1>
                    <p><?=__('buy_manage_rent')?></p>
                    <button class="butn butn-red" onclick="openModal('#sendLead_mdl', 'scheduale');"><?= __('scheduale_free_consultation') ?></button>
                </div>
            </div>
        </div>
    </section>

    <?php /* <section class="container-fluid margin_for_fixed_menu hero-banner" id="hero-banner">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="div_img"></div>
                <div class="carousel-caption">
                    <h1><?= __('emerging_global_realestate_goms') ?></h1>
                    <p><?= __('stay_ahead_the_curve') ?></p>
                    <button class="butn butn-red" onclick="openModal('#sendLead_mdl', 'scheduale');"><?= __('scheduale_free_consultation') ?></button>
                </div>
            </div>
        </div>
    </section> */?>

    <div class="container-fluid">
        <div class="row h_separator">
            <div class="col"><?=__('separator_phrase_1')?></div>
            <div class="col"><?=__('separator_phrase_2')?></div>
            <div class="col"><?=__('separator_phrase_3')?></div>
        </div>
    </div>

    <?php // Offer and join us
    ?>
    <section class="container-fluid offers-and-join" id="offers-and-join">
        <div class="row ">
            <div class="col-md-6 offers_side side_1">

                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer2_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer2') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>

                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer1_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer1') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>

                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer3_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer3') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-6 offers_side side_2">
                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer4_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer4') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>

                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer5_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer5') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>

                <div class="row offer" onclick="openModal('#sendLead_mdl', 'inquire');">
                    <h3 class="col-12 pl-5"><?= __('offer6_txt') ?></h3>
                    <div class="col-8 top_border">
                    </div>
                    <div class="col-8 col-lg-8 bg_img">
                    
                    </div>
                    <div class="col-4 col-lg-4 info">
                        <h2><?= __('offer6') ?></h2>
                        <button class="butn butn-red"><?= __('inquire') ?></button>
                    </div>
                    
                </div>
            </div>

            <?php /*?>
            <div class="col-lg-6 joinus_side">
                <h3><?= __('join_maillist') ?></h3>
                <form id="form" onsubmit="doSend(event);">
                    <div><input type="text" onblur="chk(this, 'isEmpty')" name="name" id="name" placeholder="<?= __('name') ?>" /></div>
                    <div class="inline_input" onclick="openMenu('#countriesList')">
                        <img src="img/png100px/tr.png" title="<?= __('site_img_alt') ?>" alt="<?= __('site_img_alt') ?>" id="countryImg" />
                        <input type="tel" name="zip" id="zip" value="---" maxlength="4" />
                    </div>
                    <div><input type="tel" maxlength="11" class="padding_left100px" onfocus="openMenu('#countriesList','#zip')" onblur="chk(this, 'isPhone')" name="phone" id="phone" placeholder="<?= __('phone') ?>" /></div>
                    <div><input type="email" onblur="chk(this, 'isEmail')" name="email" id="email" placeholder="<?= __('email') ?>" /></div>
                    <div><button class="butn butn-red"><?= __('join') ?></button></div>
                </form>

                <div class="countriesList" onclick="closeMenu(this)" id="countriesList">
                    <ul></ul>
                </div>

            </div>
            <?php */?>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row h_separator">
            <div class="col-12">
                <button class="butn butn-gray" onclick="openModal('#sendLead_mdl', 'inquire');"><?=__('separator_button')?></button>
            </div>
        </div>
    </div>

    <?php // News
    ?>
    <section class="container-fluid news" id="news">
        <div class="row">
            <div class="col-lg-6 side_1  order-0 order-md-12">
                <form class="row inquire_form" id="form" onsubmit="doSend(event, '#form');">
                    <div class="col-12 ">
                        <h3><?= __('contact_header') ?></h3>
                        <div><input type="text" onblur="chk(this, 'isEmpty')" name="name" id="name" placeholder="<?= __('name') ?>" /></div>
                        <div class="inline_input" onclick="openMenu('#countriesList')">
                                <img src="img/png100px/tr.png" title="Turkey" alt="TR" id="countryImg"/>
                                <input type="tel" name="zip" id="zip" value="---"/>
                        </div>
                        <div><input type="tel" maxlength="11" class="padding_left100px" onfocus="openMenu('#countriesList','#form_mdl #zip')" onblur="chk(this, 'isPhone')" name="phone" id="phone" placeholder="<?= __('phone') ?>" /></div>
                        <div><input type="email" onblur="chk(this, 'isEmail')" name="email" id="email" placeholder="<?= __('email') ?>" /></div>
                        <div><button class="butn butn-red"><?=__('reach_out')?></button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 side_2 order-md-12 order-0">
                <h3><?= __('we_make_owning_property_easy') ?></h3>
                <p><?= __('we_make_owning_property_easy_p') ?></p>
            </div>
        </div>
    </section>

    <?php // Footer
    ?>
    <footer class="container-fluid footer" id="footer">
        <div class="row">
            <div class="col-12">
                <?=__('copyrights')?>
            </div>
        </div>
        <div class="hideIt">
        </div>
    </footer>

    <?php // Coutnries list ?>
    <div class="countriesList" onclick="closeMenu(this)" id="countriesList">
        <ul></ul>
    </div>

    <?php include_once('form_mdl.php'); ?>
    <?php include_once('message_mdl.php'); ?>

    <script type="text/javascript" src="js/all.js"></script>

    <script>
        $(document).ready(function() {
            getCountries();
            const COUNTRY = JSON.parse( '<?=getCountryByIP(false, 'json')?>' );
            setTimeout(() => {
               setVal(COUNTRY.calling_code+'|'+COUNTRY.country_code2.toLowerCase(), 'all'); 
            }, 2000);

                if($( window ).width() > 576){
                    $( "#hero-banner .carousel-item .div_img" ).css('height', $( window ).height()-180);
                }else{
                    $( "#hero-banner .carousel-item .div_img" ).css('height', 200);
                }
                
                if($( window ).width() < 992){
                    $( "#trustpilot .carousel-inner" ).removeClass('row');
                    $( "#trustpilot .carousel-inner > div" ).addClass('carousel-item');
                }else{
                    $( "#trustpilot .carousel-inner" ).addClass('row');
                    $( "#trustpilot .carousel-inner > div" ).removeClass('carousel-item');
                }

            $( window ).resize(function() {
                
                if($( window ).width() > 576){
                    $( "#hero-banner .carousel-item .div_img" ).css('height', $( window ).height()-180);
                }else{
                    $( "#hero-banner .carousel-item .div_img" ).css('height', 200);
                }
                if($( window ).width() < 992){
                    $( "#trustpilot .carousel-inner" ).removeClass('row');
                    $( "#trustpilot .carousel-inner > div" ).addClass('carousel-item');
                }else{
                    $( "#trustpilot .carousel-inner" ).addClass('row');
                    $( "#trustpilot .carousel-inner > div" ).removeClass('carousel-item');
                }

            });

            // $("#trustpilot").swiperight(function() {
            //     $(this).carousel('prev');
            //     });
            // $("#trustpilot").swipeleft(function() {
            //     $(this).carousel('next');
            // });
        })
        
        var ptrn = [];
        ptrn['isEmail'] = /^[a-zA-Z]+[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z.]{2,7}$/;
        ptrn['isNumber'] = /^[0-9]$/;
        ptrn['isInteger'] = /^[\s\d]$/;
        ptrn['isFloat'] = /^[0-9]?\d+(\.\d+)?$/;
        ptrn['isVersion'] = /^(?:(\d+)\.)?(?:(\d+)\.)?(\*|\d+)$/
        ptrn['isPassword'] = /^[A-Za-z0-9@#$%^&*()!_-]{4,32}$/;
        ptrn['isParagraph'] = /^[^()]{40,255}$/;
        ptrn['isEmpty'] = /^[^()]{3,255}$/; ///^((?!undefined).){3,255}$/;
        ptrn['isSelectEmpty'] = /^[^()]{1,255}$/;
        ptrn['isZipcode'] = /^\+[0-9]{1,4}$/;
        ptrn['isPhone'] = /^[\s\d]{9,11}$/;
        ptrn['setNumber'] = /^[^\d|\-+|\.+]$/;

        var errorMsg = [];
        errorMsg['isEmail'] = '<?= __('is-email-msg') ?>';
        errorMsg['isNumber'] = '<?= __('is-number-msg') ?>';
        errorMsg['isInteger'] = '<?= __('is-integer-msg') ?>';
        errorMsg['isFloat'] = '<?= __('is-flaot-msg') ?>';
        errorMsg['isVersion'] = '<?= __('is-version-msg') ?>';
        errorMsg['isPassword'] = '<?= __('is-password-msg') ?>'; //Only Alphabet, Numbers and symboles @ # $ % ^ & * ( ) ! _ - allowed;
        errorMsg['isParagraph'] = '<?= __('is-paragraph-msg') ?>'; //Paragraph should be between 40 and 255 character;
        errorMsg['isEmpty'] = '<?= __('is-empty-msg') ?>';
        errorMsg['isSelectEmpty'] = '<?= __('is-selected-empty-msg') ?>';
        errorMsg['isZipcode'] = '<?= __('is-zipcode-msg') ?>';
        errorMsg['isPhone'] = '<?= __('is-phone-msg') ?>';
        errorMsg['setNumber'] = '<?= __('is-number-msg') ?>';

        var data = {
            'btn': '<?= __('inquire') ?>',
            'imgClass': 'inquire_bg'
        };

        var datas = {
            'scheduale': {
                'btn': '<?= __('scheduale') ?>',
                'ttl': '<?= __('scheduale_header') ?>'
            },
            'inquire': {
                'btn': '<?= __('inquire') ?>',
                'ttl': '<?= __('inquire_header') ?>'
            },
        };

        var isOpenedModal = false;
        function openModal(tar, dt_tar) {
            clearMessage()
            data = datas[dt_tar];
            console.log('datatatata', data)
            if (tar == '#sendLead_mdl') {
                changeValue('#mdl_btn', data.btn);
                changeValue('#mdl_header_title', data.ttl, 'ttl');
            }
            $(tar || '#sendLead_mdl').modal('show');
            isOpenedModal = true;
        }

        function closeModal(tar) {
            $(tar || '#sendLead_mdl').modal('hide')
            isOpenedModal = false;
        }

        function openMenu(tar, isZip) {
            if (isZip) {
                if ($(isZip).val().length > 1 && $(isZip).val() !== '---') {
                    return;
                }
            }
            $(tar || '.links_side').addClass('show');
        }

        function closeMenu(tar) {
            $(tar || '.links_side').removeClass('show');
        }

        function changeValue(tar, val, type) {
            if (type == 'cls') {
                $(tar).removeClass()
                $(tar).addClass('modal-header ' + val)
            } else {
                $(tar).html(val)
            }
        }

        function toElm(tar, e) {
            closeMenu()
            var elm = document.getElementById(tar.substr(1));
            const y = (elm.getBoundingClientRect().top - 75) + window.scrollY;
            window.scroll({
                top: y,
                behavior: 'smooth'
            });
        }

        function setVal(val, tar) {
            !val ? val = COUNTRY.calling_code+'|'+COUNTRY.country_code2 : val;
            console.log('val', val, tar);
            val = val.split('|');
            if(tar=='all'){
                $('#form_mdl #zip').val(val[0]);
                $('#form_mdl #countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
                $('#zip').val(val[0]);
                $('#countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
            }else{
                $(tar || isOpenedModal ? '#form_mdl #zip' : '#zip').val(val[0]);
                $(tar || isOpenedModal ? '#form_mdl #countryImg' : '#countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
                $(tar || isOpenedModal ? '#form_mdl #phone' : '#phone').focus();
            }
        }
        
        function getCountries(tar) {
            $.getJSON("js/countries.json", function(res) {
                var html = '';
                for (var i in res) {
                    html += '<li onclick="setVal(\'' + res[i].val + '|' + res[i].code + '\')"><img src="img/png100px/' + ('bq,cw,gg,im,je,xk,bl,mf,sx,ss'.indexOf(res[i].code) > -1 ? 'noimg' : res[i].code) + '.png" title="' + res[i].cname + '" alt="' + res[i].cname + '" /> ' + res[i].cname + '</li>'
                }
                $(tar || '#countriesList ul').html(html)
            }).fail(function() {
                console.log("ERROR: countriesList not loaded!.");
            });
        }

        function doSend(e, form) {
            e.preventDefault();

            !form ? form = '#form' : form;

            var isValid = chk(false, {
                'name': 'isEmpty',
                'email': 'isEmail',
                'phone': 'isPhone',
                'zip': 'isZipcode'
            }, form);
            if (isValid) {
                _setCvrBtn(form, 1);
                $.ajax({
                        url: 'send.php',
                        method: "POST",
                        data: {
                            first_name: $(form + ' #name').val(),
                            last_name: $(form + ' #name').val(),
                            email: $(form + ' #email').val().toLowerCase(),
                            phone: $(form + ' #zip').val() + ' ' + $(form + ' #phone').val(),
                            id: 1,
                        },
                    })
                    .done(function(res) {
                        _setCvrBtn(form, 0);
                        var response = JSON.parse(res)
                        if (response.status == 1) {
                            closeModal('#sendLead_mdl');

                            $(form + ' #name').val('');
                            $(form + ' #email').val('');
                            $(form + ' #phone').val('');
                            $(form + ' #zip').val('');

                            setTimeout(() => {
                                openModal('#message_mdl', 'message');
                            }, 1000);

                            setTimeout(() => {
                                window.location.href = '<?=__('form_link')?>';
                            }, 2000)
                        } else {
                            alert('<?= __('sent-fail') ?>');
                        }
                    })
                    .fail(function(err) {
                        _setCvrBtn(form, 0);
                        console.log("error " + err);
                    })
            }
        }

        function _setError(elm, msg, clr) {

            !msg ? msg = "" : msg;
            !clr ? clr = false : clr;

            var tar = $(elm).parent();
            if (elm.type == "checkbox") {
                tar = $(elm).parent().parent().parent()
            }
            if ($('.error-message', tar).html() == undefined) {
                $(tar).append('<div class="error-message"></div>');
            }
            $('.error-message', tar).text(msg)
        }

        function _getErrors(obj, form_name) {
            (form_name[0] == '#' || form_name[0] == '.') ? form_name: form_name = '#' + form_name;
            $(".error-message").text('');
            for (var prop in obj) {
                var value = obj[prop];
                if (typeof obj[prop] !== 'object') {
                    continue;
                }
                var arr = $.map(value, function(val, index) {
                    return [val];
                });
                var elm = $(form_name + ' [name="' + prop + '"]');
                if (Array.isArray(elm)) {
                    _setError($(form_name + ' [name="' + prop + '"]')[0], arr[0])
                } else {
                    _setError($(form_name + ' [name="' + prop + '"]'), arr[0])
                }
            }
        }

        function _setCvrBtn(tar, param) {
            var elm = $(tar + " button");
            if (param == 1) {
                elm.addClass('loader');
                $(tar).attr("disabled", true);
            } else {
                elm.removeClass('loader');
                $(tar).attr("disabled", false);
            }
        }

        function chk(e, tar, form) {
            var isError = '';
            if (typeof tar === 'object') {
                for (var key in tar) {
                    var elm = $(form + ' #' + key);
                    if (ptrn[tar[key]].test($(elm).val())) {
                        _setError(elm, '', true);
                    } else {
                        _setError(elm, errorMsg[tar[key]]);
                        isError += tar[key]
                    }
                }
            } else {
                if (ptrn[tar].test(e.value)) {
                    _setError(e, '', true);
                } else {
                    _setError(e, errorMsg[tar]);
                    isError += tar
                }
            }
            return isError.length > 0 ? false : true;
        }

        function clearMessage(tar) {
            $(tar || '.error-message').html('')
        }
        
        $('#sendLead_mdl').on('hidden.bs.modal', function () {
            isOpenedModal = false;
        });
        
    </script>
</body>

</html>