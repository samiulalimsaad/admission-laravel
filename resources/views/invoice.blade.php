<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $profile->applicationId }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            position: relative;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            font-size: 24px;
        }

        .applicant-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .transaction-id {
            font-weight: bold;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* PAIF Stamp Styles */
        .stamp {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 48px;
            font-weight: bold;
            color: rgba(255, 0, 0, 0.3);
            /* Light red with transparency */
            z-index: 10;
            opacity: 0.5;
            transform: rotate(-45deg);
        }
    </style>
</head>

<body>

    <!-- PAIF Stamp -->
    <div class="stamp">PAID</div>

    <div class="invoice-header">
        <h1>Invoice for Application ID: {{ $profile->applicationId }}</h1>
        <div>
            @if ($profile->profile_image)
                <img src="{{ public_path('images/' . $profile->profile_image) }}" alt="Applicant Image"
                    class="applicant-image">
            @endif
        </div>
        <div class="transaction-id">
            <strong>Transaction ID: </strong>{{ $profile->token }}
        </div>
    </div>

    <div>
        <h2>Applicant Information:</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $profile->name }}</td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td>{{ $profile->father_name }}</td>
            </tr>
            <tr>
                <th>Mother's Name</th>
                <td>{{ $profile->mother_name }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $profile->phone_number }}</td>
            </tr>
            <!-- Add more fields as necessary -->
        </table>
    </div>

    <div class="my-8">
        <div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Exam</th>
                            <th>Roll</th>
                            <th>Board</th>
                            <th>Passing Year</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SSC:</td>
                            <td>{{ $profile->ssc_roll }}</td>
                            <td>{{ $profile->ssc_board }}</td>
                            <td>{{ $profile->ssc_passing_year }}</td>
                            <td>{{ $profile->ssc_result }}</td>
                        </tr>
                        <tr>
                            <td>HSC:</td>
                            <td>{{ $profile->hsc_roll }}</td>
                            <td>{{ $profile->hsc_board }}</td>
                            <td>{{ $profile->hsc_passing_year }}</td>
                            <td>{{ $profile->hsc_result }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
