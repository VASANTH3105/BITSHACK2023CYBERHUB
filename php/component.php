
<?php



function component($productname, $productprice, $productimg, $productid){
    $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 \">
                <form action=\"enrollment.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid p-3 m-auto\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Become Cybersecurity expert with our exclusive courses... 
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">unlimited</s></small>
                                <span class=\"price\">$productprice weeks</span>
                            </h5>
                            <hr/>
                            <button type=\"submit\" class=\"btn btn-outline-dark  my-2\" name=\"add\">Enroll Now </button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    
    
    ";
    echo $element;
}





function cartElement($productimg, $productname, $productprice, $productid){

    $redirectPage = "";
    if ($productid == 1) {
        $redirectPage = "course1.html";
    } elseif ($productid == 2) {
        $redirectPage = "course2.html";
    } elseif ($productid == 3) {
        $redirectPage = "course3mod.html";
    } elseif ($productid == 4) {
        $redirectPage = "course4.html";
    }

    $userProgress = 15; // Replace this with your actual calculation

    // Calculate the width of the progress bar based on userProgress
    $progressWidth = $userProgress . '%';

    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid p-3\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: CyberHub</small>
                                <h5 class=\"pt-2\">$productprice weeks</h5>




                                <a href = \"$redirectPage\" class=\"btn btn-success\">Go to Course</a>
                                <button type=\"submit\" class=\"btn btn-outline-danger m-3\" name=\"remove\">Un-Enroll</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}


//my creation
function quizcomponent($badge, $questions, $title, $id){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 \">
                <form action=\"enrollment.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$badge\" alt=\"Image1\" class=\"img-fluid p-3\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$title</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Become Cybersecurity expert with our exclusive courses... 
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">unlimited</s></small>
                                <span class=\"price\">$questions weeks</span>
                            </h5>
                            <hr/>
                            <button type=\"submit\" class=\"btn btn-outline-dark  my-2\" name=\"add\">Enroll Now </button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}



function profileElement($productimg, $productname, $productprice, $productid){

    $redirectPage = "";
    if ($productid == 1) {
        $redirectPage = "page1.html";
    } elseif ($productid == 2) {
        $redirectPage = "page2.html";
    }


    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid p-3\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: CyberHub</small>
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}