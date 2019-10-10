// function myFunction1() {
//   Swal.fire({
//     title: 'هل انت متاكد من هذا الاجراء ',
//     text:'سيتم مسح هذه البيانات بشكل نهائي',
//     type: 'warning',
//     showCancelButton: true,
//     cancelButtonColor: '#3085d6',
//     confirmButtonText: 'إلغاء ',
//      confirmButtonColor: '#d33',
//     cancelButtonText: 'موافق '
//   }).then((result) => {
//     if (result.value) {
//       $.ajax({
//         url: "/delete.php",
//         data: {user_id},
//         type: 'POST'
//       })
//       Swal.fire(
//         'تمت عملية المسح',
//         'تم حذف ملفك.',
//         'نجاح الامر '
//       )
//     }
//   })
// }
$(document.ready(function () {
  $(".delrequest").click(function () {
    var thId = $(".delrequest").data("user_ID");
    Swal({
      title: ' هل أنت متأكد ؟',
      text: " لن تتمكن من استعادة هذا السجل ان قمت بالموافقة",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: ' أجل , قم بالمسح !',
      cancelButtonText: '  إغلاق '
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "delete.php",
          data: { user_ID: thId },
          type: 'POST'
        })
          .done(function (data) {
            ths.parent("td").parent("tr").fadeOut(600, function () {
              ths.remove();
              Swal(' تم المسح !', ' تم مسح السجل الذي قمت بإحتياره بنجاح', 'success');
            });
          })
          .fail(function (data) {
            alert("error");
          });
      }
    });
  });
}));
