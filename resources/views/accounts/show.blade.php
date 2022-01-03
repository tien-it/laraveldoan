<!DOCTYPE html>
<html>
    <head>
<title>Account {{ $account->account_id }}</title>
    </head>
    <body>
        <h1>Account {{ $account->account_id }}</h1>
            <ul>
                <li>Username: {{ $account->username }}</li>
                <li>Fullname: {{ $account->fullname }}</li>
                <li>Password: {{ $account->password }}</li>
                <li>Phone: {{ $account->phone }}</li>
                <li>Email: {{ $account->email }}</li>
                <li>Address: {{ $account->address }}</li>
                <li>Gender: {{ $account->gender }}</li>
                <li>Birthday: {{ $account->birthday }}</li>
                <li>IsAdmin: {{ $account->isAdmin }}</li>
                <li>Status: {{ $account->status }}</li>
            </ul>
    </body>
</html>