<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>
<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<form action="sucker.php" method="post">
    <h2>Give Us Your Money</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="name">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="section" id="section">
                <option value="MA">MA</option>
                <option value="MII">MII</option>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="card_number">
        </dd>
        <dd>
            <input type="radio" id="Visa" name="card_type" value="Visa">
            <label for="Visa">Visa</label>
            <input type="radio" id="Mastercard" name="card_type" value="Mastercard">
            <label for="Mastercard">Mastercard</label>
            <br>
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker">
    </div>
</form>
</body>
</html>