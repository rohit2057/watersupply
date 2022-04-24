<?php 
		require_once 'shared/linkstop.php';
	?>
<form class=" search-box">
	<input class="form-control col rounded-pill" type="text" placeholder="search" name="">
	<div class="result" width = "20px" height = "40px">
		
	</div>
	

<script>
	$(document).ready(function(){
                $('.search-box input[type="text"]').on("keyup input", function(){
                    /* Get input value on change */
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if(inputVal.length){
                        $.get("Search", {term: inputVal}).done(function(data){
                            // Display the returned data in browser
                            resultDropdown.html(data);
                        });
                    } else{
                        resultDropdown.empty();
                    }
                });
               
                // Set search input value on click of result item
                $(document).on("click", ".result p", function(){
                    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                    $(this).parent(".result").empty();
                });
            });
</script>