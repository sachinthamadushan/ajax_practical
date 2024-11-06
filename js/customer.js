
function saveCustomer() {
    /*if(nic === ""){
        alert("Please Enter Your NIC");
    }else if(cusName === ""){
        alert("Please Enter Your Name");
    }else if(psw === ""){
        alert("Please Enter Your Password");
    }else{
        alert(nic +" "+cusName+" "+psw);
    }*/
    let nic = document.getElementById("cnic").value;
    let cusName = document.getElementById("cname").value;
    let psw = document.getElementById("cpwd").value;
    let hr = new XMLHttpRequest();
    hr.open("POST", "../controller/saveCustomer.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = () => {
        if (hr.readyState === 4 && hr.status === 200) {
            document.getElementById("cForm").reset();
            alert(hr.responseText);
        }
    }
    hr.send("nic=" + nic + "&name=" + cusName + "&psw=" + psw);
}