<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Add / Remove Table Rows Dynamically</title>
    <style>
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        table{
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid #cdcdcd;
        }
        table th, table td{
            padding: 10px;
            text-align: left;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".add-row").click(function(){
                var name = $("#name").val();
                var time = $("#time").val();
                var day = $("#day").val();
                var period = $("#period").val();

                var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + time + "</td><td>" + day + "</td><td>" + period + "</td></tr>";
                $("table tbody").append(markup);
            });

            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>
</head>
<body>
<form>
    <input type="text" id="name" placeholder="Medicine Name">
    <input type="text" id="time" placeholder="unit per time">
    <input type="text" id="day" placeholder="time per day">
    <input type="text" id="period" placeholder="period">
    <input type="button" class="add-row" value="Add Row">
</form>
<table>
    <thead>
    <tr>
        <th>Select</th>
        <th>Medicine Name</th>
        <th>unit per time</th>
        <th>time per day</th>
        <th>period</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><input type="checkbox" name="record"></td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td></td>
    </tr>
    </tbody>
</table>
<button type="button" class="delete-row">Delete Row</button>
</body>
</html>
