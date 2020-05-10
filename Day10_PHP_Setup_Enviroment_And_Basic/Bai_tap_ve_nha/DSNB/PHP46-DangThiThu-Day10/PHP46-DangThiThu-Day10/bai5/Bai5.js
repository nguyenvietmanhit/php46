 function myInformation() {
     // NAME
        var name_obj = document.getElementById('name');
        var name = name_obj.value;


     // EMAIL
        var email_obj = document.getElementById('email');
        var email = email_obj.value;

        // PHONE
        var phone_obj = document.getElementById('phone');
        var phone = phone_obj.value;



        // SAVE
        var save_obj = document.getElementById('save');
        var save = "Name: " + name;
        save += "<br />";
        save += "Email: " + email;
        save += "<br />";
        save += "Phone: " + phone;
        save_obj.innerHTML = save;
        event.preventDefault();
    }
      var form_obj = document.getElementById('form');
    form_obj.addEventListener('submit', myInformation);