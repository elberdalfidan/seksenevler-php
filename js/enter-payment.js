$(document).ready(function (){
    var table = $("#uyeler-table").DataTable({
        "ajax":
            {
                "url": "controller/enter-payment-controller/enter-payment-controller.php",
                "dataSrc": "",
                "type": "GET",

            },
        "columns": [
            {"data": "ad"},
            {"data": "soyad"},
            {"data": "kapi_no"},
            {"data": "eski_borc",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='eski-borc"+oData.uye_id+"' value='"+oData.eski_borc+"'>");
                }
            },
            {"data": "birinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='birinci-odeme"+oData.uye_id+"' value='"+oData.birinci_odeme+"'>");
                }
            },
            {"data": "ikinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='ikinci-odeme"+oData.uye_id+"' value='"+oData.ikinci_odeme+"'>");
                }
            },
            {"data": "ucuncu_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='ucuncu-odeme"+oData.uye_id+"' value='"+oData.ucuncu_odeme+"'>");
                }
            },
            {"data": "dorduncu_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='dorduncu-odeme"+oData.uye_id+"' value='"+oData.dorduncu_odeme+"'>");
                }
            },
            {"data": "besinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='besinci-odeme"+oData.uye_id+"' value='"+oData.besinci_odeme+"'>");
                }
            },
            {"data": "altinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='altinci-odeme"+oData.uye_id+"' value='"+oData.altinci_odeme+"'>");
                }
            },
            {"data": "yedinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='yedinci-odeme"+oData.uye_id+"' value='"+oData.yedinci_odeme+"'>");
                }
            },
            {"data": "sekizinci_odeme",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<input type='text' class='form-control' id='sekizinci-odeme"+oData.uye_id+"' value='"+oData.sekizinci_odeme+"'>");
                }
            },
            {"data": "odenen"},
            {"data": "kalan_borc"},
            {"data": "uye_id",
                "fnCreatedCell":function (nTd, sData, oData){
                    $(nTd).html("<button class='btn btn-outline-primary paymentEnterButton"+oData.uye_id+"' data='"+oData.id+"'>Kaydet</button>");
                    $("#uyeler-table tbody").on('click', '.paymentEnterButton' + oData.uye_id, function (){
                        var birinciOdeme = $("#birinci-odeme"+oData.uye_id).val();
                        var ikinciOdeme = $("#ikinci-odeme"+oData.uye_id).val();
                        var ucuncuOdeme = $("#ucuncu-odeme"+oData.uye_id).val();
                        var dorduncuOdeme = $("#dorduncu-odeme"+oData.uye_id).val();
                        var besinciOdeme = $("#besinci-odeme"+oData.uye_id).val();
                        var altinciOdeme = $("#altinci-odeme"+oData.uye_id).val();
                        var yedinciOdeme = $("#yedinci-odeme"+oData.uye_id).val();
                        var sekizinciOdeme = $("#sekizinci-odeme"+oData.uye_id).val();
                        var eski_borc = $("#eski-borc"+oData.uye_id).val();
                        var odenen = (birinciOdeme + ikinciOdeme + ucuncuOdeme + dorduncuOdeme + besinciOdeme + altinciOdeme + yedinciOdeme + sekizinciOdeme);
                        var kalan_borc = (3000 + eski_borc) - odenen;
                        if(birinciOdeme!="" && ikinciOdeme!="" && ucuncuOdeme!="" && dorduncuOdeme!="" && besinciOdeme!="" && altinciOdeme!="" && yedinciOdeme!="" && sekizinciOdeme!="" && eski_borc!=""){
                            $.ajax({
                                url: "controller/enter-payment-controller/enter-payment-list-controller.php",
                                type: "POST",
                                data: {
                                    birinciOdeme:birinciOdeme,
                                    ikinciOdeme:ikinciOdeme,
                                    ucuncuOdeme:ucuncuOdeme,
                                    dorduncuOdeme:dorduncuOdeme,
                                    besinciOdeme:besinciOdeme,
                                    altinciOdeme:altinciOdeme,
                                    yedinciOdeme:yedinciOdeme,
                                    sekizinciOdeme:sekizinciOdeme,
                                    eski_borc:eski_borc,
                                    odenen:odenen,
                                    kalan_borc:kalan_borc,
                                    id:oData.uye_id
                                },
                                cache:false,
                                success: function (dataResult){
                                    var dataResult = JSON.parse(dataResult);
                                    if(dataResult.statusCode==200){
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Ödeme Başarıyla Girildi',
                                            showConfirmButton: false,
                                            timer: 1500
                                        }).then(function (){
                                            location.reload();
                                        })
                                    }
                                    else if(dataResult.statusCode==201){
                                        Swal.fire({
                                            title: 'Hata!',
                                            html: 'Bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyiniz.!',
                                            icon: 'error',
                                            confirmButtonText: 'Tamam',
                                            showCancelButton: true,
                                            showCloseButton: true
                                        })
                                    }
                                }
                            })

                        }else{
                            Swal.fire({
                                title: 'Hata!',
                                html: 'Boş Ödeme Giremezsiniz.!',
                                icon: 'error',
                                confirmButtonText: 'Tamam',
                                showCancelButton: true,
                                showCloseButton: true
                            })
                        }
                    })
                }
            }
        ],
        "createdRow": function (row, data, dataIndex){
            console.log(data);
            if(data[6] >= 3000){
                $(row).css('background-color','red');
            }
        }
    })
})
