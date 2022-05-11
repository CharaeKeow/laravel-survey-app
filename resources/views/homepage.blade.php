<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Survey: Homepage</title>
</head>

<body>
    <form action="/submit" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="age-group">
                What is your age group?
            </label>
            <label for="age-group">
                <input type="radio" name="age-group" value="1">
                < 18 </input>
            </label>
            <label for="age-group">
                <input type="radio" name="age-group" value="2">
                18 to 35 </input>
            </label>
            <label for="age-group">
                <input type="radio" name="age-group" value="3">
                35 to 60 </input>
            </label>
            <label for="age-group">
                <input type="radio" name="age-group" value="4">
                Above 60 </input>
            </label>
        </div>

        <div>
            <label for="edu-level">
                What is your education level?
            </label>
            <label for="edu-level">
                <input type="radio" name="edu-level" value="1">
                Secondary school and below </input>
            </label>
            <label for="edu-level">
                <input type="radio" name="edu-level" value="2">
                Diploma </input>
            </label>
            <label for="edu-level">
                <input type="radio" name="edu-level" value="3">
                Degree </input>
            </label>
            <label for="edu-level">
                <input type="radio" name="edu-level" value="4">
                Post graduate degree </input>
            </label>
        </div>

        <div>
            <label for="salary">
                What is your monthly salary?
            </label>
            <label for="salary">
                <input type="radio" name="salary" value="1">
                Less than RM 1000 </input>
            </label>
            <label for="salary">
                <input type="radio" name="salary" value="2">
                Between RM 1000 to RM 3000 </input>
            </label>
            <label for="salary">
                <input type="radio" name="salary" value="3">
                Between RM 3000 to RM 5000 </input>
            </label>
            <label for="salary">
                <input type="radio" name="salary" value="4">
                More than RM 5000 </input>
            </label>
        </div>

        <div>
            <label for="gender">
                Your gender?
            </label>
            <label for="gender">
                <input type="radio" name="gender" value="1">
                Male </input>
            </label>
            <label for="gender">
                <input type="radio" name="gender" value="2">
                Female </input>
            </label>
        </div>

        <input type="submit" value="Submit" />
    </form>
</body>

</html>