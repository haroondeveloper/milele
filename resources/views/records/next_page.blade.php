<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        <style>
            /* Add styles for the header */
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin: 30px 0;
            text-transform: uppercase;
        }

        /* Add styles for the form */
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 30px 0;
        }

        /* Add styles for the form elements */
        select, input[type="text"], input[type="date"] {
            width: 200px;
            height: 40px;
            font-size: 16px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Add styles for the buttons */
        button {
            width: 80px;
            height: 40px;
            font-size: 16px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ddd;
            cursor: pointer;
        }

        /* Add styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
        }

        /* Add styles for the table header */
        thead {
            background-color: #ddd;
        }

        /* Add styles for the table cells */
        td, th {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        /* Add styles for the success and error messages */
        #success-message, #error-message {
            width: 60%;
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
        }

        /* Add styles for the success message */
        #success-message.alert-success {
            background-color: #dff0d8;
            border: 1px solid #3c763d;
            color: #3c763d;
        }

        /* Add styles for the error message */
        #error-message.alert-danger {
            background-color: #f2dede;
            border: 1px solid #a94442;
            color: #a94442;
        }

        /* Add styles for the hidden elements */
        .hidden {
            display: none;
        }

        /* Make the page responsive */
        @media (max-width: 768px) {
            /* Change the font size for smaller screens */
            h1 {
                font-size: 24px;
            }

            /* Reduce the width of the form elements for smaller screens */
            select, input[type="text"], input[type="date"] {
                width: 100%;
            }

            /* Stack the form elements vertically for smaller screens */
            form {
                flex-direction: column;
            }

        /* Stack the table cells vertically for smaller screens */

    </style>
</head>
<body class="antialiased">
<div>
    <h1 class="text-center">Filter Result</h1>
    <div id="success-message" class=" text-center hidden alert alert-success">
        <div id="error-message" class="alert alert-danger">
        </div>


    </div>
</div>

<form id="form">
    <select id="Model" name="model">
        <option value="">Select Model</option>
        <option value="Model One" >Model One</option>
        <option value="Model Two">Model Two</option>
        <option value="Model Three">Model Three</option>
    </select>

    <select id="SFX"  name="sfx" disabled>
        <option  value="">Select SFX</option>

    </select>

    <select  id="Variant" disabled name="variant">
        <option value="">Select Variant</option>

    </select>

    <select  id="Color" disabled name="color">
        <option value="">Color</option>

    </select>
{{--    <button type="submit">Submit</button>--}}
</form>

@if (isset($records))
    <table class="text-center" id="record-table">
        <thead>
        <tr>
            <th>Supplier</th>
            <th>Wholesaler</th>
            <th>Steering</th>
            <th>Car Model</th>
            <th>Car SFX</th>
            <th>Car Variant</th>
            <th>Color</th>
            <th>Month</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="record-table2">
        @foreach ($records as $record)
            <tr data-id="{{ $record->id }}">
                <td data-field="supplier">{{ $record->supplier }}</td>
                <td data-field="wholesaler">{{ $record->wholesaler }}</td>
                <td data-field="steering_type">{{ $record->steering_type }}</td>
                <td data-field="car_model">{{ $record->car_model }}</td>
                <td data-field="car_sfx">{{ $record->car_sfx }}</td>
                <td data-field="car_variant">{{ $record->car_variant }}</td>
                <td data-field="color">{{ $record->color }}</td>
                <td data-field="month">{{ $record->month }}</td>

                <td>
                    <button type="button" class="update">Update</button>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <input type="text" required name="supplier" class="supplier">
            </td>
            <td>
                <input type="text" required name="wholesaler" class="wholesaler">
            </td>
            <td>
                <input type="text" required name="steering_type" class="steering_type">
            </td>

            <td>
                <input type="text" required name="car_model" class="car_model">
            </td>
            <td>
                <input type="text" required name="car_sfx" class="car_sfx">
            </td>
            <td>
                <input type="text" required name="car_variant" class="car_variant">
            </td>
            <td>
                <input type="text" required name="color" class="color">
            </td>
            <td>
                <input type="date" required  name="month" class="month form-control">
            </td>
            <td>
                <button type="button" class="add">Add</button>
            </td>
        </tr>
        </tbody>
    </table>



    <div class="hidden" id="count">
    <h1 class="text-center">Record Month Wise</h1>
    <table class="text-center" id="record-table-month">
        <thead>
        <tr >
            <th>Jan</th>
            <th>Feb</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>Aug</th>
            <th>Sep</th>
            <th>Oct</th>
            <th>Nov</th>
            <th>Dec</th>
        </tr>
        </thead>
        <tbody id="record-table-month2">

        </tbody>
    </table>
    </div>
@endif
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


    //form
    $(document).ready(function() {
        const $model = $("#Model");
        const $Variant = $("#Variant");
        const $SFX = $("#SFX");
        const $Color = $("#Color");

        const models = {
            "Model One": {
                SFX: "<option value='A1'>A1</option>",
                Variant: "<option value='SomeCar_1'>SomeCar_1</option>",
                Color: "<option value='Black'>Black</option>"
            },
            "Model Two": {
                SFX: "<option value='B1'>B1</option>",
                Variant: "<option value='SomeCar_1'>SomeCar_2</option>",
                Color: "<option value='White'>White</option>"
            },
            "Model Three": {
                SFX: "<option value='A1'>A1</option>",
                Variant: "<option value='SomeCar_1'>SomeCar_1</option>",
                Color: "<option value='Blue'>Blue</option>"
            }
        };

        $model.change(function() {
            const model = models[this.value];
            if (model) {
                $SFX.html(model.SFX);
                $Variant.html(model.Variant);
                $Color.html(model.Color);
                $Variant.prop("disabled", false);
                $SFX.prop("disabled", false);
                $Color.prop("disabled", false);
            } else {
                $SFX.html("");
                $Variant.html("");
                $Color.html("");
                $Variant.prop("disabled", true);
                $SFX.prop("disabled", true);
                $Color.prop("disabled", true);
            }
        });
    });

    //filter
    $(document).ready(function() {
        $("#Model").change(function() {
            var data = {
                model: $("#Model").val(),
                variant: $("#Variant").val(),
                sfx: $("#SFX").val(),
                color: $("#Color").val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            };
            $.ajax({
                type: 'GET',
                url: '/filter-data',
                data,
                success: function(data) {
                    console.log(data);
                    $("#record-table2").empty();
                    for (var i = 0; i < data.length; i++) {
                        $("#record-table2").append(
                            "<tr data-id="+ data[i].id + ">" +

                            "<td data-field='supplier'> " + data[i].supplier + "</td>" +
                            "<td data-field='wholesaler'>" + data[i].wholesaler + "</td>" +
                            "<td data-field='steering_type'>" + data[i].steering_type + "</td>" +
                            "<td data-field='car_model'>" + data[i].car_model + "</td>" +
                            "<td data-field='car_variant'>" + data[i].car_variant + "</td>" +
                            "<td data-field='car_sfx'>" + data[i].car_sfx + "</td>" +
                            "<td data-field='color'>" + data[i].color + "</td>" +
                            "<td data-field='month'>" + data[i].month + "</td>" +
                            " <td><button type='button' class='update'>Update</button></td>"+

                            "</tr>"
                        );
                    }

                    $("#count").show()
                        let monthCounts = {
                            'Jan': 0,
                            'Feb': 0,
                            'March': 0,
                            'April': 0,
                            'May': 0,
                            'June': 0,
                            'July': 0,
                            'Aug': 0,
                            'Sep': 0,
                            'Oct': 0,
                            'Nov': 0,
                            'Dec': 0,
                        };

                        for (let i = 0; i < data.length; i++) {
                            let date = new Date(data[i].month);
                            let month = date.toLocaleString('default', { month: 'short' });
                            monthCounts[month]++;
                        }

                        let monthRow = "<tr>";
                        for (let month in monthCounts) {
                            monthRow += "<td>" + monthCounts[month] + "</td>";
                        }
                        monthRow += "</tr>";

                        $("#record-table-month2").append(monthRow);



                    $("td").click(function() {
                        var td = $(this);
                        if (td.children().length === 0) {
                            var input = $('<input type="text" />').val(td.text());
                            td.text('').append(input);
                            input.focus();
                            $(document).on('click', '.update', function() {
                                var id = $(this).closest('tr').data('id');
                                var field = td.data('field');
                                var value = input.val();

                                $.ajax({
                                    type: 'PUT',
                                    url: '/records/update',
                                    data: {
                                        id: id,
                                        field: field,
                                        value: value,
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        td.text(value);
                                        $("#success-message").text("Data has been updated successfully!").show().fadeOut(5000);
                                    }
                                });
                            });
                        }
                    });
                }
            });
        });
    });

    //add new record
    $(document).on('click', '.add', function() {
        let $inputs = $(this).closest('tr').find('input');
        let data = {
            supplier: $inputs.filter('.supplier').val(),
            wholesaler: $inputs.filter('.wholesaler').val(),
            steering_type: $inputs.filter('.steering_type').val(),
            car_model: $inputs.filter('.car_model').val(),
            car_sfx: $inputs.filter('.car_sfx').val(),
            car_variant: $inputs.filter('.car_variant').val(),
            color: $inputs.filter('.color').val(),
            month: $inputs.filter('.month').val(),
            _token: $('meta[name="csrf-token"]').attr('content')
        };

        $.ajax({
            type: 'POST',
            url: '/records/store',
            data:data,
            success: function(data) {
                console.log(data)
                var tableRow = "<tr>" +
                    "<tr data-id="+ data.id + ">" +

                    "<td data-field='supplier'> " + data.supplier + "</td>" +
                    "<td data-field='wholesaler'>" + data.wholesaler + "</td>" +
                    "<td data-field='steering_type'>" + data.steering_type + "</td>" +
                    "<td data-field='car_model'>" + data.car_model + "</td>" +
                    "<td data-field='car_variant'>" + data.car_variant + "</td>" +
                    "<td data-field='car_sfx'>" + data.car_sfx + "</td>" +
                    "<td data-field='color'>" + data.color + "</td>" +
                    "<td data-field='month'>" + data.month + "</td>" +
                    " <td><button type='button' class='update'>Update</button></td>"+

                    "</tr>";
                $("#record-table tbody tr:last").before(tableRow);
                $inputs.val(''); // Reset the input fields
                $("#success-message").text("Data has been added successfully!").show().fadeOut(5000);
                $("td").click(function() {
                    var td = $(this);
                    if (td.children().length === 0) {
                        var input = $('<input type="text" />').val(td.text());
                        td.text('').append(input);
                        input.focus();
                        $(document).on('click', '.update', function() {
                            var id = $(this).closest('tr').data('id');
                            var field = td.data('field');
                            var value = input.val();

                            $.ajax({
                                type: 'PUT',
                                url: '/records/update',
                                data: {
                                    id: id,
                                    field: field,
                                    value: value,
                                    _token: $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log(data);
                                    td.text(value);
                                    $("#success-message").text("Data has been updated successfully!").show().fadeOut(5000);
                                }
                            });
                        });
                    }
                });

            },
            error: function(xhr, status, error) {
                let response = xhr.responseJSON;
                let errorMessage = '';
                if (response.hasOwnProperty('errors')) {
                    $.each(response.errors, function(key, value) {
                        errorMessage += value + '<br>';
                    });
                } else {
                    errorMessage = response.message;
                }
                $('#error-message').html(errorMessage).fadeIn().delay(3000).fadeOut();
            }

        });



    });

    //update
    $(document).ready(function() {
        $('td').click(function() {
            var td = $(this);
            if (td.children().length === 0) {
                var input = $('<input type="text" />').val(td.text());
                td.text('').append(input);
                input.focus();

                $(document).on('click', '.update', function() {
                    var id = $(this).closest('tr').data('id');
                    var field = td.data('field');
                    var value = input.val();

                    $.ajax({
                        type: 'PUT',
                        url: '/records/update',
                        data: {
                            id: id,
                            field: field,
                            value: value,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            console.log(data);
                            td.text(value);
                            $("#success-message").text("Data has been updated successfully!").show().fadeOut(5000);
                        }
                    });
                });
            }
        });
    });

</script>
