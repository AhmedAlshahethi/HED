$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "هل انت متاكد من الحذف؟",
            text: "بالنقر على نعم سيتم الحذف مباشرة",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "لا، إلغاء",
            confirmButtonText: "نعم، احذف!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("تم الحذف!", "تم حذف العنصر بنجاح", "success");
            }
        });
    });
});
