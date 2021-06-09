$('#add-member-button').on('click',function (){
    $(this).attr("disabled","disabled");
    var memberName = $("#ad").val();
    var memberSurname = $("#soyad").val();
    var memberTc = $("#tc").val();
    var memberPhone = $("#tel").val();
    var memberAddress = $("#adres").val();
    var memberDoorNumber = $("#kapi-no").val();
    if(memberName!="" && memberSurname!="" && memberTc!="" && memberPhone!="" && memberAddress!="" && memberDoorNumber!=""){
        $.ajax({
            url: "../../seksenevler-php/controller/member-controller/member-add-controller.php",
            type: "POST",
            data: {
                memberName: memberName,
                memberSurname: memberSurname,
                memberTc: memberTc,
                memberPhone: memberPhone,
                memberAddress: memberAddress,
                memberDoorNumber: memberDoorNumber
            },
            cache: false,
            success: function (dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    Swal.fire({
                        icon: 'success',
                        title: 'Üye Başarıyla Eklendi',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function (){
                        location.reload();
                    })
                }
                else if(dataResult.statusCode==201){
                    Swal.fire({
                        title: 'HATA!',
                        html: 'Bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyiniz.!',
                        icon: 'error',
                        confirmButtonText: 'Tamam',
                        showCancelButton: true,
                        showCloseButton: true
                    })
                }
            }
        });
    }else{
        alert("Tüm alanları doldurun");
    }
});
