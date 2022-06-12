<?php

 print_r($_POST);

// $fname = $_POST['fullname'];
// $email = $_POST['email'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $country = $_POST['country'];

// echo "$fname";
// echo "$email";
// echo "$dob";

// echo "$gender";
// echo "$country";


?>
<?php

if(isset($_POST['submit']))
$filename = "./userdata.csv";

{
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
 $data = $fname . ", " . $email . ", " . $dob . ", " . $gender . ", " . $email . ", " . $country;
 $handle = fopen('userdata.csv', 'a+');
$no_rows = count(file("userdata.csv"));
    if ($no_rows < 1) {
        $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        's_no' => $no_rows,
        'fname' => $fname,
        'email' => $email,
        'dob' => $dob,
        'gender' => $gender,
        'country' => $country
    );
    fputcsv($handle, $form_data);
    echo 'Registration Successful';


//    if(fwrite($handle, $data))  {
//        echo 'Registration Successful';

//    }
fclose ($handle);    
}
?>
