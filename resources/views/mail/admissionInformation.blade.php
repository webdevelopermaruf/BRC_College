<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
    }

    .card {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .header {
      text-align: center;
      padding: 10px;
      background-color: #333;
      color: #fff;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .content {
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
    }

    th {
      text-align: left;
    }

    .footer {
      text-align: center;
      padding: 10px;
      background-color: #f5f5f5;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      display: inline-block;
      margin-right: 10px;
    }
    a.button{
        background: #804a4c;
        color:white;
        padding:8px 12px;
        outline:none;
        border:none;
        cursor:pointer;
        text-align:center;
        text-decoration:none;
    }
    p.m-center{
        text-align:center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="header">
        <h2>Application Confirmation</h2>
      </div>
      <div class="content">
        <p>Dear Applicant,</p>
        <p>Your admission application to {{json_decode($site_settings->site_name)->en}} has been successfully submitted.</p>
        <p><strong>Application ID:</strong> {{$id}}</p>
        <p><strong>Password:</strong> {{$pwd}} (Please keep this confidential)</p>
        <p><strong>Email:</strong> {{$email}}</p>
        <p><strong>Mobile Number:</strong> {{$mobile}}</p>
        <p>You can login to your applicant portal using your Application ID and Password to track the status of your application.</p>
        <p class="m-center"><a href="{{url('/admission-login')}}" class="button">Login to track your application</a></p>
        <p>For any inquiries or further information, please feel free to contact our admissions office at:</p>
        <p>Best Regards,</p>
        <p>Admission Office</p>
        <p><b>{{json_decode($site_settings->site_name)->en}}</b> <br/>
            {{json_decode($site_settings->site_contact)->address}}<br/>
            {{json_decode($site_settings->site_contact)->hotline}}<br/>
        </p> 
      </div>
    </div>
    <div class="footer">
      <p>Follow us on social media:</p>
      <ul>
        <li><a href="{{json_decode($site_settings->site_contact)->social->facebook}}">Facebook</a></li>
        <li><a href="{{url('/')}}">Website</a></li>
        <li><a href="{{json_decode($site_settings->site_contact)->social->youtube}}">Youtube</a></li>
      </ul>
      <p>  {{date('Y')}} &copy; {{$site_settings->site_short_name}} . All rights reserved.</p>
    </div>
  </div>
</body>
</html>