<?php
//the form should populate the site. Make sure it is not vulnerable to XSS attacks
require_once
        "project_header.php";
title_bar("Customer Reviews");
?>

<p>Bob</p>
<label for="rating">Customer Rating</label>
<meter id="rating" value="5" min="0" max="5">5 Star</meter>

<p>
    Great product great. Service!
</p>

<form name="customer_ratings">
    <fieldset>
        <!-- form for customer ratings -->
    <legend>
        Please let us know your feedback.
    </legend>
        
    <label for ="star_rating" >Enter your star rating:<label>
    <select name="star_rating" id="star_rating">
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
    </select>
    <label for ="qual_feedback">Please give us more information:<label>       
    <textarea name="qual_feedback" rows="4" cols="20" id="qual_feedback">
    </textarea> 
    <input type="submit" value="Submit Feedback" name="feedback_button" />       
    <fieldset>   
</form>
<?php 
require_once "footer.php"; 
?>


