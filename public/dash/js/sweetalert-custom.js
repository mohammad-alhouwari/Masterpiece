  function confirmAndSubmit(Id) {
            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'هل أنت متأكد؟',
                icon: 'warning',
                //                 backdrop: `
            //     rgba(200,108,0,0.4)
            //     url("https://media2.giphy.com/media/dPH0lpbbrT4mMv9wer/giphy.gif?cid=9a52f974135hjeqv4ilelzxbcb98mivcddcidqv1mmfi5z8h&rid=giphy.gif&ct=s&t=1648218345000")
            //     url("https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExMXBscWs1MnB1ZWlpdXN5N3Z4enozbDJicjJ4MmU2dWxpZGhlb2xvaSZlcD12MV9naWZzX3NlYXJjaCZjdD1z/TRub2cQyyLihIu0Ufa/giphy.gif")
            //     right top
            //     no-repeat
            //   `,
                showCancelButton: true,
                confirmButtonText: 'نعم، حذف',
                cancelButtonText: 'إلغاء',
                reverseButtons: true

            }).then((result) => {
                if (result.isConfirmed) {
                    var formId = 'deleteForm' + Id;
                    $('#' + formId).submit();
                }
            });
        }