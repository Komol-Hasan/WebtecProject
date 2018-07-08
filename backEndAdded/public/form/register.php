<table align="center" width="100%">
    <tr>
        <td width="25%"></td>
        <td>
            <fieldset>
                <legend>User Registration ...</legend>
                <form action="http://api.life.org/registration.php" method="post">
                    <table align="center" width="100%">
                        <tr>
                            <td width="20%" align="right">
                                <p>name : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="name" placeholder="name" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>userName : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="userName" placeholder="userName" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>emailId : </p>
                            </td>
                            <td width="80%">
                                <input type="email" name="emailId" placeholder="emailId" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>password : </p>
                            </td>
                            <td width="80%">
                                <input type="password" name="password" placeholder="password" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>confirmPassword : </p>
                            </td>
                            <td width="80%">
                                <input type="password" name="confirmPassword" placeholder="confirmPassword" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>dateOfBirth : </p>
                            </td>
                            <td width="80%">
                                <input type="date" name="username" placeholder="dateOfBirth" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>contactNo : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="contactNo" placeholder="contactNo" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>presentAddress : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="presentAddress" placeholder="presentAddress" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>permanentAddress : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="permanentAddress" placeholder="permanentAddress" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>disabilities : </p>
                            </td>
                            <td width="80%">
                                <input type="text" name="disabilities" placeholder="disabilities" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>gender : </p>
                            </td>
                            <td width="80%">
                                <select name="gender" style="width: 100%;">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="other">other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>userType : </p>
                            </td>
                            <td width="80%">
                                <input type="checkbox" name="isAdmin" value="isAdmin"> isAdmin <input type="checkbox" name="isDonner" value="isDonner"> isDonner
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">
                                <p>bloodGroup : </p>
                            </td>
                            <td width="80%">
                                <select name="bloodGroup" style="width: 100%;">
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="checkbox" onclick="showhidepass()"> I agree to all the terms and conditions and hereby declare that the above information is true.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="login" value="REGISTER" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <p>register using : </p>   <a href="facebook.com">Facebook</a> or <a href="google.com">Google</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </td>
        <td width="25%"></td>
    </tr>
</table>