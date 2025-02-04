<?php

// Database connection
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'dataofcustomer';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

// Read Query

$sql = "SELECT * FROM customersdata";
$result = mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
   

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-w[500px] ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Our products
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    EMAIL
                </th>
                <th scope="col" class="px-6 py-3">
                    PASSWORD
                </th>
            </tr>
        </thead>
        <tbody>

        <?php
            while($userarr = mysqli_fetch_assoc($result) ){ ?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           <?php  echo $userarr['id']; ?>
                     </th>
                     <td class="px-6 py-4">
                           <?php echo $userarr['name']; ?>
                     </td>
                      <td class="px-6 py-4">
                      <?php  echo $userarr['email']; ?>
                      </td>
                    <td class="px-6 py-4">
                    <?php  echo $userarr['password']; ?>
                     </td>
            </tr>
                
           <?php }

        ?>
           
        </tbody>
    </table>
</div>

</body>
</html>