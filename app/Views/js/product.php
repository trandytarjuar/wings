<script>
    
    function addproduct() {
        var baseurl = "<?= base_url() ?>"
        var productname = $("#productname").val()
        var price = $("#price").val()
        var currency = $("#currency").val()
        var discount = $("#discount").val()
        var dimension = $("#dimension").val()
        var unit = $("#unit").val()
        // alert(unit)
        let data = new FormData()
        data.append("productname", productname)
        data.append("price", price)
        data.append("currency", currency)
        data.append("discount", discount)
        data.append("dimension", dimension)
        data.append("unit", unit)

        $.ajax({
            type: "POST",
            url: `${baseurl}/product/add`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                setInterval(function() {
                    location.href = `${baseUrl}/admin/dashboard`;
                }, 3000);
                $("#basicModal").modal("hide")

            }

        })
    }
   
</script>