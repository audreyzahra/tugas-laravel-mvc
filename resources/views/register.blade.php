<!DOCTYPE html>
<html>
    <head>
        <title> Buat Akun </title>
    </head>

    <body>

        <div>
            <h1> Buat Account Baru! </h1>
            <h2> Sign Up Form </h2>
        </div>

        <!-- membuat form-->
        <form action='/welcome'>
            <!--tulis nama-->
            <label for="firstname"> First name: </label> <br> <br>
            <input type="text"  name="firstname"> <br> <br>
            <label for="lastname"> Last name: </label> <br> <br>
            <input type="text"  name="lastname"> <br> <br>

            <!-- pilih gender-->
            <label> Gender: </label> <br> <br>
            <input type="radio" name="gender" value="0"> Male <br>
            <input type="radio" name="gender" value="1"> Female <br>
            <input type="radio" name="gender" value="2"> Other <br> <br>

            <!-- pilih asal dan bahasa-->
            <label> Nationality: </label> <br> <br>
            <select>
                <option value="0"> Indonesian </option>
                <option value="1"> Singaporean </option>
                <option value="2"> Malaysian </option>
                <option value="3"> Australian </option>
            </select> <br> <br>
            <label> Language Spoken: </label> <br> <br>
            <input type="checkbox" name="bahasa" value="0"> Bahasa Indonesia <br>
            <input type="checkbox" name="bahasa" value="1"> English <br>
            <input type="checkbox" name="bahasa" value="2"> Other <br> <br>

            <!--isi biodata-->
            <label for="bio"> Bio: </label> <br> <br>
			<textarea cols="50" rows="10" id="bio"> </textarea>

            <br>
            <input type="submit" value = "Sign Up">
        </form>

    </body>
</html>