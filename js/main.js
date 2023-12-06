
//Getting value from "ajax.php".
function fill(Value) {

    //Assigning value to "search" div in "search.php" file.
    $('#search').val(Value);
 
    //Hiding "display" div in "search.php" file.
    $('#display').hide();
 
 }

 function showMuseums(){

    var name = $('#search').val();//Assigning search box value to javascript variable named as "name".
        
        if (name == "") { //Validating, if "name" is empty.
 
            //$("#display").html("");//Assigning empty value to "display" div in "search.php" file.
            $.ajax({ //AJAX is called.
                
                type: "POST",//AJAX type is "Post".
                url: "php/getAllMuseums.php",//Data will be sent to "ajax.php".
                data: {//Data, that will be sent to "ajax.php". 
                    search: name//Assigning value of "name" into "search" variable.
                },
 
                success: function(html) { //If result found, this funtion will be called.
 
                    $("#display").html(html).show(); //Assigning result to "display" div in "search.php" file.
 
                }
 
            });

            // setTimeout(()=> {
            //     $('.company-item a').miniPreview({ prefetch: 'none' });
            // }
            // ,300);
 
        }

 }
 
 $(document).ready(function() {
 
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#search").keyup(function() {

        var name = $('#search').val();//Assigning search box value to javascript variable named as "name".

        
        if (name == "") { //Validating, if "name" is empty.
 
            //$("#display").html("");//Assigning empty value to "display" div in "search.php" file.
            showMuseums();

        }
 
        else { //If name is not empty.
            
            $.ajax({ //AJAX is called.
                
                type: "POST",//AJAX type is "Post".
                url: "php/search.php",//Data will be sent to "ajax.php".
                data: {//Data, that will be sent to "ajax.php". 
                    search: name//Assigning value of "name" into "search" variable.
                },
 
                success: function(html) { //If result found, this funtion will be called.
 
                    $("#display").html(html).show(); //Assigning result to "display" div in "search.php" file.
 
                }
 
            });

            // setTimeout(()=> {
            //     $('.company-item a').miniPreview({ prefetch: 'none' });
            // }
            // ,300);
 
        }
 
    });
 
 });


/* function openPopup(element){

    const hasPopupClass = element.classList.contains("popup");

    if (!hasPopupClass) {

        element.classList.add("popup");
        const hideBackground = document.querySelector('#popupCover');
        hideBackground.classList.toggle("off");

        // Add CSS to body element to prevent scrolling
        document.body.style.overflow = 'hidden';

    }

}

function closePopup(element){

    element.classList.toggle("off");

    const hasPopupClass = element.classList.contains("popup");

    const removePopup = document.querySelectorAll('.company-item');

        // Loop through the NodeList and remove the class from each element
        removePopup.forEach(function(item) {
            item.classList.remove("popup");
        });

        // Remove CSS from body element to allow scrolling again
        document.body.style.overflow = 'auto';

}
 */

    




