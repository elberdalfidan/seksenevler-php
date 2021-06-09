$(document).ready(function() {
    $('#uyeler-table').DataTable();
});
$(".member-edit-button").on("click",function (){
    $("#memberEditModal").modal("show");
    var memberId = $(this).attr("data");
    console.log(memberId);
    $.ajax({
        url: "controller/member-controller/edit-member-list-controller.php",
        type:"POST",
        data: {id:memberId},
        cache:false,
        success:function (dataResult){
            var dataResult = JSOM.parse(dataResult);
            console.log(dataResult);    
        }
    })
})
$("#close-modal").on("click",function (){
    $("#memberEditModal").modal("hide");

})
