<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
       <form action="user_data.php" method="POST">
            <h3>Registration Form</h3>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <input type="text" id="email" name="email" placeholder="Email id" required>

            <input type="date" id="date" placeholder="Date of birth" name="date" required>
            
            Gender:
            <div class="gender">

            Male <input type="radio" name="gender" value="male" placeholder="" required> 
            Female:<input type="radio" name="gender" value="female" placeholder="" required> 
            
            </div>

            <input type="text" id="country" name="country" placeholder="Your Country" required>
           
            <button type="submit">Send</button>
       </form>  
    </div>

</body>
</html>

