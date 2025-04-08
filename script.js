function func() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username == "abhi" && password == "abhi@123") {
        
          window.location.href = "homepage.html";
          return true;
      } else {
          alert("Login failed");
          return false;
      }
  }   