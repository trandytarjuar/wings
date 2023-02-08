<script>
     function buy(id){
        var baseurl = "<?= base_url() ?>"
        // var id_product = id
        // console.log(id_product)
        // alert(id)
        var currency= $("#currency").val();
        var price= $("#price").val();
        var unit= $("#unit").val();
        
        let data = new FormData();
        // console.log(data.append("product_code",id_product))
        // data.append("product_code",id_product);
        data.append("currency",currency);
        data.append("price",price);
        data.append("unit",unit);

         $.ajax({
            type: "POST",
            url : `${baseurl}/dashboard/cart/${id}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response){
                // alert("tes")
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                setInterval(function() {
                    location.href = `${baseUrl}/admin/dashboard/`;
                }, 3000);
            }
        })
    }
  
</script>