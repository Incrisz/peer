<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        padding: 10px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .card-body {
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f9f9f9;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            Contact Form Submission
        </div>
        <div class="card-body">
            <p>We have received a new contact form submission.</p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $email }}</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>{{ $company }}</td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td>{{ $website }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ $country }}</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>{{ $phone }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ $type }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $text }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br>
            <p>Thanks,</p>
        </div>
    </div>
</div>
