<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Survey: Homepage</title>
    <style>
        label {
            display: block
        }

        input[type="radio"] {
            pointer-events: none;
        }
    </style>
</head>

<body>
    <h1>Results</h1>
    <div>
        <div>
            What is your age group?
        </div>
        <div>
            <input type="radio" name="age-group" value="1">
            < 18 <b>(Total: {{$data['ageGroup']['ageGroup1']}})</b></input>
        </div>
        <div>
            <input type="radio" name="age-group" value="2">
            18 to 35 <b>(Total: {{$data['ageGroup']['ageGroup2']}})</b></input>
        </div>
        <div>
            <input type="radio" name="age-group" value="3">
            35 to 60 <b>(Total: {{$data['ageGroup']['ageGroup3']}})</b></input>
        </div>
        <div>
            <input type="radio" name="age-group" value="4">
            Above 60 <b>(Total: {{$data['ageGroup']['ageGroup4']}})</b></input>
        </div>
    </div>

    <div>
        <div>
            What is your education level?
        </div>
        <div>
            <input type="radio" name="edu-level" value="1">
            Secondary school and below <b>(Total: {{$data['eduLevel']['eduLevel1']}})</b></input>
        </div>
        <div>
            <input type="radio" name="edu-level" value="2">
            Diploma <b>(Total: {{$data['eduLevel']['eduLevel2']}})</b></input>
        </div>
        <div>
            <input type="radio" name="edu-level" value="3">
            Degree <b>(Total: {{$data['eduLevel']['eduLevel3']}})</b></input>
        </div>
        <div>
            <input type="radio" name="edu-level" value="4">
            Post graduate degree <b>(Total: {{$data['eduLevel']['eduLevel4']}})</b></input>
        </div>
    </div>

    <div>
        <div>
            What is your monthly salary?
        </div>
        <div>
            <input type="radio" name="salary" value="1">
            Less than RM 1000 <b>(Total: {{$data['salary']['salary1']}})</b></input>
        </div>
        <div>
            <input type="radio" name="salary" value="2">
            Between RM 1000 to RM 3000 <b>(Total: {{$data['salary']['salary2']}})</b></input>
        </div>
        <div>
            <input type="radio" name="salary" value="3">
            Between RM 3000 to RM 5000 <b>(Total: {{$data['salary']['salary3']}})</b></input>
        </div>
        <div>
            <input type="radio" name="salary" value="4">
            More than RM 5000 <b>(Total: {{$data['salary']['salary4']}})</b></input>
        </div>
    </div>

    <div>
        <div>
            Your gender?
        </div>
        <div>
            <input type="radio" name="gender" value="1">
            Male <b>(Total: {{$data['gender']['gender1']}})</b></input>
        </div>
        <div>
            <input type="radio" name="gender" value="2">
            Female <b>(Total: {{$data['gender']['gender2']}})</b></input>
        </div>
    </div>
</body>

</html>