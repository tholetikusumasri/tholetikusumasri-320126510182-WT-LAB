function validateform(){
        event.preventDefault();
        var fname=document.getElementById("fname").value;
        var lname=document.getElementById("lname").value;
        var dob=document.getElementById("dob").value;
        var co=document.getElementById("co").value;
        var g=document.getElementById("g").value;
        var em=document.getElementById("em").value;
        var cor=document.getElementById("cor").value;
        var pl=document.getElementById("pl").value;
        var pd=document.getElementById("pd").value;
        var cpd=document.getElementById("cpd").value;
        if (fname==""){
            alert("First name must be filled");
            return false;
        }
        if (lname==""){
            alert("last name must be filled");
            return false;
        }
        if (dob==""){
            alert("Please enter your date of birth");
            return false;
        }
        if (co==""){
            alert("Enter contact details");
            return false;
        }
        if (g==""){
            alert("Gender name must be filled");
            return false;
        }
        if (em==""){
            alert("Email id must be filled");
            return false;
        }
        const re=/^\S+@\S+\.\S+$/;
        if (!re.test(em)){
            alert("Please enter a valid email address");
            return false;
        }
        if (cor==""){
            alert("choose your course");
            return false;
        }
        if (pl==""){
            alert("select your preffered language");
            return false;
        }
        if (pd==""){
            alert("Password must be filled");
            return false;
        }
        if (pd<8){
            alert("Password must be at least 8 characters long");
            return false;
        }
        if (cpd==""){
            alert("Password must be filled");
            return false;
        }
        if (cpd!=pd){
            alert("Password and Confirm Password do not match");
            return false;
        }
    alert("Form Submiited");
    document.getElementById("form").submit()
}