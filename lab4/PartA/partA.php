<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Details of the Student</title>


</head>

<body>
    <div class="header">
        <h2>Details of the Student</h2>
    </div>
    <div class="container">


        <form method="post" action="">
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="FirstName">
            </div>
            <br>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="LastName">
            </div>
            <br>
            <div class="input-group">
                <label>Department</label>
                <select name="Department">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="PME">PME</option>
                    <option value="BME">BME</option>
                    <option value="GEBT">GEBT</option>
                    <option value="PESS">PESS</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Roll</label>
                <input type="number" name="Roll">
            </div>
            <br>
            <div class="input-group">
                <label>Gender</label>
                <select name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="Email">
            </div>
            <br>
            <div class="input-group">
                <label>Mobile Number</label>
                <input type="number" name="MobileNumber">
            </div>
            <br>
            <div class="input-group">
                <label>Favorite Icecream Flavor</label>
                <select name="FavoriteIcecreamFlavor">
                    <option value="Strawberry">Strawberry</option>
                    <option value="Mango">Mango</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Mixed Fruit">Mixed Fruit</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Address</label>
                <input type="text" name="Address">
            </div>
            <br>
            <div class="input-group">
                <label>Home District</label>
                <select name="district">
                    <option value="Bagerhat">Bagerhat</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Bhola">Bhola</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Brahmanbaria">Brahmanbaria</option>
                    <option value="Chandpur">Chandpur</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Chuadanga">Chuadanga</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Cox'sBazar">Cox'sBazar</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Faridpur">Faridpur</option>
                    <option value="Feni">Feni</option>
                    <option value="Gaibandha">Gaibandha</option>
                    <option value="Gazipur">Gazipur</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Habiganj">Habiganj</option>
                    <option value="Jaipurhat">Jaipurhat</option>
                    <option value="Jamalpur">Jamalpur</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Jhalokati">Jhalokati</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Khagrachari">Khagrachari</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Kishoreganj">Kishoreganj</option>
                    <option value="Kurigram">Kurigram</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Lakshmipur">Lakshmipur</option>
                    <option value="Lalmonirhat">Lalmonirhat</option>
                    <option value="Madaripur">Madaripur</option>
                    <option value="Magura">Magura</option>
                    <option value="Manikganj">Manikganj</option>
                    <option value="Maulvibazar">Maulvibazar</option>
                    <option value="Meherpur">Meherpur</option>
                    <option value="Munshiganj">Munshiganj</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Naogaon">Naogaon</option>
                    <option value="Narail">Narail</option>
                    <option value="Narayanganj">Narayanganj</option>
                    <option value="Narsingdi">Narsingdi</option>
                    <option value="Natore">Natore</option>
                    <option value="Nawabganj">Nawabganj</option>
                    <option value="Netrokona">Netrokona</option>
                    <option value="Nilphamari">Nilphamari</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Panchagarh">Panchagarh</option>
                    <option value="Patuakhali">Patuakhali</option>
                    <option value="Pirojpur">Pirojpur</option>
                    <option value="Rajbari">Rajbari</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Shariatpur">Shariatpur</option>
                    <option value="Sherpur">Sherpur</option>
                    <option value="Sirajganj">Sirajganj</option>
                    <option value="Sunamganj">Sunamganj</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Tangail">Tangail</option>
                    <option value="Thakurgaon">Thakurgaon</option>
                </select>
            </div>
            <br>
            <br><br>
            <div class="input-group">
                <button type="submit" class="btn" name="submit">Add Details</button>
            </div>

        </form>
    </div>
    <br>
    <a href="../PartB/serverpage.php" target="_blank" rel="noopener noreferrer">Server Page</a>

    <?php
    include('config.php')
    ?>





</body>

</html>