  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>

  <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  </script>
  <script>
      $(document).ready(function() {
          //   alert();
          $(document).on('click', '.add_Product', function(e) {
              e.preventDefault();
              let name = $('#name').val();
              let price = $('#price').val();
              $.ajax({
                  url: '{{ route('product.addProduct') }}',
                  method: 'Post',
                  data: {
                      name: name,
                      price: price
                  },
                  success: function(res) {

                  },
                  error: function(err) {
                      let error = err.responseJSON;
                      $.each(error.errors, function(index, value) {
                          $('.errMsgContainer').append('<span class="text-danger">' +
                              value + '</span>' + '<br>');
                      });
                  }
              })

          })
      });
  </script>
