// $(document).on("click",".delevent",function(){
//     var id =$(this).attr("id");
//     alert(id);
//     $.ajax({

//         type:'post',
//         url:'/em/del',
//         data:{id:id},

//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },

        
//         success:function(resp){

//         }
//         ,error:function()
//         {
//             alert("error");
//         }
//     })
// })




// $(document).on("click", ".delevent", function () {
//     var id = $(this).attr("id");
//     alert(id);
//     $.ajax({
//         type: 'post',
//         url: '/em/del',
//         data: { id: id },
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function (resp) {
//             // Handle the response
//         },
//         error: function () {
//             alert("error");
//         }
//     });
// });


$(document).on("click", ".delevent", function () {
    var id = $(this).attr("id"); // Get the event ID from the data-id attribute
    alert(id);
    if (confirm("Are you sure you want to delete this event?")) {
        $.ajax({
            type: 'DELETE',
            url: '/em/del',
            data: { id: id },
             // Adjust the URL according to your route
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (resp) {
                // Handle the response, e.g., display a success message
                alert(resp.message);
            },
            error: function () {
                alert("Error");
            }
        });
    }
});

