# Additional codes
Additional codes that can be copy pasted
## Javascript: Convert HTML table to CSV and POST to server
### Step 1
#### Create an HTML form like so:
```
<form action="accept.php" method="post" onsubmit="return SubmitAsString()">
	<input name="CSVString" type="text"/>
	<input type="submit" name="Submit table as CSV to server">
</form>
```

Please take special note of this code in particular:
```
onsubmit="return SubmitAsString()"
```
We will be using the HTML form validation javascript feature in web browsers to load our own javascript to convert the html table into a CSV. 
### Step 2
#### Making our javascript function
```
function SubmitAsString(){
            var outString = "";
            var table = document.getElementById("MainTable");
            for (var i = 1, row; row = table.rows[i]; i++) {
                //iterate through rows
                //rows would be accessed using the "row" variable assigned in the for loop
                for (var j = 0, col; col = row.cells[j]; j++) {
                    //iterate through columns
                    //columns would be accessed using the "col" variable assigned in the for loop
                    outString = outString + col.innerText;
                    if(j<3){
                        outString = outString + ",";
                    }
                }  
                outString = outString + ";";
            }
            document.getElementById("CSVString").value = outString;
            return true;
        }
```
The table id of the data we will be parsing is "MainTable".
Please note the variable names. The variable names match the code of this example. Please be careful when changing the variable names.
### Step 3
#### Congratulations
You have sent the HTML table as a CSV string to the server.

##PHP: Parse the CSV string from POST  and add as rows to a DB table
### Step 1
#### Use the following PHP code to get post data and load to a string
```
$csvString = mysqli_real_escape_string($link,$_POST['csvString']);
        //first of all, break the data into rows
        $row_arr = explode(";",$csvString);
        //now loop trough the rows and add to db
        foreach($row_arr as $row){
            $cell_arr = explode(",",$row);
            //add user
            if(($cell_arr[0] != "") && ($cell_arr[1] != "") && ($cell_arr[2] != "") && ($cell_arr[3] != "")){
                $querystr = "INSERT INTO users(name, date_of_birth, address, contact_number) VALUES('" . $cell_arr[0] . "','" . $cell_arr[1] . "','" . $cell_arr[2]  . "','" . $cell_arr[3] . "')" ;
                echo $querystr . "\n";
                mysqli_query($link, $querystr);
                //add voter block member
                //need block_id, user_id
                $block_id = 0;
                $user_id = 0;
                $querystr = "INSERT INTO voter_block_members(block_id, user_id) VALUES('" . $voter_block_id . "','" . mysqli_insert_id($link) . "')" ;
                echo $querystr . "\n";
                mysqli_query($link, $querystr);
            }
           
        }
```
**Warning**: Please mind the variable names:
1. SQL connection var: $link
2. SQL query (edit for your appropriate table and fields)
**Please edit the fields to match your application**