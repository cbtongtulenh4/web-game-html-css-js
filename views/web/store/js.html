
 <script type="text/javascript">
        $(".banner").slide({ mainCell: ".msgcont ul",effect: "leftLoop", interTime: 3000,autoPlay: true, vis: 1,scroll: 1});
        var productList;
        var ProductList = function () {

        }
        ProductList.prototype.Paysafecard = [];
        ProductList.prototype.GetProductList = function () {
            var url = "Interface/ProcessHandler.ashx?action=GetProductList&r=" + new Date().getTime();
            $.ajax({
                "type": "POST",
                "url": url,
                "data": {},
                "success": function (result) {
                    try {
                        if (result != "") {
                            result = JSON.parse(result);
                            if (result.RetCode == 100) {
                                var pro = JSON.parse(result.ProductList);
                                var tpl;
                                tpl = $('#Ttable1').html();
                                laytpl(tpl).render(pro, function (html) {
                                    $('#productlist').html(html);
                                    $('.card-list').each(function () { $(this).find('li').eq(0).addClass('on'); });
                                    $('.card-list li').on('click', function () {
                                        $(this).parent('.card-list').find('li').removeClass('on');
                                        $(this).addClass('on');
                                        $('#bsummary').text($(this).children("a:first").attr('data-des'));
                                        $('#bcurrency').text($(this).children("a:first").attr('data-cur'));
                                        $('#bprice').text($(this).children("a:first").attr('data-price'));
                                    })
                                });
                                if (pro.length > 0) {
                                    $('#bsummary').text(pro[0].ProductDesc);
                                    $('#bcurrency').text(pro[0].Currency);
                                    $('#bprice').text(pro[0].ProductPrice);
                                }
                            }
                            else {
                                alert(result.RetMsg);
                            }
                        }
                    } catch (e) {
                        alert(e);
                    }
                }
            });
        }
        ProductList.prototype.InitPaysafecard = function () {
            var url = "Interface/ProcessHandler.ashx?action=InitPaysafecard&r=" + new Date().getTime();
            $.ajax({
                "type": "POST",
                "url": url,
                "data": {},
                "success": function (result) {
                    try {
                        if (result != "") {
                            productList.Paysafecard = JSON.parse(result);
                        }
                        else {
                            alert('Init Paysafecard Config Error');
                        }
                    } catch (e) {
                        alert(e);
                    }
                }
            });
        }
        ProductList.prototype.LoadYhServer = function () {
            var url = "Interface/ProcessHandler.ashx?action=LoadYhServer&r=" + new Date().getTime();
            $.ajax({
                "type": "POST",
                "url": url,
                "data": {},
                "success": function (result) {
                    try {
                        result = JSON.parse(result);
                        if (result.Status == 1) {
                            var tpl;
                            tpl = $('#ServerTable').html(); 
                            laytpl(tpl).render(result.Data.iosserver, function (html) {
                                $('#server2').html(html);
                            });
                            laytpl(tpl).render(result.Data.Androidserver, function (html) {
                                $('#server1').html(html);
                            });
                            $('.cm-list').each(function () { $(this).find('li').eq(0).addClass('on'); })
                            $('.cm-list li').on('click', function () {
                                $(this).parent('.cm-list').find('li').removeClass('on');
                                $(this).addClass('on');
                            })
                        }
                        else {
                            alert(result.Message);
                        }
                    } catch (e) {
                        alert(e);
                    }
                }
            });
        }
        ProductList.prototype.ConfirmOrder = function (serverid) {
            var playerid = fomartplayerid($('#playerid').val());
            var channel = $('#bpayment').text();
            if (channel == "boleto")
                channel = "dlocal";
            var productid = $('#productlist').children('li.on:first').children('a:first').attr('data-id');
            var email = $('#playeremail').val();
            var para = { serverid: serverid, playerid: playerid, channel: channel, productid: productid, email: email };
            if (channel == "dlocal") {
                para.country = $('#seldcountry').val();
                para.bank = $('#selbank').val();
                para.name = $('#dlocalname').val();
                para.cpf = $('#dlocalCPF').val();
            }
            if (channel == "codapay") {
                para.country = $('#selcountry').val();
                para.paymentway = $('#selpaymentway').val();
            }

            var url = "Interface/ProcessHandler.ashx?action=submitOrder&r=" + new Date().getTime();
            $.ajax({
                "type": "POST",
                "url": url,
                "data": para,
                "success": function (result) {
                    try {
                        result = JSON.parse(result);
                        if (result.Status == 100) {
                            window.open(result.Data).focus();
                        }
                        else {
                            alert(result.Message);
                        }
                    } catch (e) {
                        alert(e);
                    }
                }
            });

        }
        function selcountrychange() {
            if (productList.Paysafecard.length == 0) {
                productList.InitPaysafecard();
            }
            $("#selpaymentway").empty();
            var curCountry = $('#selcountry').val();
            for (var i = 0; i < productList.Paysafecard.length; i++) {
                if (productList.Paysafecard[i].Country == curCountry) {
                    $("#selpaymentway").append("<option value='" + productList.Paysafecard[i].PayTypeCode + "'>" + productList.Paysafecard[i].PayTypeName + "</option>");
                }
            }
        }

        function fomartplayerid(val) {
            var firstindex = val.indexOf('/');
            if (firstindex != -1)
            {
                return val.substring(0, firstindex);
            }
            return val;
        }
        function seldcountrychange() {
            var url = "Interface/ProcessHandler.ashx?action=GetBankCode&r=" + new Date().getTime() + "&country=" + $("#seldcountry").val();
            $.ajax({
                "type": "POST",
                "url": url,
                "data": {},
                "success": function (result) {
                    try {
                        if (result != "") {
                            $("#selbank").empty();
                            var banklist = JSON.parse(result);
                            for (var i = 0; i < banklist.length; i++) {
                                if ($('li[data-id="boleto"]').hasClass('on')) {
                                    if (banklist[i].bankcode == 'BL') {
                                        $("#selbank").append("<option value='" + banklist[i].bankcode + "' selected>" + banklist[i].bankname + "</option>");
                                    }
                                    else {
                                        $("#selbank").append("<option value='" + banklist[i].bankcode + "'>" + banklist[i].bankname + "</option>");
                                    }
                                }
                                else {
                                    $("#selbank").append("<option value='" + banklist[i].bankcode + "'>" + banklist[i].bankname + "</option>");
                                }
                            }

                        }
                        else {
                            alert('Init Bank Config Error');
                        }
                    } catch (e) {
                        alert(e);
                    }
                }
            });
        }
        $(function () {
            $('.method-list').each(function () { $(this).find('li').eq(0).addClass('on'); })

            $('#dlocalCPF').focus(function () {
                $('.dlocalhint').show();
            }).blur(function () {
                $('.dlocalhint').hide();
            })


            $('.method-list li').on('click', function () {
                $(this).parent('.method-list').find('li').removeClass('on');
                $(this).addClass('on');
                if ($(this).attr('data-id') == "codapay") {
                    $('.moreinfo').hide();
                    $('#codapaydiv').show();
                    $('#dlocaldiv').hide();
                    selcountrychange();
                }
                else if ($(this).attr('data-id') == "dlocal") {
                    $('.moreinfo').hide();
                    $('#seldcountry option').eq(0).attr('selected', true);
                    $('#seldcountry').attr('disabled', false);
                    $('#selbank').attr('disabled', false);
                    $('.idtxt').html('Input ID:');
                    $('.dlocalhint').attr('src', 'images/he-dlocal.png')
                    $('#dlocaldiv').show();
                    seldcountrychange();
                }
                else if ($(this).attr('data-id') == "boleto") {
                    $('.moreinfo').hide();
                    $('#seldcountry option[value="BR"]').attr('selected', true);
                    $('#seldcountry').attr('disabled', true);
                    $('#selbank').attr('disabled', true);
                    $('.idtxt').html('Input CPF or CNPJ:');
                    $('.dlocalhint').attr('src', 'images/he-boleto.png')
                    $('#dlocaldiv').show();
                    seldcountrychange();
                }

                else {
                    $('#codapaydiv').hide();
                    $('#dlocaldiv').hide();
                    $('.moreinfo').hide();
                }
                $('#bpayment').text($(this).attr('data-id'));
            })



            $('.method-list li').hover(function () {
                var method = $(this).attr('data-id');
                var area = '';
                if (method == 'razer' || method == 'paypal' || method == 'skrill' || method == 'adyen' || method == 'hitpoints' || method == 'paymentwall') {
                    area = 'Global';
                }
                else if (method == 'codapay' || method == 'MGC') {
                    area = 'Southeast Asia';
                }
                else if (method == 'paysafecard' ) {
                    area = 'Europe';
                }
                else if (method == 'dlocal') {
                    area = 'South America';
                }
                else if (method == 'boleto') {
                    area = 'Brasil';
                }

                $(this).append('<div class="support">' + area + '</div>');

            }, function () {
                $('.support').remove();
            })

            $('.question').hover(function () {
                $('.idpic').show();
            }, function () {
                $('.idpic').hide();
            })

            $('#serverlist li').on('click', function () {
                var sid = $(this).attr('data-id');
                $('#serverlist li').removeClass('on');
                $(this).addClass('on');
                $('#server1, #server2').hide();
                $('#server' + sid).show();
            })

            $('.popbox a.close').on('click', function () {
                $(this).parents('.popbox').hide();
            })

            $('.confirm a').on('click', function () {
                if ($.trim($('#playerid').val()) == "") {
                    alert("Player ID Not Null!");
                    return;
                }
                if ($.trim($('#playeremail').val()) == "") {
                    alert("Email Address Not Null!");
                    return;
                }
                var e = /^([a-z.A-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
                if (!(e.test($('#playeremail').val()))) {
                    alert("Email Type Error!");
                    return;
                }

                //$('#payui').empty();
                $('#payui li span').html('');

                if ($('#bpayment').text() == "dlocal") {
                    if ($.trim($('#dlocalname').val()) == "") {
                        alert("dlocal Name Not Null!");
                        return;
                    }
                    if ($.trim($('#dlocalCPF').val()) == "") {
                        alert("dlocal CPF Not Null!");
                        return;
                    }
                }
                var serverlistid = $('#serverlist').children('li.on:first').attr('data-id');
                var serverid = $('#server' + serverlistid).children('li.on:first').children('a:first').attr('data-id');
                var url = "Interface/ProcessHandler.ashx?action=CheckPlayerName&r=" + new Date().getTime();                
                var param = { playerid: fomartplayerid($('#playerid').val()), serverid: serverid }


                $('#loading').show();

                $.ajax({
                    "type": "POST",
                    "url": url,
                    "data": param,
                    "success": function (result) {
                        try {
                            if (result != "") {

                                /*$('#payui').html("");
                                var server = "<li><label>Server:</label><span>" + $('#server' + serverlistid).children('li.on:first').children('a:first').text() + "</span></li>";
                                var playname = "<li><label>Player Name:</label><span>" + result + "</span></li>";
                                var playid = "<li><label>Player ID:</label><span>" + $('#playerid').val() + "</span></li>";
                                var email = "<li><label>Email Address:</label><span>" + $('#playeremail').val() + "</span></li>";
                                var product = "<li><label>Product:</label><span>" + $('#productlist').children('li.on:first').children('a:first').attr('data-name') + "</span></li>";
                                var payment = "<li><label>Payment Method:</label><span>" + $('#bpayment').text() + "</span></li>";
                                var price = " <li><label>Price:</label><span>" + $('#bprice').text() + "</span></li>";
                                $('#payui').html("");
                                $('#payui').append(server, playname, playid, email, product, payment, price);
                                if ($('#bpayment').text() == "codapay") {
                                    var Country = "<li><label>Country:</label><span>" + $('#selcountry').find("option:selected").text() + "</span></li>";
                                    var paymentway = "<li><label>payment way:</label><span>" + $('#selpaymentway').find("option:selected").text() + "</span></li>";
                                    $('#payui').append(Country, paymentway);
                                }
                                if ($('#bpayment').text() == "dlocal") {
                                    var Country = "<li><label>Country:</label><span>" + $('#seldcountry').find("option:selected").text() + "</span></li>";
                                    var Bank = "<li><label>Bank:</label><span>" + $('#selbank').find("option:selected").text() + "</span></li>";
                                    var Name = "<li><label>Name:</label><span>" + $('#dlocalname').val() + "</span></li>";
                                    var CPF = "<li><label>CPF:</label><span>" + $('#dlocalCPF').val() + "</span></li>";
                                    $('#payui').append(Country, Bank, Name, CPF);
                                }*/


                                $('#payui li span').html("");
                                $('.codainfo').hide();
                                $('.dlocalinfo').hide();

                                var server = $('#server' + serverlistid).children('li.on:first').children('a:first').text();
                                var playname = result;
                                var playid = fomartplayerid($('#playerid').val());
                                var email = $('#playeremail').val();
                                var product = $('#productlist').children('li.on:first').children('a:first').attr('data-name');
                                var payment = $('#bpayment').text();
                                var price = $('#bprice').text();

                                $('#payuiServer').html(server);
                                $('#payuiName').html(playname);
                                $('#payuiID').html(playid);
                                $('#payuiEmail').html(email);
                                $('#payuiProduct').html(product);
                                $('#payuiMethod').html(payment);
                                $('#payuiPrice').html(price);


                                if ($('#bpayment').text() == "codapay") {
                                    var Country = $('#selcountry').find("option:selected").text();
                                    var paymentway = $('#selpaymentway').find("option:selected").text();

                                    $('#payuiCodaCountry').html(Country);
                                    $('#payuiCodaWay').html(paymentway);

                                    $('.codainfo').show();

                                }

                                if ($('#bpayment').text() == "dlocal") {
                                    var Country = $('#seldcountry').find("option:selected").text();
                                    var Bank = $('#selbank').find("option:selected").text();
                                    var Name = $('#dlocalname').val();
                                    var CPF = $('#dlocalCPF').val();

                                    $('#payuiDlocalCountry').html(Country);
                                    $('#payuiDlocalBank').html(Bank);
                                    $('#payuiDlocalName').html(Name);
                                    $('#payuiDlocalCPF').html(CPF);

                                    $('.dlocalinfo').show();
                                }



                                $('#payconfirm a.cbtn:last').on('click', function () {
                                    $(this).parents('.popbox').hide();
                                });

                                $('#payconfirm a.cbtn:first').off("click");
                                $('#payconfirm a.cbtn:first').on('click', function () {
                                    $('#payconfirm a.cbtn:first').off("click");
                                    $('#payconfirm a.cbtn:first').on('click', function () {
                                        alert("don't submit repeat!");
                                        event.preventDefault();
                                    });
                                    productList.ConfirmOrder(serverid);
                                });

                                $('#loading').hide();
                                $('#payconfirm').show();

                            }
                            else {
                                $('#loading').hide();
                                $('#payconfirm').hide();
                                alert('CheckPlayerName Error');
                            }
                        } catch (e) {
                            $('#loading').hide();
                            alert(e);
                        }
                    }
                });
            });

            productList = new ProductList();
            productList.InitPaysafecard();
            productList.GetProductList();
            productList.LoadYhServer();
        })

        function errorMsg(msg, type) {
            $('#msg').html(msg)
            $('#popmsg').show();
            $('#popmsg a.close, #popmsg a.cbtn').on('click', function () {
                $(this).parents('.popbox').hide();
                if (type == 0) {
                    $('.scroll1, .scroll2').find('input').parent().removeClass('error');
                }
                else {
                    $('html,body').stop().animate({ scrollTop: $(".scroll" + type).offset().top + "px" }, 800);
                    $('.scroll1, .scroll2').find('input').parent().removeClass('error');
                    $('.scroll' + type).find('input').parent().addClass('error');
                }
            })
        }

    </script>
