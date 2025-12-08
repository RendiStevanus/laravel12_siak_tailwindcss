<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('show-confirm-delete', () => {
        const payload = event.detail[0];

        const title = payload.title;
        const text = payload.text;
        Swal.fire({
            title: title ? title : "Are you sure?",
            text: text ? text : "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('deleteConfirmed');
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary data is safe :)",
                    icon: "error"
                });
            }
        });
    })

    window.addEventListener('swal-toast', (event) => {
        const payload = event.detail[0];

        const type = payload.icon;
        const message = payload.message;
        console.log(payload);

        Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        }).fire({
            icon: type,
            title: message
        });
    });
</script>
