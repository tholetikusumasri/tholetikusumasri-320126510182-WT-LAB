<html>
    <head>
        <title>Forms</title>
        <link rel="Stylesheet" href="forms.css">
    </head>
    <body>
        <h1>REGISTER</h1>
        <h3>Please enter your details to get registered to Facebook</h3>
        <form name="f1" action="abc.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name</td>
                <td><input id='fname' class='in' type="text" name="nm" placeholder="Enter your first name" max="4" maxlength="30" required>
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input  id='lname' class='in' type="text" name="lnm" placeholder="Enter your last name" max="4" maxlength="30"required >
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>
                    <input id='dob' class='in' type="date" name="da">
                </td>
                
            </tr>
            <tr>
                <td>Contact</td>
                <td>
                <input id='co' class='in' type="text" name="co" placeholder="Enter mobileno" maxlength="10" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input id='g'type="radio" name="gen"  value='Male' required>M
                    <input id='g' type="radio" name="gen"  value='Female'required>F
                    <input id='g' type="radio" name="gen"  value="Rather not say"required>Others
                </td>
            </tr>
            <tr>
                <td>Email Id</td>
                <td>
                    <input id='em'class='in' type="email" name="em" placeholder="Enter mail id" max="4" maxlength="24" required>
                </td>
            </tr>
            <tr>
            <td>Profile Pic</td>
            <td><input name="image" id="image" type="file" value="Upload"></td>
        </tr>
            <tr>

                <td>Preferred Languages</td>
                <td>
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='Spanish'>Spanish
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='Arabic'>Arabic
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='English'>English
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='Hindi'>Hindi
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='French'>French
                    <input id='pl' class='Gen' type="checkbox" name="gen" value='Russian'>Russian
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input id='pd' class='in' type="password" name="pass" placeholder="Enter password" maxlength="12"required >
                </td>
            </tr>
            <tr>
                <td>
                    <input class="sub"  type="submit" name="submit">
                </td>
                <td>
                    <input class="sub" type="reset" name="reset">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>



