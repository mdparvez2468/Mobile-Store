<?php

include_once("header.php");



?>




<div class="m-5">
    <form action="contactInsert.php" method="post" class="m-5">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enter Your Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Enter Your Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

<div>



<?php

include_once("footer.php");

?>