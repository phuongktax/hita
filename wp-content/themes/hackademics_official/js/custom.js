$(document).ready(function() {
    $('#loading').hide();
    $('#warning').hide();
    $('#detail').hide();
    $("#form").submit(function(e){
        if ($("#name").val() == ""){
            $('#warning').show();
            $('#result').hide();
            $('#detail').hide();
        } else {
            $('#warning').hide();
            $('#result').hide();

            $('#detail').hide();
            $('#loading').show();
            
            // $.get(
            //     'http://hackademicshanoi.codelovers.vn/wp-content/themes/hackademics_official/lib/tim-tai-lieu.php',
            //     $("#form").serialize(),
            //     function(data) { $('#result').html(data);})
            //         .done(function( data ) {$('#loading').hide();$('#warning').hide();$('#result').show();
            //     });


            var url = "http://hackademicshanoi.codelovers.vn/wp-content/themes/hackademics_official/lib/tim-tai-lieu.php"; // the script where you handle the form input.

                $.ajax({
                       type: "GET",
                       url: url,
                       data: $("#form").serialize(), // serializes the form's elements.
                       success: function(data)
                       {
                        $('#result').html(data);
                           $('#loading').hide();
                           $('#warning').hide();
                           // $('#detail').hide();
                           $('#result').show();
                       }
                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
        }
    });

    $(document).on("click","#prev", function(){

        $('#warning').hide();
        // $('#result').hide();
        $('#loading').show();

        var url = "http://hackademicshanoi.codelovers.vn/wp-content/themes/hackademics_official/lib/tim-tai-lieu2.php";
        var link = $("#prevLink").val();
        $.ajax({
               type: "GET",
               url: url,
               data: {src: link},
               success: function(data)
               {
                $('#result').html(data);
                    // $('#detail').hide();
                   $('#loading').hide();
                   $('#warning').hide();
                   $('#result').show();
               }
         });
    });

    $(document).on("click","#next", function(){
        // $('#warning').hide();
        // $('#result').hide();
        $('#loading').show();

        var url = "http://hackademicshanoi.codelovers.vn/wp-content/themes/hackademics_official/lib/tim-tai-lieu2.php"; 
        var link = $("#nextLink").val();
        $.ajax({
               type: "GET",
               url: url,
               data: {src: link},
               success: function(data)
               {
                $('#result').html(data);
                   $('#loading').hide();
                   $('#warning').hide();
                   // $('#detail').hide();
                   $('#result').show();
               }
             });
    });

    $(document).on("click",".documentLink", function(e){
        e.preventDefault();
        $('#warning').hide();
        // $('#result').hide();
        // $('#detail').hide();
        $('#loading').show();

        var url = "http://hackademicshanoi.codelovers.vn/wp-content/themes/hackademics_official/lib/chi-tiet-tai-lieu.php";
        var link = e.target.href;
        $.ajax({
               type: "GET",
               url: url,
               data: {src: link},
               success: function(data)
               {
                $('#detail').html(data);
                   $('#loading').hide();
                   $('#warning').hide();
                   $('#detail').fadeIn('fast');
               }
         });
    });
        
        var icon = '<i class="fa fa-clock-o"></i>';
        $('p.cff-date').each(function(){
          $(this).prepend(icon);
        });
        


  // jQuery('.cff-post-text::first-line').each(function(){
  //   arlert($this('.cff-date'));
  //         $(this).append($(this).siblings('.cff-date'));
  //       });

});

